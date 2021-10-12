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
	  <p> This is the registration form, which will be forwarded to us upon submission, and it will be open until <strong>30 Nov, 2021</strong>. To register at the conference, please fill in the form below. Remember that there is physically room for only 50 people, and places will be assigned in a <em>first come, first serve</em> fashion. Still, we will happily comply with the new pandemic standard and stream the workshop so that everyone interested can participate. 
	  </p>

 <form action="register_done.php" method="post">
    <label for="name">Full Name</label>
    <br>
    <input type="text" id="name" name="name" placeholder="Name1 Name2 Surname1 Surname2" pattern=[A-Z\sa-z]{3,20} required>
    <br>
    <label for="email">Your E-mail</label>
    <br>
    <input type="email" id="email" name="email" placeholder="your.email@domain.com" required>
    <br>
    <label for="institution">Institution</label>
    <br>
    <input type="institution" id="institution" name="institution" placeholder="University/Institution/Company" required>
    <br>
    <label for="country">Country of origin</label>
    <br>
    <input type="country" id="country" name="country" placeholder="Let us do some nice demographics!" required>
    <br>
    <label for="presence">Are you planning to attend in person?</label>
    <br>
    <select id="presence" name="presence" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        <option value="not sure">Not sure</option>
    </select>
    <br>
    <label for="message">If you have any thoughts, suggestions or requirements please let us know.</label>
    <br>
    <textarea id="message" name="message" placeholder="Say whatever you deem important."></textarea>
    <br>
  <button type="submit">Register</button>
</form>
<br>
<br>
<p>
<em>Disclaimer: We will be optimistic, so considering our room capacity, those having answered 'Yes' to the in-person attendance will be given preference. Those who are 'Not Sure', will be added to the queue only after confirming their attendance.</em>
</p>
  </main>


</html>
