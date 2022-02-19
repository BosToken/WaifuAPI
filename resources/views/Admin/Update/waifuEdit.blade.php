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
            @foreach($waifu as $waifus)
            <form action="/update/waifu/{{$waifus->id}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">* Name</label>
                  <input value="{{$waifus->name}}" name="name" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Picture Link</label>
                  <input value="{{$waifus->picture}}" name="picture" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Anime Name</label>
                  <input value="{{$waifus->anime}}" name="anime" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Grade (1-5)</label>
                  <input value="{{$waifus->grade}}" name="grade" type="number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
              </form>
              @endforeach
        </div>
    @endsection
</body>
</html>