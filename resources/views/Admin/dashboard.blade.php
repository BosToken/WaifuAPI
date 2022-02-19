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
            <div class="card mb-3">
            <div class="card-body">
                <i class="fas fa-dot-circle"></i> | Welcome : {{$data->username}}
                <br>
                <i class="fas fa-user-check"></i> | Status : @if($data->role === 1) Admininstrator @elseif($data->role === 2) Agent @else User @endif
            </div>
          </div>

          <div class="card">
            <div class="card-body">
            </div>
          </div>
        </div>
    @endsection
</body>
</html>