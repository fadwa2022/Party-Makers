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
    <div class="modal-content py-4 text-left px-6 w-full bg-cover h-screen bg-no-repeat " style="background-image:url('{{asset('build/assets/images/pexels-ekaterina-bolovtsova-7657851.jpg')}}') ;    background-size: 100% 100%;    ">
      <!--Title-->
      <div class="flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-white">AFRO</p>
        <div class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
        </div>
      </div>

{{-- body --}}

<form class="mt-36" data-aos="zoom-in">
    <div class=" flex flex-col lg:flex-row justify-between">
    <div class="md:flex md:items-center mb-6">
            <div class="md:w-80 px-10 ">
              <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Your Identity Natinale">
            </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-80  px-10">
          <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Your Number">
        </div>
    </div>

</div>
<div class=" flex flex-col lg:flex-row justify-around">
    <div class="md:flex md:items-center mb-6">
            <div class="md:w-80  px-10">
              <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Date of Party">
            </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-80  px-10">
          <input class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="number" placeholder="Number Of Personnes" min=1>
        </div>
    </div>

</div>
<div class=" flex flex-col lg:flex-row justify-around lg:gap-0 gap-12 ">
    <div class="md:flex  md:items-center ">
            <div class="md:w-80 px-28 ">
              <a onclick="priver()"  class="md:h-12  appearance-none  rounded w-full  py-2 px-4 text-white leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Date of Party" style="background-color:rgba(216, 91, 31, 0.91);">
                Priver
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
    <div>
        <input class="mt-10 w-fullmd:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="public" type="number" placeholder="Price Of Tickets"min=1 style="display: none">
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

</script>
</div>
