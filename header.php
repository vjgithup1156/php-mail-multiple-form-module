<?php
if(isset($_REQUEST['send_submit'])){
  $from=$_REQUEST['email'];
//   $mailto="developer@cwd.co.in"; 
  $mailto="Thesoultrains@gmail.com";
  
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
  $headers .='From:'.$from;
  $subject="";
  $message="
  
  Name: $_REQUEST[name] <br>
  
  Email:$_REQUEST[email] <br>
  
  Mobile: $_REQUEST[number]<br>
  
  Subject: $_REQUEST[subject]<br>
  
  Your message :$_REQUEST[message] <br>
  
  ";
  
 $mail = mail($mailto,$subject,$message,$headers);
  
//   var_dump($mail);
  
  if($mail == true){
      ?>
      <script>
          alert('Mail sent Successfully');
          window.location.href="https://senthil.in.net/soultrain-demo";
      </script>
      <?php
  }else{
      ?>
      <script>
          alert('Failed');
      </script>
      <?php
  }
  
}
?>
  
  <!--=================== homepage model form send mail ====================-->


<!DOCTYPE html>
<html lang="en">
<head>
     <!-- CSS here -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .m-bg {
    background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #008c90);
    
}
.form-top-left img{
    border-radius: 50%;
    display: flex;
    margin: auto;
}
.form-top-left p{
    text-align: center;
}
    </style>
    
