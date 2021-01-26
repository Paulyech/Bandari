<header class="bg-blue-400 lg:px-16 lg:py-0 py-2 flex flex-wrap items-center ">
    <div class="flex flex-1 justify-start items-center ">
        
            <img src="../images/logo.jpg" alt="logo" class="w-12 h-12 rounded-full object-cover">
        
        <a class="whitespace-nowrap text-3xl font-bold text-white mx-4" href="{{ url('/') }}">
          {{ config('app.name', 'Bandari Fc') }}
      </a>
    </div>

        <label for="menu-toggle" class="lg:hidden cursor-pointer block bg-gray-200 mr-4 rounded-lg border-white border-2 ">
            <svg class="w-12 h-10 fill-current  " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
        </label>
        <input type="checkbox" id="menu-toggle" class="hidden">
        <div id="menu" class="hidden lg:flex lg:items-center lg:w-auto w-full">
            <nav>
                <ul class="lg:flex justify-between items-center pt-4 lg:pt-0 text-base text-gray-200">
                    <li class="nav-item  ml-5 ">
                        <a class="nav-link" href="/">Home </a>
                      </li>
                      <li class="nav-link ml-5 md  lg:mb-0 " id="navmar">
                        <div class="" id="maindropitem" >
                          <a >
                            News
                          </a>
                          
                            <svg class=" inline-flex h-4 w-4 pt- px-0 mx-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          
                        </div>
                        <div class="dropdown-menu hidden " id="dropdown">
                          <div>
                            <a class="dropdown-link" href="/latest_news">latest</a>

                          </div>
                          <div>
                            <a class="dropdown-link" href="/team_news">team news</a>

                          </div>
                          <div>
                            <a class="dropdown-link" href="/newsletter">newsletter</a>

                          </div>
                        </div>
                      </li>
                      <li class="nav-link ml-5 lg:mb-0" id="navmar1">
                        <div class="" id="maindropitem1" >
                          <a >
                            Team
                          </a>
                          
                            <svg class=" inline-flex h-4 w-4 pt- px-0 mx-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          
                        </div>
                        <div class="dropdown-menu  hidden" id="dropdown1">
                          <div>
                            <a class="dropdown-link" href="/senior">senior team</a>
                          </div>
                          <div>
                            <a  class="dropdown-link" href="/youth">youth team</a>
                          </div>
                          
                        </div>
                      </li>
                      <li class="nav-link ml-5 lg:mb-0" id="navmar2">
                        <div class="" id="maindropitem2" >
                          <a >
                            Club
                          </a>
                          
                            <svg class=" inline-flex h-4 w-4 pt- px-0 mx-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          
                        </div>
                        <div class="dropdown-menu hidden " id="dropdown2">
                          <div>
                            <a class="dropdown-link" href="/history">history</a>
                          </div>
                          <div>
                            <a class="dropdown-link" href="/board">board</a>
                          </div>
                          <div>
                            <a class="dropdown-link" href="/staff">staff</a>
                          </div>
                        </div>
                      </li>
                      <li class=" nav-link ml-5 lg:mb-0" id="navmar3">
                        <div class="" id="maindropitem3" >
                          <a >
                            Media
                          </a>
                          
                            <svg class=" inline-flex h-4 w-4 pt- px-0 mx-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          
                        </div>
                        
                        <div class="dropdown-menu  hidden " id="dropdown3" >
                          <div class="w-full">
                            <a class="dropdown-link" href="/gallery">gallery</a>
                          </div>
                          <div>
                            <a class="dropdown-link" href="/fixtures">Match center</a>
                          </div>
                          <div>
                            <a class="dropdown-link" href="/videos">videos</a>
                          </div>
                        </div>
                      </li>
                    
                </ul> 
            </nav>
        </div>
    
</header>

