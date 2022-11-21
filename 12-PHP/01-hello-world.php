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
                <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>HEllO WORLD!</h1>"; ?>
                <?php print('<p class="m-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur a incidunt nihil porro dolores reiciendis magnam, voluptatem soluta cum, accusamus veniam placeat, tenetur hic atque maiores aperiam labore aliquam aspernatur. Fuga nesciunt perspiciatis perferendis accusantium, pariatur cum vero ullam veniam qui aspernatur rem, harum corrupti natus quibusdam similique dolore eos accusamus quaerat itaque, sint suscipit praesentium at. Reiciendis, quae quos. Deleniti voluptates ratione expedita eaque, nostrum ipsam ducimus provident quo obcaecati illo saepe veritatis modi eius corporis eos id maiores reprehenderit dolore eligendi est. Incidunt doloremque expedita hic rem dolore, ducimus quaerat minus natus soluta asperiores, laboriosam cumque? Repudiandae, culpa.</p>') ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>