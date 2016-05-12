@extends('layouts.master')

@section('content')


    @if(Session::get('message') != 'null')
        {{ Session::get('message') }}
    @endif


    <h1>DISPLAY ALL TASKS FOR A USER HERE</h1>

    <h2> YOUR COMPLETE TASKS ARE </h2>
    @foreach($comptask as $comtask)
        <h2 class='completed'>{{ $comtask['task'] }}</h2>
        <h4> completed on {{$comtask['created_at']}}</h4>
        <a href='/editcomp/{{$comtask['id']}}'> Edit </a>
        <a href='/delcomp/{{$comtask['id']}}'> Delete </a>
    @endforeach

    <h2> YOUR INCOMPLETE TASKS ARE </h2>
    @foreach($incomptask as $incomtask)
        <h2>{{ $incomtask['task'] }}</h2>
        <a href='/editincomp/{{$incomtask['id']}}'> Edit </a>
        <a href='/delincomp/{{$incomtask['id']}}'> Delete </a>
    @endforeach

@stop
