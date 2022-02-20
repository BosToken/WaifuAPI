<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
    >
      <ul
        class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
      >
        <li class="nav-item"><a href="/" class="nav-link px-2 link-dark"><b>WaifuAPI</b></a></li>
        <li class="nav-item"><a href="/" class="nav-link px-2 link-dark">Home</a></li>
        {{-- <li class="nav-item"><a href="/api" class="nav-link px-2 link-dark">API</a></li> --}}
        <li class="nav-item"><a href="/documentation" class="nav-link px-2 link-dark">Documentation</a></li>
      </ul>

      <div class="col-md-3 text-end">
        @if($data)
          @if ($data->role === 1 || 2)
            <a href="/admin"><button type="button" class="btn btn-primary me-2">Admin Pages</button></a>
          @endif
          <a href="/logout"><button type="button" class="btn btn-outline-danger me-2">Logout</button></a>
        @else
        <a href="/login"><button type="button" class="btn btn-outline-dark me-2">Login</button></a>
        @endif
      </div>

    </div>
  </div>
</header>

@yield('content')

@extends('partials.footer')