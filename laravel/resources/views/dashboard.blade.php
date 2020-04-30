@extends('layouts.app')

@section('content')
<style>
.dropbtn {
   /* background-color: #3498DB;*/
    color: black;

    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #fff;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>




            <div class="row marginMinus">

                    <div class="col-md-6">

                    <div class="panel panel-default">

                    <div class="panel-heading" style="font-size: larger; padding-top: 7px; padding-bottom: 0px; padding-left: 5px; padding-right: 0px; background-color: #fff">
                    <div class="row"><a href="/posts/create">
                    <p>Create sale</p></a>
                    </div>
                    </div>
                    </div>
                    @if(count($posts) > 0)
                            @foreach($posts as $post)
                        <div class="panel panel-default">
                                <div class="panel-heading" style="font-size: larger; padding-top: 7px; padding-bottom: 0px; padding-left: 5px; padding-right: 0px; background-color: #fff">
                               <div class="row">
                               <div class="col-md-1">
                                <a href = "/posts/{{$post->id}}">
                                <img style=" border-radius: 40px; width: 40px; height: 40px;" src="/storage/cover_images/iconlog.jpg">
                              </a></div>
                                <div class="col-md-4 pull-left" style="">
                                <a href = "/posts/{{$post->id}}" style="padding-bottom: 0px;">{{$post->user->name}}</a><br/>
                                <small  style=" font-size:x-small ">Posted ~ {{$post->created_at}}</small>
                                </div>

                            <div class="col-md-7 pull-right" >
                <!--<i  class="pull-right btn-dark" style="margin: 10px;margin-top: 0px;">
                                                     <span class="glyphicon glyphicon-option-horizontal"></span></i>-->
                                                     <div class="dropdown pull-right" style="margin: 10px;margin-top: 0px;">
                                                     <i  onclick="myFunction()" class=" btn-dark glyphicon glyphicon-option-horizontal dropbtn">
                                                     </i>
                                                       <div id="myDropdown" class="dropdown-content">

                                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                                      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=> 'btn'])!!}
                                                                                                                                          {{Form::hidden('_method','DELETE')}}
                                                                                                                                          {{Form::submit('Delete', ['class' => 'btn btn-default'])}}

                                                       </div>
                                                     </div>





    <span class="pull-right" style="float:right;"><span style="background-color: #9acfea; color: #ffffff; padding: 10px;border-radius: 10px">{{$post->title}}</span>
 <span style="background-color: #ff0000; color: #ffffff; padding: 10px; border-radius: 10px; font-weight: bold">sale-{{$post->amount}}%</span></span>

                                </div>
                                </div>


                              </div>
                                <div class="panel-body"><p>{{$post->body}}</p>

                                </div>




                                @if($post->cover_image != "noimage.jpg")
                                <p><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                @endif

                                @if(auth()->check())
                                <div class="row text-center">

                                <div class="col-md-4"><a href="#" class="btn ">Like</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Comment</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Share</a></div>
</div>

                                @endif

                        @if(!Auth::guest() && (Auth::user()->id == $post->user_id))
                                                                           <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                                                               {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=> 'btn'])!!}
                                                                                   {{Form::hidden('_method','DELETE')}}
                                                                                   {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                                               {!!Form::close()!!}

                                                                           @endif
                                </div>
        @endforeach

    </div>

   @include('/posts/recomended')

    </div>
<script>
                                                     /* When the user clicks on the button,
                                                     toggle between hiding and showing the dropdown content */
                                                     function myFunction() {
                                                         document.getElementById("myDropdown").classList.toggle("show");
                                                     }

                                                     // Close the dropdown if the user clicks outside of it
                                                     window.onclick = function(event) {
                                                       if (!event.target.matches('.dropbtn')) {

                                                         var dropdowns = document.getElementsByClassName("dropdown-content");
                                                         var i;
                                                         for (i = 0; i < dropdowns.length; i++) {
                                                           var openDropdown = dropdowns[i];
                                                           if (openDropdown.classList.contains('show')) {
                                                             openDropdown.classList.remove('show');
                                                           }
                                                         }
                                                       }
                                                     }
                                                     </script>

    @else
        <p>No post found!</p>
    @endif
@endsection

<!-- <i  class="pull-right btn-dark">
      <span class="glyphicon glyphicon-option-horizontal"></span></i>


      -->