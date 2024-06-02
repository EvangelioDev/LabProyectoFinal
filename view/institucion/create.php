<?php include_once ("../../template/header.php") ?>
<?php include_once("../../controller/Controller_categoria.php") ?>
<?php include_once("../../models/Categoria.php") ?>

<?php 

    $control = new Controller_categoria();

    $all_categoria = $control->loadData();

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
                <select name="categoria">
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
                <select name="instituto">
                    <option value="item1">Item I</option>
                    <option value="item2">Item II</option>
                    <option value="item3">Item III</option>
                    <option value="item4">Item IV</option>
                </select>
            </div>
            
            <div class="box-btn">
                <button type="submit">Registrar</button>
                <a href="./index.php" class="btn-3">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include ("../../template/footer.php") ?>