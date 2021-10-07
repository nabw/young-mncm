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
	  <p> To register at the conference, please fill in the form below. Remember that there is physically room for only 50 people, and places will be assigned in a <em>first come, first serve</em> fashion. Still, we will happily comply with the new standard and stream the workshop so that everyone interested con participate. 
	  </p>

 <form action="register_done.php" method="post">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" placeholder="Brad Pitt" pattern=[A-Z\sa-z]{3,20} required>
    <br>
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="brad.pitt@e.mail" required>
    <br>
    <label for="institution">Institution</label>
    <input type="institution" id="institution" name="institution" placeholder="University of life" required>
    <br>
    <label for="country">Country of origin</label>
    <input type="country" id="country" name="country" placeholder="Chile" required>
    <br>
    <label for="presence">Are you planning to attend in person?</label>
    <select id="presence" name="presence" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        <option value="not sure">Not sure</option>
    </select>
    <br>
    <label for="message">If you have any thoughts, suggestions or requirements please let us know.</label>
    <textarea id="message" name="message" placeholder="Say whatever you want."></textarea>
  <button type="submit">Register</button>
</form>

  </main>

  <footer>
    <p>Created by N Barnafi, thanks to G Merli for your help with the hosting and K Quirk for creating simple.css.</p>
  </footer>

</html>
