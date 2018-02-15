<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../frontOffice/reset.css">
    <link rel="stylesheet" type="text/css" href="../frontOffice/categories.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="https://www.favicon-generator.org/download/2018-02-13/012c7e07434b67601b79406ee0ea4d3a.ico" type="image/x-icon">
    <link rel="icon" href="https://www.favicon-generator.org/download/2018-02-13/012c7e07434b67601b79406ee0ea4d3a.ico" type="image/x-icon">
    <title>DevLearn - <?=$category_name?></title>
</head>
<body>

<header class="header-fixed">

    <div class="header-limiter">

        <h1><a href="../frontOffice/main.php"><img src="../headerFooter/logo.png" class="logo"></a></h1>

        <nav>
            <a href="../frontOffice/main.php">Home</a>
            <a href="../frontOffice/categories.php?id=1">New Tech</a>
            <a href="../frontOffice/categories.php?id=2">Web Design</a>
            <a href="../frontOffice/categories.php?id=3">Front-end Dev</a>
            <a href="../frontOffice/categories.php?id=4">Back-end Dev</a>
            <a href="../frontOffice/categories.php?id=5">Cyber Security</a>
        </nav>

    </div>

</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){

        var showHeaderAt = 150;

        var win = $(window),
            body = $('body');

        // Show the fixed header only on larger screen devices

        if(win.width() > 600){

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.

            win.on('scroll', function(e){

                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });

        }

    });

</script>


<style>
    .header-fixed {
        background-color:#292c2f;
        box-shadow:0 1px 1px #ccc;
        padding: 15px 40px;
        height: 80px;
        color: #ffffff;
        box-sizing: border-box;
        top:-100px;

        -webkit-transition:top 0.3s;
        transition:top 0.3s;
    }

    .header-fixed .header-limiter {
        max-width: 1200px;
        text-align: center;
        margin: 0 auto;
    }

    /*	The header placeholder. It is displayed when the header is fixed to the top of the
        browser window, in order to prevent the content of the page from jumping up. */

    .header-fixed-placeholder{
        height: 80px;
        display: none;
    }

    /* Logo */

    .header-fixed .header-limiter h1 {
        float: left;
        font: normal 28px 'Exo 2', sans-serif;
        line-height: 40px;
        margin: 0;
    }

    .header-fixed .header-limiter h1 span {
        color: #5383d3;
    }

    /* The navigation links */

    .header-fixed .header-limiter a {
        color: #ffffff;
        text-decoration: none;
    }

    .header-fixed .header-limiter nav {
        font:16px 'Exo 2', sans-serif;
        line-height: 40px;
        float: right;
    }

    .header-fixed .header-limiter nav a{
        display: inline-block;
        padding: 5px 5px;
        text-decoration:none;
        color: #ffffff;
        opacity: 0.9;
    }

    .header-fixed .header-limiter nav a:hover{
        opacity: 1;
    }

    .header-fixed .header-limiter nav a.selected {
        color: #608bd2;
        pointer-events: none;
        opacity: 1;
    }

    .logo {
        width: 40px;
    }

    /* Fixed version of the header */

    body.fixed .header-fixed {
        padding: 10px 40px;
        height: 50px;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1;
    }

    body.fixed .logo {
        width: 25px;
    }

    body.fixed .header-fixed-placeholder {
        display: block;
    }

    body.fixed .header-fixed .header-limiter h1 {
        font-size: 24px;
        line-height: 30px;
    }

    body.fixed .header-fixed .header-limiter nav {
        line-height: 20px;
        font-size: 13px;
    }


    /* Making the header responsive */

    @media all and (max-width: 600px) {

        .header-fixed {
            padding: 20px 0;
            height: 120px;
        }

        .header-fixed .header-limiter h1 {
            float: none;
            margin: -8px 0 10px;
            text-align: center;
            font-size: 24px;
            line-height: 1;
        }

        .header-fixed .header-limiter nav {
            line-height: 1;
            float:none;
        }

        .header-fixed .header-limiter nav a {
            font-size: 13px;
        }

        body.fixed .header-fixed {
            display: none;
        }

    }

</style>

</body>
</html>