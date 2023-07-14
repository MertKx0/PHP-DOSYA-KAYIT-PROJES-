<?php
    if(isset($_POST['yukle'])){
        require_once "kaydet1.php";
        $db = new Database();
        
        $bilgiDizi = array(
            "kullanici_adi"=>$_POST['dosya'],
            "sifre"=>$_POST['dosya'],
        );

        $ekle = $db->insert("kullanicilar",$bilgiDizi);
        if($ekle){
            echo "Kullanıcı Kaydınız Başarıyla Oluşturulmuştur.";
            
        } else {
            echo "Lütfen Tekrar deneyin";
        }

    }
    ?>