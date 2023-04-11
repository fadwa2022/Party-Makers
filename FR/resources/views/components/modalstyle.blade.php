<div id="popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
      <div class="relative bg-white rounded-lg w-80">
        <div class="p-4">
          <h2 class="text-lg font-medium mb-4">Add Style</h2>
          <form method="POST" data-aos="zoom-in" action="/makestyle" enctype="multipart/form-data">
            @csrf



            <div class=" p-4 ">
                <input type="text" name="style_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="style" required>
               <br>
                <input type="file" name="image_style" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="image" required>

            </div>
                        <button  class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">ajouter</button>
          </form>

        </div>
      </div>
    </div>
    <span id="fermer-popup-icon" class="text-gray-500 hover:text-gray-600 cursor-pointer ml-2">&#x2716;</span>

  </div>

  <div id="ouvrir-popup" class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</div>

  <script>
    const popup = document.getElementById('popup');
    const ouvrirPopupBtn = document.getElementById('ouvrir-popup');
    const fermerPopupBtn = document.getElementById('fermer-popup');
    const fermerPopupIcon = document.getElementById('fermer-popup-icon');

    ouvrirPopupBtn.addEventListener('click', () => {
      popup.classList.remove('hidden');
    });

    fermerPopupBtn.addEventListener('click', () => {
      popup.classList.add('hidden');
    });

    fermerPopupIcon.addEventListener('click', () => {
      popup.classList.add('hidden');
    });
  </script>
