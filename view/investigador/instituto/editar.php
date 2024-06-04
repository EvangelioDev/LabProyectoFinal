<?php include_once ("../../../template/header.php") ?>
<?php include_once("../../../controller/Controller_instituto.php") ?>
<?php include_once("../../../models/Instituto.php") ?>

<?php 

    $control = new Controller_instituto();

    if(isset($_GET["cod"]))
    {
        $instituto = new Instituto();
        $id = $_GET["cod"];
        $instituto->parseArray($control->loadInstituto($id));
    }

    if(isset($_POST["id_instituto"])){
        $instituto_new = $_POST;
        $control->update($instituto_new);
    }
?>


<div class="box-form">
    <div class="form-container">
    <form action="" method="get">
                <h2>ACTUALIZAR INSTITUTO</h2>
                <input type="hidden" name="id_instituto" value="<?= $instituto->$id ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value="<?= $instituto->nombre ?>">

                <label for="codigo">Codigo:</label>
                <input type="text" id="codigo" name="codigo" required value="<?= $instituto->codigo ?>">
                <div class="form-group">
                    <select name="id_facultad">
                      
                        <?php
                            $item = "<option value = ".$instituto->id." > ".$instituto->nombre."</option>";
                            print($item);
                        ?>
                   
                    </select>
                </div>
        
                <div class="box-btn">
                    <button type="submit">Actualizar</button>
                    <a href="./index.php" class="btn-3">Volver</a>
                </div>
            </form>
    </div>
</div>

<?php include ("../../../template/footer.php") ?>