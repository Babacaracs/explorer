<!DOCTYPE html>
<html>
<head>
	<title>Exploreur</title>
	   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script>
  function div1() {
    var x = document.getElementById("div1");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function div2() {
    var x = document.getElementById("div2");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
function div3() {
    var x = document.getElementById("div3");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
function div4() {
    var x = document.getElementById("div4");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
function div5() {
    var x = document.getElementById("div5");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
function div6() {
    var x = document.getElementById("div6");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}




</script>
</head>
<body>
<section class="container" id="te">
 <div class="container mx-auto" id="menu">

<img id="img1" onclick="div1()" class="img-fluid" src="img/add.png" alt="ajouter dossier">
<img id="img2" onclick="div2()" class="img-fluid" src="img/del11.png" alt="supprimer dossier">
<img id="img3" onclick="div3()" class="img-fluid" src="img/add21.png" alt="ajouter fichier">
<img id="img4" onclick="div4()" class="img-fluid" src="img/del21.png" alt="supprimer fichier">
<img id="img5" onclick="div5()" class="img-fluid" src="img/ren.png" alt="renmmer fichier ou dossier">
<img id="img6" onclick="div6()" class="img-fluid" src="img/upload.png" alt="upload fichier ou dossier">

</div>
</section>
<div class="form-group form-inline mx-auto">
  <div id="div1">
  <form action="index.php" method="POST" class="mx-auto">
        <label for="text" >Créer nouveau dossier</label><br>
        <input type="text" name="text" id="text"  placeholder="Nom dossier" class="form-control .col-md-3 .offset-md-3  inp" ><br>
        <input type="submit" name="sub" class="btn btn-primary">
  
    </form>
  </div>
    <div id="div3">

    <form action="index.php" method="POST" class="mx-auto">
        <label for="fichier" >Créer nouveau fichier</label><br>
        <input type="text" name="fichier" id="fichier"  placeholder="Nom fichier" class="form-control input-lg-4 inp" ><br>
        <input type="submit" name="sub2" class="btn btn-primary">
 
  
    </form>
  </div>

  </div>

  <div class="form-group form-inline mx-auto">
    <div id="div2">
    <form action="index.php" method="POST" class="mx-auto">
        <label for="text" >Supprimer dossier</label><br>
        <input type="text" name="text3" id="text"  placeholder="Nom dossier" class="form-control  offset-lg-
         input-lg-4  inp" ><br>
        <input type="submit" name="sub3" class="btn btn-primary">
  
    </form>
</div>
<div id="div4">
    <form action="index.php" method="POST" class="mx-auto">
        <label for="fichier" >Supprimer fichier</label><br>
        <input type="text" name="fichier2" id="fichier"  placeholder="Nom fichier" class="form-control input-lg-4 inp" ><br>
        <input type="submit" name="sub4" class="btn btn-primary">
 
  
    </form>
  </div>
  </div >

    <div class="form-group form-inline mx-auto">
      <div id="div5">
    <form action="index.php" method="POST" class="mx-auto">
        <label for="text" >Renommer dossier ou fichier</label><br>
        <label for="text">Ancien nom</label>
        <input type="text" name="text5" id="text"  placeholder="Nom dossier" class="form-control input-lg-4  inp" ><br>
        <label for="text">Nouveau nom</label>
        <input type="text" name="text6" id="text"  placeholder="Nom dossier" class="form-control input-lg-4  inp" ><br>
        <input type="submit" name="sub6" class="btn btn-primary">
  
    </form>
  </div>
        </div>

        <div id="div6">
         
             <form action="index.php" method="post" enctype="multipart/form-data">
                 <label for="">Dossier ou Fichier</label><br>
                 <input type="file" name="file" id="file"><br><br>
                 <input type="submit" value="Uploader" class="btn btn-secondary" name="upload" >
             
          </form>
        </div>
    <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Taille</th>
      <th scope="col">Autres</th>
    </tr>
     </thead>
  <tbody>



<?php 



//creation de fichier

if (isset( $_POST['sub2'] ))

{
       if(file_exists($_POST['fichier']))
                {
                    echo'le fichier existe déjà';
                }
                else
                {

   
file_put_contents($_POST['fichier'],"");
}
}

//suppresion fichier

if (isset( $_POST['sub4'] ))

{
       if(file_exists($_POST['fichier2']))
                {
                    unlink($_POST['fichier2']);
                }
                else{
                echo "le fichier n\'existe pas";
                }
}

//creation dossier
if (isset( $_POST['sub'] ))

{

 
                // Le nom du dossier à créer

                //verifier si le repertoire existe déjàt
                if(is_dir( $_POST['text']))
                {
                    echo'le repertoire existe déjà';
                }

                //création d'un nouveau dossier
                else
                {
                    mkdir( $_POST['text']);
                    echo'le dossier '.$_POST['text'].' vient d\'etre créé';
                }
            }


         
            if (isset( $_POST['sub3'] ))

{


                // supprimer dossier

                //verifier si le repertoire existe déjàt
                if(is_dir( $_POST['text3']))
                {rmdir( $_POST['text3']);
                    echo'le repertoire '.$_POST['text3'].' vient d\'etre supprimé';
                }

                //affiche le dossier supprimer
                else
                {
                    
                    echo'le dossier '.$_POST['text3'].' n\'existe pas';
                }
            }


 //renommage fichier ou dossier
            if (isset( $_POST['sub6'] ))

{


            

               
                if(is_dir( $_POST['text5']))
                {
                    if (is_dir( $_POST['text6']))
                    {
                          echo'le nom '.$_POST['text6'].'existe deja';
                    }
                    else
                    {
                     rename( $_POST['text5'],$_POST['text6']);
   
                    }
                }
                    else
                    {
                       echo'le nom '.$_POST['text5'].'n\'existe deja';   
                    }
                

               
            }

           

//upload
            if (isset($_POST['upload'])){
    $fichier = $_FILES['file']['name'];
    $taille_max = 297152;
    $taille = filesize($_FILES['file']['tmp_name']);
   
   
    if ($taille > $taille_max){
        $error = '<div class="alert">Fichier trop volumineux ...</div>';
    }
    if (!isset($error)){
       
        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$fichier);
    } else {
        echo $error;
    }
}




  
        $racine='./index.php';      //on stock le chemin vers la racine

   //on initialise path
    $path="";
        echo "<a href='$racine'><img src='img/home.png'></a>";
        
    if(sizeof($_GET) != 0) 
    	{
    		$path = 
    		$_GET["path"];
		}

    if(strlen($path)==0) $path=".";
    else if ($path !=".") 
    {
        $parent_dir = substr($path,0,strrpos($path,"/")); //contient le dossier précédemment visité

   
           
            echo "<a href='./index.php?path=$parent_dir'><img src='retour.png'></a>"; //lien vers le dossier précédent

      
    }
    // on ouvre le dossier et on le parcourt
    $dir = opendir($path);
    $directories=array();
    $files=array();
    while($file = readdir($dir)) 
    {
        if($file != "." && $file != "..") 
        {
            // on stock les dossiers et les fichiers dans deux variables différentes
            if(is_dir("$path/$file"))
            {
                $directories[]="$file";
            }
            else $files[]="$file";  
        }
    }
    // on tri le tableau directories
        if(isset($directories))
            { 
                sort($directories);
                foreach($directories as $d) //on parcourt le tableau et on l'affiche
                {
                                  //avec un icône pour les dossiers
                    echo "<tr><th scope='row'><a href='./index.php?path=$path/$d'><img src='dossier3.png'><br>$d</a></th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" ."</td>"." <td></td></tr>"; 
                     //et un lien vers les sous dossiers
             
                }
            }


  // on trie les fichoers dans l'ordre alphabétique
        if(isset($files))
        {
            sort($files);
        if($files!= 'index.php')
        {
            foreach($files as $files2)
 
            {
                 $extension = pathinfo($files2, PATHINFO_EXTENSION);
                
                 if ($extension=="pdf")
                  {
                      echo "<tr><th scope='row'><a href=\"$path/$files2\" target='_blank' > <img src='pdf.png'><br> $files2 </a>
                </th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" .filesize($path.'/'.$files2). " bytes</td>"." <td></td></tr>";
                   
                 }

                 elseif ($extension == "png"  || $extension =="jpg"|| $extension =="JPG" || $extension =="jpeg" || $extension =="ico" )
                  {

                  
                      echo "<tr><th scope='row'><a href=\"$path/$files2\" target='_blank'> <img src='img.png'><br> $files2 </a>
                </th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" .filesize($path.'/'.$files2). " bytes</td>"." <td></td></tr>";
                   
                 }
                  elseif ($extension == "mp3" )
                  {

                  
                      echo "<tr><th scope='row'><a href=\"$path/$files2\" target='_blank'> <img src='mp3.png'><br> $files2 </a>
                </th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" .filesize($path.'/'.$files2). " bytes</td>"." <td></td></tr>";
                   
                 }
                  elseif ($extension == "doc" || $extension == "docx" )
                  {

                  
                      echo "<tr><th scope='row'><a href=\"$path/$files2\" target='_blank'> <img src='doc.png'><br> $files2 </a>
                </th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" .filesize($path.'/'.$files2). " bytes</td>"." <td></td></tr>";
                   
                 }


                 else if ( $extension!="pdf" && "png" && "jpg"&& "JPG" && "jpeg" && "mp3" && "ico" && "doc" && "docx")
                     {
                echo "<tr><th scope='row'><a href=\"$path/$files2\" target='_blank'> <img src='fichier.png'><br> $files2 </a>
                </th> <td>&nbsp;&nbsp;&nbsp;&nbsp;<br>" .filesize($path.'/'.$files2). " bytes</td>"." <td></td></tr>";}           //ouverture du fichier dans une nouvelle fenêtre
            
            }
        }   
        }
        //on ferme la lecture dossier
    closedir($dir); 

?>




	</tr>
  </tbody>
</table>

</body>
</html>