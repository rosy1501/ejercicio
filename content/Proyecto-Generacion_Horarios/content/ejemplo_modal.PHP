<?php include ('../header/header.php'); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Carrera</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php include ("database.php");
$carreras = new Database();
if (isset($_POST) && !empty($_POST)){
    $tNombreCarrera = $carreras->sanitize($_POST['tNombreCarrera']);
    $tDescripcionCarrera = $carreras->sanitize($_POST['tDescripcionCarrera']);
    $tCampus = $carreras->sanitize($_POST['tCampus']);

    $res = $carreras->altacarreras($tNombreCarrera,$tDescripcionCarrera,$tCampus);
    if ($res){
        $message = "Datos insertados con exito";
        $class = "alert alert-success";
    }
    else{ 
        $message = "No se pudieron insertar los datos";
        $class = "alert alert-danger";
    }
    ?>
    <div class="<?php echo $class?>">
        <?php echo $message ?>
    </div>
    <?php
}
?>
<form method="post">
<div class="container">
            <div class="row">
                <div class="col-md-3">
                    <label>Nombre de Carrera</label>
                    <input type="text" name="tNombreCarrera" id="tNombreCarrera" class='form-control' required >
                </div>
                <div class="col-md-3">
                    <label>Descripcion de Carrera</label>
                    <input type="text" name="tDescripcionCarrera" id="tDescripcionCarrera" class='form-control' required >
                </div>
                    <div class="col-md-2">
                        <label>Campus</label>
                        <select class="form-control" name="tCampus" id="tCampus" required>
                            <option value = 0 disable>selecciona el campus</option>
                            <option value = "Manzanillo"> Manzanillo </option>
                            <option value = "Colima"> Colima </option>
                            <option value = "Naranjo"> Naranjo </option>
                        </select>
                    </div> 
        </div>
        </div>
<div class="col-md-12 pull-right">
    <br /> 
    </div>
    </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('../footer/footer.php'); ?>
