<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>İletişim | Sude ÇAKIR</title>
    
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        <!--Custom Styles-->
        <link rel="stylesheet" href="../css/style.css">
    
        
    </head>
    <body>
        <nav class="container-fluid">
            <div class="row">
                <div class="col-4 logo text-center">
                    <a href="../../index.html">
                        <p>Sude Çakır</p>
                    </a>
                </div>
                <div class="col-6 nav-links">
                    <ul>
                        <li><a href="../html/login.html">Giriş</a></li>
                        <li><a href="../html/hometown.html">Memleket</a></li>
                        <li><a href="../html/cv.html">Özgeçmiş</a></li>
                        <li><a href="../../index.html">Hakkımda</a></li>
                    </ul>
                </div>
                <div class="burger col-2">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </nav>
        <main class="container-fluid main-form form">
            <div class="row">
                <div class="col-12 offset-2 col-md-8 offset-md-2">  
                    <div class="success">
                        <p class="text-center">Mesajınız başarılı bir şekilde gönderildi.<br> Mesaj ön izlemesi:</p>
                        <p>İsim: <?php echo $_POST['name'];?></p>
                        <p>Soyisim: <?php echo $_POST['surname'];?></p>
                        <p>E-posta: <?php echo $_POST['email'];?></p>
                        <p>Konu: 
                            <?php 
                            if($_POST['select'] == 'suggest'){
                                echo 'Görüş ve öneri';
                            }else if($_POST['select'] == 'bug'){
                                echo 'Hata bildirimi';
                            }else{
                                echo 'Telif hakkı ihlali';
                            }
                                ?>
                            </p>
                        <p>Mesaj: <?php echo $_POST['message'];?></p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="../../index.html">Hakkımda</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="../html/cv.html">Özgeçmiş</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="../html/contact.html">İletişim</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="../html/hometown.html">Memleket</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>2022 Sude ÇAKIR</p>
                </div>
            </div>
        </footer>

        <script src="../js/scripts.js"></script>
    </body>
</html>