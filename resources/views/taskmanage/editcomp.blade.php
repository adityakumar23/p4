@extends('layouts.master')

@section('content')


    <h1>EDIT TASKS FOR A USER HERE</h1>

    <form method = 'POST' action='/editcomp'>
        <input type='hidden' name='ident' value='{{ $comp_task_edit->id }}'>
        {{csrf_field()}}
        <label> Enter task here (max 255) </label>
        <input maxlength="255" name="comptask" type="text" value='{{ $comp_task_edit->task}}'>
        <br>
        <input type="submit" value="Get"> <br>

    </form> <br>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach

@stop
