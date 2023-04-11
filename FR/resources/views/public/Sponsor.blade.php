<div style="background-color: #341c3d">

<x-public-layout>

<div class=" py-6" style="background-color: #341c3d">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold  text-pink-700 mb-6">Demande de sponsoring</h1>
      <form class="max-w-3xl mx-auto" action="\Addsponsorship" method="POST">
        @csrf
        <div class="mb-4">
          <label for="nom" class="block text-white font-bold mb-2">événement :</label>
           <select name="event" id="" class="w-full rounded-lg border-gray-300 px-4 py-2">
            @foreach ($Events as $Event)
            <option value="{{$Event->id}}">{{$Event->Localisation}}</option>
            @endforeach
           </select>
        </div>

        <div class="mb-4">
          <label for="phone" class="block text-white font-bold mb-2">Numéro de téléphone :</label>
          <input type="tel" name="phone" id="phone" class="w-full rounded-lg border-gray-300 px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-white font-bold mb-2">Détails de Demande :</label>
            <textarea name="message" id="" cols="30" rows="10" class="w-full rounded-lg border-gray-300 px-4 py-2" required></textarea>          </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" >Envoyer la demande</button>

        </div></form></div></div>

    </x-public-layout>
</div>
