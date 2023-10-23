@extends('layouts.admin')

@section('content')

<div class="contents">
    <div class="demo5 mt-30 mb-25">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-12 mb-25">
                    <div class="card banner-feature--18 new d-flex bg-white">
                        <div class="container-fluid">
                            <div class="row">
                                <div id="map" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 mb-25">
                    <div class="card border-0 px-25">
                        <div class="card-header px-0 border-0">
                            <h6>Crime Report</h6>

                        </div>
                        <div class="card-body p-0">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>{{ $report->title }}</h2>
                                        <small>Category: {{ $report->category }}</small>
                                    </div>
                                    <div class="card-body">
                                        <p>{{ $report->description }}</p>
                                        <p>Location: Latitude {{ $report->latitude }}, Longitude {{ $report->longitude
                                            }}</p>
                                    </div>

                                </div>

                                <!-- Comments Section -->

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</div>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    var map = L.map('map').setView([0, 0], 2);  // Initial focus is on global view
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);


        L.marker([{{ $report->latitude }}, {{ $report->longitude }}])
            .bindPopup("<b>{{ $report->title }}</b><br>{{ $report->description }}")
            .addTo(map);

</script>
@endsection
