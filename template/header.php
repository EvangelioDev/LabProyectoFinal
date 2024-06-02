<?php $home = "https://localhost/propuestas/" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de propuesta</title>

    <!-- style cotumize -->
    <link rel="stylesheet" href="<?= $home ?>css/estilos.css">
   <!--  <link rel="stylesheet" href="css/datatables.css" />  -->

     <!-- JS QUERY -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.css" />
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>

    <!-- fontawesome para los iconos -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-regular fa-user"></i>
            <h4>Default user</h4>
        </div>

        <div class="options__menu">	
            <ul class="selected">
                <a href="<?=$home?>">
                    <div class="option">
                        <div class="icon_title">
                            <i class="fas fa-home" title="Inicio"></i>
                            <h4>Inicio</h4>
                        </div>
                    </div>
                </a>
            </ul>
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/investigador/">
                        <div class="icon_title">
                            <i class="fa-solid fa-file-pen" title="Investigador"></i>
                            <h4>Investigador</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="<?=$home?>view/investigador/categoria">Categoria</a></li>
                        <li><a href="<?=$home?>view/investigador/instituto">Instituto</a></li>
                        <li><a href="<?=$home?>view/investigador/formacion">Formacion</a></li>
                    </ul>
                </div>
            </ul>
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/propuesta">
                        <div class="icon_title">
                            <i class="fa-solid fa-pen-nib" title="Propuesta"></i>
                            <h4>Propuesta</h4>
                        </div>
                    </a>
                   
                    <ul class="sub-menu hidden">
                        <li><a href="#">Linea de Inv.</a></li>
                        <li><a href="#">Fuente Legal</a></li>
                        <li><a href="#">Presupuesto</a></li>
                    </ul>
                </div>
            </ul>
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/organismo">
                        <div class="icon_title">
                            <i class="fa-solid fa-building" title="Organismo"></i>
                            <h4>Organismo</h4>
                        </div>
                    </a>
                </div>
            </ul>
            
            <ul class="selected">
                <div class="option">
                    <a href="<?=$home?>view/institucion">
                        <div class="icon_title">
                            <i class="fa-solid fa-landmark" title="Facultad"></i>
                            <h4>Institucion</h4>
                        </div>
                    </a>
                    
                    <ul class="sub-menu hidden">
                        <li><a href="#">Facultad</a></li>
                    </ul>
                </div>
            </ul>
        </div>

    </div>
    <main>