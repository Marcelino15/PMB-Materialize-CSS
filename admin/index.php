<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
    <!-- Import Jquery -->
    <script src="../assets/js/jquery.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <title>PMB UTM ADMIN LOGIN</title>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
        
        body {
            background: #DADADA;
        }
        main{
            margin-top: 50px;
        }
        .logo{
            width: auto;
            height: 150px;
        }
    </style>
</head>

<body>
<div class="container">
	<div class="row">
    <main>
        <center>
        <form action="user_login.php" method="post">
            <div class="container">
                <img src="../assets/image/logo.png" alt="logo" class="logo">
                <h5 class="blue-text"><strong>ADMINISTRATOR DASHBOARD</strong></h5>
                <div  class="z-depth-3 y-depth-3 x-depth-3 white  lighten-4 row" style="display: inline-block; padding: 0px 48px 0px 48px; border: 1px; margin-top: 10px; solid #EEE;">
                <div class="section"></div>
                
                    <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="username" placeholder="Masukan Username" id="username" required>
                        <label for="username">Username</label>
                        </div>
                    </div>
                    </div>
               
        
                
                    <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" placeholder="Masukan Password" id="password" required>
                        <label for="password">Password</label>
                        </div>
                    </div>
                    </div>
            

                <center>
                    <div class='row'>
                        <button style="width: 100%;"  type='submit' class='col  s6 btn blue waves-effect z-depth-1 y-depth-1'>Login</button>
                    </div>
                </center>
                </div>
            </div>
        </form>
        </center>
    </main>


    <?php include_once 'include/footer.php'; ?>