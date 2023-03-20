
@include('admin.header')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
        @include('admin.navbar')

        <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        @include('admin.body')
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.footer')
