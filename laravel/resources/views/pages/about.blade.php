@extends('layouts.app_extra')

@section('content')

<div style="margin-right: 20px">
<h1>Our location</h1>
 <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
        function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(41.338525,69.334530),
            zoom:16
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrdG1VQefhtRSR9ZQ7u8ynsbgJ16vNWOw&callback=myMap"></script>
   <div class="row">
           <div class="col-md-12 ">
                   <div class="text-center bgimg-1">
                       <h1 class="h1_brand">SALE</h1>
                   </div>
           </div>
       </div>

       <div class="row">
           <div class="col-md-12">
               <div class="well well-lg" id="info">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="text-center">
                               <h1 id="shopping">Shopping</h1>
                               <p>More than 100 shops offering sale</p>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="text-center">
                               <h1 id="products">Products</h1>
                               <p>100% original products</p>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="text-center">
                               <h1 id="profit">Profit</h1>
                               <p>You can buy everything with sale</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   <div class="row" id="partners">
       <div class="col-md-12">
           <div class=" well well-lg">
               <h1 class="text-center" id="partnersH1"> Partners</h1>
           </div>
           <hr>
           <div class="col-md-3">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->


                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                       <div class="item active">
                           <img src="images/samarkand_d.jpg" alt="Samarkand darvoza" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/next.jpg" alt="next" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/Mega.jpg" alt="Mega planet" width="100%">
                       </div>
                       <div class="item">
                           <img src="images/Poy.jpg" alt="Poytaht" width="100%">
                       </div>
                   </div>
           </div>
           </div>
           <div class="col-md-3">
               <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->


                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                       <div class="item active">
                           <img src="images/korzinka.jpg" alt="korzinka" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/makro.jpg" alt="makro" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/sunday.jpg" alt="sunday" width="100%">
                       </div>

                   </div>
               </div>

           </div>
           <div class="col-md-3">
               <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->


                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                       <div class="item active">
                           <img src="images/adidas.png" alt="adidas" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/just.jpg" alt="nike" width="100%">
                       </div>

                       <div class="item">
                           <img src="images/reebok.jpg" alt="reebok" width="100%">
                       </div>
                       <div class="item">
                           <img src="images/louis.jpg" alt="louis" width="100%">
                       </div>
                   </div>
               </div>
           </div>
               <div class="col-md-3">
                   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                       <!-- Indicators -->


                       <!-- Wrapper for slides -->
                       <div class="carousel-inner">
                           <div class="item active">
                               <img src="images/huawei.png" alt="huawei" width="100%">
                           </div>

                           <div class="item">
                               <img src="images/samsung.jpg" alt="samsung" width="100%">
                           </div>

                           <div class="item">
                               <img src="images/meizu.jpg" alt="meizu" width="100%">
                           </div>
                           <div class="item">
                               <img src="images/artel.jpg" alt="artel" width="100%">
                           </div>
                       </div>
                   </div>
               </div>

               </div>
       </div>


</div>
@endsection