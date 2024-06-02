<?php include ("../../../template/header.php") ?>
<?php include_once ("../../../models/Instituto.php") ?>
<?php include_once ("../../../controller/Controller_instituto.php") ?>


<?php 
    $control = new Controller_instituto();

    if(isset($_GET["id_instituto"])){
        $id_categoria = $_GET["id_instituto"];
        $control->delete($id_categoria);
    }
    $all_instituto = $control->loadData();
    $count_instituto = 1;
?>
<div class="container_table">
    <h2 class="title_table">LISTADO DE INSTITUTO</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVO INSTITUTO</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>id_facultad</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_instituto as $instituto){?>
            <?php $data_instituto = new Instituto(); $data_instituto->parseArray($instituto)?>
            <tr class = "<?= ($count_instituto % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $data_instituto->id ?></td>
                <td><?= $data_instituto->nombre?></td>
                <td><?= $data_instituto->codigo?></td>          
                <td><?= $data_instituto->id_facultad?></td>          
                <td class="acciones-btn">
                    <a href="./index.php?id_categoria=<?= $data_instituto->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $data_instituto->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>
        <?php $count_instituto++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../../template/footer.php") ?>