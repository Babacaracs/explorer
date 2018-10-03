<!DOCTYPE html>
<html>
<head>
	<title>Exploreur</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<form action="index.php" method="POST">
        <label for="text" >Créer nouveau dossier</label><br>
        <input type="text" name="text" id="text"  placeholder="Nouveau dossier">
        <input type="submit" name="sub">
  
  
    </form>
	
	<ul>
<?php
//variable qui contient le repertoire courant
$dir = "./";
$dir1 = "../";


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


// if (isset( $_POST['retour'] ))
// {

//    if (is_dir($dir1)) {
//     //ouvre le dossier racine
//     if ($dossier1 = opendir($dir1) ) {
//         //lit le dossier racine 
//         while (($file1 = readdir($dossier1)) !== false) {
//             //Pour ne pas affichier les fichiers systèmes .(dossier courant) et  notre fichier index.php
//             if( $file1 != '.' && $file1 != 'index.php' ) {
//            // affiche sous forme de liens les 

//             echo '<li><a href ="./'.$file1.'">'.$file1."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:"  . ' bytes'.'</li>';
            
//         }
// }
//  //Ferme 
//         closedir($dossier1);
//     }


// }
// }

// Test si c'est un dossier
if (is_dir($dir)) {
	//ouvre le dossier racine
    if ($dossier = opendir($dir) ) {
    	//lit le dossier racine 
        while (($file = readdir($dossier)) !== false) {
        	//Pour ne pas affichier les fichiers systèmes .(dossier courant) et  notre fichier index.php
        	if( $file != '.' && $file != 'index.php' ) {
           // affiche sous forme de liens les 

            echo '<li><a href ="./'.$file.'">'.$file."</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><u>taille</u>:" .filesize($file). ' bytes'.'</li>';
            
        }
        }
        //Ferme 
        closedir($dossier);
    }


}


?>
</ul>
</body>
</html>