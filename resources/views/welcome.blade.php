<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Home page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background: black;
        }

        label{
            color: white;
        }


    </style>
</head>
<body>

<div class="container">
    <div id="App">
        <header>
            <div class="row">
                <div class="col-lg-offset-1">
                    <a href="#"><img src="img/logo.png" width="150" alt=""></a>
                </div>
            </div>

        </header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/add">Add user</a></li>
                        <li><a href="/users">Users</a></li>
                        <li><a href="/course">Add Course</a></li>
                        <li><a href="/courses">Courses</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </ul>

                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slide1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 1</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 2</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 3</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide4.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 4</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide5.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 5</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide6.png" alt="...">
                    <div class="carousel-caption">
                        <h2>Slider 6</h2>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>


        </div>
        <br>
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="thumbnail">
                        <img src="img/slide1.jpg" alt="...">
                        <div class="caption">
                            <h3>Check this out</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                            <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" >
                    <div class="thumbnail">
                        <img src="img/slide2.jpg" alt="...">
                        <div class="caption">
                            <h3>New Arrivals label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                            <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                    <div class="thumbnail">
                        <img src="img/slide3.jpg" alt="...">
                        <div class="caption">
                            <h3>We make it Good!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                            <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                    <div class="thumbnail">
                        <img src="img/slide4.jpg" alt="...">
                        <div class="caption">
                            <h3>We create Genius </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                            <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <footer>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
            </div>

        </footer>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<script src="js/vue.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>