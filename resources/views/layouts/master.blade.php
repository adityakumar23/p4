<!doctype html>
<html>

<head>
    <title>
        Task Manager
    </title>
    <meta charset='utf-8'>
    <link href='/css/p4.css' type='text/css' rel='stylesheet'>
</head>

<body>
    <section>
        @yield('content')
    </section>


    <nav>
        <ul style="list-style-type:none" class="user-options">
            @if(Auth::check())
                <li><a href='/add'>Add a Task</a></li><br>
                <li><a href='/alltasks'>View all Tasks </a></li><br>
                <li><a href='/incomplete'> View incomplete tasks </a></li><br>
                <li><a href='/complete'> View complete tasks </a></li><br>
                <li><a href='/logout'>Log out</a></li><br>

            @else
                <li><a href='/'>Home</a></li><br>
                <li><a href='/login'>Log in</a></li><br>
                <li><a href='/register'>Register</a></li><br>
            @endif
        </ul>
    </nav>


</body>
</html>
