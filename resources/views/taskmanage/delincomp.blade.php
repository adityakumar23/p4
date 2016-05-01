@extends('layouts.master')

@section('content')


    <h1>DELETE INCOMPLETE TASKS FOR A USER HERE</h1>

    <h2> You are about to delete the task which is incomplete </h2>
    {{ $incomp_task_del['task'] }}
    <form method = 'POST' action='/delincomp'>
        {{csrf_field()}}
        <input type='hidden' name='ident' value='{{ $incomp_task_del->id }}'>
        <input type="submit" value="Delete"> <br>

    </form> <br>


@stop
