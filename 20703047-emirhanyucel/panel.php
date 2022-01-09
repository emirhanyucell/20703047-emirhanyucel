<?php

session_start();
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "panel";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if(!isset($_SESSION["login"]))
    {
 
    header("Location: /deneme/index.php");
     
    } 

?>

<html>
    <head>
        <title>Hyle Code Admin Panel</title>
        <link href="panel.css" type="text/css" rel="stylesheet"/>  
    </head>
    <body>
        
    <div class="admin-panel">
  
 
    <div class="slidebar">
        <ul>
            <li><a href="panel.php" name="tab1">Anasayfa</a></li>
            <li><a href="PYTHON Ders Notları.rar"  name="tab2">Python Ders Notları</a></li>
            <li><a href="PHP Ders Notları.rar" name="tab3">PHP Ders Notları</a></li>
            <li><a href="R Ders Notları.rar" name="tab4">R Ders Notları</a></li>
            <li><a href="C Ders Notları.rar" name="tab5"></i>C Ders Notları</a></li>
            <li><a href="C++ Ders Notları.rar" name="tab6">C++ Ders Notları</a></li>
            <li><a href="JAVA Ders Notları.rar" name="tab7">JAVA Ders Notları</a></li>
            <li><a href="JAVASCRİPT Ders Notları.rar" name="tab8">JAVASCRİPT Ders Notları</a></li>
            <li><a href="GO Ders Notları.rar" name="tab9"></i>GO Ders Notları</a></li>
            <li><a href="cıkıs.php" name="tab10">Çıkış Yap</a></li>
        </ul>
    </div>
    <div class="slidebar-box"> 
   <center><h2><b><i>Yazılım Nedir?<center></h2></b></i>
   <p><i>Yazılım, en temel tanımıyla; “Elektronik bir donanımın, belirli bir işi yapabilmesi için özel olarak geliştirilmiş kodlar bütünü” anlamına geliyor. Yazılımlar, günümüzde çoğu zaman yalnızca bilgisayarlarla eşleştirilse de havalandırma sistemlerinden beyaz eşyalara kadar pek çok elektronik eşyada da kullanılıyor. Bu nedenle herhangi bir yazılım dili ve kodlama biliyor olmak, teknolojik açıdan benzersiz faydaları beraberinde getiriyor. </i></p> 
    
   <br>
   <br>
   <br>
   

   <center><h2><b><i>Yazılım Dili Ne Demektir? <center></h2></b></i>
   <p><i> Temel olarak bilgisayar yazılımı ve elektronik yazılımı olmak üzere ikiye ayrılan yazılım çeşitleriyle ilgili kullanılan komutlar da alt başlıklar halinde farklılıklar gösteriyor. Hedeflenen amaca bağlı geliştirilen ve değişebilen bu komut dizinlerinin her biri yazılım dili olarak adlandırılıyor. Özellikle bilgisayarlar için onlarca değişik yazılım dili bulunuyo Elektronik yazılımı, genellikle benzer ve daha basit ayrıntılardan meydana gelirken bilgisayar yazılımı, işletim sistemlerinden uygulamalara, ofis programlarından arayüzlere kadar geniş bir alana yayıldığı için onlarca farklı yazılım dili ile beraber sürekli güncellenen ve yenilenen kodları da içeriyor. Bu yüzden bilgisayar yazılımı geliştirmek, elektronik yazılım geliştirmeye göre çok daha karmaşık bir hal alabiliyor.  </i></p>

   <br>
   <br>
   <br>
   <br>
   
   
   
  
    <center><h2><b><i>Yazılım Dilleri Nelerdir? <center></h2></b></i>
<p><i>Kullanıcı arayüzüne sahip uygulamalar geliştirmek, web sitesi oluşturmak ya da dosya yazmak ve okumak gibi çeşitli amaçlar doğrultusunda yaratılan yazılım dilleri, kullanılacakları alana bağlı olarak kapsamlı ve komplike bir hal alabiliyor. Yazılım kodlama için kullanılan yaygın diller arasında ise HTML, CSS, ASP, PHP, Java, Visual Basic, C#, C++ ve Python bulunuyor.</i></p></div>
        
  </div>
  
    </body>
    <script src="deneme/panel.js"></script>
</html>