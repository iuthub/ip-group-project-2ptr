@extends('layouts.app')

@section('content')

            <div class="row marginMinus">

                    <div class="col-md-6">
                    @if(count($posts) > 0)
                            @foreach($posts as $post)
                        <div class="panel panel-default">
                                <div class="panel-heading" style="font-size: larger; padding-top: 7px; padding-bottom: 0px; padding-left: 5px; padding-right: 0px; background-color: #ffffff">
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

    <span class="pull-right" style="float:right;"><span style="background-color: #9acfea; color: #ffffff; padding: 10px;border-radius: 10px">{{$post->title}}</span>
 <span style="background-color: #ff0000; color: #ffffff; padding: 10px; border-radius: 10px; font-weight: bold">sale-{{$post->amount}}%</span></span>
                                </div>
                                </div>


                              </div>
                                <div class="panel-body"><p>{{$post->body}}</p>

                                </div>




                                @if($post->cover_image != "noimage.jpg")
                                <p><img id="transit" style="" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                @endif

                                @if(auth()->check())
                                <div class="row text-center">

                                <div class="col-md-4"><a href="#" class="btn ">Like</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Comment</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Share</a></div>
</div>

                                @endif


                                </div>
        @endforeach

    </div>

   @include('/posts/recomended')

    </div>

        {{$posts->links()}}
    @else
        <p>No post found!</p>
    @endif
@endsection