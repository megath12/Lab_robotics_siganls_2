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
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link rel="icon" type="image/png" href="./assets/images/logo_pestaña.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Open+Sans:wght@300&family=Roboto+Mono:ital@1&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
  
  </head>

<body>
  <h1 style="display: none;">Medical Robotics and Biosignals</h1>

  <!-- NAVBAR -->
  <nav id="nav-bar"></nav>

  <!-- VIDEO BIENVENIDA -->
  <div id="videoo">
    <h1>Medical Robotics and Biosignals</h1>
  </div>

  <!-- DESCRIPCION E IMAGEN GEOMETRIA/LINEAS -->
  <div class="descrip">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <p id="descripcion"></p>
      </div>

      <div class="col-md-4 col-sm-12 medusa">
        <img src="./assets/images/index/medusa.gif" alt="">
      </div>
    </div>
  </div>
  <div class="imde">
    <img src="./assets/images/index/blue.gif" alt="" >
  </div>
  <br>


  <!-- CONVOCATORIAS -->
  <div>
  <div class="convoca">        
    <p>Convocatoria Posgrado</p>
    <p>Agosto - Diciembre 2023</p>
  </div>
  <div class="row conva">
    <div class="col-md-6 con-up">

    <?php
                $sql = "SELECT * FROM convocatoria WHERE uid=1;";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $im=$row['imagen'];
                        $li=$row['liga'];
                        echo "<a href='$li' target='blank' >";
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($im).'">';
                    }
                }  
      ?> 
        <p><b>Doctorado en Nanociencias y Micro-Nanotecnologías</b></p>
        <span>Escuela Superior de Ingeniería Química e Industrias Extractivas</span><br>
        <span>Unidad Profesional Interdisciplinaria de Biotecnología</span><br>
        <span>Escuela Nacional de Ciencias Biológicas</span> <p></p>
        <i class="fa-solid fa-atom"></i>&nbsp&nbsp<i class="fa-solid fa-dna"></i>&nbsp&nbsp<i class="fa-solid fa-vial-virus"></i>
      </a>
    </div>

    <div class="col-md-6 con-ci">
    <?php
                $sql = "SELECT * FROM convocatoria WHERE uid=2;";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $im=$row['imagen'];
                        $li=$row['liga'];
                        echo "<a href='$li' target='blank' >";
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($im).'">';
                    }
                }  
      ?> 
        <p><b>Maestría en Tecnología de Cómputo</b></p>
        <P>Centro de Innovación y Desarrollo Tecnológico en Cómputo</P>
        <i class="fa-solid fa-microchip"></i>&nbsp&nbsp<i class="fa-solid fa-computer"></i>&nbsp&nbsp<i class="fa-regular fa-file-code"></i>
      </a>
    </div>
  </div>
</div>



<!-- EVENTOS -->
<br>
<div class="seve">
  <p>Eventos</p>
</div>

<div class="row cardes">

<?php
                $sql = "SELECT * FROM eventos;";
                bdart($sql,$conn);
                function bdart($ha,$he){
                    $result = mysqli_query($he,$ha);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $im=$row['imagen'];
                            $li=$row['liga'];
                            echo '<div class="card carde" style="width: 25rem;">';
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($im).'" class="card-img-top">';
                          echo "<div class='card-body'>
                          <a href='$li' target='blank' class='btn btn-primary'>Registro</a>
                          </div></div><br>";
                        }
                    }
                }
?>


</div>

<!--   SECCION FOOTER -->  
<footer id="foot-er" class="footer"></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b7d32fcfa1.js" crossorigin="anonymous"></script>
    <script src="./assets/scripts/index.js"></script>
    <script src="./assets/scripts/script.js"></script>

</body>

</html>