<?php
$servername = "localhost:8181";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("La connexion a echoue : " . $conn->connect_error);
} 
echo "La connexion a ete etablie";
?>

<?php
ob_start();
?>

<?php
if ($conn->query("INSERT INTO equipe (name, couleur) VALUES ($post)") === TRUE) {
    echo "Nouvelle equipe creee";
}
else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}
?>

<form action="/creerequipe.php" method="post">
  Nom Equipe:<br>
  <input type="text" name="name">
  <br>
  Couleur:<br>
  <input type="text" name="couleur">
  <br>
  <?php
  	$nb_morpion= $conn->query("SELECT COUNT(*) FROM morpion");
  	for ($x=0; $x<$nb_morpion; $x++) {
  		?>
  		<input type="checkbox" name="morpion"> <br>
  		<?php
  	} 
 ?>
  <input type="submit" value="Submit">
</form> s

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

<?php
$contenu = ob_get_clean();
ob_end_clean();
include 'base.php';
?>