<?php
	if(isset($_SESSION['login'] ) && $_SESSION['pass'] && $_SESSION['nom'] && $_SESSION['prenom'] && $_SESSION['numPers'] && $_SESSION['img'] ){
			$sql = "SELECT * FROM personne p,enseignant e where p.login='".$_SESSION['login']."'and p.password='".$_SESSION['pass']."' and e.numPers=".$_SESSION['numPers'] ;
                $rs = $con->query($sql);
                 $row_cnt = mysqli_num_rows($rs);
                 if($row_cnt!=1){
                 	alert("essayer de ce connecter a nouveau !!!");
                 	location("index.html");
                 }
                	
	}else{
		location("index.html");
	}
		
?>