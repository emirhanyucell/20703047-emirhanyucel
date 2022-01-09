<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mersin Üniversitesi</title>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="index.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="auth.php" method="POST" autocomplete="off" class="sign-in-form">
        <font color="#e0e0e0"><h2 class="title"><center>Mersin Üniversitesi Öğrenci Kodlama Dilleri Notları Panel Girişi</font><center></h2> 
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" autocomplete="off" placeholder="Username" required="yes">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" autocomplete="off" placeholder="Password"  required="yes">
            
          </div>

          <input type="submit" value="Giriş Yap" class="btn solid">

        </form>
        <form action="" class="sign-up-form">
         
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="usuarname" autocomplete="username" placeholder="Username" required="yes">
          </div>
         
          <div class="input-field">
            
            <input type="password" name="password" autocomplete="off" placeholder="Password"  required="yes">
            
            
          </div>

        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        
        <img src="image/meü.png" class="image" alt="">
      </div>

  
  </div>

  <script src="index.js"></script>

</body>