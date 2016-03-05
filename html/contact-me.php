<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['message'])) {
    require_once __DIR__.'/../src/Mandrill.php'; //Not required with Composer
    $mandrill = new Mandrill('2GVzlzOwFOV6GCH76Vr2CQ');
    $message = array(
        'subject' => 'Message',
        'from_email' => $_POST['email'],
        'html' => $_POST['message'] . '<br> - Sent from web form',
        'to' => array(array('email' => 'szetomj@gmail.com', 'name' => 'Michael')),
        );
    $mandrill->messages->send($message);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="author" content="Michael Szeto: A User Interface and User Experience Designer who also dabbles in Front End Development Languages.">
    <meta name="description" content="A User Interface and User Experience Designer who also dabbles in Front End Development Languages."> 

    <title>Michael Szeto >> Contact Me</title>
    <link rel="shortcut icon" href="../img/favicon1.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/starter-template.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <script>

          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-57959770-1', 'auto');
          ga('send', 'pageview');

      </script>

  </head>

  <body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">Michael Szeto</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../html/about-me.html">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../img/michael_szeto_cv_2015.pdf" target="blank">C.V</a>
                    </li>                     
                    <li class="page-scroll">
                        <a href="../html/contact-me.php">Contact</a>
                    </li>                                          
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!--  This is for the contact forum -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p><h2>Contact Me</h2><br>I am always open to hearing about new opportunities and projects where I may be able to be of assistance.
                        You can use this form below to send me an email. Otherwise I can be found 
                        at "szetomj@gmail.com" or by cellphone on "027-449-8312".</b><br><br>

                        I look forward to hearing about how I can make a 
                        difference for your upcoming project.</p>
                </div>

            <!-- This is the normal contact form -->

            <div id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST">
                                <div class="row">
                                    <div class="form-group col-xs-12 floating-label-form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12 floating-label-form-group">
                                        <label for="email">Email Address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12 floating-label-form-group">
                                        <label for="message">Message</label>
                                        <textarea placeholder="Message" name="message" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-lg btn-success">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            </div>
        </div>
    </section>

            <!-- This is the back to top button that appears when responsive-->

            <div class="scroll-top page-scroll visible-xs visble-sm">
                <a class="btn btn-primary" href="#page-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>

            <!-- This is for the social media links -->

            <footer class="text-center">
                <div class="footer-above">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12-2 text-center">
                                <h3>Find Me Online Here:</h3>
                                <ul class="list-inline">
                                    <li><a href="https://twitter.com/xyzeto" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://dribbble.com/xyzeto" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                                    </li>
                                    <li><a href="https://github.com/Sze-warrior" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                                    </li>                                                                            
                                    <li><a href="https://nz.linkedin.com/pub/michael-szeto/65/9a1/a66" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                    </li>                           
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- THis is the Copyright section -->
                <div class="footer-below">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12-2">
                                Copyright &copy; 2016 - All content produced by Michael Szeto unless otherwise noted.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- This is where the JQuery and the Javascript is -->

            <script src="../js/jquery-1.10.2.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <script src="../js/classie.js"></script>
            <script src="../js/freelancer.js"></script>
        </body>

        </html>
