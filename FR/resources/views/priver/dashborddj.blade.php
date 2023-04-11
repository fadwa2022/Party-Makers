<x-public-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <button id="openModal">Create content</button>
                </div>
            </div>
        </div>
    </div>


    @include('priver.partials.tableeventdj')


<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="myModal">
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <button class="text-white font-bold py-2 px-4 rounded-lg" id="closeModal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="#000"></path></svg></button>

   <form class="grid grid-cols-1 gap-4" method="POST" data-aos="zoom-in" action="/makepost" enctype="multipart/form-data">
        @csrf

        <div>
        <div class="p-5">
          <label for="email" class="block text-gray-700 font-bold mb-2">Post</label>
          <input type="file" name="image" class="w-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        </div>
        <div class="flex justify-between">
          <button type="submit" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const openModalButton = document.getElementById('openModal');
  const closeModalButton = document.getElementById('closeModal');
  const modal = document.getElementById('myModal');

  openModalButton.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });

  closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden');
  });
</script>




</x-public-layout>
