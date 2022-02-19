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
            <form action="/create/waifu/store" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">* Name</label>
                  <input name="name" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Picture Link</label>
                  <input name="picture" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Anime Name</label>
                  <input name="anime" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">* Grade (1-5)</label>
                  <input name="grade" type="number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
              </form>
        </div>
    @endsection
</body>
</html>