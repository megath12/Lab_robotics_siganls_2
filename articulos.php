
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


    <div class="centro-div">
        <div>
            <h4>Journal Articles</h4>

            <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Year
            </button>
            <ul class="dropdown-menu dmen">
            
                <li><a href="#a17">2017</a></li>
                <li><a href="#a18">2018</a></li>
                <li><a href="#a19">2019</a></li>
                <li><a href="#a20">2020</a></li>
                <li><a href="#a21">2021</a></li>
                <li><a href="#a22">2022</a></li>
                <li><a href="#a23">2023</a></li>
            
            </ul>
            </div>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </nav>


        </div>
        <ul>

           <!--  ARTICULOS -->

            <?php
                
                echo "<hr> <div id='a23' class='tiye'><p>2023</p></div>";
                $sql = "SELECT * FROM art23;";
                bdart($sql,$conn);

                echo "<hr> <div id='a22' class='tiye'><p>2022</p></div>";
                $sql = "SELECT * FROM art22;";
                bdart($sql,$conn);

                echo "<hr> <div id='a21' class='tiye'><p>2021</p></div>";
                $sql = "SELECT * FROM art21;";
                bdart($sql,$conn);

                echo "<hr> <div id='a20' class='tiye'><p>2020</p></div>";
                $sql = "SELECT * FROM art20;";
                bdart($sql,$conn);

                echo "<hr> <div id='a19' class='tiye'><p>2019</p></div>";
                $sql = "SELECT * FROM art19;";
                bdart($sql,$conn);

                echo "<hr> <div id='a18' class='tiye'><p>2018</p></div>";
                $sql = "SELECT * FROM art18;";
                bdart($sql,$conn);

                echo "<hr> <div id='a17' class='tiye'><p>2017</p></div>";
                $sql = "SELECT * FROM art17;";
                bdart($sql,$conn);

                function bdart($ha,$he){
                    $result = mysqli_query($he,$ha);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $tit=$row['tit'];
                            $rev=$row['revi'];
                            $au=$row['auth'];
                            $doi=$row['doi'];
                            echo "<li>
                            <i class='fa-solid fa-marker pencil'></i>
                            <div>";
                            echo " <a href='$doi' target='_blank'
                            >$tit</a>";
                            echo " <p class='pub-site'>$rev</p>";
                            echo " <p class='pub-aut'>$au</p>";
                            echo " <p class='pub-doi'>$doi</p>";
                            echo " </div></li>";
                            echo "<br>";
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