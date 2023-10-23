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
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Category</label>
                        <input type="text" class="form-control" id="category" name = "category">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name = "latitude">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Longitude</label>
                        <input type="text" class="form-control" id="latitude" name = "latitude">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">user_id</label>
                        <input type="text" class="form-control" id="latitude" name = "latitude">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>

        </div>
    </div>
</div>



@endsection
