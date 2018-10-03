<!DOCTYPE html>
<html>
<head>
	<title>Exploreur</title>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <section>

    
       
    <form action="index.php" method="POST">

        <input type="submit" name="retour" value="retour " class="btn btn-default" >
    </form>
   



    <br>
    <br>


	<form action="index.php" method="POST">
        <label for="text" >Créer nouveau dossier</label><br>
        <input type="text" name="text" id="text"  placeholder="Nom dossier" class="form-control col-sm-3" >
        <input type="submit" name="sub" class="btn btn-primary">
  
  
    </form>
    <form action="index.php" method="POST">
        <label for="fichier" >Créer nouveau fichier</label><br>
        <input type="text" name="fichier" id="fichier"  placeholder="Nom fichier" class="form-control col-sm-3" >
        <input type="submit" name="sub2" class="btn btn-primary">
   
  
    </form>
	
	<ul>
<?php
//variable qui contient le repertoire courant
$dir = "./";
$dir1 = "../";



if (isset( $_POST['sub2'] ))

{
   
file_put_contents($_POST['fichier'],"");
}


if (isset( $_POST['sub'] ))

{

$nom= $_POST['text']; 
                // Le nom du dossier à créer

                //verifier si le repertoire existe déjàt
                if(is_dir($nom))
                {
                    echo'le repertoire existe déjà';
                }

                //création d'un nouveau dossier
                else
                {
                    mkdir($nom);
                    echo'le dossier '.$nom.' vient d\'etre créé';
                }
            }




 if (isset( $_POST['retour'] ))
 {

    if (is_dir($dir1)) {
     //ouvre le dossier racine
     if ($dossier = opendir($dir1) ) {
         //lit le dossier racine 
         while (($file = readdir($dossier)) !== false) {
             //Pour ne pas affichier les fichiers systèmes .(dossier courant) et  notre fichier index.php
             if( $file != '.' && $file != 'index.php' && $file != '..' ) {
            // affiche sous forme de liens les 

  if (filetype("../".$file)=="dir") 
                {
                   
            echo '<li>


<a href ="../'.$file.'"><img src="dossier3.png"><br>'.$file."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:" .filesize("../".$file). ' bytes'.'</li>';
            
                }

                else
                {
                     echo '<li>


<a href ="../'.$file.'"><img src="fichier.png"><br>'.$file."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:" .filesize("../".$file). ' bytes'.'</li>';

                }
            
         }
 }
  //Ferme la connextion au dossier
         closedir($dossier);
     }


 }
 }



// Test si c'est un dossier
else if (is_dir($dir)) {
	//ouvre le dossier racine
    if ($dossier = opendir($dir) ) {
    	//lit le dossier racine 
        while (($file = readdir($dossier)) !== false) {
        //Pour ne pas affichier les fichiers systèmes . & ..(dossier courant & dossier parent)  et  notre fichier index.php
        	if( $file != '.' && $file != 'index.php' &&$file != '..' ) {
        // affiche sous forme de liens  puis les trie en dossier ou en fichier pour leur attribuer des icones specifiques

                if (filetype($file)=="dir") 
                {
                   
            echo '<li>


<a href ="./'.$file.'"><img src="dossier3.png"><br>'.$file."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:".filesize($file). '         bytes'.'</li>';
            
                }
                else
                {
                     echo '<li>


<a href ="./'.$file.'"><img src="fichier.png"><br>'.$file."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:".filesize($file). '         bytes'.'</li>';

                }

        }
        }
        //Ferme 
        closedir($dossier);
    }


}


?>
</ul>

</section>
</body>
</html>