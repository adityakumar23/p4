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

    <h1 class='msg'>Welcome to the Task Manager</h1>
    <nav>
        <ul style="list-style-type:none" class="user-options">
            @if(Auth::check())
                <li><a href='/add'>Add a Task</a></li>
                <li><a href='/alltasks'>View all Tasks </a></li>
                <li><a href='/incomplete'> View incomplete tasks </a></li>
                <li><a href='/complete'> View complete tasks </a></li>
                <li><a href='/logout'>Log out</a></li>

            @else
                <li><a href='/'>Home</a></li>
                <li><a href='/login'>Log in</a></li>
                <li><a href='/register'>Register</a></li>
            @endif
        </ul>
    </nav>
    <h1 class='msg'>YOU CAN MANAGE YOUR TASKS HERE </h1>

</body>
</html>
