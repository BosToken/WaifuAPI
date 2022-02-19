<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Waifu</title>
    @extends('partials.head')
</head>
<body>
    @extends('partials.sidebar')
    @section('content')
        <div class="container">
           <center><h1>Detail</h1> </center>
           <hr>
           @foreach($waifu as $waifus)
           <div class="card shadow" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><center><img src="{{$waifus->picture}}" class="img-fluid" alt="..." style="border-radius: 10px"></center></li>
              <li class="list-group-item"><i class="fas fa-portrait"></i> Name : {{$waifus->name}}</li>
              <li class="list-group-item"><i class="fas fa-copyright"></i> Anime : {{$waifus->anime}}</li>
              <li class="list-group-item"><i class="fas fa-star"></i> Grade : {{$waifus->grade}}</li>
            </ul>
          </div>
           @endforeach
        </div>
    @endsection
</body>
</html>