@props(['sponsorisation'])
<div class="flex justify-between	 ">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Our Sponsorship') }}
</h2>
</div>
<br>
<div class="overflow-x-auto">
    <form class="p-5">
        <div class="flex">

                    <select   name="searchsponsor" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600 border-none" style="background-color: #1f2937" >
                        <option>situation</option>
                        <option value="Refuser">Refuser</option>
                        <option value="Accepter">Accepter</option>
                      </select>
                      <button type="submit" class=" p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                      </button>
        </div>
    </form>
    <table
      class="min-w-full divide-y-2 divide-gray-200 text-sm dark:divide-gray-700"
    >
      <thead>
        <tr>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          Sponsorship
          </th>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          message
          </th>
          <th
          class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
        >
        sponsor            </th>
        <th
        class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
      >
      sponsor email        </th>
      <th
        class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
      >
      sponsor phone       </th>
      <th
        class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
      >
      event       </th>
            <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          situation	          </th>

        </tr>
      </thead>

      <tbody class="divide-y divide- dark:divide-gray-700">
        @foreach($sponsorisation as $sponsorisation)
        <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
            <form method="POST" action="/sponsorisation/{{$sponsorisation->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <td
            class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
          >
          {{$sponsorisation->id}}
                  </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
       {{$sponsorisation->message}}

          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$sponsorisation->sponsor_name}}

          </td>
          <td
          class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
        >
        {{$sponsorisation->sponsor_email}}

        </td>
        <td
        class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
      >
      {{$sponsorisation->phone}}
      </td>
      <td
      class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
    >
    {{$sponsorisation->Localisation}}
    </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >

          <select id="countries"  name="situation" class=" border-none"style="background-color: #1f2937" >
            <option value="{{$sponsorisation->situation}}">{{$sponsorisation->situation}}</option>
            <option value="Refuser">Refuser</option>
            <option value="Accepter">Accepter</option>
          </select>
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">update</button>
        </td>




            </form>
            <td
          class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
        >


            <form method="POST" action="/deleteSponsorship/{{$sponsorisation->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zM9 4v2h6V4H9z" fill="rgba(255,255,255,1)" />
                </svg></button>
            </form> </td>
</tr>

        @endforeach

      </tbody>
    </table>
  </div>

