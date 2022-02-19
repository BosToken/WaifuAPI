@extends('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .tab {
    display: inline-block;
    margin-left: 40px;
}
    </style>
    <title>Documentation</title>
    @extends('partials.head')
</head>
<body>
    @section('content')
        <div class="container">

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                  <h1 class="display-5 fw-bold">Waifu API</h1>
                  <p class="col-md-8 fs-4">Lorei Ipsum Sir Amet banyak bacot.</p>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item">Endpoint : http://envywaifu.herokuapp.com/api/waifu</li>
                <li class="list-group-item">
                @foreach ($waifu as $waifus)
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$waifus}}" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                        <a href="/documentation"><button class="btn btn-warning" type="submit">Try It!</button></a>
                    </div>
                 @endforeach
                </li>
            </ul>
            
        </div>
    @endsection
</body>
</html>