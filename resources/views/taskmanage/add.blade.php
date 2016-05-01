@extends('layouts.master')

@section('content')


    <h1>ADD TASKS FOR A USER HERE</h1>
    <form method = 'POST' action='/add'>
        {{csrf_field()}}
        <label> Enter task here (max 255) </label>
        <input maxlength="255" name="addtask" type="text">
        <br>
        <input type="submit" value="Get"> <br>

    </form> <br>

@stop
