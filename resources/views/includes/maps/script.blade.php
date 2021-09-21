<script>
      function main() {

            const markersLatLngPic = @json($realestate);

            // create map function
            function createMap(elemId, centerLat, centerLng, zoom) {
                let map = new L.Map(elemId , { zoomControl: false }).fitWorld();

                // Data provider
                const osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                const osmAttrib = 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';

                // Layer
                const osmLayer = new L.TileLayer(osmUrl, {
                    minZoom: 4,
                    maxZoom: 20,
                    attribution: osmAttrib
                });

                // Map
                map.setView(new L.LatLng(centerLat, centerLng), zoom);
                map.addLayer(osmLayer);
                return map;
            }

            // initialize map
            const map = createMap('map', -8.4561, 115.1999, 9.5);


            // change the currency
            function currency(angka) {
                let reverse = angka.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                return ribuan;
            }

            // add pin point and pop up
            function addPopUp(map, latLng, link, name, desc, price, size, type, status) {

                let marker = L.marker(latLng).addTo(map);
                marker.bindPopup(
                    `
           <div class="card  mt-3" style="width: 18rem;">
                <img src="storage/img/${link}" class="card-img-top" alt="${name}">
                <div class="card-body p-0 py-2">
                    <div class="title-price d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">${name}</h5>
                    <h6 class="text-warning pt-1"><i class="fas fa-money-bill-alt"></i> IDR ${currency(price)}</h6>
                    </div>
                    <small class="bg-secondary p-1 rounded text-light">${type}</small>
                    <small class="bg-dark p-1 rounded text-light">${status}</small>

                    <div class="feature d-flex  border-bottom">
                        <p><i class="fas fa-ruler-horizontal mr-2"></i>${size} SQM</p>
                    </div>
                    
                    <p class="card-text mt-2 pb-2 border-bottom">${desc}</p>
                    <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy%20${name}" class="text-white btn btn-success"><i class="fab fa-whatsapp"></i> Contact Us</a>
                </div>
            </div>
        `).openPopup();

                return marker;
            }



            // loop through the data
            markersLatLngPic.forEach((latLng) => {
                const point = latLng.location
                const pointArray = point.split(',')
                const price = Number(latLng.price_usd)

                // adding pop up and pin point
                addPopUp(map, pointArray, latLng.img, latLng.name, latLng.desc, latLng.price_usd, latLng.size, latLng.type, latLng.status);

            });


        }

        main()
    </script>