<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Academia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('profesores.index')); ?>"><i class="fas fa-cogs"></i> Gestionar Profesores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('asignaturas.index')); ?>"><i class="fas fa-cogs"></i> Gestionar Asignaturas</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<?php /**PATH C:\srv\laravel\profesores\academia\resources\views/components/nav.blade.php ENDPATH**/ ?>