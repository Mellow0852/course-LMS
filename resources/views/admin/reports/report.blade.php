@extends('layouts.admin')

@section('content')
<div class="title d-flex justify-content-between">

    @can('course_create')
    <p>
        <a class="btn btn-success" href=" {{ route('admin.reports.create') }}">Add new report</a>

    </p>
    @endcan
</div>
<div class="container-fluid py-4">
    <div class="col-xxl-12 mb-25">
        <div class="card banner-feature--18 new d-flex ">
            <div class="container-fluid">
                <div class="row">
                    <div id="map" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">



        <div class="col-xxl-8 mb-25">
            <div class="border-0 px-25 card mb-4">
                <div class="card-header pb-0 border-0">
                    <h6>Data Report</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Users</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($reports as $report)
                                <tr>
                                    <td><a href="{{ route('admin.reports.show', $report->id) }}">{{
                                            $report->title }}</a></td>
                                    <td>{{ $report->description }}</td>
                                    <td>{{ $report->category }}</td>
                                    <td>{{ $report->user_id }}</td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>



<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<script>
    var map = L.map('map').setView([0, 0], 2);  // Initial focus is on global view
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    @foreach($reports as $report)
        L.marker([{{ $report->latitude }}, {{ $report->longitude }}])
            .bindPopup("<b>{{ $report->title }}</b><br>{{ $report->description }}")
            .addTo(map);
    @endforeach
</script>
@endsection
