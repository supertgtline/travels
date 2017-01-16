<!DOCTYPE html>
<html>
<head>
    <title>Travels</title>
    <link href="../../../webroot/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="../../../webroot/css/style.css" media="all" rel="stylesheet">
    <script src="../../../webroot/js/jquery-1.10.2.min.js"></script>
    <script src="../../../webroot/js/bootstrap.min.js"></script>
</head>
<body>
<div id="flags" class="container-fluid">
<div class="">
    <div class="col-md-12">
        <ul>
            <li id="vn">Viet Nam</li>
            <li id="el">English</li>
        </ul>
    </div>
</div>
</div>
<!--End flag-->
<div id="header">
    <div class="container">
        <div id="logo" class="row">
            <div class="col-md-6 logo">
                <a href="#"><img src="../../../webroot/img/logo.jpg"></a>
            </div>
            <div id="search" class="col-md-6">
                <div id="custom-search-input" class="col-md-10">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Tìm kiếm" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="main-menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Speech</a></li>
                            <li><a href="#">Company Profile</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Honor</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">News Product</a></li>

                        </ul>
                    </li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<?php include 'home.php'?>
<?php include 'footer.php'?>
</body>
</html>