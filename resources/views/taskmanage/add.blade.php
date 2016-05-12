@extends('layouts.master')

@section('content')


    <h1>*************************************</h1>
    <h1>Please add incomplete tasks here</h1>
    <h1>*************************************</h1>
    <form method = 'POST' action='/add'>
        {{csrf_field()}}
        <label> Enter task here (max 255 chars) </label>
        <input maxlength="255" name="addtask" type="text">
        <br>
        <input type="submit" value="Submit"> <br>

    </form> <br>

    @foreach($errors->all() as $error)
        <ul class='errors'>
            <li>{{ $error }}</li>
        </ul>
    @endforeach

@stop
