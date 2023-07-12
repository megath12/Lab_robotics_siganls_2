<?php
  include './code.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Medical Robotics & Biosignals Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/integrantes.css">
    <link rel="icon" type="image/png" href="./assets/images/logo_pestaña.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Open+Sans:wght@300&family=Roboto+Mono:ital@1&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
  
</head>
<body>
    
    <nav id="nav-bar"></nav>

    <div> <!-- //apertura investigadores -->

      <br>
      <div class="investigadores">
        <p>Investigadores</p>      
      </div><br>

        <div class="row">



          <div class="col-md-3 col-sm-6">  
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <img src="./assets/images/integrantes/mariana.jpg" alt="" class="ta-im">
                <h2 class="accordion-header">
                  <button class="accordion-button accordion-button-color collapsed invsb" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p class="ta-nom"><b>Nombre Completo</b></p>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="ta-gra">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non veritatis sed necessitatibus aperiam quasi earum dignissimos ipsa libero? Excepturi aperiam sed quam autem, eaque culpa alias commodi dolorum ad obcaecati?
                    </div>
                    <div class="ta-inv">
                      <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
            </div>
          </div>



        </div> <!-- // cierre row -->




        <div> <!-- // apertura alumnos -->
          <div class="estudiantes">
            <p>Estudiantes</p>      
          </div><br>
          <div class="row">



            <div class="col-md-3 col-sm-6">  
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <img src="./assets/images/integrantes/mariana-ballesteros.jpg" alt="" class="ta-im">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed estb" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                      <p class="te-nom"><b>Nombre Completo</b></p>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
  
                      <div class="ta-gra">
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </div> <br>
                      <div class="te-proy">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ipsam alias pariatur culpa inventore eius praesentium ad cum voluptatem,
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
              </div>
            </div>  <!-- cierre alumnos -->



    </div>


    <footer id="foot-er" class="footer"></footer>
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/b7d32fcfa1.js" crossorigin="anonymous"></script>
      <script src="./assets/scripts/integrantes.js"></script>
      <script src="./assets/scripts/script.js"></script>
      
</body>
</html>