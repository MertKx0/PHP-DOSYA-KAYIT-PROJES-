<?php
    if(isset($_POST['yukle'])){
        require_once "kaydet1.php";
        $db = new Database();
        
        $bilgiDizi = array(
            "filename"=>$_POST['dosya'],
        );

        $ekle = $db->insert("dosyalar",$bilgiDizi);
        if($ekle){
            echo "Kayıt Edildi <img src='$ekle' height=100px>";
            
        } else {
            echo "Tekrar deneyin";
        }

    }
    ?>
  
