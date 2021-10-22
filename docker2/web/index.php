<?php
	$url = "api/analytics.php";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$stats = unserialize(curl_exec($ch));
	curl_close($ch);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>URL Shortner</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">

  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> URL Shortner</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#top" class="nav-link"><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#analytics" class="nav-link"><span data-hover="Analytics">Analytics</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color Mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="top">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1 class="animated animated-text">
                            <span class="mr-2">Shorten Your URLs </span>
                                <div class="animated-info">
                                    <span class="animated-item">Easily</span>
                                    <span class="animated-item">Quickly</span>
                                    <span class="animated-item">Securely</span>
                                </div>
                        </h1>

                        <p>Paste your long URL below and get a shortend URL.</p>
                        
                        <div class="custom-btn-group mt-6">
                          <input type="text" id="url" class="btn mr-lg-2 custom-btn" placeholder="Paste Long URL"></input>
                          <a href="#" onclick="short();" id="shortner_btn" class="btn custom-btn custom-btn-bg custom-btn-link">Shorten</a>
                        </div>
                        <div class="mt-4">
			  <p id="short_url" onclick="copyElementText(this.id)"></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/undraw/undraw_software_engineer_lvl5.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="analytics">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12" style="margin-left: auto; margin-right: auto;">
                  <h2 class="mb-4 mobile-mt-2">Analytics</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span><?php echo $stats[0]; ?></span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Shortned Links</span><small>Total</small></h3>
                                  <p>We have shortned this much of URLs so far.</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span><?php echo $stats[1]; ?></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Google Links</span></h3>
                                <p>We have shortned this much of Google URLs.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span><?php echo $stats[2]; ?></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Stackoverflow Links</span></h3>
                                <p>We have shortned this much of Stackoverflow URLs.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span><?php echo $stats[3]; ?></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>YouTube Links</span></h3>
                                <p>We have shortned this much of YouTube URLs.</p>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; Name</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/short.js"></script>

  </body>
</html>
