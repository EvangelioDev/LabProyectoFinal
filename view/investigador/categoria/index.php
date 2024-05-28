<?php $home = "https://localhost/propuesta/" ?>

<?php include_once ("../../../template/header.php") ?>
<?php include_once ("../../../models/Categoria.php") ?>
<?php include_once ("../../../controller/Controller_categoria.php") ?>


<?php 
    $control = new Controller_categoria();
    $all_categoria = $control->loadData();
    $count_categoria = 1;
?>

<div class="container_table">
    <h2 class="title_table">LISTADO DE CATEGORIAS</h2>
    <div class="box"><a class="btn-nv" href="./create.php">AGREGAR NUEVA CATEGORIA</a></div>
    
    <table class="contenedor-tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoria</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all_categoria as $categoria){?>
            <?php $datacategoria = new Categoria(); $datacategoria->parseArray($categoria)?>
            <tr class = "<?= ($count_categoria % 2 == 0) ? 'fila-activa':''?>">
                <td><?= $datacategoria->id ?></td>
                <td><?= $datacategoria->nombre?></td>
          
                <td class="acciones-btn">
                    <a href="./index.php?cod_user=<?= $datacategoria->id?>" class="btn-1">Eliminar</a>
                    <a href="./editar.php?cod=<?= $datacategoria->id ?>" class="btn-2">Editar</a>
                </td>
            </tr>

        <?php $count_categoria++; } ?>
        </tbody>
    </table>
</div>
<?php include ("../../../template/footer.php") ?>