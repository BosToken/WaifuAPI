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

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                  <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Random Waifu API</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                  </div>
                </div>
              </section>

            <ul class="list-group">
                <li class="list-group-item">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endpoint :</label>
                        <input type="email" class="form-control" value="http://envywaifu.herokuapp.com/api/waifu" aria-describedby="emailHelp" disabled>
                      </div>
                </li>
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