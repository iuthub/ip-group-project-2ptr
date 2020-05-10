 <div class="col-md-3 whitebg borderCircle">
   <span style="background-color: aliceblue; font-size: 20px; padding: 5px; border-radius: 5px"> Related </span>
   <?php
        $x=0;
   ?>
    @if(count($relatedposts) > 0)

           @foreach($relatedposts as $post)
           @if($x<5)
            <?php $x++;?>
        <div class="row">
             <div class="col-md-4">
             @if($post->cover_image != "noimage.jpg")
                 <img src="/storage/cover_images/{{$post->cover_image}}" width="70px" height="70px"
                 style="padding: 5px; border-radius: 40px"
                 />

            @else
             <img src="/storage/cover_images/noimage.jpg" width="70px" height="70px"
             style="padding: 10px; border-radius: 20px"/>
            @endif
            </div>
           <div class="col-md-6" style="padding: 5px; margin-bottom: 5px"> <a href = "/posts/{{$post->id}}">
           <span style="font-size: larger">{{$post->user->name}}</span><br/>
            <span style="color: #000000">{{$post->title}}</span></a></div>
    </div>

               @endif
        @endforeach
        @endif




    </div>