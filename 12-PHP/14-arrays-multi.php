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
          <a class="nav-link active text-white " aria-current="page" href="index.php">01-Hello World</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            <div class="cold-6 offeset-md-3 text-center lh-lg">
            <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Conditionals</h1>"; ?>
                <?php 
					$bicycles = array(
						'Santa Cruz'  => array('Nomad', 'MegaTower', 'HighTower'),
						'Intense'     => array('Carbine', 'Tracer', 'Spider'),
						'Specialized' => array('Enduro', 'Stumjumper', 'Camber')
					);
					//var_dump($bicycles);
				?>
				<table class="table table-striped table-hover table-bordered">
					<?php foreach ($bicycles as $brand => $value): ?>
						<tr>
							<th class="bg-light text-dark"><?php echo $brand ?></th>
							<?php foreach ($value as $reference): ?>
								<td class=" text-dark"><?php echo $reference; ?></td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
				</table>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>