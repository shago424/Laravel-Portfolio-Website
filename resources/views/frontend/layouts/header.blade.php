  <div class="scroll-up-btn">
          <i class="fas fa-angle-up"></i>
        </div>

{{-- navbar section --}}
 <!-- Navbar Section -->

        <nav class="navbar">
          <div class="max-width">
            <div class="logo"> <a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
              <li><a href="{{ url('/') }}" class="menu-btn">Home</a></li>
              <li><a href="#about" class="menu-btn">About</a></li>
              <li><a href="#services" class="menu-btn">Services</a></li>
              <li><a href="#skills" class="menu-btn">Skills</a></li>
              <li><a href="#teams" class="menu-btn">Teams</a></li>
              <li><a href="#contacts" class="menu-btn">Contact</a></li>
            </ul>
              <div class="menu-btn">
                <i class="fa fa-bars"></i>
              </div>
          </div>
        </nav>


        <!-- home section -->
        <section class="home" id="home">
          <div class="max-width">
            <div class="home-content">
              <div class="column left">
              <div class="text-1">Hello, my name is</div>
              <div class="text-2">{{ $home->name }}</div>
              <div class="text-3">And I'm a <span class="typing"></span></div>
               <a href="#contacts" class="menu-btn">Hire me</a>
               <div class="social-links">
                  <a target="_blank" title="Facebook" href="{{ $home->facebook }}"><i class="fab fa-facebook-square"></i></a>
                  <a target="_blank" title="Twitter" href="{{ $home->twitter }}"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" title="Youtube" href="{{ $home->youtube }}"><i class="fab fa-youtube"></i></a>
                  <a target="_blank" title="GitHub" href="{{ $home->github }}"><i class="fab fa-github"></i></a>
                  
              </div>
            </div>

               
            </div>
          </div>
        </section>

















