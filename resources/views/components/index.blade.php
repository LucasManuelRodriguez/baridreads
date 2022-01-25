@extends('layouts.landing')
@section('content2')
        <ul>
            @foreach ($rastas as $rasta)
                <li>{{$rasta->name}}</li>
            @endforeach
        </ul>
@endsection

