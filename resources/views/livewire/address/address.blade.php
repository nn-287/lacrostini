<div>
	@include('livewire.layouts.header')



	<!-- ============== SECTION PAGETOP ============== -->
	<section class="bg-primary padding-y-sm">
		<div class="container">
			<ol class="breadcrumb ondark mb-0">
				<li class="breadcrumb-item"> <a href="#">Home</a> </li>
				<li class="breadcrumb-item active"> Address </li>
			</ol>
		</div> <!-- container //  -->
	</section>
	<!-- ============== SECTION PAGETOP END// ============== -->

	<section class="padding-y bg-light">
		<div class="container">

			<!-- =================== COMPONENT CART+SUMMARY ====================== -->
			<div class="row">
				<div class="col-lg-9">

				  <div class="row pb-3">
                        <div class="col-6">
                                <label class="input-label">Contact Person Name</label>
                                <input type="text" wire:model="contact_person_name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="col-6">
                                <label class="input-label">Contact Person Number</label>
								<input type="text" wire:model="contact_person_number" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>

					<div class="row pb-3">
                        <div class="col-6">
                                <label class="input-label">Address Type</label>
                                 <select class="form-control" wire:model="address_type"> 
                                    <option value="Home">Home</option>
                                    <option value="Workplace">Workplace</option>
									<option value="Other">Other</option>
                                 </select>
                        </div>
                    </div>

				    <input id="search-input" type="text" wire:model="address" placeholder="Search for a location"  class="form-control" required>

				    <input id="address-input" value="" type="hidden">
                    <input id="location-input" wire:model="coordinates" name="coordinates" value=""  type="hidden"> 
                    <div id="map" style="width: 100%; height: 400px;"></div>

					<div class="pt-3">
					<button wire:click="saveAddress"  class="btn btn-primary">Save Address</button>
					</div>
				</div> <!-- col.// -->

				<aside class="col-lg-3">

					<div class="card mb-3">
						<div class="card-body">

							<div>
								<label class="form-label">Your Address List</label>
							</div>

						</div> <!-- card-body // -->
					</div> <!-- card // -->


					<div class="card">
						<div class="card-body">

						  @foreach($address_list as $address)
						  <div class="row">
						  <i class="fas fa-map-marker-alt fa-1x"></i>

						  <p>{{$address->address}}</p>
						  </div>

						  <hr>
						  
						  @endforeach
							
						</div> <!-- card-body // -->
					</div> <!-- card // -->

				</aside>
			</div> <!-- row // -->
			<!-- =================== COMPONENT 1 CART+SUMMARY .//END  ====================== -->

			<br><br>

		</div> <!-- container .//  -->
	</section>



	</body>

	@include('livewire.layouts.footer')


<script  src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_map_api_key') }}&libraries=places"></script>

<script>
    var map;
    var marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 30.009622248011077, lng: 30.964271800177325 },
            zoom: 13
        });

        // Create a marker initially without a position.
        marker = new google.maps.Marker({
            map: map,
            draggable: true, // Allow the marker to be moved
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('search-input'));

        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            var place = places[0];

            // Update the marker position and map center.
            marker.setPosition(place.geometry.location);
            map.setCenter(place.geometry.location);
            map.setZoom(15);

            // Update the input field with coordinates.
            document.getElementById('location-input').value = place.geometry.location.lat() + ',' + place.geometry.location.lng(); 

            // Update the input field with the address.
            document.getElementById('address-input').value = place.formatted_address;

			// Livewire.emit('getCoordinates', place.geometry.location.lat() + ',' + place.geometry.location.lng());
			
        });

        // Add a click event listener to the map.
        google.maps.event.addListener(map, 'click', function(event) {
            // Update the marker position.
            marker.setPosition(event.latLng);

            // Reverse geocode the clicked location to get an address.
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: event.latLng }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK && results[0]) {
                    // Update the input field with coordinates.
                    document.getElementById('location-input').value = event.latLng.lat() + ',' + event.latLng.lng();

                    // Update the input field with the address.
                    document.getElementById('address-input').value = results[0].formatted_address;
                    document.getElementById('search-input').value = results[0].formatted_address;

					// Livewire.emit('getCoordinates', place.geometry.location.lat() + ',' + place.geometry.location.lng());
                }
            });
        });
    }

    google.maps.event.addDomListener(window, 'load', initMap);
</script>

</div>