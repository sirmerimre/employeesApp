<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-left {
            align-items: left;
            display: flex;
            justify-content: left;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-left position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Employees
        </div>
        @if(count($employees) >1)
            @foreach ($employees as $employee)
                <div>
                    @if($employee->avatar)
                        <img src="{{$employee->avatar}}">
                    @else
                        <p>No Image</p>
                    @endif
                    <p><b>User Id:</b> {{$employee->uuid ?? ''}}</p>
                    <p><b>Title:</b> {{$employee->title ?? ''}}</p>
                    <p><b>Name:</b> {{$employee->name ?? ''}}</p>
                    <p><b>Company:</b> {{$employee->company ?? ''}}</p>
                    <p><b>Bio:</b> {{$employee->bio ?? ''}}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
</body>
</html>
