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
          <a class="nav-link active text-white " aria-current="page" href="08-oper-comparison.php">08-Operators Comparison</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            <div class="cold-6 offeset-md-3 text-center lh-lg">
                <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Operators Comparison</h1>"; ?>
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
							<td> == </td>
							<td> Is Equal </td>
							<td>5==8;</td>
							<td><?php echo var_dump(5==8); ?></td>
						</tr>
						<tr>
							<td> != </td>
							<td> Is not Equal </td>
							<td>5!=8;</td>
							<td><?php echo var_dump(5!=8); ?></td>
						</tr>
						<tr>
							<td> <> </td>
							<td> Is not Equal</td>
							<td>5<>8;</td>
							<td><?php echo var_dump(5<>8); ?></td>
						</tr>
						<tr>
							<td> > </td>
							<td> Great than </td>
							<td>5>8;</td>
							<td><?php echo var_dump(5>8); ?></td>
						</tr>
						<tr>
							<td> < </td>
							<td> Less than </td>
							<td>5<8;</td>
							<td><?php echo var_dump(5<8); ?></td>
						</tr>
						<tr>
							<td> >= </td>
							<td> Is Great or Equal than</td>
							<td>5>=8;</td>
							<td><?php echo var_dump(5>=8); ?></td>
						</tr>
						<tr>
							<td> <= </td>
							<td> Is less or Equal than </td>
							<td>5<=8;</td>
							<td><?php echo var_dump(5<=8); ?></td>
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