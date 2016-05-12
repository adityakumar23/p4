@extends('layouts.master')

@section('content')

    <h1> WELCOME TO THE TASK MANAGER </h1>
    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='first_name'>First Name</label>
            <input type='text' name='first_name' id='first_name' value='{{ old('first_name') }}'>
        </div>

        <div class='form-group'>
            <label for='last_name'>Last Name</label>
            <input type='text' name='last_name' id='last_name' value='{{ old('last_name') }}'>
        </div>


        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'>
        </div>

        <div class='form-group'>
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>

        <button type='submit' class='btn_btn_primary'>Register</button>

    </form>

@stop
