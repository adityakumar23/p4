@extends('layouts.master')

@section('content')


    <h1>************************</h1>
    <h1>You can edit completed tasks here</h1>
    <h1>************************</h1>

    <form method = 'POST' action='/editcomp'>
        <input type='hidden' name='ident' value='{{ $comp_task_edit->id }}'>
        {{csrf_field()}}
        <label> Enter task here (max 255) </label>
        <input maxlength="255" name="comptask" type="text" value='{{ $comp_task_edit->task}}'>
        <br>
        <input type="submit" value="Submit"> <br>

    </form> <br>

    @foreach($errors->all() as $error)
        <ul class='errors'>
            <li>{{ $error }}</li>
        </ul>
    @endforeach

@stop
