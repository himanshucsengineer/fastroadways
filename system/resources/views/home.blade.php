<!DOCTYPE html>
<html lang="en">
    <head>
        <title >Fast Roadways</title>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
   
        <style>
        
        
        .banner{

    background-color:  rgb( 44, 44, 44 );
    color: white;
    font-size: 16px;
    padding-top:.5rem;
    padding-bottom:.5rem;
   
}
.banner i{
    color: white;
    padding: 2%;
    
   
}
   .banner   .ico{
       padding: 5px;
       border: 1px solid white;
       background-color: transparent;
       
       border-radius: 50%;
       
   }  
        
        
         @media (max-width:480px){
.banner{
    font-size: 10px;
}
.home {
    font-size: 0.6em;

}
.home i {
font-size: 30px;
}

  }
            
.mo{
                width:100%;
                height:auto;
                border:none;
               
            }
            .mo modal-body{
                width:100%;
                height:auto;
                border:none;
                padding-top:4rem;
                padding-bottom:4rem;
                padding-left:3rem;
                padding-right:3rem;
            }
            .mo .ls{
                width:100%;
                height:auto;
                padding-top:.5rem;
                padding-bottom:.5rem;
                border:1px solid #cdcdcd;
                padding-left:1rem;
                margin-bottom:1rem;
                outline:none;
            }
            .mo button{
                width:100%;
                height:auto;
                padding-top:.5rem;
                padding-bottom:.5rem;
                color:white;
                border:none;
                outline:none;
                background-color:rgb( 253, 55, 82 );
                text-transform:uppercase;
            }
            .mo h3{
                width:100%;
                height:auto;
                margin-top:1rem !important;
                margin-bottom:2rem ;
                color:rgb( 253, 55, 82 );
            }
        </style>
    </head>




<body>
    
     <div class="banner">
        <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-6 col-sm-3"><i class="fa fa-phone ico" aria-hidden="true"></i>+91 9254 0000 000</div>
            <div class="col-6 col-sm-3"><i class="fa fa-envelope ico" aria-hidden="true"></i>contact@fastroadways.com</div>
        </div>
    </div>
    </div>
      
    <header class="header-area bg-white meu ">

      <div class="navbar-area ">

          <div class="container">

              <div class="row">

                  <div class="col-lg-12">

                      <nav class="navbar navbar-expand-lg">

                          <div class="logo">
                          <a class="custom-logo-link " rel="home" href="http://fastroadways.com/"><img width="133" height="55" src="{{asset('assets/img/Fast Roadways.png')}}" alt="Tirupati insurance" class="custom-logo" ></a>
                             
                                  <a class="navbar-brand"  href="#" rel="home">

                                        

                                  </a>

                                  
                          </div>

                          

                          <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                              

                          </button>



                          <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                            <ul id="nav" class="navbar-nav ml-auto ">
                            
                              <li class=" nav-item">
                                <a title="Home" href="http://fastroadways.com/" class="nav-link">
                                 Home
                                </a>
                              </li>
                              
                              <li class=" nav-item">
                                <a title="About Us" href="#about" class="nav-link">
                                About Us
                                </a>
                              </li>
                             
                              <li class=" nav-item">
                                <a title="Services & solutions" href="#service" class="nav-link">
                                Services 
                                </a>
                              </li>
                              
                             
                              
                              
                              
                              <li   class="  nav-item">
                              
                                <a title="Contact Us" href="#contact" class="nav-link">
                                Contact Us
                                </a>
                                 
                              </li>
                              
                           
                            </ul>
                          </div>
                          
                        




                      </nav> <!-- navbar -->

                  </div>

              </div> <!-- row -->

          </div> <!-- container -->

      </div> <!-- navbar area -->

  </header>
    




<div class="book">
    <div class="container">
        <h2>Book Best Packers & Movers at Lowest Price</h2>
        <p>Guaranteed On-time and Safe Delivery</p>
        <div class="flex justify-content-center">
            <div class="card">
               <center> <img src="{{asset('assets/img/best-price.svg')}}"></center>
                <h5>Best Price</h5>
                <p>100% Price and Service gurantee</p>
            </div>
            <div class="card">
                <center><img src="{{asset('assets/img/cancel.svg')}}"></center>
                <h5>Free Cancelation</h5>
                <p>Book Now, Cancle any time later</p>
            </div>
            <div class="card">
                <center><img src="{{asset('assets/img/manager.svg')}}"></center>
                <h5>Dedicated Manager</h5>
                <p>Be tension free and let us take care</p>
            </div>    
        </div>    
    </div>
