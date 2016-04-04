<?php
require_once "../../connexion.php";
session_start();
 ?>
<?php

$login=$_GET['login'];
$pass=$_GET['pass'];
	
	$sql = "SELECT * FROM personne p,enseignant e where p.login='".$login."'and p.password='".$pass."' and p.numPers=e.numPers";
                $rs = $con->query($sql);
                 $row_cnt = mysqli_num_rows($rs);
                if($row_cnt==1){
                	while($row = $rs->fetch_assoc()){
                		
						  
						  $_SESSION['login'] = $row['login'];
						  $_SESSION['pass'] = $row['password'];
						  $_SESSION['nom'] = $row['nom'];
						  $_SESSION['prenom'] = $row['prenom'];
						  $_SESSION['numPers'] = $row['numPers'];
						  $_SESSION['img'] = $row['img'];
						  echo "ok";
						
                	}
                	
                }else{
                	echo "Mot de passe ou login est incorrect !!";
                }
                $con->close();
?>