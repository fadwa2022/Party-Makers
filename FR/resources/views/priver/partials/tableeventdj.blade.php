<section>

    <div class="flex justify-between	 ">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' My Events') }}
        </h2>
        </div>
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
              <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 dark:text-white flex justify-between">
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
            @foreach($Event as $event)
            <tr class="odd:bg-gray-50 dark:odd:bg-gray-800/50">

              <td
                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
              >
              {{$event->id}}
                      </td>

            <td
                      class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
                    >
              {{$event->typeEvent}}
                </td>
              <td
                class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
              >
              {{$event->style}}

              </td>

              <td
                class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
              >
               {{$event->PrixEvent}}

              </td>
              <td
                class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
              >
           {{$event->NumeroPlace}}
              </td>
              <td
              class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
            >
            {{$event->Localisation}}

        </td>
        <td
        class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
      >
     {{$event->dateEvent}}
    </td>
    <td
    class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
    >
        {{$event->creator_name}}

    </td>
    <td
    class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
    >

    <select  name="situation"  id="countries" class=" border-none"style="background-color: #1f2937" >
        <option value=""> {{$event->situation}}</option>
        <option value="Refuser">Refuser</option>
        <option value="Accepter">Accepter</option>
      </select>
    </td>
    </tr>

            @endforeach

          </tbody>
        </table>
      </div>
        </section>
