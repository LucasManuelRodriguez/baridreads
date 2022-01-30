@extends('layouts.landing')
@section('content2')
        @include('carousel')
        @include('card')
        <div class="container "> 
                <a class="d-flex justify-content-center align-items-center" href="{{route('show')}}">Ver MAS</a>
        </div>
@endsection

