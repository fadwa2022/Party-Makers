@props(['clientEvents'])

<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Client Events') }}
</h2>
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
            <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          PrixEvent
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
          <th
            class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white"
          >
          dateEvent
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
          <td
            class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
          >
          {{$Event->id}}
                  </td>
        <td
                  class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
                >
                {{$Event->typeEvent}}
            </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$Event->style_name}}
          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$Event->DJ_name}}
          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$Event->PrixEvent}}
          </td>
          <td
            class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
          >
          {{$Event->NumeroPlace}}
          </td>
          <td
          class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
        >
        {{$Event->Localisation}}
    </td>
    <td
    class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
  >
  {{$Event->dateEvent}}
</td>
<td
class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
>
{{$Event->creator_name}}
</td>
<td
class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
>
{{$Event->situation}}
</td>
</tr>

        @endforeach

      </tbody>
    </table>
  </div>
