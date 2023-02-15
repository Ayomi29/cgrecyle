<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CG Recyle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Bootstrap icon css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- Link animation AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/landing.css">



  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-grn">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">CG Recyle</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#products">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#about">About Us</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="/login" class="nav-link text-light"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>

    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"
      data-aos="fade-in-right"
      data-aos-easing="ease-in-out" data-aos-duration="1000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
                <div class="carousel-caption d-flex align-items-center text-start justify-content-around">
                    <img src="images/logo_cgrecyle.jpg" class="img-carousel-logo" alt="">
                    
                    <div class="d-flex flex-column">
                        <h1>Welcome to CG Recyle</h1>
                        <p>
                            Special Recycled & Upcycled Glassware <br>
                            Based In Bali <br>
                        </p>
                        <p>
                          <a class="btn btn-lg btn-primary" href="https://api.whatsapp.com/send/?phone=6289697173037&text&type=phone_number&app_absent=0">Ask us Anything, We're Here to Assist You</a>
                        </p>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div class="carousel-caption d-flex align-items-center text-start justify-content-around">
                    <img src="images/img1.jpg" class="img-carousel" alt="">
                    
                    <div class="d-flex flex-column col-md-6 ">
                        <h1>Our Product</h1>
                        <p>
                            Our Shop Provide a Recycled & Upcycled Glassware <br>
                        </p>
                        <p>
                          <a class="btn btn-lg btn-primary" href="#products">Click Here!</a>
                        </p>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container marketing" id="products" data-aos="fade-in-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          @foreach ($products as $product)
            
          <div class="col-lg-4">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-rounded" alt="img-product">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="fw-normal">{{ $product->price }}</p>
            <p class="fw-normal">
              {{ $product->desc_product }}
            </p>
            <p>
              <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=6289697173037&text&type=phone_number&app_absent=0">Buy Here &raquo;</a>
            </p>
          </div>
          @endforeach
        </div>
        
        <hr class="featurette-divider" />

        <div class="d-flex align-items-center featurette" id="about"
        data-aos="fade-in-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
          <div class="col-md-7">
            <h2 class="featurette-heading text-dark fw-bold">
              CG Recyle
            </h2>
            <p class="lead">
              CG (Siji) in Javanese means Number 1.CG originated by our previous name Crystal Glass
              (since many people ask about crystal for positive energy or spiritual healing which is not what we make we decide to change the name to something simpler & easy to remember) <br>
              
              Adding "recycle" after "CG" reflects the value we hold since the beginning. We do this because we embrace recycling and we also provide upcycling service. It's amazing to work for the environment and with the environment.
            </p>
          </div>
          <div class="col-md-5 d-flex justify-content-center">
            <img src="images/logo_cgrecyle.jpg" alt="logo cgrecyle" style="height: 300px;">
          </div>
        </div>

        <hr class="featurette-divider" />
        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>
          &copy; 2023 CG Recyle. &middot; <br>
          Based in Bali
          {{-- <a href="#">Privacy</a> &middot; <a href="#">Terms</a> --}}
        </p>
        
      </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
