<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            object-fit: cover;
            /* border: 1px solid saddlebrown; */
            width: 100%;

        }

        body {
            /* border: 1px solid yellow; */
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{ URL::asset('back/dist/img/soon.jpg') }}");
            background-position: center center;
            /* Center both horizontally and vertically */
        }
    </style>
    <title>Real Pros Call Center</title>

</head>

<body>
    {{-- <img src="{{URL::asset('back/dist/img/soon.jpg')}}" alt="soon" > --}}
</body>

</html>
