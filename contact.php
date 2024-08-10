<?php include 'header.php';
include 'db.php';
?>
<div class="container">

<h1 class="title">CONTACTO</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.157597963702!2d-76.2112253767084!3d-13.7089031250681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110658a6f5eaaab%3A0x5be310f01c9d3aef!2sHOSTAL%20MIRADOR!5e0!3m2!1ses-419!2spe!4v1718347772057!5m2!1ses-419!2spe" 
    width="1000" 
    height="350" 
    style="border:0;" 
    ></iframe>

       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>CONTACTOS</h4>
			   <form action="submit_form.php" method="POST">
        <br><label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
        <br><br>
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>