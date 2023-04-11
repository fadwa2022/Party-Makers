<section class="relative py-16 " style="background-color: #341C3D;">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">

          <div class="text-center mt-12 ">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                {{$Client[0]->name}}
                   </h3>
                   <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                   <a href="profile">Edit profile</a>
                  </button>
          </div>
          <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                  An artist of considerable range, Jenna the name taken by
                  Melbourne-raised, Brooklyn-based Nick Murphy writes,
                  performs and records all of his own music, giving it a
                  warm, intimate feel with a solid groove structure. An
                  artist of considerable range.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="py-1 ">
<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Your Events</h3>
        </div>
      </div>
    </div>

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Localisation
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Style
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            DJ
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Type
        </th>
         <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Date
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Prix
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
           Places
        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
            Situation
        </th>

        </tr>
        </thead>

        <tbody>
@foreach ($Eventsclient as $Event)
            <tr>
            <form method="POST" action="/updateevent/{{$Event->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            <th>
               <input name="Localisation" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 " type="text" value=" {{$Event->Localisation}}">
            </th>
            <th >

                <select id="style" name="style" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                    <option value="{{$Event->style}}">{{$Event->style_name}}</option>
                    @foreach($Style as $style)
                        <option value="{{$style->id}}">{{$style->style_name}}</option>
                        @endforeach
                    </select>
            </th>

            <th >

                <select name="DJ" class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                    <option value="{{$Event->DJ}}">{{$Event->DJ_name}}</option>
                    @foreach($DJS as $dj)
                        <option value="{{$dj->id}}">{{$dj->name}}</option>
                        @endforeach
                    </select>
            </th>
            <td  class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{$Event->typeEvent}}
            </td>
            <td>
                <input class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4" type="date" name="dateEvent" value="{{$Event->dateEvent}}">

            </td>
            <td>
                <input type="number" class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4" name="PrixEvent" value="{{$Event->PrixEvent}}">
            </td>
            <td>
               <input type="number" class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4" name="NumeroPlace" value="{{$Event->NumeroPlace}}">
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{$Event->situation}}
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <button>update</button>
            </td>
                </form>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <form method="POST" action="/deleteeventclient/{{$Event->id}}">
                    @csrf
                    @method('DELETE')
              <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z" fill="#000"></path></svg></button>
                </form>
            </td>
          </tr>
@endforeach
        </tbody>

      </table>
    </div>
  </div>
</div>
</section>
  </section>
