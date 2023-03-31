@props(['clientEvents','Style'])


<div class="flex justify-between	 ">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Client Events') }}
    </h2>
    </div>
<br>
<div class="overflow-x-auto">

    <form class="p-5">
        <div class="flex">
                    <select id="stylec" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" style="background-color: #1f2937">
                                          <option value="">Style</option>
                    @foreach($Style as $style)
                        <option value="{{$style->id}}">{{$style->style_name}}</option>
                        @endforeach
                    </select>
                    <select   id="situation" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" style="background-color: #1f2937" >
                        <option>situation</option>
                        <option value="Refuser">Refuser</option>
                        <option value="Accepter">Accepter</option>
                      </select>
            <div class="relative w-2/5">

                <input name="search2" type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Localisation " >

                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
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
          NumeroEvent
          </th>
          <th
          class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
        >
       type
        </th>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          Style
          </th>
          <th
          class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
        >
        DJ
            </th>
          <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white flex justify-between">
            <div>PrixEvent</div>
          <div class="flex">
             <a href="{{ URL::current()."?sort=priceclient_desc" }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 8l6 6H6z" fill="rgba(255,255,255,1)"/></svg></a>
             <a href="{{ URL::current()."?sort=priceclient_asc" }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 16l-6-6h12z" fill="rgba(255,255,255,1)"/></svg></a>
         </div>
         </th>
          <th
          class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
        >
        Places
            </th>

          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          Localisation
          </th>

          <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white flex justify-between">
            <div>dateEvent</div>
          <div class="flex">
             <a href="{{ URL::current()."?sort=dateclient_desc" }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 8l6 6H6z" fill="rgba(255,255,255,1)"/></svg></a>
             <a href="{{ URL::current()."?sort=dateclient_asc" }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 16l-6-6h12z" fill="rgba(255,255,255,1)"/></svg></a>
         </div>
         </th>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          createur
      </th>
      <th
      class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
    >
    situation
</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach($clientEvents as $Event)
        <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
            <form method="POST" action="/eventc/{{$Event->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
          <td
            class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
          >
          {{$Event->id}}
                  </td>

        <td
                  class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
                >
                <div class=" border-none text-base" style="background-color: #1f2937" name="typeEvent" >{{$Event->typeEvent}}</div>
            </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          <div class=" border-none text-base" style="background-color: #1f2937" name="style"  >{{$Event->style_name}}</div>

          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          <div class=" border-none text-base" style="background-color: #1f2937" name="DJ" >{{$Event->DJ_name}}</div>
          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          <div class=" border-none text-base" style="background-color: #1f2937" name="PrixEvent" >{{$Event->PrixEvent}}</div>

          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          <div class=" border-none text-base" style="background-color: #1f2937" name="NumeroPlace">{{$Event->NumeroPlace}}</div>
          </td>
          <td
          class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
        >
        <div class=" border-none text-base" style="background-color: #1f2937" name="Localisation" >{{$Event->Localisation}}</div>

    </td>
    <td
    class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
  >
  <div class=" border-none  text-base" style="background-color: #1f2937" name="dateEvent" >{{$Event->dateEvent}}</div>
</td>
<td
class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
>
<div class=" border-none text-base" style="background-color: #1f2937" name="creator_name" >{{$Event->creator_name}}</div>

</td>
<td
class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
>

<select  name="situation"  id="countries" class=" border-none"style="background-color: #1f2937" >
    <option value="{{$Event->situation}}">{{$Event->situation}}</option>
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
<form method="POST" action="/deleteeventclient/{{$Event->id}}">
    @csrf
    @method('DELETE')
    <button class="text-red-500"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" d="M0 0h24v24H0z" />
        <path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zM9 4v2h6V4H9z" fill="rgba(255,255,255,1)" />
    </svg></button>
</form>
</td>
</tr>

        @endforeach

      </tbody>
    </table>
  </div>
  <script>
    document.getElementById('stylec').addEventListener('change', function() {
        var styleId = this.value;
        window.location.href = 'http://127.0.0.1:8000/tables?search2=' + styleId ;
    });
    document.getElementById('situation').addEventListener('change', function() {
        var situationId = this.value;
        window.location.href = 'http://127.0.0.1:8000/tables?search2=' + situationId ;
    });situation

</script>