<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PartyMakers</title>
        <link rel="icon" href="{{asset('build/assets/bg/logo.png')}}" />
<!-- cssannimation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
<div class="fixed z-10 inset-0 overflow-y-auto" id="popup">
    <br>
    <div class="flex items-center justify-center min-h-screen" id="ticket">
      <div class="bg-white rounded-lg overflow-hidden shadow-xl max-w-lg w-full">
        {{-- <button type="button"class="p-2" onclick="closePopup2()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="#000"></path></svg></button> --}}
        <div class="relative flex justify-around">
          <img src="{{asset('build/assets/images/Qrcode_wikipedia_fr_v2clean.png')}}" alt="Fake QR Code" class="w-1/4 mt-2">
        <div>
          <div class=" text-sm text-gray-700 font-bold px-4 py-2">{{$event->dateEvent}}</div>
          <div class=" text-sm text-gray-700 font-bold px-4 py-2">{{$event->DJ_name}}</div>
          <div class=" text-sm text-gray-700 font-bold px-4 py-2">{{$event->PrixEvent}} $</div>
          <div class=" text-sm text-gray-700 font-bold px-4 py-2">{{$ticket->id}}</div>
      </div>
    </div>
        <div class="p-4">
          <div class="text-lg font-bold mb-2">{{$event->Localisation}}</div>
          <p class="text-gray-700 text-base mb-4">{{$user}}</p>
          <p class="text-gray-700 text-base mb-4">Thank you for purchasing a ticket to  event_name . Please present this ticket at the door.</p>
        </div>
      </div>
    </div>
    <button type="button" id="telecharger" class="bg-blue-700 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="">telecharger ticket</button>

  </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
      window.onload = function(){
    document.getElementById("telecharger").addEventListener("click",()=>{

        const ticket = this.document.getElementById("ticket");
        console.log(ticket);
        console.log(window);
        var opt={
            margin: 1 ,
            filename : 'ticket.pdf'
        }
        html2pdf().from(ticket).set(opt).save();
    })
  }
</script>
</html>
