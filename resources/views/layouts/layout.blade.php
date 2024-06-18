<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.3/TweenMax.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>FindIt</title>

</head>
<body>
    <nav class="border-bottom border-black">
        <div class="container">
          <a href="/" class="logo">
            <img style="height: 60px; width: auto;" src="{{ asset('videos/FindIt.png') }}" class="logo-img" alt="">

          </a>
          <ul class="tab manrope-bold">
            <li class="desk-li">
              <a href="index.html">Cars</a>
            </li>
            <li class="desk-li">
              <a href="/">About</a>
            </li>
            <li class="desk-li">
              <a href="/">Contact </a>
            </li>
            <li class="burger">
              <div class="burger-wrapper">
                <svg width="100px" height="60px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Artboard-Copy-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                    <g id="Group" transform="translate(12.000000, 29.000000)" fill-rule="nonzero" stroke-width="4">
                      <path class="line" id="line-middle" d="M13,20 L63,20" stroke="#ffffff" stroke-linejoin="round"></path>
                      <path class="line" id="line-top" d="M63,1 L13.347708,1 C4.449236,1 0,4.16666667 0,10.5 C0,16.8333333 4.449236,20 13.347708,20 L59,20" stroke="#ffffff"></path>
                      <path class="line" id="line-bottom" d="M42,68 L75,68 C81.6666667,67 85,63.8333333 85,58.5 C85,53.1666667 81.6666667,50 75,49 L30,49" transform="translate(-13.000000, -29.000000)" stroke="#ffffff"></path>
                    </g>
                  </g>
                </svg>
              </div>
            </li>
          </ul>
        </div>
        <div class="respMenu">
          <ul>
            <li>
              <a href="">Home</a>
            </li>
            <li>
              <a href="">About</a>
            </li>
            <li>
              <a href="">Team</a>
            </li>
            <li>
              <a href="">Products</a>
            </li>
          </ul>
          <div class="button-list">
            <button></button>
            <button></button>
            <button></button>
          </div>
        </div>
      </nav>

      @yield('content')

    <footer class="p-5" style="background-color: #f9f9f9;">
        <div class="container">
        <div class="">
            <div class="row">
                <div class="col-6">
                    <ul class="footerlist  manrope-bold d-flex flex-column justify-content-left" style="list-style-type: none; font-size: large; ">
                        <li>A tool for those</li>
                        <li>who want to forget</li>
                        <li>about "troleibus"</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="footerlist manrope-bold d-flex flex-column justify-content-left" style="list-style-type: none; font-size: large; ">
                        <li>TUM 3-3</li>
                        <li>Strada Studenților 7,</li>
                        <li>MD-2012, </li>
                        <li>Chișinău</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="footerlist manrope-bold d-flex flex-column justify-content-left" style="list-style-type: none; font-size: large; ">
                        <li>About</li>
                        <li>Sales</li>
                        <li>References</li>
                        <li>Our Team</li>
                        <li>Hello World!</li>
                        <li>Partners</li>
                        <li>Contacts</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footerbottom">
            <i class="fa-sharp fa-regular fa-copyright"></i>
            <h5 class="manrope-bold">Developed by a team of charming and enthusiastic people</h5>
        </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
