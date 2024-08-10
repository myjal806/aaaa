<?php 
include 'header.php';
include 'db22.php'; // Archivo que contiene la conexión a la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $habitacion = $_POST['hab'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $pago = $_POST['pago'];

    // Preparar la consulta SQL para insertar datos en la tabla items
    $sql = "INSERT INTO items (name, dni, email, checkin, checkout, hab, adultos, niños, pago) 
            VALUES ('$name', '$dni', '$email', '$checkin', '$checkout', '$habitacion', $adultos, $niños, '$pago')";

    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conn, $sql)) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
<style>
    /* Estilos para el formulario */
    form {
        margin-top: 20px;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
    }

    /* Estilos para las etiquetas y los inputs */
    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Estilos para el botón */
    button[type="submit"] {
        background-color: #bfa145;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #73726C;
    }
    
</style>

<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner1.jpg" class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown"style="color:white; text-shadow: 1px 1px 2px black" >DESCANSA TU CUERPO Y ALIMENTA TU ALMA</h1>
                <p class="animated fadeInUp" style="color:white; text-shadow: 1px 1px 2px black">EN NUESTRO ACOGEDOR REFUGIO DE COMODIDAD</p>  
                              
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner -->

<!-- reservation-information -->
<div id="information" class="spacer reserve-info">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
<div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
    <video class="embed-responsive-item" controls>
        <source src="portadavideo.mp4" type="video/mp4">
    </video>
</div>
</div>
<div class="col-sm-5 col-md-4">
<h3>RESERVACIÓN</h3>
    <form role="form" class="wowload fadeInRight" method="POST" action="">
        <label for="name">NOMBRE COMPLETO:</label>
        <input type="text" name="name" id="name" required>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required>
        <label for="email">EMAIL:</label>
        <input type="email" name="email" id="email" required>
        <label for="checkin">FECHA CHECK IN:</label>
        <input type="date" name="checkin" id="checkin" required>
        <p></p>
        <label for="checkout">FECHA CHECK OUT:</label>
        <input type="date" name="checkout" id="checkout" required>
        <label for="hab"><br>HABITACIONES:</label>
        <select name="hab" id="hab" required>
            <option value="HABITACION SIMPLE">HABITACION SIMPLE</option>
            <option value="HABITACION MATRIMONIAL">HABITACION MATRIMONIAL</option>
            <option value="Habitacion Doble">HABITACION DOBLE</option>
            <option value="Habitacion Triple">HABITACION TRIPLE</option>
            <option value="Habitacion Cuadruple">HABITACION CUADRUPLE</option>
        </select>
        <label for="adultos"><br>ADULTOS:</label>
        <select name="adultos" id="adultos" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <label for="niños"><br>NIÑOS:</label>
        <select name="niños" id="niños" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <label for="pago"><br>METODO DE PAGO:</label>
        <select name="pago" id="pago" required>
            <option value="YAPE">YAPE</option>
            <option value="PLIM">PLIM</option>
            <option value="TRANSFERENCIA BANCARIA">TRANSFERENCIA BANCARIA</option>
        </select>
        <p></p>
        <button type="submit" name="submit">AGREGAR</button>
    </form>
</div>
</div>  
</div>
</div>
<!-- reservation-information -->

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/81.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/822.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/83.jpg" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">HABITACIONES<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>

        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/CC1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/CC2.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/CC3.jpg" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">RESTAURANTE<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>

        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/444.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/103.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/222.jpg" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">GALERIA<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->

<?php 
include 'footer.php';?>
