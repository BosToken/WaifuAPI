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
            <center><h1>Data Waifu</h1></center>
            <hr>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Anime</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($waifu as $waifus) 
                  <tr>
                    <th scope="row">#</th>
                    <td>{{$waifus->name}}</td>
                    <td>{{$waifus->anime}}</td>
                    <td><i class="fas fa-star"></i> {{$waifus->grade}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/detail/waifu/{{$waifus->id}}"><button type="button" class="btn btn-outline-primary">Detail</button></a>
                        <a href="/edit/waifu/{{$waifus->id}}"><button type="button" class="btn btn-outline-warning">Edit</button></a>
                        {{-- <a href="/delete/waifu/{{$waifus->id}}"><button type="button" class="btn btn-outline-danger">Delete</button></a> --}}
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    @endsection
</body>
</html>