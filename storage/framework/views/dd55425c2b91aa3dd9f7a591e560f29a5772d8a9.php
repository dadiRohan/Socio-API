<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Socio</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo url('assets/bootstrap.min.css'); ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
        background-image: url("images/socio2.webp");
        /* background-repeat: no-repeat; */
        background-size: 50%;
        /* background-attachment: fixed;
        background-position: center; */
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo url('assets/css/app.css'); ?>" rel="stylesheet">
</head>
<body>
    
    <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="<?php echo url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
      
  </body>
</html><?php /**PATH C:\xampp\htdocs\Socio-API\resources\views/layouts/app-master.blade.php ENDPATH**/ ?>