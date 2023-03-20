@include('admin.header')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
                @if(session()->has('approved'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h2>{{session()->get('approved')}}</h2>
                    </div>
                @endif
                @if(session()->has('delete1'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h2>{{session()->get('delete1')}}</h2>
                    </div>
                @endif

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card w-700">
                        <div class="card-body">
                            <h4 class="card-title">Appointments</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center" >
                                        <th> Client Name </th>
                                        <th> Client Email </th>
                                        <th> Client Phone</th>
                                        <th> Doctor Name</th>
                                        <th> Date </th>
                                        <th> Message </th>
                                        <th> Controls </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
                                            <tr class="text-center">
                                                <td> {{$appointment->name}} </td>
                                                <td> {{$appointment->email}} </td>
                                                <td> {{$appointment->phone}} </td>
                                                <td> {{$appointment->doctor}} </td>
                                                <td> {{$appointment->date}} </td>
                                                <td> {{$appointment->message}} </td>
                                                <td>
                                                    @if($appointment->status == 'In Progress')
                                                    <a href="{{url('approve-appointment', $appointment->id)}}"  class="mr-1 btn btn-success">Approve</a>
                                                    <a href="{{url('cancel-appointment', $appointment->id)}}"  class="btn btn-danger">Cancel</a>
                                                    @else
                                                        <div class="badge badge-outline-success">Approved</div>

                                                    @endif

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

        </div>
        <!-- page-body-wrapper ends -->
    </div>
@include('admin.footer')
