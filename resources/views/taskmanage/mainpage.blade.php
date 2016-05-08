@extends('layouts.master')

@if(!(Auth::check()))
    <h1>Welcome to the Task Manager</h1>

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <p>Already have an account? <a href='/login'>Login here...</a></p>

@endif
