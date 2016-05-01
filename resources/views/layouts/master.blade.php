<!doctype html>
<html>

<head>
    <title>
        Task Manager
    </title>
    <meta charset='utf-8'>

</head>

<body>
    <section>
        @yield('content')
    </section>

    <nav>
    <ul>
        @if(Auth::check())
            <li><a href='/'>Home</a></li>
            <li><a href='/add'>Add a Task</a></li>
            <li><a href='/edit'> Edit a Task</a></li>
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

</body>
</html>
