<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title><?php echo($ptitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css"/>

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
	<header class="clearfix">
        <div class="head">
            <figure class="logo">
            <img src="images/CabotCruises-1x.png" alt="logo" srcset="images/CabotCruises-1x.png 1x, images/CabotCruises-2x.png 2x, images/CabotCruises-3x.png 3x">
            </figure>
            <h2 class="phoneNum"><a href="tel:801-234-5678">801-234-5678</a></h2>
        </div>
    </header>


    <nav class="fixTop">
        <button id="hamburgerBtn">&#9776;</button>
        <div class="navSet">
            <ul id="primaryNav">
                <li><a href="index.php">Home</a></li>
                <li><a href="cruises.php">Cruises</a></li>
                <li class="parent"><a href="#">Agents</a>
                    <ul>
                        <li><a href="agent1.php" target="_blank">Mark Jacobs</a></li>
                        <li><a href="agent2.php" target="_blank">Barbra Diaz</a></li>
                    </ul>
                </li>
                <li><a href="book.php" target="_blank">Book</a></li>
            </ul> 
            
        </div>
        
    </nav>
    <form class="formnav" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

<main>
  