

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        <form class="main-form" action="{{url('appointment')}}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" value="{{ old('date') }}" name="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option disabled selected>Select a doctor</option>
                    @foreach($doctors as $doctor)
                            <option value="{{$doctor->name}}">{{$doctor->name}} - {{$doctor->speciality}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" value="{{ old('number') }}" name="number" class="form-control" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
                <button class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
