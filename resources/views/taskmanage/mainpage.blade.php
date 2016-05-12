@extends('layouts.master')


@section('content')

    <h1>****************************************</h1>
    <h1 class='msg'>Welcome to the Task Manager</h1>
    <h1>****************************************</h1>
    @if(!(Auth::check()))

        <p>Don't have an account? <a href='/register'>Register here...</a></p>

        <p>Already have an account? <a href='/login'>Login here...</a></p>

    @endif
    <h1 class='msg'>You can manage your tasks here </h1>
@stop
