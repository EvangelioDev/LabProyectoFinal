<?php include_once ("../../template/header.php") ?>
<?php include_once("../../controller/Controller_categoria.php") ?>
<?php include_once("../../models/Categoria.php") ?>
<?php include_once("../../models/Instituto.php") ?>
<?php include_once("../../controller/Controller_instituto.php") ?>
<?php include_once("../../controller/Controller_investigador.php") ?>

<?php 

    $control = new Controller_categoria();
    $control_inst = new Controller_instituto();
    $control_inv = new Controller_investigador();

    $all_instituto = $control_inst->loadData();
    $all_categoria = $control->loadData();

    if(isset($_GET["codigo"])){
        $investigador_ob = $_GET;

        $control_inv->insert($investigador_ob);
    }

?>


<div class="box-form">
<div class="form-container">
        <form action="" method="get">
            <h2>REGISTRAR NUEVO INVESTIGADOR</h2>
            <div class="form-group">
                <div class="form-item">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-item">
                    <label for="codigo">Codigo:</label>
                    <input type="text" id="codigo" name="codigo" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>
                <div class="form-item">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="categoria">Categorias: </label>
                <select name="id_categoria">
                    <?php
                        foreach($all_categoria as $categoria){
                            $cate = new Categoria();
                            
                            $cate->parseArray($categoria);
                            
                            $item = "<option value = ".$cate->id." > ".$cate->nombre."</option>";
                            print($item);
                        }
                    ?>
                </select>

                <label for="instituto">Instituto: </label>
                <select name="id_instituto">
                    <?php
                        foreach($all_instituto as $instituto){
                            $instituto_ob = new Instituto();
                          
                            $instituto_ob->parseArray($instituto);
                            
                            $item = "<option value = ".$instituto_ob->id." > ".$instituto_ob->nombre."</option>";
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

<?php include ("../../template/footer.php") ?>