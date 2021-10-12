<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="simple.css">
<title>Young cardiac modelers</title>
</head>

  <header>
    <h1>Young MNCM</h1>
    <p>Young Researchers Workshop on Mathematical and Numerical Cardiac Modeling</p>
        <nav>
	  <a href="index.html">Home</a>
	  <a href="program.html">Program</a>
	  <a href="venue.html">Venue</a>
	  <a href="register.html">Registration</a>
	  <a href="contact.html">Contact</a>
	</nav>	
  </header>

  <main>
  <!-- Process answers and send them by mail -->
  <?php 
  $message="Name:{$_POST['name']}\nEmail:{$_POST['email']}\nInstitution:{$_POST['institution']}\nCountry:{$_POST['country']}\nIn person:{$_POST['presence']}\nMessage:{$_POST['message']}"; 
  if (!empty($_POST)) 
  {
	  mail("nicolas.barnafi@unimi.it,ngocmaimonica.huynh01@universitadipavia.it", "[Young MNCM] New participant", $message);
  }
  ?>
  <p> Thank you for registering. We hope to see you soon! </p>
  <p> Here is a summary of what you just sent: </p>
  <ul>
	<li> Full name: <?php echo $_POST['name'];?> </li>
	<li> Email: <?php echo $_POST['email'];?></li>
	<li> Institution: <?php echo $_POST['institution'];?></li>
	<li> Country of origin: <?php echo $_POST['country'];?></li>
	<li> Participation in person: <?php echo $_POST['presence'];?></li>
        <li> Message: <?php echo $_POST['message'] ?></li>
  </ul>

  </main>
  <footer></footer>
</html>
