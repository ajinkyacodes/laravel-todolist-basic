<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <title>Todolist Basic</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>TO-DO-LIST</h1>
            <p>By: ajinkyacodes</p>
        </div>
    </header>
    <main>
        <div class="wrapper">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="wrapper">
            &copy;ajinkyacodes
        </div>
    </footer>
</body>
</html>