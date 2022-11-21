<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title><?="Hello World"?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">PHP & Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Main Menú</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-white " aria-current="page" href="11-conditional-switch.php">11-Conditionals Switch</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            
            <div class="cold-6 offeset-md-3 text-center lh-lg">
            <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Conditionals Switch</h1>"; ?>
            <?php
                    $day = date('n');
                    switch ($day) {
                      case 1:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item ">January</li>
                              <li class="list-group-item">February</li>
                              <li class="list-group-item">March</li>
                            </ul>';
                        break;
                      case 2:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item">January</li>
                              <li class="list-group-item ">February</li>
                              <li class="list-group-item">March</li>
                            </ul>';
                        break;
                      case 3:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item">January</li>
                              <li class="list-group-item">February</li>
                              <li class="list-group-item ">March</li>
                            </ul>';
                        break;
                      case 4:
                        echo '<ul class="list-group">
                                <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                <li class="list-group-item ">April</li>
                                <li class="list-group-item">May</li>
                                <li class="list-group-item">June</li>
                              </ul>';
                        break;
                      case 5:
                        echo '<ul class="list-group">
                                  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                  <li class="list-group-item">April</li>
                                  <li class="list-group-item ">May</li>
                                  <li class="list-group-item">June</li>
                                </ul>';
                        break;				
                      case 6:
                        echo '<ul class="list-group">
                                  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                  <li class="list-group-item">April</li>
                                  <li class="list-group-item">May</li>
                                  <li class="list-group-item ">June</li>
                                </ul>';
                        break;
                      case 7:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                              <li class="list-group-item ">July</li>
                              <li class="list-group-item">Agust</li>
                              <li class="list-group-item">September</li>
                            </ul>';
                        break;	
                      case 8:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                              <li class="list-group-item">July</li>
                              <li class="list-group-item ">Agust</li>
                              <li class="list-group-item">September</li>
                            </ul>';
                        break;
                      case 9:
                        echo '<ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                            <li class="list-group-item">July</li>
                            <li class="list-group-item">Agust</li>
                            <li class="list-group-item ">September</li>
                          </ul>';
                        break;
                      default:
                        echo '<ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Fourth Trimester</li>
                            <li class="list-group-item ">Final de >Año</li>
                          </ul>';
                        break;
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>