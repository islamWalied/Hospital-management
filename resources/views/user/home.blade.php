@include('user.header')
<!-- Back to top button -->
<div class="back-to-top"></div>


{{--  topbar section  --}}

@include('user.topbar')


{{--navbar--}}

@include('user.navbar')
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h2>{{session()->get('message')}}</h2>
        </div>
    @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

@include('user.features')


@include('user.info')

@include('user.our_doctors')

@include('user.latest_news')

@include('user.appointment')

@include('user.banner')

@include("user.footer")
