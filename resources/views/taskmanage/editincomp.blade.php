@extends('layouts.master')

@section('content')


    <h1>EDIT TASKS FOR A USER HERE</h1>
    
    <form method = 'POST' action='/editincomp'>
        <input type='hidden' name='ident' value='{{ $incomp_task_edit->id }}'>
        {{csrf_field()}}
        <label> Enter task here (max 255) </label>
        <input maxlength="255" name="incomptask" type="text">
        <br>
        <input type="submit" value="Get"> <br>

    </form> <br>


@stop
