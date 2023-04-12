<nav id="navbar_main" class="mobile-offcanvas py-4">
    <div class="box-content box-content-main">
    <div class="offcanvas-header">  
        <button class="btn-close float-end"></button>
    </div>
    <a class="navbar-brand" href="#"></a>
    <ul class="navbar-nav py-2">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('main')); ?>">
            <span class="nav-link-text <?php if(isset($module)){if($module=='main'){echo('titulo-seccion');}else{echo('azul');}}else{echo('titulo-seccion');} ?>">Sobre nosotros</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('personal')); ?>">
            <span class="nav-link-text <?php if($module=='personal' || $module=='perfil_personal'){echo('titulo-seccion');}else{echo('azul');} ?>">Personal</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('list_pacientes')); ?>">
            <span class="nav-link-text <?php if($module=='list_pacientes' || $module=='perfil_paciente'){echo('titulo-seccion');}else{echo('azul');} ?>">Pacientes</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('ejercicios')); ?>">
            <span class="nav-link-text <?php if($module=='ejercicios'){echo('titulo-seccion');}else{echo('azul');} ?>">Ejercicios</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('apoyo_cuidador')); ?>">
            <span class="nav-link-text <?php if($module=='apoyo_cuidador'){echo('titulo-seccion');}else{echo('azul');} ?>">Apoyo al cuidador</span>
        </a>
        </li>
        <li class="nav-item mb-5">
        <a class="nav-link px-4 py-1" href="?mdl=<?php echo(base64_encode('tutorial')); ?>">
            <span class="nav-link-text <?php if($module=='tutorial'){echo('titulo-seccion');}else{echo('azul');} ?>">Tutorial</span>
        </a>
        </li>
        <li class="text-center mt-5">
        <img id="logo-oculto" class="w-50" src="views/img/hraei.png" alt="hraei" style="display:none;">
        <img id="logo-vista" class="w-100" src="views/img/hraei.png" alt="hraei">
        </li>
    </ul>
    </div>
</nav>