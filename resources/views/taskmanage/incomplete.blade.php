@extends('layouts.master')

@section('content')


    <h1>DISPLAY INCOMPLETE TASKS FOR A USER HERE</h1>
    @foreach($incomptask as $incomtask)
        <h2>{{ $incomtask['task'] }}</h2>
        <a href='/editincomp/{{$incomtask['id']}}'> Edit </a><br>
        <a href='/delincomp/{{$incomtask['id']}}'> Delete</a><br>
    @endforeach

@stop
