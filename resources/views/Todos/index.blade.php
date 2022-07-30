<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center my-5">Todos Page</h1>

                <div class="card ">
                    <div class="card-header">
                        Todos
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo )
                            <li class="list-group-item">
                                {{ $todo->name }}

                                <button class="btn btn-primary btn-sm">View</button>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
