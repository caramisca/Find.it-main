@extends('layouts.layout')

@section('content')



<section class="welcome manrope-bold" style="height: 80vh;">
        <div class="container d-flex flex-column justify-content-center align-center">
        <video autoplay muted loop id="background-video" class="border-bottom border-black">
            <source src="{{ asset('videos/videoPorsche.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="welcome-content rounded-4" >
            <h1 class="font-manrope manrope-semi">Find your next match</h1>
            <p class="font-manrope manrope-semi">Find the right price, dealer and advice</p>

            <div class="custom-search" style="margin-top: 40vh;">
                <h1 class="manrope-semi">What are you looking for?</h1>
                <div class="wrap">
                    <div style="width: 100%" class="search manrope-semi d-flex flex-row justify-content-center align-center">

                        <form id="auto-prompt-form">
                        <div class="search-box" style="width: 50vw">
                            <input type="text" placeholder="Search..."  id="message" name="message" type="submit" >
                            <i class="icon fa fa-search" type="submit"></i>
                        </div>
                      </form>


                    </div>
                 </div>
            </div>
        </div>

        </div>
      </section>
      <section class="features border-bottom p-5">
        <div class="container">
            <div class="row">
                <div class="col-3 d-flex flex-column justify-content-center text-center gap-3">
                    <i style="font-size: xxx-large; color: #229ffe;" class="fa-solid fa-filter"></i>
                    <h5 class="manrope-regular">Find cars matching specific preferences easily.</h5>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center text-center gap-3">
                    <i  style="font-size: xxx-large; color: #229ffe;" class="fa-solid fa-star"></i>
                    <h5 class="manrope-regular">Discover cars tailored to your interests.</h5>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center text-center gap-3">
                    <i style="font-size: xxx-large; color: #229ffe;" class="fa-solid fa-car"></i>
                    <h5 class="manrope-regular">Make informed decisions by comparing features and prices.</h5>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center text-center gap-3">
                    <i style="font-size: xxx-large; color: #229ffe;" class="fa-solid fa-lightbulb"></i>


<h5 class="manrope-regular">Offer expert car-buying tips and guides for confident decisions.</h5>
                </div>
            </div>
        </div>
      </section>

      <section class="about mb-5 mt-5">
        <div class="container manrope-bold">
            <h1 style="font-size: xxx-large;" class="manrope-bold mb-3 p-5 d-flex justify-content-center text-center">About Us</h1>
            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <img style="width: 30vw; height: auto;" src="{{ asset('videos/babyBlueP.webp') }}" alt="">
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-center">
                    <h5 class="">FindIt simplifies car purchasing and PC building with expert guidance and personalized recommendations. Our user-friendly platform helps you make informed, cost-efficient decisions with ease, ensuring the best options for your needs. Join our community for continuous support and future-proof your choices with FindIt.</h5>
                    <img style="width:300px;height:auto;" src="{{ asset('videos/FindIt.png') }}" alt="">
                </div>
                <div class="col-1"></div>
            </div>
        </div>
      </section>

@stop
