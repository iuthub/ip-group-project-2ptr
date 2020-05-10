<div class="row">
    <div class="row" id="jub">
        <div class="col-md-12">
            <div class="col-md-9 text-left" id="sale">
           
            </div>
            <div class="col-md-3" id="sl">
                <ul class="nav navbar-nav navbar-right">

                     @guest
                          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                           <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                               @else

                        <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                               </a>


                                        <ul class="dropdown-menu" role="menu">
                                        <li> <a href="/dashboard">Your profile</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                            Logout
                                                    </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                        </form>
                                    </li></ul>

    </li>
    @endguest
                </ul>
            </div>
        </div>
</div>
</div>


 <nav class="navbar navbar-inverse" style="margin-right: -15px;">
            <div class="container">



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="nav navbar-nav">
                            <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="/posts">HOME</a></li>
                            <li><a href="#">FAVOURITES</a></li>
                            <li class="{{ Request::is('clothing') ? 'active' : '' }}"><a href="/clothing">CLOTHING</a></li>
                            <li class="{{ Request::is('food') ? 'active' : '' }}"><a href="/food">FOOD</a></li>
                            <li class="{{ Request::is('technology') ? 'active' : '' }}"><a href="/technology">TECHNOLOGY</a></li>
                            <li class="{{ Request::is('others') ? 'active' : '' }}"><a href="/others">OTHERS</a></li>




                    </ul>

                      <form id="search" class="navbar-form navbar-right" action="{{url('search')}}" method="GET">
                                            <div class="input-group">
                                                <input id="searchData" type="text" class="form-control" placeholder="Search" name="searchData">
                                                <div class="input-group-btn">
                                                    <button class=" btn btn-default" type="submit">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                      <script>
                        window.onload=function() {
                        var frm=document.getElementById("search");
                        var data=document.getElementById("searchData");
                        frm.onsubmit=function(ev) {
                        if (data.value=="")
                        {
                        ev.preventDefault();}
                        }
                        }
                      </script>

                </div>

            </div>



        </nav>