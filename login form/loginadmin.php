
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>aziztemplate</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
           <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
        
	</head>
<body>
  <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
     
        <div class="offcanvas__logo">
            <a href="#"><img src="../img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
<a href="login.php">login</a>"
<a href="inscription.php">inscription</a>

        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                         <a href="#"><img src="../img/logo.png" alt=""></a>
                        <style>
                            .gh{
                                height: 35%;
                                width :35% ;
                                border-radius: 30%;
                            }
                           
                            </style>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li ><a href="../index.php">Home</a></li>
                 
                            <li ><a href="../shop.php">Shop</a>
                               <ul class="dropdown">
                                    <li><a href="../shop.php">Shop  detail</a></li>
                                    <li><a href="../shophomme.php">Shop homme</a></li>
                                    <li><a href="../shopfemme.php">Shop femme</a></li>
                                    <li><a href="../shopobject.php">Shop object</a></li>
                                </ul></li>
                            <li ><a href="../shop-cart.php">commande</a></li>
                            <li><a href="../blog-details.php">Pages</a></li>
                            <li><a href="../blog.php">Blog</a></li>
                            <li><a href="../contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">

<a href="login.php">login</a>
<a href="inscription.php">inscription</a>

                            </div>
                               
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
       		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="../enregestrementloginadmin.php" method="post">
					<h3>Strat login</h3>
					
						<div class="form-wrapper">
							<label for="">nom</label>
							<input type="text" class="form-control" name="login">
						</div>
                    
						<div class="form-wrapper">
							<label for="">password</label>
							<input type="password" class="form-control" name="pwd">
						</div>
					   <div class="social">
       <a href="#">  <div class="go"><i class="fab fa-instagram"></i>  Google</div></a> 
       <a href="#">    <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div></a>
        </div>
                    
                <center>
					<button>login</button></center>
         </br>
                <div class="form-wrapper">
							<a href="inscription.php">inscription maintenant </a>
						</div>
                </div>
            
               
				</form>
			</div>
		</div>
		<style>
            a{
            text-decoration:none;
            }
        .social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #000;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
        </style>
  <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
  
</html>