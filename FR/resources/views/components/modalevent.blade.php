@props(['style','DJ'])
<button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="open-modal">add</button>

<!-- Modal container -->
<div class="fixed z-10 inset-0 overflow-y-auto" id="modal">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Modal content -->
        <div class="bg-gray-900 rounded-lg p-8">
            <div class="md:flex justify-between">
                <h2 class="text-xl font-bold mb-4 text-white">Make Event</h2>
                <button type="button" class="" id="close-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" fill="rgba(255,255,255,1)" />
                    </svg></button>
            </div >
            <form method="POST" data-aos="zoom-in" action="/makeevent" enctype="multipart/form-data">
                @csrf

                <div class=" flex flex-col lg:flex-row justify-around">
                    <div class="md:flex md:items-center mb-6">

                            <div>
                                 <input class="mt-10 w-fullmd:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="public" type="number" placeholder="Price Of Tickets" min=1 style="display: none">
                            </div>
                         <div class="md:w-80 px-10 ">
                                <label class="text-white font-semibold p-4" for="">Ticket price</label>

                             <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="number" name="PrixEvent" min="1" placeholder="price tickets">
                         </div>
                         </div>
                         <div class="md:flex md:items-center mb-6">
                          <div class="md:w-80  px-10">
                              <label class="text-white font-semibold p-4" for="">number of spaces</label>
                             <input name="NumeroPlace" class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="PrixEvent" min="1" placeholder="Total number of spaces">
                         </div>
                    </div>

                </div>
                 <div class=" flex flex-col lg:flex-row justify-between">
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-80 px-10 ">
                            <label class="text-white font-semibold p-4" for="">date</label>

                            <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="date" name="dateEvent" placeholder="date">
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
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-80  px-10">
                            <label class="text-white font-semibold p-4" for="">style</label>
                            <select name="style" class="text-white mt-2 border-none md:h-12 appearance-none rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" style="background-color: #1f2937">
                                @foreach($style as $style)
                                <option value="{{$style->id}}">{{$style->style_name}}</option>
                                @endforeach
                                              </select>

                        </div>
                    </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-80  px-10">
                        <label class="text-white font-semibold p-4" for="">Djs</label>
                        <select name="DJ" class="text-white mt-2 border-none md:h-12 appearance-none rounded w-full py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" style="background-color: #1f2937">
                            @foreach($DJ as $DJ)
                            <option value="{{$DJ->id}}">{{$DJ->name}}</option>
                            @endforeach
                        </select>
                    </div>

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
                 <div class="md:flex ">

                    <button class=" text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="btnpub" type="text" value="Date of Party" style="background-color:rgba(216, 91, 31, 0.91);">
                         confirmer
                       </button>

                     </div>

                    </form>

    </div>
</div>
</div>

<!-- JavaScript to open and close the modal -->
<script>
    const openModal = document.getElementById('open-modal');
    const closeModal = document.getElementById('close-modal');
    const modal = document.getElementById('modal');

    openModal.addEventListener('click', () => {
        modal.classList.add('block');
        modal.classList.remove('hidden');
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('block');
    });
</script>
