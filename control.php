<?php
require_once "conexao.php";


$pj = $_POST;
$jog = $pj['player'];

$msg = "";
  
// If upload button is clicked ...


  $filename = $_FILES["pj_img"]["name"];
  $tempname = $_FILES["pj_img"]["tmp_name"];    
      $folder = "img/".$filename;
        
        $pj['pj_img'] = $folder;
        
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }

$jsonPJ = json_encode($pj);

$sql = "UPDATE personagem SET pj_info = ? where player = ?";
$stmt1 = $pdo->prepare($sql);
$stmt1->execute([$jsonPJ,$jog]);


?>