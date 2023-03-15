<html>
    <head>
        <title>My first laravel</title>
        <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                <a href="">Dashboard</a>
                </li>
                <li>
                <a href="">Post</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">Shreejal Maharjan</a>
                </li>
                <li>
                <a href="">Login</a>
                </li>
                <li>
                <a href="">Register</a>
                </li>
                <li>
                <a href="">Logout</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>