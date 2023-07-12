<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Kaydı</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="menuler">

    <div class="kutular">
        <div class="kutu k1">
            <div class="ek1">
            <div class="resim1">
                    <img src="images/logo.ico">
                </div>

                <div class="yazi1">
                <a href="index.php"><p>Web Paylaşım</p></a>
                </div>
            </div>
            
            <div class="ek2">
            <div class="resim2">
                    <img src="images/dashboard.png">
                </div>

                <div class="yazi2">
                <a href="index.html"><p>Gösterge Paneli</p></a>
                </div>
             
            </div>

            <div class="ek3">
            <div class="resim3">
                    <img src="images/document.png">
                </div>

                <div class="yazi3">
                <a href="documents.php"><p>Dosyalar</p></a>
                </div>
                
            </div>

            <div class="ek4">
            <div class="resim4">
                    <img src="images/ayarlar.png">
                </div>

                <div class="yazi4">
                <a href="index.html"><p>Ayarlar</p></a>
                </div>
                
            </div>

            <div class="ek5">
                <div class="resim5">
                    <img src="images/log_out.png">
                </div>

                <div class="yazi5">
                <a href="index.html"><p>Çıkış</p></a>
                </div>
                
            </div>
        </div>
        
        <div class="kutu k2">
        <form method="POST" name="kullanici" id="kullanici" action="baglanti.php">
                <input type="text" name="adi" id="adi" required placeholder="Adınızı Giriniz">
                <input type="password" name="sifre" required id="sifre" placeholder="Şifrenizi Giriniz">
                <input type="submit" name="kaydet" id="kaydet" value="Kaydet">
            </form>



         
         
        </div>
    
        <div class="kutu k3">
        </div>
    
    </div>
</div>















</body>















</html>
