<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        a {
            color: #1a73e8;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        input, textarea, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            width: auto;
            cursor: pointer;
            background-color: #1a73e8;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #155ab6;
        }
    </style>
</head>
<body>

    <header>
        <h1><a href="{{ route('posts.index') }}">Simple Blog App</a></h1>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p style="text-align:center;">&copy; {{ date('Y') }} TribeArc Institute of Technology</p>
    </footer>

</body>
</html>