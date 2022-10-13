<?php
ob_start();
require("config/commandes.php");
$login=login();

if (isset($_POST['ok'])) {
	if (isset($_POST['em'])) {
		$em=$_POST['em'];
	}
	if (isset($_POST['pass'])) {
		$pw=$_POST['pass'];
   }
   foreach ($login as $client) {
	   if ($client->email==$em and $client->password==$pw ) {
		   header("location:index.php?client=$client->idClient");
		   break;
		}
		else{
			?>
			<tr>
				<td style="text-align:center;color: white;background-color: darkred"; colspan="4" align="center">
				Email ou mot de pass incorrecte</td>
			</tr>
			<?php
			break;
		}
	}
}
?>

<div align="center" class="album py-5 bg-light" style="text-align: left;">
    <div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="width: 1000px;">
				<div class="col"style="width: 800px; ">
					<div class="product-center"style="width: 800px;">
						<div class="product-item" style="width: 800px;">
							<table style="width: 600px;text-align: center;" height="350px" cellpadding="10" cellpadding="5">
			<form method="post">

  <div class="mb-3">
  	<label for="exampleInputEmail1" class="form-label">Email</label>
  	<input type="email" name="em" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 300px;text-align:center;" required>
  </div>
  <div class="mb-3">
	<label for="exampleInputPassword1" class="form-label">Password</label>
	<input type="password" name="pass" class="form-control" id="exampleInputPassword1" style="width: 300px;text-align:center;" required>
  </div>
  <div class="mb-5">
<button type="button" name="ok" value="CONNECTER" class="btn btn-dark">CONNECTER</button>
<a href="inscription.php"><button type="button" href="inscription.php" class="btn btn-light">inscrire</button></a>
<!-- <input type="submit" name="ok" value="CONNECTER" class="btn btn-outline-dark" required> -->
<!-- <a href="inscription.php" style="margin: 0;">inscrire</a> -->
</div>
</form>
</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$content=ob_get_clean();
require('template.php');
?>