@extends('layouts.master')


@section('content')

    @if(!(Auth::check()))
        
        <p>Don't have an account? <a href='/register'>Register here...</a></p>

        <p>Already have an account? <a href='/login'>Login here...</a></p>

    @endif

@stop
