<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $page_keywords;?>" />
    <meta name="description" content="<?php echo $page_description;?>" />
    <title><?php echo $page_title;?></title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/app.css">
    <!-- jQuery -->
    <script src="/public/js/jquery/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
<header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">SDVmvc</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li></li>
                </ul>
            </div>
        </nav>
</header>
<div class="container-fluid content">
    <div class="row">
        <div class="main-content">
        @yield('index')
        </div>
    </div>
</div>
</div>
<footer class="container-fluid">
    <div class="col-sm-10 text-center">
        2018 year
    </div>
    <div class="col-sm-2">
    </div>
</footer>
<script src="/public/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
</body>
</html>