{{-- 
Nama : Muhammad Rifqi Lutfi
NIM  : 2440040412 
--}}
  
@extends('layout')
@section('content')

{{-- hero  --}}
<div class="hero color-white">
    <div class="hero-content d-flex flex-column align-content-center align-items-center">
        <h1 class="font-secondary fs-primary color-primary pt-5 mt-5 fw-700">Welcome</h1>
        <h1 class="fw-700">THE ROSA</h1>
        <p>The delicious taste</p>
        <a href="" class="btn btn-light">Reservation</a>
    </div>
</div>
{{-- end hero  --}}

{{-- about  --}}
<div class="about overflow-hidden" id="about">
    <div class="row px-5">
        <div class="col col-md-7">
            <div class="about-content text-center">
                <h1 class="font-secondary fs-primary color-primary pt-5 mt-5 fw-700">Discover</h1>
                <h2 class="fw-700">OUR STORY</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa animi officiis eum at explicabo! Aut cumque fugit nobis qui exercitationem suscipit dicta eaque molestias doloremque aliquam officiis nam odit et obcaecati omnis, sed magnam, pariatur praesentium assumenda laboriosam quaerat. Esse ipsum iure repellat nostrum qui nobis laudantium fugit veritatis voluptatum?</p>
            </div>
        </div>
        <div class="col d-flex align-items-center mt-5">
            <img src="{{ asset('image/about.png') }}" width="300px" class="ms-auto">
        </div>
    </div>
</div>
{{-- end about  --}}

{{-- recipe  --}}
<div class="recipe d-flex flex-column align-items-center color-white pt-5 mt-3">
    <h1 class="font-secondary fs-primary color-primary pt-5 mt-5 fw-700">Tastefull</h1>
    <h2 class="fw-700">RECIPES</h2>
</div>
{{-- end recipe  --}}

{{-- menu  --}}
<div class="menu p-5" id="menu">
    <div class="row">
        <div class="col col-md-6">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('image/menu1.png') }}" width="200px" class="m-2">
                    <img src="{{ asset('image/menu2.png') }}" width="200px" class="m-2">
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('image/menu3.png') }}" width="200px" class="m-2">
                    <img src="{{ asset('image/menu4.png') }}" width="200px" class="m-2">
                </div>    
            </div>
        </div>
        <div class="col text-center">
            <h1 class="font-secondary fs-primary color-primary fw-700">Discover</h1>
            <h2 class="fw-700">MENU</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eos, dolorum a deserunt quasi libero nam aperiam iste sit maiores incidunt quos aspernatur placeat velit facilis dolorem ab alias harum!</p>
            <p class="color-primary mt-5 underline">View The All Menu</p>
        </div>
    </div>
</div>
{{-- menu  --}}

{{-- blend  --}}
<div class="blend d-flex flex-column align-items-center color-white pt-5 mt-3">
    <h1 class="font-secondary fs-primary color-primary pt-5 mt-5 fw-700">The Perfects</h1>
    <h2 class="fw-700">BLEND</h2>
</div>
{{-- end blend  --}}

{{-- culinery  --}}
<div class="culinery p-5" id="culinery">
    <div class="row">
        <div class="col col-md-7 text-center">
            <h1 class="font-secondary fs-primary color-primary fw-700">Culinery</h1>
            <h2 class="fw-700">DELIGHT</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eos, dolorum a deserunt quasi libero nam aperiam iste sit maiores incidunt quos aspernatur placeat velit facilis dolorem ab alias harum!</p>
            <p class="color-primary mt-5 underline">View A Reservation</p>
        </div>
        <div class="col d-flex justify-content-center gap-3">
            <img src="{{ asset('image/culinery1.png') }}" width="150px" height="300px">
            <img src="{{ asset('image/culinery2.png') }}" width="150px" height="300px">
        </div>
    </div>
</div>
{{-- end culinery  --}}
@endsection