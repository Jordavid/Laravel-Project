<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

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
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
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
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
            <h2 class="text-center" style="color: white; font-weight: 800">Register <span class="glyphicon glyphicon-hand-down"></span> </h2>
            <p style="color: white; font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi cupiditate dolorum est explicabo ipsam maiores molestiae mollitia recusandae temporibus. Amet aperiam eos labore maxime neque nostrum placeat temporibus vitae?</p>
            <hr class="dl-horizontal">
            <form action="/" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" v-model="name" class="form-control" placeholder="Full name" name="name" value="<?= (isset($_POST['name']))? $_POST['name'] : '';?>">

                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" class="form-control">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">

                    <label for="passwordConf">Confirm Password</label>
                    <input type="password" name="passwordConf" id="passwordConf" placeholder="Confirm Password" class="form-control">

                    <label for="aboutme">About me</label>
                    <textarea name="aboutme" id="aboutme" cols="15" rows="5" class="form-control" placeholder="Tell us a bit about you!" v-model="address"><?= (isset($_POST['address']))? $_POST['address'] : '';?></textarea>

                    <br>

                    <button type="submit" class="btn btn-primary btn-block" name="b_reg">Register</button>
                </div>
            </form>
            <!--<a href="index.php"><button type="button" class="btn btn-primary btn-block">Home</button></a>-->
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
        </div>

    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>