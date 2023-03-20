<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
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
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1 class="text-center pb-5 pt-2" style="font-size:2em">Update Doctor</h1>
            <form action="{{url('edit_doctor', $doctors->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3 col-6 ">
                    <input type="text" name="name" class="form-control input" value="{{$doctors->name}}" placeholder="Doctor_name" aria-label="Doctor_name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6 ">
                    <input type="text"name="phone" class="form-control input" value="{{$doctors->phone}}" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6 ">
                    <input type="text"name="room" class="form-control input" value="{{$doctors->room}}" placeholder="Room Number" aria-label="Room Number" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-6">
                    <select class="form-control input" aria-label="" name="speciality">
                        <option value="" selected>{{$doctors->speciality}} </option>
                        <option value="Skin">Skin</option>
                        <option value="Eyes">Eyes</option>
                        <option value="Three">Three</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-6">
                    <input type="file" name="file" class="form-control input" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Change Image</label>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-success">Update</button>
                </div>

            </form>
        </div>
    </div>
@include('admin.footer')
