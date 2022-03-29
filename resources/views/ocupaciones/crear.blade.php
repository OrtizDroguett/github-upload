@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('ocupaciones.store')}}">
    <div class="mb-3"><label for="exampleFormControlInput1">Email address</label><input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com"></div>
    
    <div class="mb-0"><label for="exampleFormControlTextarea1">Example textarea</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
</form>
@endsection