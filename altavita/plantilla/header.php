<header>
       <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">

                <div class="color-barra">
                    <div class="pull-left">
                        <div class="contacto-icono hidden-xs">
                            <a href="mailto:thelifestulespa@gmail.com"><i class="fa fa-envelope rs"></i> thelifestulespa@gmail.com</a>
                            
                        </div>
                        
                         <div class="contacto-icono">
                            <a href="Tel:+507390-9919"><i class="fa fa-phone rs"></i> +507 390-9919 |</a>
                            <a href="Tel:+50 6677-6616"> +50 6677-6616</a>
                            
                        </div>
                    </div>
                             
                    <div class="pull-right">
                        <div class="redes-sociales hidden-xs">
                            <a><i class="fa fa-clock-o rs"></i> Open hours: Mon-Fri: 9am - 7am / Sat: 9am - 6pm       |</a>

                        </div>

                        <div class="redes-sociales text-center ">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook rs"></i></a>
                        </div>

                        <div class="redes-sociales text-center ">
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram rs"></i></a>
                        </div>

                        <div class="redes-sociales text-center">
                            <a href="https://www.twitter.com/" target="_blank"> <i class="fa fa-twitter rs"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo-altavita.png" class="img-responsive center-block"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                       
                       
                        <li <?php if ($page=='index.php' ) { echo ' class="active"'; } ?>> <a href="index.php" ><span>HOME</span></a></li>
                        
                        <li <?php if ($page=='about.php' ) { echo ' class="active"'; } ?>><a href="about.php"  ><span>ABOUT</span></a></li>
                        <li <?php if ($page=='services.php' ) { echo ' class="active"'; } ?>><a href="services.php"  ><span>SERVICES</span></a></li>
                        <li  <?php if ($page=='shop.php' ) { echo ' class="active"'; } ?>><a href="shop.php"><span>SHOP</span></a></li>
                        <li <?php if ($page=='blog.php' ) { echo ' class="active"'; } ?>><a href="blog.php" ><span>BLOG</span></a></li>
                    </ul>
                    
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
