	<!-- body -->
	<section class="p-10">
	   <div class="flex justify-between">
        <h5 class="p-10 text-xl lg:text-4xl font-bold tracking-tight text-gray-900 dark:text-pink-700">Upcoming Events</h5>

      </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
	        @foreach($Events as $Event)
	        <div class="max-w-sm mx-5 rounded overflow-hidden shadow-lg sm:flex-row flex-col">
	            <img class="w-full" src="{{ asset('storage/'.$Event->Imageevent) }}" alt="Event">
	            <div class="px-6 py-4 bg-white">
	                <div class="font-bold text-xl mb-2">{{$Event->Localisation}}</div>
	                <p class="text-gray-700 text-base">
	                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	                    Voluptatibus quia, nulla! Maiores et perferendis eaque,
	                    exercitationem praesentium nihil.
	                </p>
	            </div>
	            <div class="px-6 py-4 bg-white">
	                <div class="flex justify-between">
	                    <div class="text-gray-700 font-bold text-sm mb-2">Date et DJ</div>
	                    <div class="text-gray-700 text-sm mb-2">Nombre de personnes</div>
	                </div>
	                <div class="flex justify-between">
	                    <div class="text-gray-700 text-sm mb-2">{{$Event->dateEvent}}</div>
	                    <div class="text-gray-700 text-sm mb-2">{{$Event->NumeroPlace}}</div>
	                </div>
	                <div class="flex justify-between">
	                    <div class="text-gray-700 text-sm mb-2">{{$Event->DJ_name}}</div>
	                    <div class="text-gray-700 text-sm mb-2 font-bold">{{$Event->PrixEvent}}$ </div>
	                </div>
	                <div class="text-center mt-4">
	                           <!-- Bouton pour afficher la popup -->
                        <a href="#" class="inline-block bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="showPopup('{{$Event->id}}', '{{ $Event->dateEvent }}', '{{ $Event->PrixEvent }}',{{$tickets}})">Acheter des billets</a>
	                </div>
	            </div>

	        <!-- Pop-up-->
	        <div class="bg-black bg-opacity-75 fixed top-0 left-0 w-full hidden h-full flex" id="bill-popup">
	            <div class="bg-white w-1/2 mx-auto my-16 p-6 rounded-lg">
	                <h2 class="text-center font-bold text-2xl mb-4">Facture</h2>
	                <hr class="my-4">
	                <div class="flex flex-col mb-4">
	                    <div class="font-bold mb-1">Numéro de ticket :</div>

	                    <div id="numeroticket"></div>
	                </div>
	                <div class="flex flex-col mb-4">
	                    <div class="font-bold mb-1">Nom de l'acheteur :</div>
	                    <div>{{$user}}</div>
	                </div>
	                <div class="flex flex-col mb-4">
	                    <div class="font-bold mb-1">Date event </div>
	                    <div id="dateevent"></div>
	                </div>
	                <div class="flex flex-col mb-4">
	                    <div class="font-bold mb-1">Price</div>
	                    <div id="prixevent">$</div>
	                </div>


	                <div class="flex justify-between">
	                    <a type="button" id="lienticket" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" href="">ticket</a>
	                    <button type="button" class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="closePopup()">Close</button>
	                </div>
	            </div>
	        </div>
            	        </div>

	        @endforeach
            {{ $Events->links() }}

	    </div>

	    <script>
	        function showPopup(id,date,price,tickets) {
                let filteredTickets = [];
                for (let i = 0; i < tickets.length; i++) {
                if (tickets[i].numeroevent == id) {
                   filteredTickets.push(tickets[i].id);
                }
        }
        if (filteredTickets.length > 0) {
        document.getElementById("numeroticket").innerHTML= filteredTickets[0];
        } else {
        document.getElementById("numeroticket").innerHTML= "All tickets for this event have been sold";
        }

                document.getElementById("dateevent").innerHTML = date;
                document.getElementById("prixevent").innerHTML= price + '$'
// ticketlien
                var link = document.getElementById("lienticket");
               link.setAttribute("href", "/yourtickets/"+id);

	            document.getElementById("bill-popup").classList.add("flex");
	            document.getElementById("bill-popup").classList.remove("hidden");
	            document.body.classList.add("overflow-y-hidden");

	        }

	        function closePopup() {
	            document.getElementById("bill-popup").classList.add("hidden");
	            document.getElementById("bill-popup").classList.remove("flex");
	            document.body.classList.remove("overflow-y-hidden");
	        }


	    </script>

	</section>
