@extends('frontend.layouts.master')
  @section('content')
  
  
   <!-- About Section -->


         <section class="about" id="about">
          <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
             <div class="column left">
             <img  src="{{ asset('backend/image/about/'.$about->image) }}" alt="">
             </div>
              <div class="column right">
                <div class="text">I'am <span style="color: crimson">{{ $about->name }}</span> <br><span style="color: black"> {{ $about->title }}</span> 
                </div>

                <div>{{ $about->description }}</div>
             
             <a target="_blank" title="CV Download" href="{{ asset('backend/file/'.$about->file) }}">Download CV</a>
              </div>
           </div>
            </div>
          </div>
        </section>

      

  
@endsection
  