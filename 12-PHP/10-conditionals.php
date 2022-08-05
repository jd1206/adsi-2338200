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
          <a class="nav-link active text-white " aria-current="page" href="10-conditionals.php">10-Conditionals</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            <div class="cold-6 offeset-md-3 text-center lh-lg">
                <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Conditionals</h1>"; ?>
                <?php $day = date('D'); ?>
				<?php if ($day == "Mon"): ?>
					<span class="badge rounded-pill text-bg-danger">Todays is Monday</span>
				<?php elseif ($day == "Tue"): ?>
					<span class="badge rounded-pill text-bg-danger">Todays is Tuesday</span>
				<?php elseif ($day == "Wed"): ?>
					<span class="badge rounded-pill text-bg-danger">Todays is Wednesday</span>
				<?php elseif ($day == "Thu"): ?>
					<span class="badge rounded-pill text-bg-danger">Todays is Thursday</span>
				<?php elseif ($day == "Fri"): ?>
					<span class="badge rounded-pill text-bg-danger">Todays is Friday</span>
				<?php else: ?>
					<span class="badge rounded-pill text-bg-success">Happy Weekend!</span>
				<?php endif ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>