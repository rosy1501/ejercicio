<?php include('../header/header.php'); ?>

<div class="col-md-4">
    <label>Nombre del Docente</label> 
    <select id="tNombreDocente" name="tNombreDocente" class="form-control">
        <option disabled selected>Seleccione el Nombre del docente</option>
        <?php
            $query = $mysqli->query("SELECT * FROM cat_docentes");
            while ($valores = mysqli_fetch_array($query)){

                echo "<option value=".$valores['eCodDocente'].">".$valores['tNombreDocente'].'</option>';
            }
            ?>
        </select>
</div>


<?php include('../footer/footer.php'); ?>
