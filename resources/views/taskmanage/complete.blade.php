@extends('layouts.master')

@section('content')


    <h1>DISPLAY COMPLETE TASKS FOR A USER HERE</h1>
    @foreach($comptask as $comtask)
        <h2 class='completed'>{{ $comtask['task'] }}</h2>
        <a href='/editcomp/{{$comtask['id']}}'> Edit </a> <br>
        <a href='/delcomp/{{$comtask['id']}}'> Delete </a> <br>
    @endforeach

@stop
