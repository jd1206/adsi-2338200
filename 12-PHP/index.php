<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title><?="Main menú (PHP)"?></title>
    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark sticky-top border-bottom border-danger">
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
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="01-hello-world.php">01-Hello World</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="02-info.php">02-Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="03-comments.php">03-Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="04-variables.php">04-Variable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="05-strings.php">05-Strings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="06-oper-arithmetics.php">06-Operators Arithmetics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="07-oper-assigments.php">07-Operations Assigments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="08-oper-comparison.php">08-Operators Comparison</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="09-opers-logics.php">09-Operators Logics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="10-conditionals.php">10-Conditionals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        
        <div class="row">
            <div class="cold-md-6 offeset-md-3 text-center ">
                <?php echo "<h1 class='m-5 bg-dark p-4 rounded-4 text-white'>Main menú (PHP)</h1>"; ?>
                
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 24rem;">
                    <a href="01-hello-world.php" class=" btn btn-white text-start d-flex align-items-center btn-outline-dark ">
                        <span class="btn btn-dark rounded-4 me-2">01</span>Hello-world
                    </a>
                    <a href="02-info.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">02</span>Info
                    </a>
                    <a href="03-comments.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">03</span>Comments
                    </a>
                    <a href="04-variables.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">04</span>Variables
                    </a>
                    <a href="05-strings.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">05</span>Strings
                    </a>
                    <a href="06-oper-arithmetics.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">06</span>Oper-aritmetic
                    </a>
                    <a href="07-oper-assigments.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">07</span>Oper-assigments
                    </a>
                    <a href="08-oper-comparison.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">08</span>Oper-comparision
                    </a>
                    <a href="09-opers-logics.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">09</span>Oper-logics
                    </a>
                    <a href="10-conditionals.php" class=" btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2 ">10</span>Conditionals(IF)
                    </a>
                    <a href="11-conditional-switch.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">11</span> Conditional-switch
                    </a>
                    <a href="12-arrays-index-numeric.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">12</span> Arrays-index-numeric
                    </a>
                    <a href="13-arrays-associative.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">13</span> Arrays-associative
                    </a>
                    <a href="14-arrays-multi.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">14</span> Arrays-multi
                    </a>
                    <a href="15-loop-while.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">15</span> Loop-while
                    </a>
                    <a href="16-loop-dowhile.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">16</span> Loop-dowhile
                    </a>
                    <a href="17-loop-for.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">17</span> Loop-for
                    </a>
                    <a href="18-loop-foreach.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">18</span> Loop-foreach
                    </a>
                    <a href="19-functions.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">19</span> Functions
                    </a>
                    <a href="20-functions-params.php" class="btn btn-white border-dark text-start btn-outline-dark d-flex align-items-center">
                        <span class="btn btn-dark rounded-4 me-2">20</span> Functions-params
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>