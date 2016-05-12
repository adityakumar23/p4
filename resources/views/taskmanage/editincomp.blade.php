@extends('layouts.master')

@section('content')


    <h1>****************************************************************</h1>
    <h1>You can edit incomplete tasks here/move them to completed list</h1>
    <h1>*****************************************************************</h1>
    <form method = 'POST' action='/editincomp'>
        <input type='hidden' name='ident' value='{{ $incomp_task_edit->id }}'>
        {{csrf_field()}}
        <label> Enter task here (max 255 chars) </label>
        <input maxlength="255" name="incomptask" type="text" value='{{ $incomp_task_edit->task}}'>
        <br>
        <input type="radio" name="movetask" value="completed"> Task completed? <br>
        <input type="submit" value="Submit"> <br>


    </form> <br>

    @foreach($errors->all() as $error)
        <ul class='errors'>
            <li>{{ $error }}</li>
        </ul>
    @endforeach

@stop
