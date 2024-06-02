<?php include ("../../../template/header.php") ?>
<?php include_once ("../../../models/Formacion.php") ?>
<?php include_once ("../../../controller/Controller_formacion.php") ?>


<?php 
    $control = new Controller_formacion();

    if(isset($_GET["Id_DetalleFormacion"])){
        $id_formacion = $_GET["Id_DetalleFormacion"];
        $control->delete($id_formacion);
    }
    $all_formacion = $control->loadData();
    $count_formacion = 1;
?>

<div class="container_table">
    <h2 class="title_table">LISTA DE FORMACION</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVA FORMACION</a></div>
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>id_investigador</th>
                <th>id_nivel_formacion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_formacion as $formacion){?>
            <?php $dataformacion = new Formacion(); $dataformacion->parseArray($formacion)?>
            <tr class = "<?= ($count_formacion % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $dataformacion->id ?></td>
                <td><?= $dataformacion->descripcion ?></td>
                <td><?= $dataformacion->id_investigador ?></td>
                <td><?= $dataformacion->id_nivel_formacion?></td>
          
                <td class="acciones-btn">
                    <a href="./index.php?id_categoria=<?= $dataformacion->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $dataformacion->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>
        <?php $count_formacion++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../../template/footer.php") ?>