<div class="flex justify-center lg:p-10">
    <div
      class="relative slider w-full rounded-2xl overflow-hidden"
      style="height: 30em"
    >
      <img
        class="absolute h-full w-full object-cover"
        src="{{asset('build/assets/images/matty-adame-nLUb9GThIcg-unsplash.jpg')}}"
        alt="Voiture 1"
      />
    </div>
    <div
      class="relative slider w-full rounded-2xl overflow-hidden"
      style="height: 30em"
    >
      <img
        class="absolute h-full w-full object-cover"
        src="{{asset('build/assets/images/pexels-pixabay-358129.jpg')}}"
        alt="Voiture 2"
      />
    </div>
    <div
      class="relative slider w-full rounded-2xl overflow-hidden"
      style="height: 30em"
    >
      <img
        class="absolute h-full w-full object-cover"
        src="{{asset('build/assets/images/pexels-juan-pablo-serrano-arenas-904276.jpg')}}"
        alt="Voiture 3"
      />
    </div>
  </div>
  <form action="">

  <div class="flex justify-around">
    <section class="bg-indigo-dark p-8">
      <div class="flex absolute  lg:left-64  -ml-28 lg:ml-0 -mt-24">

        <div
          class="no-underline rounded-l py-3 px-4 h-20 lg:h-24 w-28 lg:w-96 hover:bg-indigo-darker"
          style="background-color: #0b0434"
        >
          <a class="text-white font-medium text-xs lg:p-10" href="#">In</a>
          <br />
          <input
            name="search"
            type="text"
            id="first_name"
            class="border-none lg:px-10 bg-transparent text-gray-900 text-sm rounded-lg"
            placeholder="Paris"
          />

          <div
            class="border border-solid lg:ml-10"
            style="border-color: #9a3ebd"
          ></div>
        </div>
        <div
          class="no-underline py-3 px-4 h-20 lg:h-24  w-30 lg:w-96 rounded-r border-l border-gray-700 hover:bg-indigo-darker"
          style="background-color: #0b0434"
        >
          <a class="text-white font-medium text-xs lg:p-10" href="#">When</a>
          <br/>
          <input
            name="searchdate"
            type="date"
            id="first_name"
            class=" border-none lg:px-10 bg-transparent text-white text-sm rounded-lg"
            placeholder="any date"
          />
          <div
            class="border border-solid lg:ml-10"
            style="border-color: #9a3ebd"
          ></div>
        </div>
      </div>
    </section>
    <section class="bg-indigo-dark p-8">
      <div class="flex-col absolute left-auto -mt-40 bg-white h-40  lg:w-44 rounded-2xl -ml-20 lg:ml-0">
          <button type="submit" class=" m-4 mt-8 text-xs text-white font-semibold p-2 w-36 rounded"  style="background-color: #6347AD">
              Book  Now
             </button>

           {{-- <button class="m-4 text-xs text-white font-semibold p-2 w-36 rounded"  style="background-color: #C9C9C9">
              Make Your
            </button> --}}

            <a href="partymakers" class="m-4 text-white text-s font-semibold p-2  rounded" style="background-color: #C9C9C9">
                Make Your Event
              </a>

      </div>
    </section>

  </div>
  <div></div>
</form>
<div class="flex justify-around">


            <select id="style" class="lg:-mt-10 no-underline rounded-l py-3 px-4 h-10 lg:h-14 w-1/5  hover:bg-indigo-darker"   style="background-color: #0b0434">
                    <option class="text-white" value="0">Style</option>
                    @foreach($Style as $style)
                        <option class="text-white" value="{{$style->id}}">{{$style->style_name}}</option>
                        @endforeach
           </select>

    </div>
  <script>
    let slideIndex = 0;
    const slides = document.querySelectorAll(".slider");

    setInterval(() => {
      slides.forEach((slide) => (slide.style.display = "none"));
      slideIndex = (slideIndex + 1) % slides.length;
      slides[slideIndex].style.display = "block";
    }, 3000);
  </script>
     <script>
        document.getElementById('style').addEventListener('change', function() {
            var styleId = this.value;
            window.location.href = 'http://127.0.0.1:8000/tickets?search=' + styleId ;
        });
    </script>
