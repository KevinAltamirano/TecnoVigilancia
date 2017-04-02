    <?php
    include("config.php");
    session_start();
    
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
        
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
        echo $myusername;
        echo $mypassword;
        
        header("location: equipoLista.php");

        }
    ?>

    <html lang="en">
        <head>
            <title></title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="../CSS/loginTecnoVigilancia.css" rel="stylesheet">
            
        </head>
        <body class="align">
            <div class="grid">
            <form action="" method="post" class="form login">
                    <header class="login__header">
                        <h3 class="login__title">TecnoVigilancia</h3>
                    </header>
                <div class="login__body">
                    <div class="form__field">
                        <input type="email" placeholder="Email" required name="username">
                    </div>
                    <div class="form__field">
                        <input type="password" placeholder="Password" name = "password">
                    </div>
            </div>
            <footer class="login__footer">
                <input type = "submit" value = " Submit "/><br />
            </footer>
                </form>
            </div>
        </body>
    </html> 

