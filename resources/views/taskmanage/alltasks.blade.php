@extends('layouts.master')

@section('content')


    @if(Session::get('message') != 'null')
        {{ Session::get('message') }}
    @endif


    <h1>***************************</h1>
    <h1> YOUR COMPLETE TASKS ARE </h1>
    <h1>***************************</h1>
    @foreach($comptask as $comtask)
        <h2>----------------------------------</h2>
        <h2 class='completed'>{{ $comtask['task'] }}</h2>
        <h4> completed on {{$comtask['created_at']}}</h4>
        <a href='/editcomp/{{$comtask['id']}}'> Edit </a><br>
        <a href='/delcomp/{{$comtask['id']}}'> Delete </a><br>
        <h2>----------------------------------</h2>
    @endforeach

    <h1> End of complete tasks list</h1>
    <h1>***************************</h1>
    <h1> YOUR INCOMPLETE TASKS ARE </h1>
    <h1>***************************</h1>
    @foreach($incomptask as $incomtask)
        <h2>---------------------------------</h2>
        <h2>{{ $incomtask['task'] }}</h2>
        <a href='/editincomp/{{$incomtask['id']}}'> Edit </a><br>
        <a href='/delincomp/{{$incomtask['id']}}'> Delete </a><br>
        <h2>---------------------------------</h2>
    @endforeach

    <h1> End of incomplete tasks list</h1>


@stop
