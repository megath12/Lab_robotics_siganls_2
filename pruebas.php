
<?php
    include'./code.php';
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
    <link rel="stylesheet" href="./assets/styles/articulos.css">
    <link rel="icon" type="image/png" href="./assets/images/logo_pestaña.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Open+Sans:wght@300&family=Roboto+Mono:ital@1&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
  
</head>
<body>


    <nav id="nav-bar"></nav>



           <!--  ARTICULOS -->

            <?php
                
                $sql = "SELECT * FROM convocatoria WHERE uid=1;";
                bdart($sql,$conn);

                function bdart($ha,$he){
                    $result = mysqli_query($he,$ha);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $im=$row['imagen'];
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($im).'">';
                        }
                    }
                }
            ?> 
            


    
                  

  
        </ul>
    </div>


    <footer id="foot-er" class="footer"></footer>
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/b7d32fcfa1.js" crossorigin="anonymous"></script>
      <script src="./assets/scripts/scriptIndex.js"></script>
      <script src="./assets/scripts/script.js"></script>
  
    
</body>
</html>