        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

            <link rel="stylesheet" href="bootstrap-4-utilities.css">
        



        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <style>
            .grey2{
                color:gray;


            }
    .footer-logo    {





    width: 215px;
    margin: auto;

    }
        .textpar{width: 80%;
        margin: auto;
        text-align: center;
        font-size: 16.3px;
        font-weight: 900;
        text-align: justify;}
        h1{
            font-weight: 900;
        }
            h2 {
            font-size: 2rem;
            color: grey;
        }
        @font-face {
            font-family: 'SF Pro';
            src: url('SFPro-Regular.woff2') format('woff2'),
                url('SFPro-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        .body {  
            
            font-family: 'SF Pro';
        
        }
        a{
            font-family: 'SF Pro';
    
            color: #B5B7D0!important;
            font-weight:600;
        }
    
        .here{
        padding-left: 30px;
        }

        h1 {
        font-size: 15.5vw!important;
    } .imagewid{width: 70%;}
    .wave:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 2306px;
        background: url(png/bg.png) no-repeat;
    }
        @media (min-width: 576px) {
            .wave:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 1096px;
        background: url(png/bg.png) no-repeat;
    }
            .textpar{width: 80%!important;
        margin: auto;
        text-align: center;
        font-size: 18px;
        font-weight: 900;
    }
        
        .imagewid{width: 50%;}
            
            h1{font-size: 60px!important}
            .here{
        padding-left:25%;padding-right:20%; 

        } 



        }
        @media (min-width: 576px) and (max-width: 768px)  {
            
        .midmobil{padding-left: 22%;
            width: 100%;}}


        @media (min-width: 768px) {    .wave:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 1096px;
        background: url(png/bg.png) no-repeat;
    }
    h1{font-size: 60px!important} 
            .padee{    padding: 150px;
            padding-left: 20px;
            padding-right: 10px;padding-top:10px}
            

            .here{
            padding:100px;padding-left:0;padding-right:0;padding-bottom:200px;
        } 
        
        
        .imagewid{width: 50%;}}


        @media (min-width: 992px) {     .imagewid{width: 110%;}
            .head2{  font-size: 2.1em;}
            .wave:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 1076px;
        background: url(png/bg.png) no-repeat;
    }
    h1{font-size: 60px!important} }


        @media (min-width: 1200px) { 

            .footer-logo    {





    width: 295px;
    margin: auto;

    }
            .imagewid{width: 95%;}
            .head2{  font-size: 2.6em;}
            .wave:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 996px;
        background: url(png/bg.png) no-repeat;
    }
            h1{font-size: 80px!important}
            .padee{  
            padding-right: 10px;  padding: 150px;
            padding-left: 70px!important;
            padding-right: 10px;}
        
            .customwidth{
                padding-left: 90px;
            }
        }

        @media (max-width: 576px) {

            .martop{margin-top:20px}
            .midmobil{padding-left: 27%;}
            .customwidth{min-width:400px}

        }

        @media (min-width: 576px) {


        }

        @media (max-width: 768px) {   .paradona{padding-top:0} }

        @media (min-width: 768px) {    .paradona{padding-top:100px} }

            section{
                width:100%;
                min-height:0px
            }
            .wave{

                position: relative;
            }
        .cardclass{
            z-index: 100;
                    width: 270px;
                    border-radius: 20px;
                    height: 340px;
                    box-shadow: 0 4px 21px 0 rgb(0 0 0 / 20%);
                    background: white;
                    margin:auto;
        }
        .card{
            margin-bottom:100px;
        }

        .cdd{
            margin-bottom:10px;

        }
        .menu{
  cursor: pointer;
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
.dropdown{
  position: absolute;
  flex-direction: column;
  align-items: space-between;
  box-shadow: 0 10px 10px gray;
  margin: 25px 0;
  z-index: 1;
  background-color: #F4F8F7;
  width: 160px;
  display: none;
}
.dropdown a{
  
  text-decoration: none;
  color: black;
  padding: 20px;
/*   margin: 20px; */
  font-size: 25px;
  display: block;
}
.dropdown a:hover{
    
  background-color: white;
  color: white;
}
.menu:hover .dropdown{
  display: block;
}
.dropdown2 {
    display: flex;
    justify-content: flex-end;
    padding-top: 51px;
    padding-right: 100px;
}
.show2{display:none}
@media (max-width:992px){

    a{
            font-family: 'SF Pro';
    
            color: black!important;
            font-weight:600;
        }
    .menu:hover .dropdown {
        border-radius:20px;
    display: block;
    position: absolute;
    right: 54px;
    margin-top: 100px;
}
.rightal{
    position: absolute;
    right: 60px;
    padding-top: 50px;
}

.show2{display:block}
.dropdown2{display:none}
}

header{
  display: flex;
  flex-wrap: no-wrap;
  justify-content: space-around;
  align-items: center;
  border: 2px solid gray;
}

a.item1 {
    margin-right: 40px;
    color: black; 
    text-decoration:none;
    font-size: 23px;


}a.item1.lastitem {
    margin-right: 0px;
}


            
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        </head>
        <body style="font-family: 'SF Pro';
        font-weight: normal;
        font-style: normal;">

        <!--
            <div class="secbody">
                <section class="wave"></section>
                <section></section>
            
            </div>-->
        <div class="container">

            <div class="row">
                <div class="col-6 col-lg-3" style="padding-top: 50px;
                padding-bottom: 50px;">
                    <img  src="png/header logo.png" alt="">

                </div><!--LOGO col-lg-2 col-sm-12 col-md-3-->
                <div class="col-6 col-lg-9" style="position: relative;">

<div class="show2">
<span class="menu"><img class="rightal" src="https://img.icons8.com/android/24/000000/menu.png"/>
                 <div class="dropdown">
      <a href="https://www.amiprobashi.com/ami_probashi_web/login">Agencies Portal</a>
      <a href="about.php">About</a>
      <a href="#contact-us">Contact</a>
      <a href="https://play.google.com/store/apps/details?id=com.thane.amiprobashi">Download</a>
    </div>
</div>
<div class="dropdown2">  
     <a class="item1" href="https://www.amiprobashi.com/ami_probashi_web/login">Agencies Portal</a>
      <a href="about.php" class="item1">About</a>
      <a href="#contact-us" class="item1">Contact</a>
      <a href="https://play.google.com/store/apps/details?id=com.thane.amiprobashi" class="item1 lastitem">Download</a>
    </div>



               

                </div><!--EMPTY-- col-lg-10 -->
            </div> 
            <div class="row" >



                    <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1 "></div>
                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3"><div style="border-radius: 82px;" class="shadow-lg mb-5 bg-white">
                        <div style="width:100%; margin:auto;">
                        <img width="100% " src="png/3.png" alt="">
                        </div>
                    </div></div><!--mobile image-->
                    <div class="col-xs-12 col-sm-6 col-md-7 padee" style=""><!--paragraph-->
                            <div ><!--para-->

                                <div class="row"> 
                                    
                                    <div class="pt-4 col-md-12 col-lg-3 col-xl-3">
                                    <img  src="png/logo.png" alt="">
                                    </div>
                                <div class="col-md-12 col-lg-9 col-xl-9"> 
                                    <h1 style="
                                    margin: 0;
                                ">
                                        <b>Ami Probashi</b>
                                    </h1>
                                </div>
                                </div>
                                <div class="row">

                                <div class="col-lg-12"  ><h2 class="head2 mt-4" style=""><b>By your side for your journey abroad</b></h2></div> 
                                </div>
                                
                            </div>
                            <div class="mt-5"><!--button-->
                                <div class="row"></div>
                                    <div style="padding:0" class="col-lg-4">
                                    <a href="https://play.google.com/store/apps/details?id=com.thane.amiprobashi"><img class="imagewid" src="png/getit.png" alt="">  </a>
                                    </div>
                                    <div class="col-lg-8"></div>

                                    

                            </div>



                    </div>

            </div>

        
            <div class=" martop "><!--About the app page-->

                <div class="row"> <!--heading-->
                    <h1 class="secondh" style="text-align:center">About the app</h1>
                </div>

                <div class="row"><!--para2-->

                    <p class="textpar" style=" ">   Ami Probashi is a digital platform that allows aspiring migrant workers to seek jobs abroad, find out the processes of going abroad, and assists in completing and submitting mandatory applications like the BMET database entry. It also hosts a range of other useful and informative features to guide abd assist yoi in your journey abroad. You may also book agency and medical appointments directly from the app and keep track of your application and journey steps.</p>
                </div>

                
                
            


            </div>

            
        </div> 



            
        <div class="card-deck">
            <div class="container">


                <div class="row" style="margin-top: 0px;
                padding: 9%;
                padding-top: 23px;padding-bottom:0;">
                
                    <div class="col-sm-6 col-md-6 col-lg-3 cdd">
                        <div class="card" style="   width: 100%;
                        border-radius: 20px;
                        height: 100%;
                        box-shadow: 0 4px 21px 0 rgb(0 0 0 / 20%);
                        background: white;
                        margin:auto;">
                        <div style="width:100% ; padding:35px;padding-bottom:10px ;margin:auto">  <img src="png/1p.png"  class="card-img-top" alt="..."></div>
                            <div class="card-body">
                            <h5 style=" text-align: center;" class="font-weight-bold  card-title"><b>Work abroad processes and applications</b></h5>
                            <p class=" text-center card-text">See all the rules and reggulations for getting a job abroad</p>

                            </div>
                        </div>

                    </div>  
        
                    <div class="col-sm-6 col-md-6 col-lg-3 cdd">
                        <div class="card"  style="   width: 100%;
                        border-radius: 20px;
                        height: 100%;
                        box-shadow: 0 4px 21px 0 rgb(0 0 0 / 20%);
                        background: white;
                        margin:auto;">
                    <div style="width:100% ;padding:35px;padding-bottom:10px ;margin:auto">  <img src="png/2p.png"  class="card-img-top" alt="..."></div>
                            <div class="card-body">
                            <h5 style=" text-align: center;" class="font-weight-bold card-title"><b>Verified Agency Information</b></h5>
                            <p class="text-center card-text">To avoid fraud agents, get all the government verified agency information</p>
                            
                            </div>
                        </div>

                    </div>  
                    <div class="col-sm-6 col-md-6 col-lg-3 cdd" >
                        <div class="card" style="   width: 100%;
                        border-radius: 20px;
                        height: 100%;
                        box-shadow: 0 4px 21px 0 rgb(0 0 0 / 20%);
                        background: white;
                        margin:auto;">
                            <div style="width:100% ; padding:35px;padding-bottom:10px ;margin:auto">  <img src="png/3p.png"  class="card-img-top" alt="..."></div>
                            <div class="card-body">
                            <h5 style="  text-align: center;" class="font-weight-bold card-title"><b>Passport and visa</b></h5>
                            <p class="text-center card-text">Get detailed informationto process passport and visa</p>
                        
                            </div>
                        </div>

                    </div> 
                    <div class="col-sm-6 col-md-6 col-lg-3 cdd">
                        <div class="card" style="   width:100%;
                        border-radius: 20px;
                        height: 100%;
                        box-shadow: 0 4px 21px 0 rgb(0 0 0 / 20%);
                        background: white;
                        margin:auto;">
                        <div style="width:100% ;padding:35px;padding-bottom:10px ;margin:auto">  <img src="png/4p.png"  class="card-img-top" alt="..."></div>
                            <div class="card-body">
                            <h5 style=" text-align: center;"class=" font-weight-bold card-title"><b>BMET form</b></h5>
                            <p class="text-center card-text align-middle">Fill up and submit your compulsory BMET form directly fron the app</p>
                        
                            </div>
                        </div>

                    </div> 
                    
                </div>
            
            </div>
        </div>
        <section id="contact-us" class="container wave"></section>
        <div class="container" >

            <div class="row" style="margin-top:30px;    margin-bottom: 30px;">
                <h1 class="text-center"> <b>Contact Us</b></h1>
                <p class="text-center grey2"><b>+1 234 567890</b></p>
                <p class="text-center grey2"><b>email@example.com</b></p>

            </div>
            <div style="padding:30px;background-color:black" class="row">
                <div class="col-lg-1"></div>
                <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mb-3">
                    
                    <div class="footer-logo" style=""><img src="png/footer logo.png" alt=""></div></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5"><p class="text-center" style="color:grey"><b>Copyright 2020. All rights reseverved.</b></p></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"><a href="ami_probashi_policy/policy.php"><p class="text-center" style="color:grey"><u>Privacy Policy</u></p></a></div>
                <div class="col-lg-1 col-sm-12"></div> </div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col">
            
                </div>
            </div>

        </div>

            </div>
        </div>

        
            
            
            <div class="row"><!--underdevelopmetn-->
                <div>
                    <h1>


                    </h1>
                </div>


            </div>
        </div>
        </body>
        </html>