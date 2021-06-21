<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">


        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');


*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Poppins', sans-serif;
}
.banner{
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("banner-img.jpg") center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
}
.card-container{
    display: grid;
    grid-template-columns: 350px 500px;
}
.card-img{
    background: url("iium1.jpg") center/cover no-repeat;
}
.banner h2{
    padding-bottom: 40px;
    margin-bottom: 20px;
}
.card-content{
    background: #fff;
    height: 330px;
}
.card-content h3{
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
@media(max-width: 992px){
    .card-container{
        grid-template-columns: 100%;
        width: 100vw;
    }
    .card-img{
        height: 330px;
    }
}
        
        
        </style>
    </head>
    <body>
        
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
   
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form>
                        <div class = "form-row">
                            <input type="date" name="dateapp"> 
                            <select name = "hours">
                                <option value = "hour-select">Type of Appointment</option>
                                <option value = "10">Medical Checkup</option>
                                <option value = "10">Dental</option>
                                <option value = "10">Mental Health</option>
                                <option value = "10">Radiology</option>
                                <option value = "10">Administration</option>
                              
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name">
                           
                        </div>

                        <div class = "form-row">
                            
                            <input type = "submit" value = "BOOK TABLE">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>