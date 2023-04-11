<section  class=" bg-cover bg-no-repeat p-20" style="background-color: #341C3D;">

    <div class="flex flex-wrap">
        @foreach ($Styles as $Style)

        <div class="w-full md:w-1/3 p-4" data-aos="flip-up">

            <a href="" onclick="openmodal('{{$Style->image_style}}','{{$Style->style_name}}','{{$Style->id}}')" class="modal-open bg-transparent text-gray-500 hover:text-indigo-500 font-bold">
                <div class="relative bg-gray-100 rounded-lg h-72 shadow-md overflow-hidden">
                  <img src="{{ asset('storage/'.$Style->image_style) }}" alt="Image 1" class="w-full h-full object-cover">
                  <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
                    <h1 class="text-3xl font-bold text-white text-center">{{$Style->style_name}} Party</h1>
                  </div>
                </div>
              </a>
            </div>

            @endforeach




        </div>



        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
          .modal {
            transition: opacity 0.25s ease;
          }
          body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
          }
        </style>



        <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center ">
          <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

          <div class="modal-container bg-white  mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
              <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div id="imagebg" class="modal-content py-4 text-left px-6 w-full bg-cover h-screen bg-no-repeat " style="background-size: 100% 100%;    ">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold text-white" id="name"></p>
                <div class="modal-close cursor-pointer z-50">
                  <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                  </svg>
                </div>
              </div>

        <form method="POST" data-aos="zoom-in" id="form" action="/makeeventclient/" enctype="multipart/form-data">
            @csrf

            <div class=" flex flex-col lg:flex-row justify-around">
                <div class="md:flex md:items-center mb-6">


                     <div class="md:flex md:items-center mb-6">
                        <div class="md:w-80  px-10">
                            <label class="text-white font-semibold p-4" for="">Djs</label>
                            <select name="DJ" class="text-white mt-2 border-none md:h-12 appearance-none rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 bg-gray-500 bg-opacity-50">
                                @foreach($DJ as $DJ)
                                <option class="text-black" value="{{$DJ->id}}">{{$DJ->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                     </div>
                     <div class="md:flex md:items-center mb-6">
                      <div class="md:w-80  px-10">
                          <label class="text-white font-semibold p-4" for="">number of spaces</label>
                         <input name="NumeroPlace" class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name"  type="number"  min="1" placeholder="Total number of spaces">
                     </div>
                </div>

            </div>
             <div class=" flex flex-col lg:flex-row justify-between">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-80 px-10 ">
                        <label class="text-white font-semibold p-4" for="">date</label>

                        <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-full-name"
                        type="date"
                        name="dateEvent"
                        placeholder="date"
                        min="{{ date('Y-m-d') }}">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-80  px-10">
                        <label class="text-white font-semibold p-4" for="">localisation</label>

                        <input name="Localisation" class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="localisation">
                    </div>
                </div>

            </div>
           <div class=" flex flex-col lg:flex-row justify-between">

                     <div id="public" class="md:w-80 px-10 ">
                            <label class="text-white font-semibold p-4" for="">Ticket price</label>

                            <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name"   type="number" name="PrixEvent" min="1" placeholder="price tickets">
                     </div>
           </div>

             <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload image</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="Imageevent" />
                    @error('Imageevent')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            </div>
            <br>
            <div class=" flex flex-col lg:flex-row justify-around lg:gap-0 gap-12 ">
                <div class="md:flex  md:items-center ">
                        <div class="md:w-80 px-28 ">
                          <a onclick="priver()"  class="md:h-12  appearance-none  rounded w-full  py-2 px-4 text-white leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Date of Party" style="background-color:rgba(216, 91, 31, 0.91);">
                            privé
                                                  </a>
                        </div>
                </div>
                <div class="md:flex md:items-center ">
                    <div class="md:w-80 px-28">
                        <a onclick="public()"  class="md:h-12  appearance-none  rounded w-full  py-2 px-4 text-white leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="btnpub" type="text" value="Date of Party" style="background-color:rgba(216, 91, 31, 0.91);">
                            Public
                        </a>
                    </div>
                </div>

            </div>
            <br>
            <div class="md:flex px-40">

                    <button class=" appearance-none  rounded w-full  py-2 px-4 text-white leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="btnpub" type="text" value="Date of Party" style="background-color:rgba(216, 91, 31, 0.91);">
                     confirmer
                                </button>

            </div>
                </form>
            </div>
          </div>


        <script>

          var openmodal = document.querySelectorAll('.modal-open')
          for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
              event.preventDefault()
              toggleModal()
            })
          }

          const overlay = document.querySelector('.modal-overlay')
          overlay.addEventListener('click', toggleModal)

          var closemodal = document.querySelectorAll('.modal-close')
          for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
          }

          document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
              isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
              isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
              toggleModal()
            }
          };


          function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
          }

          function public() {
            console.log('hi');
            const input = document.getElementById('public');


                input.style.display = 'block';

            }

          function priver() {

            const input = document.getElementById('public');


                input.style.display = 'none';

            }

        </script>
        <script>
    function openmodal(image,name,id)
{
    const imagebg = document.getElementById('imagebg');
    imagebg.style.backgroundImage = `url('{{ asset('storage/${image}') }}')`;

    document.getElementById("name").innerHTML= name;

    const monFormulaire = document.getElementById('form');
    const action = `/makeeventclient/${id}`;

monFormulaire.setAttribute('action', action);
}        </script>
        </div>


</section>
