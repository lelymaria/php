@extends('app')
@section('content')

<div class="row">
    {{dd(Auth::user())}}
    <p>Welcome <b>{{  Auth::user()->name  }}</b></p>
</div>
@endsection
