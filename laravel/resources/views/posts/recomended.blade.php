 <div class="col-md-3 whitebg borderCircle">
   <span style="background-color: aliceblue; font-size: 20px; padding: 5px; border-radius: 5px"> Top sales </span>
   <?php
        $x=0;
   ?>
    @if(count($topposts) > 0)

           @foreach($topposts as $toppost)
           @if( $x<5)
            <?php $x++;?>
        <div class="row">
             <div class="col-md-4">
             @if($toppost->cover_image != "noimage.jpg")
                 <img src="/storage/cover_images/{{$toppost->cover_image}}" width="70px" height="70px"
                 style="padding: 5px; border-radius: 40px"
                 />

            @else
             <img src="/storage/cover_images/noimage.jpg" width="70px" height="70px"
             style="padding: 10px; border-radius: 20px"/>
            @endif
            </div>
           <div class="col-md-6" style="padding: 5px; margin-bottom: 5px"> <a href = "/posts/{{$post->id}}">
           <span style="font-size: larger">{{$toppost->user->name}}</span><br/>
            <span style="color: #000000">{{$toppost->title}}</span></a></div>
    </div>

               @endif
        @endforeach
        @endif




    </div>