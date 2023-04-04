<div class="flex justify-center  p-28 pt-48  lg:pt-10"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13.535V3h8v2h-6v12a4 4 0 1 1-2-3.465zM10 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="rgba(216,91,31,1)"/></svg></div>
<div class="-mt-20"><h5 class="text-center text-4xl font-bold tracking-tight text-gray-900 dark:text-white">Contact Us</h5></div>
<div class="flex justify-center w-75 ">
    <p class= "text-center text-gray-400 text-left mt-10 " style="width: 45em;">
        Lorem ipsum dolor sit amet, consectetur adipiscing
        elit, sed do eiusmod tempor incididunt ut labore e
       t dolore magna aliqua. sed do eiusmod tempor incididunt ut labore e
       t dolore magna aliqua.

    </p>
</div>
<form method="POST" data-aos="zoom-in" action="/sendmail" enctype="multipart/form-data">
    @csrf
       <div class=" flex flex-col lg:flex-row justify-around">
    <div class="md:flex md:items-center mb-6">
            <div class="md:w-80 ">
              <input name="name" class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Your Name" required >
            </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-80">
          <input name="email" class="md:h-12 bg-gray-500 bg-opacity-50 appearance-none rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="email" placeholder="Your Email" required >
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">

        <div class="md:w-80">
          <input name="phone"  class=" md:h-12  bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="tel" placeholder="phone Number" required >
        </div>
    </div>
</div>
    <div class="md:flex md:items-center mb-6">

      <div class="px-12 py-5">
        <textarea name="message" rows="3" cols="200" class=" bg-gray-500 bg-opacity-50 appearance-none  rounded w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="Write Your Message Here"required   >
Write Your Message Here
        </textarea>
      </div>
    </div>
</form>

  <div class="-mt-10 p-10 flex justify-center">
    <button type="submit" class=" flex px-5 py-2 rounded-3xl text-sm font-medium text-white bg-orange-700 outline-none focus:outline-none  hover:m-0 focus:m-0 border border-orange-600 hover:border-4  focus:border-4 hover:border-orange-800 hover:bg-transparent focus:border-orange-200 active:border-grey-900 active:text-grey-300 transition-all">
    Leave Message		<span class="ml-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="rgba(255,255,255,1)"/></svg>
    </span>

</button>
</div>
