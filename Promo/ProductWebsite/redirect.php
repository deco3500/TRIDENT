<?php
require_once('./php/conn.php');
require_once('./php/counter.php');

updateCounter("alpha_page"); // Updates page hits
updateInfo(); // Updates hit info
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alpha</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="./index.php">SecretSparrow</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./index.php#about">About</a>
                    </li>
                    <li>
                        <a href="./index.php#services">Interface</a>
                    </li>
                    <li>
                        <a href="alpha.php">Alpha</a>
                    </li>
                    <li>
                        <a href="./index.php#contact">Contact</a>
                    </li>
                    <li>
                        <a href="./stat.php">Statistics</a>
                    </li>                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
            <div class="AlphaTitle">
                <h1>Secret Sparrow</h1>
                <h2>Spread the Word</h2>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"> Sign Up for an Alpha Code Today!</h2>
                    <p class="lead">Please enter your email address in the box on the right to sign up for an alpha code of Secret Sparrow, available for public testing on IOS and Android in the coming months.</p>
                                <form action="thankyou.php" method="post">
                   
                            Name:<br>
                            <input type="text" name="u_name" required><br>
 
                            Email:<br>
                            <input type="email" name="u_email" required><br>
 
                            Phone No:<br>
                            <input type="text" name="subj" required><br>
 
                            Comment:<br>
                            <input type="text" class="textbox" size="20%" height="50" name="message" required><br>
							<br>
                         <tr>
                         <td><label for="rate">Rate Our Product</label></td>
                         <td>
		                 <select name="rate">
                         <option value"Choose">Choose</option>
                         <option value="Average">Average</option>
                         <option value="Good">Good</option>
                         <option value="Excellent">Excellent</option>
                         </select>          </td>
                         <td>&nbsp;</td>
                         </tr>
                         
						 <br>
						 <br>
                                <input type="image" name="submit" src="img/submit.png" width="140" height="30" onmouseover="this.src='img/submit.png'">
                                
                            
                </form>
				
			
				</div>
                
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="mySlides" src="../img/Sign-In.png" alt="Iphone Secret Sparrow Sign-in">
                        
                        <img class="mySlides" src="../img/Stats.png" alt="Iphone Secret Sparrow Sign-in">
                     
					 </div>
                

            </div>

        </div>
        <!-- /.container -->

    </div>
    
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Interface</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>

</html>