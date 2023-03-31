@props(['user'])


<br>
<div class="overflow-x-auto">

    <table
      class="min-w-full divide-y-2 divide-gray-200 text-sm dark:divide-gray-700"
    >
      <thead>
        <tr>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          Numero
          </th>
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          name          </th>
          <th
          class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
        >
        email
            </th>

        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach($user as $user)
        <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">
          <td
            class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
          >
          {{$user->id}}
                  </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          <input class=" border-none" style="background-color: #1f2937" name="name" type="text"  value="{{$user->name}}">
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror

          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$user->email}}
          </td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">

            <form method="POST" action="/deleteuser/{{$user->id}}">
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