</head>
<body>
<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo-3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <!-- <li><a class="active" href="index.html">SOUL TRAIN Project</a></li>
                                            <li><a href="#">Experience <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">RTX</a></li>
                                                    <li><a href="single-blog.html">F - X Festival</a></li>
                                                    <li><a href="single-blog.html">Tribe House</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="" href="travel_destination.html">Careers</a></l/li>
                                            <li><a href="#">My Account</a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Request Invite</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li> -->
                                            <!-- <div class="sub-nav"> -->
                                                   <li><a href="https://senthil.in.net/soultrain-demo/">Home</a></li>
                                                <li><a class="active" href="index.html">Editions <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li> <a href="#">Seychelles</a></li>
                                                    <li> <a href="#">Goa</a></li>
                                                    <li> <a href="#">New Zealand</a></li>
                                                    <li> <a href="#">USA </a></li>
                                                    <li> <a href="#">Spain</a></li>
                                                </ul>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="blog.html">All Editions</a></li>
                                                        <li><a href="#sliding">SOUL TRAIN Shillong</a></li>
                                                        <li><a href="#sliding">SOUL TRAIN Goa</a></li>
                                                        <li><a href="#sliding">SOUL TRAIN Vietnam</a></li>
                                                        <li><a href="#sliding">SOUL TRAIN Berlin & Prague</a></li>
                                                        <li><a href="#sliding-one">SOUL TRAIN Croatia</a></li>
                                                        <li><a href="#sliding-one">SOUL TRAIN Ladakh</a></li>
                                                        <li><a href="#sliding-one">SOUL TRAIN Turkey</a></li>
                                                        <li><a href="#sliding-one">SOUL TRAIN Bali</a></li>
                                                    </ul> -->
                                                </li>
                                            <li><a href="#">Fees <i class="ti-angle-down"></i></a>
                                               <ul class="submenu">
                                                    <li><a href="fees.php" target="_blank">SOUL TRAIN Program Fee</a></li>
                                                    <!-- <li><a href="single-blog.html">F - X Festival</a></li>
                                                    <li><a href="single-blog.html">Tribe House</a></li> -->
                                                </ul> 
                                            </li>
                                            <li><a class="" href="">Our Project <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                        
                                                        <li><a href="destination-wedding.php">Destination Wedding</a></li>
                                                        <li><a href="birthday-party.php">Birthday Parties</a></li>
                                                       
                                                    </ul></li>
                                                    <li><a href="">Blog</a></li>
                                            <!-- <li><a class="" href="http://localhost/soul-blog/">Blog</a><li> -->
                                            <li><a href="contact.php">Contact</a>
                                                <!-- <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="#questions">FAQs</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul> -->
                                            </li>
                                            <!-- <li><a href="#">Sign in</a> </li> -->
                                            
                                        
                                           
                                            
                                            <!-- </div> -->
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <!-- <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a class="" href="travel_destination.html">Destination</a></l/li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p style="color: white;"> <i class="fa fa-phone" style="color: white;"></i> 10(256)-928 256</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div> -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- section model -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content m-bg">
      <div class="modal-header border-0">
        <h5 class="modal-title text-center text-white" id="exampleModalLongTitle">Enquiry Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="row">
                               
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <input class="form-control valid" name="number" id="number" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" placeholder="Number">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <input class="form-control VALID" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                   </div>  
                               </div>
                              
                               <div class="col-12">
                                   <div class="form-group">
                                       <textarea class="form-control w-100" name="message" id="message" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                   </div>
                               </div>
                               <div class="form-group mt-3 m-auto">
                                <button type="submit" name="send_submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                           </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<!-- home page model -->


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Step 1/8</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          <div class="modal-body">
             <form id="mail_form" class="registration-form">
                <div id="model_1">
                    <input type="hidden" id="series" value="1">
                <fieldset style="display: block;">
                   <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 1 / 3</h3> -->
                         <img src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg" alt="Avatar" style="width:150px">
                         <p>Tell us who you are:</p>
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-user"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                      <div class="form-group">
                         <label class="sr-only" for="form-first-name">Name</label>
                         <input placeholder="Name..." class="form-first-name form-control input-error" id="name" name="name" type="text">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-last-name">Phone</label>
                         <input placeholder="phone..." class="form-last-name form-control input-error" id="phone" name="phone" type="phone">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-about-yourself">Email</label>
                         <input placeholder="Email..." class="form-last-name form-control input-error" id="email" name="email" type="email">
 
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-about-yourself">DOB</label>
                         <input placeholder="date..." class="form-last-name form-control input-error" id="dob" name="dob" type="date">
 
                      </div>
             
                      <!-- <button type="button" class="btn btn-next">Next</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model-2 -->

                <div id="model_2"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <!-- <div class="form-top-left">
                         <h3>Step 2 / 3</h3>
                         <p>Set up your account:</p>
                      </div> -->
                      <!-- <div class="form-top-right">
                         <i class="fa fa-key"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                   <label>  Gender:   </label>  <br>
                      <div class="form-group radioo" style="display:flex;">                       
 <input type="radio" id="radio" name="radio" value="male"/> Male    
 <br>  
 <input type="radio" id="radio" name="radio" value="female"/> Female <br/>   
 
 <input type="radio" id="radio" name="radio" value="others"/> Others <br/>   
                      </div>
 
                      <label>  Purpose:  </label>  <br>
                      <div class="form-group checkk" style="display:flex;">
                          <input type="checkbox" id="events[]" name="events[]" value="Events"> Events <br>
   <!-- <label for="vehicle1"> I have a bike</label><br> -->
   <input type="checkbox" id="events[]" name="events[]" value="Fitness"> Fitness <br>
   <!-- <label for="vehicle2"> I have a car</label><br> -->
   <input type="checkbox" id="events[]" name="events[]" value="Weddings"> Weddings <br>
   <!-- <label for="vehicle3"> I have a boat</label><br><br> -->
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-repeat-password">Hobbies</label>
                         <input placeholder="Hobbies..." class="form-repeat-password form-control" id="hobbies" name="hobbies" type="text">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-about-yourself">Pick Your City</label>
                         <input name="city" placeholder="Pick yoour city..." class="form-last-name form-control input-error" id="city" type="text">
                         <br>
                         <label for="salary">Annual Revenue</label><br>
   <select id="salary" name="salary">
     <option value="">Choose an option</option>
     <option value="0 to 1L">0 to 1L</option>
     <option value="1 to 2L">1 to 2L</option>
     <option value="2 to 3L">2 to 3L</option>
     <option value="3 to 4L">3 to 4L</option>
     <option value="4 to 5L">4 to 5L</option>
   </select>
 
                      </div>
                      <!-- <button type="button" class="btn btn-previous">Previous</button> -->
                      <!-- <button type="button" class="btn btn-next">Next</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model three -->

                <div id="model_3"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 3 / 3</h3> -->
                         <h4>Social media profiles:</h4>
                         <!-- <p></p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                      <div class="form-group">
                         <label class="sr-only" for="form-facebook">Facebook</label>
                         <input placeholder="Facebook..." class="form-facebook form-control" id="facebook" name="facebook" type="text">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-twitter">Twitter</label>
                         <input  placeholder="Twitter..." class="form-twitter form-control" id="twitter" name="twitter" type="text">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-google-plus">Instagram</label>
                         <input placeholder="Instagram..." class="form-Instagram form-control" id="insta" name="insta" type="text">
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="form-google-plus">Company Website / Portfolio</label>
                         <input placeholder="www.website.com..." class="form-website form-control" id="web" name="web" type="text">
                      </div>
                      <!-- <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn">Sign me up!</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model four -->

                <div id="model_4"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 3 / 3</h3> -->
                         <h4>Social media profiles:</h4>
                         <!-- <p></p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                   <h4>Your primary 
 field of work is..</h4>
            <ul>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Design">Design</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Music">Music</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Film">Film</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Photography">Photography</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Art & Culture">Art & Culture</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Technology">Technology</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Inverstment">Inverstment</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Academics">Academics</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Marketing">Marketing</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Science & Event">Science & Event</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Others">Others</li>
 
 <li><input type="checkbox" id="design[]" name="design[]"
 
 value="Anchovies">Fashion   </li>
 
     
 
 </ul>
                      <!-- <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn">Sign me up!</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model five -->

                <div id="model_5"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 3 / 3</h3> -->
                         <h4>Social media profiles:</h4>
                         <!-- <p></p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                   <h4>Pick your top 2 reasons to attend Soul Train</h4>
            <ul>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="I want to learn from a diverse set of creators">I want to learn from a diverse set of creators</li>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="Grow my Network & Become part of a Creative Tribe">Grow my Network & Become part of a Creative Tribe</li>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="Personal & Professional Creative Growth">Personal & Professional Creative Growth
 </li>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="I want a Brain Vacation with other talented individuals">I want a Brain Vacation with other talented individuals
 </li>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="I want to explore a new Destination">I want to explore a new Destination
 </li>
 
 <li><input type="checkbox" id="mod[]" name="mod[]"
 
 value="Find Inspiration / Break a Creative Block">Find Inspiration / Break a Creative Block</li>
 
 
     
 
 </ul>
                      <!-- <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn">Sign me up!</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model six -->

                <div id="model_6"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 3 / 3</h3> -->
                         <h4>Social media profiles:</h4>
                         <!-- <p></p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                   <h4>Pick top 2 areas you want growth in?</h4>
            <ul>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Turning my Ideas into an Action Plan">Turning my Ideas into an Action Plan</li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Grow personally as a leader of a team / brand">Grow personally as a leader of a team / brand</li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Collaborators to change the world / create impact">Collaborators to change the world / create impact
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Creative Block / Find Inspiration">Creative Block / Find Inspiration
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Mental Wellness">Mental Wellness
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Refining my Business Ideas & Plans">Refining my Business Ideas & Plans
 </li>
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Branding/Social Strategy for my Business">Branding/Social Strategy for my Business
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Business Development / Expansion">Business Development / Expansion
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Scaling my Brand / Project">Scaling my Brand / Project
 </li>
 
 <li><input type="checkbox" id="data[]" name="data[]"
 
 value="Hiring Great Talent / Freelancers">Hiring Great Talent / Freelancers
 
 </li>
 
 
     
 
 </ul>
                      <!-- <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn">Sign me up!</button> -->
                   </div>
                </fieldset>
                </div>

                <!-- model seven -->

                <div id="model_7"  style="display:none;">
                <fieldset style="display: block;">
                <div class="form-top">
                      <div class="form-top-left">
                         <!-- <h3>Step 3 / 3</h3> -->
                         <h4>Social media profiles:</h4>
                         <!-- <p></p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   <div class="form-bottom">
                   <div class="form-top">
                      <div class="form-top-left">
                         <h4>How would you define yourself in 160 characters?</h4>
                         <!-- <p>How would you define yourself in 160 characters?</p> -->
                      </div>
                      <!-- <div class="form-top-right">
                         <i class="fa fa-twitter"></i>
                      </div> -->
                   </div>
                   </div>
                   <div class="form-bottom">
                      <div class="form-group">
                         <!-- <label class="sr-only" for="form-facebook">How would you define yourself in 160 characters?</label> -->
                         <textarea  id="review" name="review" rows="4" cols="50">Type here...</textarea>
                      </div>
                      <!-- <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn">Sign me up!</button> -->
                   </div>
                </fieldset>
                </div>



                
             </form>
          </div>
          <div class="modal-footer">
             <button type="button" id="move_pre" class="btn btn-default btn-prev">Prev</button>
             <button type="button" id="move_next" class="btn btn-default btn-next">Next</button>
             <button type="button" id="send_func" >Send</button>
             <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
             
          </div>
       </div>
    </div>
 </div>



<!-- Button trigger modal -->


<!-- Modal -->

<!-- Button trigger modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>


<script>

$('#move_next').on('click', function(){
    if($('#model_1').css('display') == 'block'){
        var int = 1;
        var int1 = 2;
    }if($('#model_2').css('display') == 'block'){
        var int = 2;
        var int1 = 3;
    }if($('#model_3').css('display') == 'block'){
        var int = 3;
        var int1 = 4;
    }if($('#model_4').css('display') == 'block'){
        var int = 4;
        var int1 = 5;
    }if($('#model_5').css('display') == 'block'){
        var int = 5;
        var int1 = 6;
    }if($('#model_6').css('display') == 'block'){
        var int = 6;
        var int1 = 7;
    }

    $('#model_'+int).css('display','none')
    $('#model_'+int1).css('display','block')
    
})

$('#move_pre').on('click', function(){

    if($('#model_7').css('display') == 'block'){
        var int = 7;
        var int1 = 6;
    }if($('#model_6').css('display') == 'block'){
        var int = 6;
        var int1 = 5;
    }if($('#model_5').css('display') == 'block'){
        var int = 5;
        var int1 = 4;
    }if($('#model_4').css('display') == 'block'){
        var int = 4;
        var int1 = 3;
    }if($('#model_3').css('display') == 'block'){
        var int = 3;
        var int1 = 2;
    }if($('#model_2').css('display') == 'block'){
        var int = 2;
        var int1 = 1;
    }

    $('#model_'+int).css('display','none')
    $('#model_'+int1).css('display','block')
    
})

$('#send_func').on('click', function(){

    $.ajax({
  type: "post",
  url: "include/ajax_page123.php?method=mailto",
  data: $('#mail_form').serializeArray(),

  success: function(result){
    //  console.log(result)
    $('#myModal1').modal('hide')
    var obj = JSON.parse(result);
    // console.log(obj.status)
    if(obj.status == 200 || obj.status == 400){
    
        swal({
           title: 'Success',
           text: obj.messsage,
           type: obj.status1,
           confirmButtonColor: '#DD6B55',
           confirmButtonText: 'OK!',
         }).then(() => {
           if (obj.status == 200) {
             location.reload()
           } else {
            location.reload()
           }
         });

    }

  }
});

})

</script>
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
<style>
    input[type="checkbox"]{
        width: 44px;
    }

    input#gender {
    width: 26px;
}
</style>
</body>
</html>