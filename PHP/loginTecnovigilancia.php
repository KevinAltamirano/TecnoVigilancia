    <?php
    include("config.php");
    session_start();
    
    
    if (isset($_POST['username']) & isset($_POST['password'])) {
         $nombre= htmlentities($_POST['username']);
         $pass = htmlentities($_POST['password']);

        if(verificar_login($_POST['username'],$_POST['password'],$result) == 1)
            {
                
                if($nombre=="chriscanzion@gmail.com"){
                    header("location:equipoListaAdmin.php");
                    //echo 'console.log("Usuario Administrador");';
                }
                else{
                    header("location:equipoLista.php");
                }
            }
            else
            {
                    
                //echo "alert('Incorrecto');";
                $message = "Usuario Incorrecto";
                echo "<script type='text/javascript'>alert('$message');</script>";
                //header("location:loginTecnoVigilancia.php");
            }
}

        function verificar_login($user,$password,&$result)
        {
            $sql = "SELECT * FROM login WHERE email='$user' and password='$password'";
            $rec = mysql_query($sql);
            $count = 0;
            while($row = mysql_fetch_object($rec))
            {   
                $count++;
                $result = $row;
            }
            if($count == 1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
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
        <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
        </script>
    </html> 

