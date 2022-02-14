@extends('masterlayout')

@section('container')
    <style>
        #bg-img{
            height: 50rem;
            background-size: cover;
            background-image: url({{ URL::asset('images/background/bgbook.jpg') }});
        }
    </style>

    <div id="bg-img" class="d-flex flex-column align-items-center justify-content-center text-center h-10">
        <h2 class="title-center text-light mb-5"> {{ __($resulttitle) }} </h2>
        <h5 class="btn btn-warning py-1 px-5"> <a href="/"> {{ __('back to Home') }} </a></h5>
    </div>
@endsection