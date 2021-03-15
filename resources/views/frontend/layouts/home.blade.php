@extends('frontend.layouts.master')
  @section('content')
  
  
   <!-- About Section -->


         <section class="about" id="about">
          <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
             <div class="column left">
             <img src="{{ asset('backend/image/about/'.$about->image) }}" alt="">
             </div>
              <div class="column right">
                <div class="text">I'am {{ $about->name }} and I'm a <span class="typing2"></span></div>
             <p>{{$about->title}}</p>
             <a target="_blank" title="CV Download" href="{{ route('abouts.about-details') }}">More Details & Download CV</a>
             </div>
            </div>
          </div>
        </section>

        <!-- Service Section -->

         <section class="services" id="services">
          <div class="max-width">
            <h2 class="title">My Services</h2>
            <div class="serv-content">
              <div class="card">
                <div class="box"> 
                  <i class="fas fa-paint-brush"></i>
                  <div class="text">Web Design</div>
                  <p>ou may think of an investment portfolio as a pie that's been divided into pieces of varying wedge-shaped sizes investment portfolio.</p>
                </div>
              </div>

               <div class="card">
                <div class="box"> 
                  <i class="fas fa-code"></i>
                  <div class="text">Web Development</div>
                  <p>ou may think of an investment portfolio as a pie that's been divided into pieces of varying wedge-shaped sizes investment portfolio.</p>
                </div>
              </div>

               <div class="card">
                <div class="box"> 
                  <i class="fas fa-mobile"></i>
                  <div class="text">App Development</div>
                  <p>ou may think of an investment portfolio as a pie that's been divided into pieces of varying wedge-shaped sizes investment portfolio.</p>
                </div>
              </div>
            
            </div>
          </div>
        </section>

        <!-- Skill Section -->

         <section class="skills" id="skills">
          <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
             <div class="column left">
                <div class="text">My Creative skills & experience</div>
         <p>{{$skill->title}}</p>
             <a href="#">Read More</a>
              </div>
                 <div class="column right">
                    <div class="bars">
                      <div class="info">
                        <span>HTML</span>
                        <span>90%</span>
                      </div>
                      <div class="line html"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>CSS</span>
                        <span>60%</span>
                      </div>
                      <div class="line css"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>Bootstrap</span>
                        <span>70%</span>
                      </div>
                      <div class="line boot"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>Javascript</span>
                        <span>40%</span>
                      </div>
                      <div class="line java"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>PHP</span>
                        <span>70%</span>
                      </div>
                      <div class="line php"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>MySql</span>
                        <span>90%</span>
                      </div>
                      <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                      <div class="info">
                        <span>PHP Laravel</span>
                        <span>70%</span>
                      </div>
                      <div class="line laravel"></div>
                    </div>
                </div>
            </div>
          </div>
        </section>

         <!-- team section -->
        <section class="teams" id="teams">
          <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">

               @foreach($teams as $data)
              <div class="card" >
                <div class="box">
                 <a href="{{ route('teams.team-details',$data->id) }}"><img src="{{ asset('backend/image/team/'.$data->image) }}" alt="" title="Detalis Information"></a>
                  <div class="text">{{ $data->name }}</div>
                   <p>{{ $data->title }}</p>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </section>

        <!-- contact section -->
     <section class="contacts" id="contacts">
          <div class="max-width">
            <h2 class="title">Conract me</h2>
            <div class="contacts-content">
             <div class="column left">
                <div class="text">Get In Touch</div>
                  <p>{{ $home->contact_title }}</p>
                  <div class="icons">

                    <div class="row">
                      <i class="fas fa-user"></i>
                      <div class="info">
                        <div class="head">Name</div>
                        <div class="sub-title">{{ $home->name }}</div>
                      </div>
                    </div>

                    <div class="row">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="info">
                        <div class="head">Adress</div>
                        <div class="sub-title">{{ $home->address }}</div>
                      </div>
                    </div>

                    <div class="row">
                      <i class="fas fa-envelope"></i>
                      <div class="info">
                        <div class="head">Email</div>
                        <div class="sub-title">{{ $home->email }}</div>
                      </div>
                    </div>

                    <div class="row">
                      <i class="fas fa-phone"></i>
                      <div class="info">
                        <div class="head">Mobile</div>
                        <div class="sub-title">{{  $home->mobile  }}</div>
                      </div>
                    </div>

                  </div>
              </div>

                 <div class="column right">
                   <div class="text">Messege Me</div>
                     <form action="#" method="POST">
                        <div class="fields">
                          <div class="field name">
                            <input type="text" name="name" placeholder="Name" required>
                          </div>
                          <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                          </div>
                           </div>
                            <div class="fields">
                          <div class="field mobile">
                            <input type="text" name="mobile" placeholder="Mobile" required>
                          </div>

                          <div class="field address">
                            <input type="text" name="address" placeholder="Address" required>
                          </div>
                        </div>
                          <div class="field textarea">
                            <textarea name="describe"  placeholder="Description" required></textarea>
                          </div>

                          <div class="button">
                            <button type="submit">Send Messege</button>
                          </div>
                        
                    </form>
                </div>

            </div>
          </div>
        </section>

  
@endsection
  