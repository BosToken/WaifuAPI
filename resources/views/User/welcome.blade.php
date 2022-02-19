@extends('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Pages</title>
    @extends('partials.head')
</head>
<body>
    @section('content')
        <div class="container">
            @if($data)
            {{ $data->username}}
            @else
            test
            @endif
        </div>
    @endsection
</body>
</html>