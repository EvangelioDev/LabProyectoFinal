<?php include("../../../template/header.php") ?>
<?php include("../../../controller/Controller_instituto.php")?>
<?php include("../../../controller/Controller_facultad.php")?>
<?php include("../../../models/Facultad.php") ?>
<?php
$control = new Controller_instituto();
$control_facultad = new Controller_facultad();

if(isset($_GET["codigo"])){
    $instituto = $_GET;
    $control->insert($instituto);
    echo ("<script>alert('Registrado correctamente');</script>");
}

$all_facultad = $control_facultad->loadData();

?>

<div class="box-form">
    <div class="form-container">
            <form action="" method="get">
                <h2>REGISTRAR NUEVO INSTITUTO</h2>
                
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="codigo">Codigo:</label>
                <input type="text" id="codigo" name="codigo" required>
                <div class="form-group">
                    <select name="facultad">
                        <?php
                            foreach($all_facultad as $facultad){
                                $facultad_ob = new Facultad();
                                $facultad_ob->parseArray($facultad);
                                
                                $item = "<option value = ".$facultad_ob->id." > ".$facultad_ob->nombre."</option>";
                                print($item);
                            }
                        ?>
                    </select>
                </div>
               
                
                <div class="box-btn">
                    <button type="submit">Registrar</button>
                    <a href="./index.php" class="btn-3">Volver</a>
                </div>
            </form>
    </div>
</div>

<?php include ("../../../template/footer.php")?>