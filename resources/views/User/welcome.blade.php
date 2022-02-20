@extends('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Pages</title>
    @extends('partials.head')
    <style>
        #jumbotron{
            background-image: url("https://raw.githubusercontent.com/BosToken/waifu-gatcha/master/Banner.png");
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>
</head>
<body>
    @section('content')
        <div class="container">
            <div class="p-5 mb-4 bg-light rounded-3" id="jumbotron" style="height: 500px;">
                <div class="container-fluid py-5">
                  <h1 class="fw-light">Random Waifu API</h1>
                  <p class="col-md-8 fs-4">designed to make the experience when gatcha waifu isn't trash, like the games you've played before.</p>
                  <p class="col-md-8 fs-4" style="color: yellow"><i class="fas fa-exclamation-triangle"></i> the grade rating is only based on the author's subjective, so we hope you understand it <i class="fas fa-exclamation-triangle"></i></p>
                  <a href="/documentation"><button class="btn btn-primary btn-lg" type="button">Getting Started</button></a>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>