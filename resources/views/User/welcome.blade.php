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
            opacity: 0.9;
            email: 1Ma;
            password : 4dM1n;
        }
    </style>
</head>
<body>
    @section('content')
        <div class="container">
            <div class="p-5 mb-4 bg-light rounded-3 shadow-sm" id="jumbotron">
                <div class="container-fluid py-5">
                  <h1 class="display-5 fw-bold">Random Waifu API</h1>
                  <p class="col-md-8 fs-4">designed to make the experience when gatcha waifu isn't trash, like the games you've played before.</p>
                  <p class="col-md-8 fs-4" style="color: yellow"><i class="fas fa-exclamation-triangle"></i> the grade rating is only based on the author's subjective, so we hope you understand it <i class="fas fa-exclamation-triangle"></i></p>
                  <a href="/documentation"><button class="btn btn-primary btn-lg" type="button">Getting Started</button></a>
                </div>
              </div>
            <div class="row mt-5 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        @foreach($setting as $settings)
                            <h5 class="card-title">Why must {{$settings -> web_title}}</h5>
                            <p>Our data is always updated, we have many agents who can help you provide more data.</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col">
                    <h3>Get the Gacha Experience For Free And at Will</h3>
                    <p>EXAMPLE : </p>
                
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="{{$waifu1 -> picture}}" class="rounded-2 shadow-4 mt-2 mr-6"
                                style="width: 50px;" alt="Avatar" />
                            {{$waifu1 -> name}}
                        </div>
                    </div>
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="{{$waifu2 -> picture}}" class="rounded-2 shadow-4 mt-2 mr-6"
                                style="width: 50px;" alt="Avatar" />
                            {{$waifu2 -> name}}
                        </div>
                    </div>
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="{{$waifu3 -> picture}}" class="rounded-2 shadow-4 mt-2 mr-6"
                                style="width: 50px;" alt="Avatar" />
                            {{$waifu3 -> name}}
                        </div>
                    </div>
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="{{$waifu4 -> picture}}" class="rounded-2 shadow-4 mt-2 mr-6"
                                style="width: 50px;" alt="Avatar" />
                            {{$waifu4 -> name}}
                        </div>
                    </div>
                </div>

                <div class="col text-center mx-auto">
                    <img src="https://github.com/BosToken/WaifuAPI/blob/master/public/img/claw.png?raw=true" class="css-class" alt="alt text" style="width: 350px;">
                </div>
            </div>
        </div>
    @endsection
</body>
</html>