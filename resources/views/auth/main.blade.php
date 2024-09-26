<html lang="en">
    <head>
        <title>Login</title>
        <style>
            form {
                display: flex;
                margin-left: 15rem;
                margin-right: 15rem;
                margin-top: 10rem;
                border: 3px dotted black;
                height: 15rem;
                padding: 0.5rem;
            }
            input[type=text] {
                position: absolute;
                border: 1px dotted black;
                width: 49rem;
                padding: 0.5rem;
                margin-top: 3rem;
            }
            input[type=submit] {
                position: absolute;
                margin-top: 6rem;
                background-color: white;
                border-color: black;
                font-size: large;
            }
        </style>
    </head>
    <body>
        @yield('auth.login')
    </body>
</html>
