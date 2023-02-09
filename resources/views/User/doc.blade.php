@extends('partials.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://md-block.verou.me/md-block.js"></script>
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
                    <p class="lead text-muted">Our API is free to use without using a user token API installation only requires endpoint.</p>
                  </div>
                </div>
              </section>

            <ul class="list-group">
                <li class="list-group-item">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><i class="fas fa-link"></i> Endpoint :</label>
                        @foreach($setting as $settings)
                        <input type="email" class="form-control" value="{{$settings->endpoint}}" aria-describedby="emailHelp" disabled>
                        @endforeach
                      </div>
                </li>
                @foreach ($waifu as $waifus)
                <li class="list-group-item">
                    <label for="exampleInputEmail1" class="form-label"><i class="fas fa-id-badge"></i> Name :</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$waifus->name}}" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                </li>
                <li class="list-group-item">
                    <label for="exampleInputEmail1" class="form-label"><i class="fas fa-external-link-alt"></i> Anime :</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$waifus->anime}}" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                </li>
                <li class="list-group-item">
                    <label for="exampleInputEmail1" class="form-label"><i class="fas fa-image"></i> Picture :</label>
                    <br>
                    <img src="{{$waifus->picture}}" class="img-fluid" alt="...">
                </li>
                <li class="list-group-item">
                    <md-block>
                        ```javascript
                            {
                                "id":{{$waifus->id}},
                                "name":"{{$waifus->name}},
                                "anime":"{{$waifus->anime}}",
                                "picture":"{{$waifus->picture}}",
                                "grade":{{$waifus->grade}},
                                "created_at":"{{$waifus->created_at}}",
                                "updated_at":"{{$waifus->updated_at}}"
                            }
                        ```
                    </md-block>
                    <a href="/documentation"><button class="btn btn-warning" type="submit">Try It!</button></a>
                </li>
                 @endforeach
            </ul>
            
        </div>
    @endsection
</body>
</html>