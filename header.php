<html>
    <head>
        <title>Game Sederhana</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../../assets/js/jquery-ui/jquery-ui.css" type="text/css">
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a href="#" class="navbar-brand">Aplikasi Game</a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
					                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Hi, 
                                        <?php
                                        $nama = "Admin Game";
                                        echo $nama;
                                        ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span>  
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-xs-10">
                                <a class="thumbnail">
                                        <img src="profile/profile.jpeg">
                                    </a>
                                </div>
                        <div class="row"></div>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>   Dashboard</a></li>
                                <li><a href="tictactoe.php"><span class="glyphicon glyphicon-briefcase"></span>  Game Tic-Tac-Toe 4x4</a></li>
                                <li><a href="catur.php"><span class="glyphicon glyphicon-briefcase"></span>  Game Catur</a></li>
                                <li><a href="tetris.php"><span class="glyphicon glyphicon-briefcase"></span>  Game Tetris</a></li>
                                <li><a href="basketball.php"><span class="glyphicon glyphicon-briefcase"></span>  Game Basketball</a></li>
                                <li><a href="snack.php"><span class="glyphicon glyphicon-briefcase"></span>  Game Snack</a></li>
                            </ul>  
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-md-10">