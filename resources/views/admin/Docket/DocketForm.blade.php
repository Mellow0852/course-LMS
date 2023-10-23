@extends('layouts.admin')

@section('content')

<div class="contents">
    <div class="demo5 mt-30 mb-25">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-12 mb-25">
                    <div class="card banner-feature--18 new d-flex bg-white">
                        <div class="container-fluid">

                        </div>
                    </div>
                </div>

                <form>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Particular of person requesting access to the record</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="Fullname" name="Fullname">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="Surname" name="Surname">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Identity Number</label>
                        <input type="text" class="form-control" id="latitude" name = "latitude">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Postal Address</label>
                        <input type="text" class="form-control" id="postaladdress" name = "postaladdress">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name = "postalcode">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">TelePhone</label>
                        <input type="text" class="form-control" id="telephonenumber" name = "telephonenumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Fax Number</label>
                        <input type="text" class="form-control" id="faxnumber" name = "faxnumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Email Address</label>
                        <input type="text" class="form-control" id="emailaddress" name = "emailaddress">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Particular of person on whose behalf request is made</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Email Address</label>
                        <input type="text" class="form-control" id="emailaddress" name = "emailaddress">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>

        </div>
    </div>
</div>



@endsection