</div>

<div class="free">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              
                
                <h3>Get a Free Moving Quote</h3>
               
                <hr class="style1">
                <form method="post" action="{{ url('service') }}" id="persondetail" enctype= multipart/form-data>
                    {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6 ">
                        
                        <input list="browsers" class="sel" name="city"  placeholder="Select Within city/ outside city">

                            <datalist id="browsers">
                                <option value="Within city">
                                <option value="outside city">
                            </datalist>
                        
                    </div>
                    <div class="col-md-6 ">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-md-6 ">
                        
                        <input type="number" name="num" placeholder="Enter Your number">
                        
                    </div>
                    <div class="col-md-6 ">
                    
                        <input type="email" name="email" placeholder="Enter Your Email">
                       
                    </div>    
                </div> 
                <div class="row">
                    <div class="col-md-6 ">
                        
                        <input type="text" name="locfr" placeholder="Enter location from">
                    </div>
                    <div class="col-md-6 ">
                        
                        <input type="text" name="locto" placeholder="Enter Location to">
                    </div>    
                </div> 
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <button type="submit" name="send">Estimate Your Moing Cost</button>
                    </div>    
                </div>   
                </form>
           </div>     
        </div>    
    </div>
</div>


<div class="about" id="about">
    <div class="container">
        <h3>About <span style="color: rgb( 253, 55, 82 ); font-style: normal;">Fast Roadways</h3>
        <div class="row">
            <div class="col-md-8">
                <p>We are independent agency and our first priority will always be our customers, people and businesses which we can help. We work with various Insurance companies which offers diversity in plans and different coverage option.</p>
                <p>Our experts browse through hundreds of options before presenting the option which suites you best. We take into account different fectors before selecting the best policy for you.</p>
                <p>We are independent agency and our first priority will always be our customers, people and businesses which we can help. We work with various Insurance companies which offers diversity in plans and different coverage option.</p>
                <p>Our experts browse through hundreds of options before presenting the option which suites you best. We take into account different fectors before selecting the best policy for you.</p>
                
           </div>
           <div class="col-md-4">
               <img src="{{asset('assets/img/About fastroadways.png')}}">
          </div>  
       </div>     
    </div>    
</div>

<div class="serv" id="service">
    <div class="container">
        <h2 style="text-align: center;">Our <span style="color:  rgb( 253, 55, 82 ); font-style: normal;">Services</span></h2>
        <p>We are pledged to offer the premium reloction services for residential and corporate moves in and out hisar Region.</br> Being passionate movers in the industry, we shift your valuable goods by incorporating top quality packung material and upgrade technology. </p>
        <div class="flex justify-content-center" style="margin-top: 2rem;">
            <div class="card">
               <center> <img src="{{asset('assets/img/local-serv-icon-1.png')}}"></center>
               <h5>Household Shifting</h5>
               <p>We have developed the expedient and luminous ways to move your houshold possession or vehicles.</p>
                <center><button data-toggle="modal" data-target="#myModal">Book now</button></center>
            </div>    
            <div class="card">
                <center><img src="{{asset('assets/img/local-serv-icon-2.png')}}"></center>
                <h5>Corporate Shigting</h5>
                <p>We offer the fast and reliable shifting services to move your corporate goods safely.</p>
                <center><button data-toggle="modal" data-target="#myModal">Book now</button></center>
            </div>
            <div class="card">
                <center><img src="{{asset('assets/img/local-serv-icon-3.png')}}"></center>
                <h5>Car Carriers</h5>
                <p>Our car transportation services enable us to move your valuable vehicles conveniently and safely.</p>
                <center><button data-toggle="modal" data-target="#myModal">Book now</button></center>
            </div>
            <div class="card">
                <center><img src="{{asset('assets/img/local-serv-icon-4.png')}}"></center>
                <h5>international move</h5>
                <p>We are dedicated to offer expert overseas moving services with high competency </p>
                <center><button data-toggle="modal" data-target="#myModal">Book now</button></center>
            </div>
        </div>
    </div>
</div>
<section class="review">
      
    <div class="container ">
      <h3>See what our clients feels about our Services and staff</h3>
      <div class="row justify-content-center ">
        <div class="col-md-2 contact-width">
          <center><a target="_blank" href="#"><button>review us</button> </a></center>
        </div>  
        <div class="col-md-1">
          <p class="or">or</p>
        </div>
        <div class="col-md-2 contact-width">
         <center><a target="_blank" href="#"><button>see review</button> </a> </center>
        </div> 
      </div>
     
    </div> 
    
  </section>

<div class="contact" id="contact">
    <div class="container">
        <h3>Get in Touch <span style="color: rgb( 253, 55, 82 ); font-style: normal;">With Us</span></h3>
        <p>We'd Love to work with you. Please Fill out Below form to get in touch with us</p>
        
        <div class="row">
            <div class="col-md-6 ">
              @if (count($errors) > 0)
    <div class="alert alert-danger">
     <span type="button" class="close" data-dismiss="alert">×</span>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <span type="button" class="close" data-dismiss="alert">×</span>
           <strong>{{ $message }}</strong>
   </div>
   @endif
        <form method="post" action="{{url('/send')}}" enctype= multipart/form-data>
                    {!! csrf_field() !!}
                <input type="text" name="cname" placeholder="Enter Your Name">
                <input type="number" name="number" placeholder="Enter Your Number">
                <input type="text" name="add" placeholder="Enter Your Address">
                <select  name="reg" class="sel" style="background-color:transparent;">
                    <option value="">Select Support Regarding</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
                <textarea  rows="5" class="sel" name="text" placeholder="Your message..."></textarea>
                <button name="contact" type="submit" >Send now!</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="row conn">
                    <div class="col-md-2">
                   <img src="{{asset('assets/img/address.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h6 >Reach us on our</h6>
                        <h4>Office</h4>
                        <h5 >Ground Floor,  Rajmahal Complex, Opp. PLA Petrol Pump, Delhi Road, Hisar Haryana 125001</h5>
                          
                        
                    </div>
                </div>
                <div class="row conn">
                    <div class="col-md-2">
                    <img src="{{asset('assets/img/call.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h6 >Give us a</h6>
                        <h4>Call</h4>
                        <h5>+91 9254000000</h5>
                        <h5>+91 8198932943</h5> 
                        
                    </div>
                </div>
                <div class="row conn">
                    <div class="col-md-2">
                   <img src="{{asset('assets/img/Email.png')}}">
                    </div>
                    <div class="col-md-10">
                        <h6 >Drop on</h6>
                        <h4>Email</h4>
                       <h5>hisarfever@gmail.com</h5>
                       <h5>vikaspoonia17@gmail.com</h5>
                        
                    </div>
                </div>
            </div>    
        </div>    
    </div>
</div>
  <section class="last"> 
    <div class="container">
      <p>follow us on</p>
     
        
          <div class="text-center">
 
            
                   
                     
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                     
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                   
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                     
             
          </div>

      <p class="reserved">@2020 Fast Roadways All Rights Reserved. Developed By <span><a href="#" class="lik">Hisar Fever</a></span></p>
    </div>
  </section>  
  
<div class="modal fade mo" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <span type="button" class="close" data-dismiss="modal">&times;</span>
            <h3>Estimate Your Shifting Cost</h3>
            <form method="post" action="{{url('/serve')}}" enctype= multipart/form-data>
                 {!! csrf_field() !!}
            <input type="text" class="ls" name="name" placeholder="Enter Your Name">
            <input type="number" class="ls" name="num" placeholder="Enter Your number">
            <input type="email" class="ls" name="email" placeholder="Enter Your Email">
         <input list="browses" class="ls" name="city"  placeholder="Select Within city/ outside city">

                            <datalist id="browses">
                                <option value="Within city">
                                <option value="outside city">
                            </datalist>
        
        <input type="text" class="ls" name="locfr" placeholder="Enter location from">
        
        
        <input type="text" class="ls" name="locto" placeholder="Enter Location to">
        <button >Estimate your moving cost</button>
       </form>
        </div>
      </div>
    </div>
  </div>
  
  <div id="emailSentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
           Your quiery have been recorded. Thank you
        </div>
        
      </div>

    </div>
  </div>
  <div id="emailSentModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
           error
        </div>
        
      </div>

    </div>
  </div>
            
           <script>
            @if(session()->has('modal'))
             $("#emailSentModal").modal("toggle");
            
            @endif
        </script>
        
</body>

</html>