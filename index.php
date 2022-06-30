<html>
    <head>
        <meta charset="utf-8">
        <title>TempiKubo</title>
        <link href="css/estilos.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 card shadow p-3">
                <div class="m-auto">
                    <div class="reloj" id="Horas">00</div>
                    <div class="reloj" id="Minutos">:00</div>
                    <div class="reloj" id="Segundos">:00</div>
                    <div class="reloj" id="Centesimas">:00</div>
                </div>
                <input type="button" class="btn btn-success" id="inicio" onkeypress="inicio();" value="Iniciar">
                <input type="button" class="btn btn-info" id="parar" onclick="parar();" value="Detener" disabled>
                <input type="button" class="btn btn-danger" id="reinicio" onclick="reinicio();" value="Reiniciar" disabled>

            </div>
            <div class="col-sm-4 card shadow p-3 text-center">
                <img src="img/perfil.png" width="100%">
                <h2>Pepito Perez</h2>
                <p>Primo lejano del Frailejón Perez</p>
            </div>
        </div>
    </div>


    <script src="js/logic.js"></script>
</body>
</html>