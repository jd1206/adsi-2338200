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
            <?php echo "<h1 class='mt-5 text-warning'> Forms Post </h1>"?>
                <form action="" method="POST">
					<div class="mb-3">
						<label for="name" class="form-label">Full Name:</label>
						<input type="text" class="form-control 
            <?php if($_POST and empty($_POST['name'])): ?>is-invalid<?php endif ?> "    
            name="name" id="name">
            <div class="invalid-feedback">
              Please enter a Name
            </div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control
            <?php if($_POST && empty( $_POST['email'])): ?>is-invalid<?php endif ?> " 
              name="email" id="email">
            <div class="invalid-feedback">
              Please enter an email
            </div>
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="Send Form">
					</div>
				</form>
        <form action="23-forms-post.php" method="POST">
						<input type="submit" class="btn btn-light" value="Clear Form">
        </form>
        <?php if(!empty($_POST['name']) && !empty($_POST['email'])): ?>
          <?php if ($_POST): ?>
            <BR>
            <div class="alert alert-success">
              <strong>Full Name:</strong> <?php echo $_POST['name']; ?>
              <br>
              <strong>Email:</strong> <?php echo $_POST['email']; ?>
            </div>
            </BR>
            <?php endif ?>
          <?php endif ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>