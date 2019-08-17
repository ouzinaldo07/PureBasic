<!Doctype html>
<html>
<head>
	 <title>Index</title>
	</head>
	<body>

		<?php 
		   $texte="salut je me nomme seyni thiam <br>je suis en plein cour et je fait mon projet php<br>
           	avec mes camarades de classe<br>" ;
           	?>
		    <p>
			<?php
			if(strlen($texte) < 50){
				echo $texte;
			}
			else{

           $first_chaine = substr($texte,0, 50);
           echo $first_chaine;
			
           	 $second_chaine = substr($texte,50);
           	 echo   "<details>
           	 <summary> Voir plus ...</summary>"
           	.$second_chaine."
           </details>";
         }
     ?>
		</p>
	</body>
</html>

<!Doctype html>
<html>
<head>
	 <title>Publication</title>
	</head>
	<body>
	<textarea name="Pub" rows="40" cols="150">
     
    
	</textarea>
	</body>
</html>