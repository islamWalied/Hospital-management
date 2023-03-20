
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Appointments</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="text-center">
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


    <!-- content-wrapper ends -->
