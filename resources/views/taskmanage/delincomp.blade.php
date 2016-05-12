@extends('layouts.master')

@section('content')


    <h1>****************************************</h1>
    <h1>You can delete complete tasks here</h1>
    <h1>****************************************</h1>

    <h2> You are about to delete the task which is incomplete </h2>
    {{ $incomp_task_del['task'] }}
    <form method = 'POST' action='/delincomp'>
        {{csrf_field()}}
        <input type='hidden' name='ident' value='{{ $incomp_task_del->id }}'><br>
        <input type="submit" value="Delete"> <br>

    </form> <br>


@stop
