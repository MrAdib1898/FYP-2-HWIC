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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    
    .card {
    width: 400px;
    background-color: #fff;
    border-color:grey;
    border-radius: 12px
    }

    label.radio {
    cursor: pointer;
    width: 100%
    }

    label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
    }

    label.radio span {
    padding: 7px 14px;
    border: 2px solid #eee;
    display: inline-block;
    color: #039be5;
    border-radius: 10px;
    width: 100%;
    height: 48px;
    line-height: 27px
    }

    label.radio input:checked+span {
    border-color: #039BE5;
    background-color: #81D4FA;
    color: #fff;
    border-radius: 9px;
    height: 48px;
    line-height: 27px
    }

    .form-control {
    margin-top: 10px;
    height: 48px;
    border: 1px solid grey;
    border-radius: 10px
    }

    .form-control:focus {
    box-shadow: none;
    border: 2px solid #039BE5
    }

    .agree-text {
    font-size: 12px
    }

    .terms {
    font-size: 12px;
    text-decoration: none;
    color: #039BE5
    }

    .confirm-button {
    height: 50px;
    border-radius: 10px
    }
    .doctor_list{
        transition:0.5s;
        cursor:pointer;
    }
    .doctor_list:hover{
        left:10px;
    }
    .card{
        margin-left:100px;
        margin-top:100px;
    
    }
    .container{
        margin-bottom:200px;
        margin-left:30%;
    }
    .container1{
        margin-left:200px;
    }
    .both{
        display:flex;
    }
    .new-btn{
        margin-left:40%;
    }
    .banner{
    min-height: 40vh;
   
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
}
.card1-container{
    display: grid;
    grid-template-columns: 400px 500px;
    
}
.card2-container{
    display: grid;
    grid-template-columns: 200px 500px;
    margin-bottom:20px;
    
}
.card1-img{
    background: url("iium1.jpg") center/cover no-repeat;
    border-radius:30px 0px 0px 30px;
}
.card2-img{
    background: url("userpic.png") center/cover no-repeat;
    border-radius:30px 0px 0px 30px;
    margin-top:30px;
    
}
.banner h2{
    padding-bottom: 40px;
    margin-bottom: 20px;
}
.card1-content{
    background: rgba(0, 128, 0, 0.3);
    height: 400px;
    width:500px;
    border-radius:0px 30px 30px 0px;
}
.card2-content{
    background: rgba(0, 128, 0, 0.3);
    height: 200px;
    width:300px;
    border-radius:30px 30px 30px 30px;
    margin-left:20px;
    margin-top:30px;
}
.card1-content h3{
    text-align: center;
    color: #000;
    padding: 25px 0 10px 0;
    font-size: 26px;
    font-weight: 500;
}
.form-row{
    display: flex;
    width: 100%;
    margin: 0 auto;
    padding-right:20px;
    padding-left:20px;
}
.form-row1{
    
    width: 100%;
    margin: 0 auto;
    padding-right:20px;
    padding-left:50px;
    padding-top:40px;
}
.form-row1 h5{
    color:black;
    font-size:18px;
}
form select, form input{
    display: block;
    width: 100%;
    margin: 15px 12px;
    padding: 5px;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: 300;
}
form input[type = text], form input[type = number], form input::placeholder, select{
    color: #9a9a9a;
}
form input[type = submit]{
    color: #fff;
    background: #f2745f;
    padding: 12px 0;
    border-radius: 4px;
    cursor: pointer;
}
form input[type = submit]:hover{
    opacity: 0.9;
}

.con{
    margin-left:38%;
    display:flex;
    flex-direction:column;
    width:210px;
}

</style>
</head>
<body>

<section class="header-app">
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
        <h1>Appointment</h1>
        
        <p> 
           Save your time from going to the clinic and book an appointment just with some simple clicks.
        </p>
        <a href="#" class="visit-btn">Click for more</a>
   </div> 
    
</section>

<section class="sometext">
    <div class="head">
        <h1>Book an appointment</h1>
        <h5> 
            Create an appointment with a few clicks. Reducing the hassle that and save your time.   
        </h5>
    </div>
</section>
<section class = "banner">
           
            <div class = "card1-container">
                <div class = "card1-img">
   
                </div>

                <div class="card1-content">
                    <h3>Appointment</h3>
                    <form method="POST" id="searchform" action="{{url('search')}}">
                    @csrf
                        <div class = "form-row">
                            <input type="date" name="dateapp"> 
                            <select name = "searchData">
                                <option value = "hour-select">Type of Appointment</option>
                                <option value = "1">Medical Checkup</option>
                                <option value = "2">Dental</option>
                                <option value = "3">Mental Health</option>
                                <option value = "4">Radiology</option>
                                <option value = "5">Administration</option>
                              
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Additional Information (If any)">
                           
                        </div>

                        <div class = "form-row">
                            
                            <input type = "submit" value ="Search for Availability" >
                        </div>
                    </form>
                </div>
            </div>
        </section>


<h1 style="text-align:center">List of doctors</h1>


    <div class="doctor_list">
    <div class="con">

            @foreach($doctor as $i)
            <form method="post">        
           <div class = "card2-container">
               <div class = "card2-img">
               </div>
        @csrf
               <div class="card2-content">
               <div  class="form-row1" >
               <input type="hidden" name="id" value="{{$i->doc_id}}">
               <input type="hidden" name="app_time" value="{{$i->av_time}}">
               <input type="hidden" name="app_date" value="{{$i->av_date}}">
               <input type="hidden" name="reason" value="{{$i->proffesion}}">
                          <h5>Doctor: {{$i->doc_name}} </h5>
                          <h5>Field: {{$i->proffesion}} </h5>
                          <h5>Date: {{date('j F Y', strtotime($i->av_date))}} </h5>
                          <h5>Time: {{\Carbon\Carbon::createFromFormat('H:i:s',$i->av_time)->format('h:i')}} </h5>
                          <button name="Submit1" type="submit" onclick="myFunc()" style="margin-left:30px; margin-top:5px; width:100px">Book Now</button>
                       </div>
               </div>
           </div>
           </form>
            @endforeach 
            </div>

</div>

</body>

<script>
function myFunc() {
  alert("You have created an appointment. An email has been sent to your email");
}
function Openform()
{
document.getElementById("form1").style.visibility = "visible";

}
function tryfirst(){
    var valuee = document.getElementById('doct').getAttribute('id');
    valuee='two';
    alert(valuee);
}
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>