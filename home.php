<html lang=en>
    <head>
        <meta name="viewport" content-width="width=device-width,initial-scale=1">
        <title>Paying Guest|PG Facility</title> 
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
        <link href="css/property_detail.css" rel="stylesheet" />
        <link href="css/common.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="home.html">
                    <img src="img/logo.png" />
                </a>
                <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#my-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                                <i class="fas fa-user"></i>Signup
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="#"" data-toggle="modal" data-target="#signup-modal">
                               <i class="fas fa-sign-in-alt"></i>Login
                            </a>
                        </li>
                    </ul>
                </div>  
            </nav>
        </div>
        <div id="loading"></div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2">
                <li class="breadcrumb-item">
                    <a href="home.html">Home</a>
                </li>
            </ol>
        </nav>
        <div id="property-images" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#property-images" data-slide-to="0" class="active"></li>
                <li data-target="#property-images" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/properties/2/1dcfc57947b5c712.jpg" alt="slide"> 
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/properties/1/46ebbb537aa9fb0a.jpg" alt="slide"> 
                </div>
            </div>
            <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="property-card">
            <div class="row">
                <div class="col-sm"><a href=property_detail.php ><img src="img/mumbai.png"/></a></div>
                <div class="col-sm"><a href=property_detail.php ><img src="img/bangalore.png"/></a></div>
                <div class="col-sm"><a href=property_detail.php ><img src="img/hyderabad.png"/></a></div>
                <div class="col-sm"><a href=property_detail.php ><img src="img/delhi.png"/></a></div>
                <div class="col-sm"><a href=property_detail.php ><img src="img/chennai.png"/></a></div>
                <div class="col-sm"><a href=PGhomelist.php ><img src="img/lucknow.png"/></a></div>
            </div>
        </div>
        <div class="modal fade" id="signup-modal" tabindex="-1" role="dailog" aria-labelledby="singup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="full-name" placeholder="Full Name" maxlength="30" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phno" maxlength="10" minlength="10" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="Email" placeholder="Email" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="10" required>
                            </div>
                            <div class="form-group">
                                <span>Gender</span>
                                <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />
                                <label for="gender-male">Male</label>
                                <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                                <label for="gender-female">Female</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" clas="button">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <span>Have an account?
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click Here</a>To register</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-cities">
                    <a href="home.html">PG to other cities</a>
                </div>
            </div>
            <div class="footer-copyright">© 2022 Copyright PG Life </div>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>