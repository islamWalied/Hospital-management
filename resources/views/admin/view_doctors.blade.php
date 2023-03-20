
@include('admin.header')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('delete2'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h2>{{session()->get('delete2')}}</h2>
                </div>
            @endif
                @if(session()->has('edit'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h2>{{session()->get('edit')}}</h2>
                    </div>
                @endif
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Doctors</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center">
                                        <th> Doctor Image </th>
                                        <th> Doctor Name </th>
                                        <th> Doctor Phone </th>
                                        <th> Room</th>
                                        <th> Speciality</th>
                                        <th> Controls</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doctors as $doctor)
                                        <tr class="text-center">
                                            <td style="display: flex;justify-content: center;">
                                                <img style="width:65px;height:65px" src="doctorimage/{{$doctor->image}}" alt="">
                                            </td>
                                            <td> {{$doctor->name}} </td>
                                            <td> {{$doctor->phone}} </td>
                                            <td> {{$doctor->room}} </td>
                                            <td> {{$doctor->speciality}} </td>
                                            <td>
                                                <a href="{{url('update-doctor', $doctor->id)}}"  class="mr-1 btn btn-success">Update</a>
                                                <a href="{{url('delete-doctor', $doctor->id)}}"  class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@include('admin.footer')
