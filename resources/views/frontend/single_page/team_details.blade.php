@extends('frontend.layouts.master')
  @section('content')
  
  
   <!-- About Section -->


         <section class="about" id="about">
          <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
             <div class="column left">
             <img  src="{{ asset('backend/image/team/'.$team->image) }}" alt="">
             </div>
              <div class="column right">
                <div class="text">I'am <span style="color: crimson">{{ $team->name }}</span> <br><span style="color: black"> {{ $team->title }}</span> 
                </div>

                <div>{{ $team->description }}</div>
             
             <a target="_blank" title="CV Download" href="{{ asset('backend/file/'.$team->file) }}">Download CV</a>
              </div>
           </div>
            </div>
          </div>
        </section>

      

  
@endsection
  