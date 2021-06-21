<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HWIC-Healthness Centre</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
<section class="header-med">
        <nav>
            <a href="#"><img src="hwic.png" alt=""></a>
            <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/secondmain">HOME</a></li>
                    <li><a href="/announcement">ANNOUNCEMENT</a></li>
                    <li><a href="/doctor_list">APPOINTMENT</a></li>
                    <li><a href="/prescription">PRESCRIPTION</a></li>
                    <li><a href="/history">HISTORY</a></li>
                    <li><a href="/abtus">ABOUT US</a></li>
					<li><a href="/user/profile">PROFILE</a></li>
                    
                </ul>
            </div>
            <i class="fas fa-bars onclick="showMenu()"></i>
        </nav>

   <div class="text-box">
        <h1>PRESCRIPTION</h1>
        <p> 
        Your medical prescription are displayed here. Browse it to keep track of your medicine intake.
        </p>
        <a href="#" class="visit-btn">Click for more</a>
   </div> 
    
</section>




<section class="sometext">
    <div class="medtext">
        <h1>List of medicines</h1>
        <p>A prescription drug (also prescription medication or prescription medicine) is a pharmaceutical drug that legally requires a medical prescription to be dispensed. In contrast, over-the-counter drugs can be obtained without a prescription.</p>
    </div>
</section>

<div class="container9">
        <div class="card">
            
            <div class="face face1">
                <div class="content">
                    
                    <div class="icon">
                        <img src="{{$drugs[4]->med_pic}}" alt="">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="#" >Zoloft</a>
                    </h3>
                    <h4>Dosage : Once a day</h4>
                    <p>To treat depression, panic attacks, obsessive compulsive disorder, post-traumatic stress disorder</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                    <img src="{{$drugs[5]->med_pic}}" alt="">
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    
                    <h3>
                        <a href="#" >Paxil (paroxetine)</a>
                    </h3>
                    <h4>Dosage : Once a day</h4>
                    <p>To treat depression, including major depressive disorder.</p>
                </div>
            </div>
        </div>
      
    </div>

<!-- comment --->
<div class="wrapper">
<h1>Get to know more about medicines</h1>

    <div class="links">
		<ul>
			<li data-view="list-view" class="li-list active">
			
			List View</li>
			
		</ul>
	</div>


	<div class="view_main">
	
			
@foreach($drugs as $k)
<div class="view_wrap list-view" style="display: block;">
		
		<div class="view_item">
			<div class="vi_left">
				<img src="{{$k->med_pic}}" alt="{{$k->med_name}}">
			</div>
			<div class="vi_right">
				<p class="title">{{$k->med_name}}</p>
				<p class="content">{{$k->med_details}}</p>
				<a href="https://www.medicalnewstoday.com/articles/161255"><div class="btn" >View More</div></a>
			</div>
		</div>
</div>

@endforeach

	
</div>
<div class="sometext">
    <h1 style="letter-spacing: 4px;font-size:50px;">Health trivia</h1>
    <h3>Providing medical related knowledge for us to be aware of.</h3>
</div>

@foreach($infos as $k)

<section class="opentime1">
<div class="ope-card">
  <div class="img-avatar1">
  <img src="hwic.png" alt="">
  </div>
 
    <div class="title-total">   
      
      <h3>{{$k[2]->title}}</h3>
      <br>
       
  <div class="desc"><span><h4>{{$k[0]->description}}</h4><br>{{$k[0]->info_desc}}
  <br><br><h4>{{$k[1]->description}}</h4><br>{{$k[1]->info_desc}}
  <br><br><h4>{{$k[2]->description}}</h4><br>{{$k[2]->info_desc}}
  <br><br></span>
</div>
 <br>
</div>
</section>
@endforeach


</body>

</html>