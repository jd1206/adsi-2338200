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
          <a class="nav-link active text-white " aria-current="page" href="06-oper-arithmetics.php">06-Operators Arithmetics</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            <div class="cold-6 offeset-md-3 text-center lh-lg">
                <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Operators Arithmetics</h1>"; ?>
                <?php 
					$x = 2;
				?>
				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operator</th>
							<th>Description</th>
							<th>Example</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> + </td>
							<td> Addition </td>
							<td>$x=2; $x+2;</td>
							<td><?php echo $x=$x+2; ?></td>
						</tr>
						<tr>
							<td> - </td>
							<td> Substraction </td>
							<td>$x = 2; 5 - $x;</td>
							<td>
								<?php 
									$x = 2; 
									echo $x = 5-$x; 
								?>
							</td>
						</tr>
						<tr>
							<td> * </td>
							<td> Product</td>
							<td>$x=4; $x*5;</td>
							<td>
								<?php 
									$x=4; 
									echo $x=$x*5; 
								?>
							</td>
						</tr>
						<tr>
							<td> / </td>
							<td> Divison </td>
							<td>15/5;</td>
							<td>
								<?php echo 15/5; ?>
							</td>
						</tr>
						<tr>
							<td> % </td>
							<td> Mod</td>
							<td>5%2;</td>
							<td>
								<?php echo 5%2; ?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Increment(Next) </td>
							<td>$x=5; $x++;</td>
							<td>
								<?php 
									$x = 5;
									echo $x++;
								?>
							</td>
						</tr>
						<tr>
							<td> ++ </td>
							<td> Incremento (Pre)</td>
							<td>$x=5; ++$x;</td>
							<td>
								<?php 
									$x = 5;
									echo ++$x;
								?>
							</td>
						</tr>
						<tr>
							<td> -- </td>
							<td> Decrement(Pre) </td>
							<td>$x=5; --$x;</td>
							<td>
								<?php 
									$x = 5;
									echo --$x;
								?>
							</td>
						</tr>
					</tbody>
				</table>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>