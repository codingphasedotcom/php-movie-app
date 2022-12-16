@extends('layouts/main-layout')

@section('title', 'Movie')

@section('content')
<section class="relative pt-28 pb-36 bg-black overflow-hidden">
  <div class="container mx-auto px-4">
    <p
      class="mb-6 max-w-max mx-auto text-center text-transparent bg-clip-text bg-gradient-cyan2 font-heading text-xs uppercase font-semibold tracking-px">
      HERE'S YOUR RESULTS
    </p>
    <h2 class="mb-20 font-heading font-semibold text-center text-6xl sm:text-7xl text-white">Star Wars
    </h2>
    <div class="flex flex-wrap -m-3">
      <div class="w-full md:w-1/2 xl:w-1/4 p-3">
        <div class="flex flex-col justify-end h-full relative bg-gradient-cyan overflow-hidden rounded-10">
          <img class="mx-auto w-full" src="gradia-assets/images/teams/avatar-xl.png" alt="">
          <div class="absolute bottom-0 left-0 w-full p-2.5">
            <div class="p-5 w-full bg-white rounded-md">
              <h2 class="font-heading font-bold text-lg text-gray-900">Star Wars
              </h2>
              <p class="text-sm text-gray-600">Sci-fi
              </p>
            </div>
          </div>
        </div>
        <div class="content-area">
          <h2> Star Wars</h2>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection