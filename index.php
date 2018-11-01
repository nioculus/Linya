<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      

    <title>Linya</title>
    <link rel="icon" href="img/Screenshots/Logo.png">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
      
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Custom fonts for this template -->
    <link href="all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

  </head>

  <body id="page-top" onload="disableSubmit()">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size: 50px;">Linya</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 25px">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home" style="font-size: 30px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" style="font-size: 30px;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Gamecontents" style="font-size: 30px;">Game Contents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#dev" style="font-size: 30px;">Developers</a>
            </li>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#report" style="font-size: 30px;">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacts" style="font-size: 30px;">Contacts</a>
            </li>
              
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" id="home">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Linya</h1>
          <h2 class="text-white mx-auto mt-2 mb-5" style="font-size: 30px;">A Mobile-Based E-Learning Drawing Application with Augmented Reality for kids.</h2>
            <form>
          <a href="Linya.apk" download><button class="btn btn-primary js-scroll-trigger" style="font-size: 30px;">Download</button></a>
            <br>
            <div style="color: white; font-size: 1.3rem;">
                <input type="checkbox" id="myCheck" name="test" required> I Agree to <a href="#!" id="btn-terms" class="a1 btn-terms f-text-center" style="font-size: 1.3rem;">Terms &amp; Conditions</a>
                
            </div>
                </form>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="text-white mb-4" style="font-family: Pencil Sharp; font-size:50px">Introduction</h1>
              <div class="line-shape"></div>
            <p class="text-white" style="font-size: 25px; padding-top: 1rem;">This thesis project entitled “The Implementation Of “Linya”: A Mobile-Based E-Learning Drawing Application With Augmented Reality For Kids” is an e-learning game with an augmented reality that help kids to enhance their knowledge and skills in tracing and drawing. This project aims to develop an educational application that will include basic learning to meet the needs of the kids in educational purpose that can help them to improve their thinking skills outside of school.</p>
          </div>
        </div>  
      </div>
    </section>

    <!-- Game Contents Section -->
    <section id="Gamecontents" class="gamecontent-section">
      <div class="container">
          <h1 class="text-black mb-4 text-center" style="font-family: Pencil Sharp; font-size:50px; padding-top: 2rem;">Game Contents</h1>
          <div class="line-shape"></div>
          <div class="w3-content w3-section w3-display-container">
              
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/3.png" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/8.jpg" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/7.png" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/9.png" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/1.jpg" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/10.png" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/2.jpg" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/5.png" style="width:100%">
    <img class="mySlides align-items-center" style="padding-left: 31%" src="img/Screenshots/6.png" style="width:100%">
    
              <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" >&#10095;</button>
</div>
                                                                              
      </div>
        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
    </section>

      <!---Developers Section--->
          <section id="dev" class="dev-section form-inline">
      <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="text-white mb-4 text-center">
                        <h1 style="font-family: Pencil Sharp; font-size: 50px;">Our Team</h1>
                        <div class="line-shape"></div>
                    </div>
                </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
               <img class="rounded-circle mx-auto" src="img/Team/2.jpg" width="200" height="200">
                  <div style="padding-top: 10%; font-size: 30px">Jerome Arvin Estrella</div>
                  <div class="line-shape"></div>
                  <div style="font-size: 30px;">Programmer</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                  <img class="rounded-circle mx-auto" src="img/Team/1.jpg" width="200" height="200">
                  <div style="padding-top: 10%; font-size: 30px">Antonio Millar Jr.</div>
                  <div class="line-shape"></div>
                  <div style="font-size: 30px;">Designer</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                   <img class="rounded-circle mx-auto" src="img/Team/Her.jpg" width="200" height="200">
                  <div style="padding-top: 10%; font-size: 30px">Mary Joy Herrera</div>
                  <div class="line-shape"></div>
                  <div style="font-size: 30px;">Documentary</div>
              </div>
            </div>
          </div>
            
          <div class="col-md-4 mb-3 mb-md-0" style="margin-left:17%; margin-top: 3%">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                  <img class="rounded-circle mx-auto" src="img/Team/3.jpg" width="200" height="200">
                  <div style="padding-top: 10%; font-size: 30px">John Michael Pasia</div>
                  <div class="line-shape"></div>
                  <div style="font-size: 30px;">Documentary</div>
              </div>
            </div>
          </div>
            <div class="col-md-4 mb-3 mb-md-0" style="margin-top: 3%">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                  <img class="rounded-circle mx-auto" src="img/Team/4.jpg"  width="200" height="200">
                  <div style="padding-top: 10%; font-size: 30px">Raian Cadag</div>
                  <div class="line-shape"></div>
                  <div style="font-size: 30px;">Documentary</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <!-- Report Section -->
    <section id="report" class="report-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
              <h1 class="text-white" style="font-family: Pencil Sharp; font-size:50px">Report Game Issue!</h1>
            <i class="far fa-paper-plane fa-2x mb-2 text-white" style="font-size: 2rem;"></i>
            <h2 class="text-white mb-5" style="font-family: Pencil Sharp">Report/message us if you encounter problems in-game, we will take immediate action depending on the problem.!</h2>
              <center>
            <form>
              <input style="width: 70%; margin-bottom: 1.5%; font-size:25px; " type="email" class="form-control" id="inputEmail" placeholder="Enter email address..." required="">
               <br>
              <textarea style="width: 70%; margin-bottom: 1.5%; font-size: 25px;" name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required=""></textarea>
                    <br>
              <button type="submit" class="btn btn-primary mx-auto" style="font-size: 20px">Send Report</button>
            </form>
              </center>
          </div>
        </div>
      </div>
    </section>
      
    <!-- Contact Section -->
    <section id="contacts" class="contact-section bg-black">
      <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="text-white mb-4 text-center">
                        <h1 style="font-family: Pencil Sharp; font-size: 50px;">Contacts</h1>
                        <div class="line-shape"></div>
                    </div>
                </div>
          <div class="col-md-4 mb-3 mb-md-0" style="margin-left:17%;">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                  <i class="fas fa-envelope text-primary mb-2" style="font-size: 30px"></i>
                  <div style="padding-top: 2%; font-size: 30px">Email</div>
                  <div class="line-shape"></div>
                  <div style="padding-top: 10%; font-size: 1.5rem;">info.linya@gmail.com</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                  <i class="fas fa-mobile-alt text-primary mb-2" style="font-size: 30px"></i>
                  <div style="padding-top: 2%; font-size: 30px">Phone</div>
                  <div class="line-shape"></div>
                  <div style="padding-top: 10%; font-size: 1.5rem;">09977558162</div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small mx-auto text-center text-white">
        <div class="container">
         <div class="row" style="padding-left: 33%">
                <a href="#!" id="btn-terms" class="btn-terms f-text-center" style="font-size: 1.8rem;">Terms &amp; Conditions</a>
                <p style="font-size: 2rem;">&nbsp|&nbsp</p>
                <a href="#!" id="btn-policy" class="btn-policy f-text-center" style="font-size: 1.8rem;">Policies &amp; Guidance</a>
            </div>
        </div>
        
        
      <div class="container" style="font-size: 20px;">
        Copyright &copy; 2018 Linya
      </div>
    </footer>
      <div id="terms" class="overlay-container">
			<h3 id="terms-btn-close" class="overlay-btn-close btn-policy">&times;</h3>
			<div class="overlay-content o-px">
				<div class="container">
					<div class="row">
						<h1 class="overlay-header header-primary-text mx-auto text-center">Terms &amp; Conditions</h1>
                        <div class="line-shape1"></div>
						<p class="lead text-left" style="padding-top: 2rem;">
                            •	General Condition – nobody can transmit any worms or viruses or any code that can destruct and harm the system. A breach or violation of any of the Terms will result in an immediate termination of your use in our system. We reserve the right to refuse service to anyone for any reason at any time. 
						</p>
						<p class="lead text-left">
                            •	Education and Decisions – by using our system, you agree that LINYA is not to be held liable for any decisions you make based on any of our services or guidance and any consequences, as a result, are your own. Under no circumstances can you hold LINYA liable for any actions you take nor can you hold us liable for any loss or costs incurred by you as a result of any guidance, advice, coaching, materials or techniques used or provided by the system.
                        </p>
                        <p class="lead text-left">
                            •	Contact Information – for any concern and problem, you may contact us at info.linya@gmail.com.
                        </p>	
					</div>
				</div>
			</div>
		</div>
      
      <div id="policy" class="overlay-container">
			<h3 id="policy-btn-close" class="overlay-btn-close btn-policy">&times;</h3>
			<div class="overlay-content o-px">
				<div class="container">
					<div class="row">
						<h1 class="overlay-header header-primary-text mx-auto text-center">Policies &amp; Guidelines</h1>
                        <div class="line-shape1"></div>
						<p class="lead text-left" style="padding-top: 2rem;">
                            •	Android phones must be at least 4.4 (KitKat) OS version.
						</p>
						<p class="lead text-left">
                            •	User below 7 years old must have an assistance of a parent or guardian when using the system.
                        </p>
                        <p class="lead text-left">
                           •	Should not spend three (3) or more hours in playing LINYA.
                        </p>	
                        <p class="lead text-left">
                           •	Application can be downloaded and updated in our website.
                        </p>	
					</div>
				</div>
			</div>
		</div>
    <!-- Bootstrap core JavaScript -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="linya.js"></script>

  </body>

</html>
