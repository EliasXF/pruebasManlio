
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
 
<?php include('panel.php');?>
  <link rel="stylesheet" href="<?=base_url()?>/public/Assets/cargar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


    <body>

  <div class="wrapper">
    <header>Desliza o da click para subir un archivo</header>
    <form action="#">
      <input class="file-input" type="file" name="file" hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Busca tu archivo</p>
    </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
  </div>
  <script src="<?=base_url()?>/public/Assets/Js/cargascript.js"></script>
</body>
</html>