
<?php
	session_start();
	if(isset($_SESSION['login'] ) && isset($_SESSION['pass']) && isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['numPers'])){
			$sql = "SELECT * FROM personne p,enseignant e where p.login='".$_SESSION['login']."'and p.password='".$_SESSION['pass']."' and e.numPers=".$_SESSION['numPers'] ;
                $rs = $con->query($sql);
                 $row_cnt = mysqli_num_rows($rs);
                 if($row_cnt!=1){
                 	echo "<script>alert('essayer de ce connecter a nouveau !!!')</script>";
                 	header("Location: /Projet_Hajar/login/index.html");
                 }
                	
	}else{
		header("Location: /Projet_Hajar/login/index.html");
	}
		
?>