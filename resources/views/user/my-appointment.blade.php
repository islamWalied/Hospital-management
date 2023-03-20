@include('user.header')
<div class="back-to-top"></div>


{{--  topbar section  --}}

@include('user.topbar')


{{--navbar--}}

@include('user.navbar')

<div class="container mt-5">
    @if(session()->has('delete'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h2>{{session()->get('delete')}}</h2>
        </div>
    @endif
    <table class="table">
        <thead>
        <tr class="text-center">
            <th scope="col">Doctor Name</th>
            <th scope="col">phone</th>
            <th scope="col">Date</th>
            <th scope="col">message</th>
            <th scope="col">Appointment</th>

        </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr class="text-center">
                <td>{{$appointment->doctor}}</td>
                <td>{{$appointment->phone}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->message}}</td>
                <td class="text-center">
                    @if($appointment->status == 'In Progress')
                    <a href="{{url('delete-appointment',$appointment->id)}}" class="btn btn-secondary btn-sm">Cancel</a>
                    @else
{{--                        @if(time() > $appointment->created_at)--}}
                        <button class="btn btn-info btn-sm" disabled>Approved</button>
                        <a href="{{url('delete-appointment',$appointment->id)}}" class="btn btn-secondary btn-sm">Delete</a>
{{--                        @endif--}}
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
