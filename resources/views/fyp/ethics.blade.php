
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">  
    <title>Document</title>
    <style>
        .img-avatar1{
          margin-bottom:30px;
        }
    </style>
</head>
<body>
@foreach($infos as $k)

<section class="opentime" >
<div class="ope-card">
  <div class="img-avatar1">
  <img src="hwic.png" alt="">
  </div>
  <div class="ope-card-text">
   
    </div>
    <div class="title-total">   
      
      <h3>{{$k[2]->title}}</h3>
       
  <div class="desc"><span><h4>{{$k[0]->description}}</h4>{{$k[0]->info_desc}}
  <br><br><h4>{{$k[1]->description}}</h4>{{$k[1]->info_desc}}
  <br><br><h4>{{$k[2]->description}}</h4>{{$k[2]->info_desc}}
  <br><br></span>

 <br>
</div>


</section>
@endforeach



</section>
</body>

</html>