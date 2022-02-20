<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    @extends('partials.head')
</head>

<body>
    @extends('partials.sidebar')
    @section('content')
        <div class="container">
            <center>
                <h1>Web Settings</h1>
            </center>
            <hr>
            @foreach ($setting as $settings)
                <h5>Web Title :</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $settings->web_title }}"
                        aria-describedby="basic-addon2" disabled>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#web_tite">
                        <i class="fas fa-pen"></i>
                    </button>
                </div>

                <div class="modal fade" id="web_tite" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Web Title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/update/setting/webname/{{$settings->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="mb-3">
                                      <input type="text" name="web_title" class="form-control" value="{{ $settings->web_title }}">
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>

                
                <h5>EndPoint :</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $settings->endpoint }}"
                        aria-describedby="basic-addon2" disabled>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#endpoint">
                        <i class="fas fa-pen"></i>
                    </button>
                </div>

                <div class="modal fade" id="endpoint" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change EndPoint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/update/setting/endpoint/{{$settings->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="mb-3">
                                      <input type="text" name="endpoint" class="form-control" value="{{ $settings->endpoint }}">
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>

                <h5>Corporation Name :</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $settings->corp_name }}"
                        aria-describedby="basic-addon2" disabled>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#corp">
                        <i class="fas fa-pen"></i>
                    </button>
                </div>

                <div class="modal fade" id="corp" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Corporation Name</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/update/setting/corp/{{$settings->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="input-group mb-3">
                                      <input type="text" name="corp_name" class="form-control" value="{{ $settings->corp_name }}">
                                      <span class="input-group-text" id="basic-addon2">.Corp</span>
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
</body>

</html>
