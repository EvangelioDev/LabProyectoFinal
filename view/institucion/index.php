<?php include_once ("../../template/header.php") ?>
<?php include_once ("../../controller/Controller_instituto.php") ?>
<?php include_once ("../../models/Instituto.php") ?>

<?php
    $control = new Controller_instituto();

    if(isset($_GET["cod_inst"]))
    {
        $id = $_GET["cod_inst"];

        $control->delete($id);
    }
    
    $all_inst = $control->loadData();
    $count_inst = 1;
?>


<div class="container_table">
    <h2 class="title_table">LISTA DE INSTITUTO</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVO INSTITUTO</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>id_categoria</th>
                <th>id_instituto</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_inst as $inv){?>
            <?php $datainv = new Investigador(); $datainv->parseArray($inv)?>
            <tr class = "<?= ($count_inst % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $datainv->id ?></td>
                <td><?= $datainv->nombre ?></td>
                <td><?= $datainv->codigo ?></td>
                <td><?= $datainv->telefono ?></td>
                <td><?= $datainv->email ?></td>
                <td><?= $datainv->id_categoria ?></td>
                <td><?= $datainv->id_instituto ?></td>
                <td class="acciones-btn">
                    <a href="./index.php?cod_user=<?= $datainv->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $datainv->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $count_inst++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../template/footer.php") ?>