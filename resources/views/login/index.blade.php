<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CG Recyle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Bootstrap icon css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/landing.css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #008891">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">CG Recyle</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link text-light" href="/">Home</a>
              </li>
            </ul>
            </div>
        </div>
      </nav>
    </header>

    <main>
        <div class="container mt-4">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
    
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
    
                    <main class="form-signin">
                        <form action="/login" method="post">
                            @csrf
    
                            <h1 class="h3 my-4 fw-normal text-center">Login</h1>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" autofocus required
                                    value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password"
                                    name="password"class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="d-inline invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="w-100 mt-3 btn btn-lg text-light" style="background-color: #084d9c"
                                type="submit">Login</button>
                        </form>
                        
                    </main>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

@section('container')
    
@endsection
