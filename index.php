<?php
    session_start();
    ob_start();

?>
<html>
    <head>
        <title>TempiKubo</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8">
                    <h2>¡Aprende a solucionar el cubo!</h2>
                    <p>A continuación compartimos uno de los tantos tutoriales que puedes encontrar en internet para solucionar el cubo de rubik. <br/>
                    Ahora solo queda crear tu cuenta, y ¡empiezar a medir tus tiempos!</p>
                    <div class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GyY0OxDk5lI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 card p-3">
                    <h2 class="text-center p-5">TempiKubo</h2>
                    <form action="pages/dashboard.php" method="post">
                        <small>Nombre de usuario</small>
                        <input class="form-control" type="text" name="user">
                        <small>Clave de usuario</small>
                        <input class="form-control" type="password" name="pass">
                        <input class="form-control btn btn-success" type="submit" name="btnLog" value="Ingresar">
                    </form>
                    <a href="#" class="text-center">¡Regístrate!</a>
                    <?php
                    if(isset($_SESSION['correcto'])){
						if($_SESSION['correcto']==2){
							echo "Los campos son obligatorios.";
						}
						if($_SESSION['correcto']==3){
							echo "Datos incorrectos.";
						}
					} else {
						$_SESSION['correcto']=0;
					}
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>