<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA CAZADORA R.L.</title>
  <link rel="stylesheet" href="../css/contactUs.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php include('header.php'); ?> 
    </header>
  
  <section id="section1" data-speed="2" data-type="background">
    <div class="contactTitle">CONTACTENOS!</div>
  </section>

  <section id="section2" data-speed="2" data-type="background">
    <div class="contactInfo">
      <form>
        <div class="form-group">
          <label class="formTitles">Direccion de Email</label>
          <input  class="form-control" id="inputEmail" placeholder="Digite el Email">
          <small id="emailHelp" class="form-text text-muted">Su correo nunca sera compartido con terceros</small>
        </div>
        <div class="form-group">
          <label class="formTitles">Consultas: </label>
          <textarea class="form-control" id="inputText" rows="3"></textarea>
          
        </div>
      </form>
    </div>
    <div>
      <h1>Encuentrenos aqui:</h1>
      <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2859.6391440784187!2d-84.21703663028929!3d10.01589506858883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9c58bb64501%3A0x3c6038ce2d12646!2sTerminal+TUASA+San+Jose!5e0!3m2!1ses-419!2s!4v1484435238118" allowfullscreen=""></iframe>
    </div>
  </section>
  
  
  <footer>
    <?php include('footer.php'); ?> 
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>