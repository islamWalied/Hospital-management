
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <style>
        .input-group {
            margin :15px auto
        }
        div .input{
            background-color:white;
            color:black
        }

    </style>
</head>
<body>
{{--@include('admin.header')--}}
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('add'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h2>{{session()->get('add')}}</h2>

                </div>
            @endif
{{--            add doctor section--}}
            <h1 class="text-center pb-5 pt-2" style="font-size:2em">Add Doctor</h1>
            <form action="{{url('add_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3 col-6 ">
                    <input type="text" name="name" class="form-control input" placeholder="Doctor_name" aria-label="Doctor_name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6 ">
                    <input type="text"name="phone" class="form-control input" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6 ">
                    <input type="text"name="room" class="form-control input" placeholder="Room Number" aria-label="Room Number" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6">
                    <select class="form-control input" aria-label="" name="speciality">
                        <option selected>Speciality</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-6">
                    <input type="file"name="file" class="form-control input" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="text-center mt-5">
                <button type="" class="btn btn-success">Submit</button>
                </div>

            </form>

@include('admin.footer')
