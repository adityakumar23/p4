@extends('layouts.master')

@section('content')


    <h1>DISPLAY ALL TASKS FOR A USER HERE</h1>
    @foreach($comptask as $comtask)
        <h2>{{ $comtask['task'] }}</h2>
        <a href='/edit/{{$comtask['id']}}'> Edit <a>
    @endforeach

@stop
