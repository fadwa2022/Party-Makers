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
          {{$user->name}}
          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$user->email}}
          </td>

</tr>

        @endforeach

      </tbody>
    </table>
  </div>
