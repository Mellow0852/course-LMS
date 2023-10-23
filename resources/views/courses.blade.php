@extends('layouts.front')

@section('content')
<section class="story section container">
          <div class="story-container grid">
            <div class="story-data">
              <h2 class="section-title story-section-title">Crime Locator Form</h2>
              <h1 class="story-title">
                Description
              </h1>

              <p class="story-description">
              Crime Locator is designed to help citizens eradicate crime:
              To get eliminate crime we provide a form that you fill in with necessary details to alert and raise awareness. 
              Use the form to help report suspicious and criminal activities to help authorities to investigate or 
              locate your neighbourhood's precinct.
              </p>
            </div>
            <div class="story-images">
              <img src="{{ asset('frontend/assets/images/crime.jpg') }}" alt="" class="story-img" />
            <div class="story-square"></div>
          </div>
        </div>
      </section>

    <section class="products section container" id="course">

        <form action="connect.php" method = "post" class="report">
          
          <div class="col-12">
            <label for="inputAddress" class="form-label">Reporting User/Officer</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="eg.. Committee Executive or Police Officer">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Description</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="eg.. Mass Shootings">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Catergory</label>
            <input type="text" class="form-control" id="inputCity" placeholder="eg.. Attempted Murder">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="inputCity" placeholder="eg.. latitude 38.8951">
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="inputZip" placeholder="eg.. longitude -77.0364">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Report</button>
          </div>
        </form>
      </section>
@endsection
