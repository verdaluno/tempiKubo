<?php
    session_start();
    ob_start();

    //if($_SESSION['correcto']<>1){
    //    header('Location: ../index.php');
    //}

    include("header.php");

    if(isset($_POST['btnLog'])){
        
        $_SESSION['correcto']=0;
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user=="" || $pass==""){
            $_SESSION['correcto']=2;//2 sera error de campos vacios
        } else {
        
        include("../conectar.php");
        $_SESSION['correcto']=3;//2 seran datos incorrectos
        
        $resultados = mysqli_query($conexion,"SELECT * FROM admin WHERE user = '$user' AND password = '$pass'");
        while($consulta = mysqli_fetch_array($resultados)) {
                $_SESSION['correcto']=1;
            }
        include("desconectar.php");
        }
        }
            
?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
            <div class="card p-3">
                <div class="m-auto">
                    <div class="reloj" id="Horas">00</div>
                    <div class="reloj" id="Minutos">:00</div>
                    <div class="reloj" id="Segundos">:00</div>
                    <div class="reloj" id="Centesimas">:00</div>
                </div>
                <input type="button" class="btn btn-success" id="inicio" onclick="inicio();" value="Iniciar">
                <input type="button" class="btn btn-info" id="parar" onclick="parar();" value="Detener" disabled>
                <input type="button" class="btn btn-danger" id="reinicio" onclick="reinicio();" value="Reiniciar" disabled>
            </div>
            </div>
            <div class="col-sm-4 text-center">
            <div class="card p-3">
                <img src="../img/perfil.png" width="100%">
                <h2>Pepito Perez</h2>
                <p>Primo lejano del Frailejón Perez</p>
            </div>
            </div>
        </div>
    </div>


    <script src="js/logic.js"></script>
</body>
</html>