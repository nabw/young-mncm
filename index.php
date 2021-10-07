<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="simple.css">
<title>Young cardiac modelers</title>
</head>

  <header>
    <?php 
	$val = file_get_contents("main_header.php");
	echo $val;
    ?>
  </header>

  <main>
    <p>Welcome to the website of this special workshop created with young researchers in mind. It will take place in the historical city of Pavia on <strong>Dec 14 2021</strong>, home of the University of Pavia since 1361. </p>
    <p>Its scope is to help promising young scientists develop strong connections in order to create the workforce of tomorrow's 
        leading force in cardiac modeling. The heart poses fertile soil for sophisticated methods to converge, as it is extremely complex
	by nature, with only noisy data available for its study. </p>

    <p>We believe that this colossal feat will be only overcome with a large community taking care of it, and hope that this is yet another important stop in this direction. 
    If you are interested in cardiac modeling either because you are currently working on it or because you are interested in the area, we will be happy to have you in our workshop. Until then.</p>

    <br><br>
    <p align="right"> The organizers </p> 

    <br><br>
    <p> This event is sponsored by GNCS INdaM (Gruppo Nazionale per il Calcolo Scientifico) and Universit&agrave Degli Studi di Pavia. </p>
    <div class="row">
        <div class="column">
	  <img src="images/logo_gncs_indam.png" width=240px >
        </div>
        <div class="column">
	  <img src="images/logo_unipv.png" width=100px >
        </div>
    </div>
  </main>

  <footer>
    <p>Created by N Barnafi, thanks to G Merli for your help with the hosting and K Quirk for creating simple.css.</p>
  </footer>

</html>
