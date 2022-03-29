@extends('layouts.master')
@section('content')
    <div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($ocupaciones as $ocupacion)
                <tr>
                    <td>{{$ocupacion->id}}</td>
                    <td>{{$ocupacion->nombre}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
