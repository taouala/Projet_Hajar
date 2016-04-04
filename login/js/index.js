/*------------------------------------*\
    SIMPLE LOGIN FORM
\*------------------------------------*/
/*------------------------------------*\
    SIMPLE LOGIN FORM
\*------------------------------------*/
function verfier(){
			var login=document.getElementById("user").value;
			var pass=document.getElementById("pass").value;
			if(login != "" && pass!=""){
			document.getElementById("myspan");
			var txt;
				//ajax
				if(txt=file("/proj/Projet_Hajar/login/js/ctrlLogin.php?login="+escape(login)+"&pass="+escape(pass))){
					
					document.getElementById("spanLogin").style="color:white";
					if(txt =="ok"){
						submit();
					}else {
						console.log(txt);
						document.getElementById("spanLogin").innerHTML=txt;
					}

				}
		}
		}

function file(fichier){
			var obj=new XMLHttpRequest();
			obj.open("GET",fichier,false);
			obj.send(null);
			return obj.responseText;
			
		}