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
          <a class="nav-link active text-white " aria-current="page" href="28-upload-files.php">28-Upload files</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container ">
        <div class="row ">
            <div class="cold-6 offeset-md-3 text-center lh-lg">
                <?php echo "<h1 class='mt-5 border border-top-0 border-start-0 border-end-0'>Upload files</h1>"; ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
            <br>
            <div class="mb-3">
                        <figure class="figure">
                            <img src="https://via.placeholder.com/250" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
            <button class="btn btn-dark btn-upload" type="button"> 
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Select Photo

            </button>

            <input type="file" class="form-control d-none" id="photo" name="photo" accept="image/*">
          </div>
          <div class="mb-3">
            <button class="btn btn-success" type="submit"> Upload Photo </button>
          </div>
        </form>
        <?php if ($_FILES): ?>
          <?php if ($_FILES['photo']['error'] > 0): ?>
            <div class="alert alert-danger">
              <strong>Error:</strong> You must select an image.
            </div>
          <?php else: ?>
            <?php move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$_FILES['photo']['name']) ?>
            <div class="alert alert-success">
              <strong>
                File has been uploaded successfully!
              </strong>
              <li>
                <?php echo $_FILES['photo']['name'] ?>
              </li>
              <li>
                <?php echo $_FILES['photo']['type'] ?>
              </li>
              <li>
                <?php echo round($_FILES['photo']['size'] / 1024) ?> KB
              </li>
            </div>  
          <?php endif ?>
        <?php endif ?>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-upload').click(function() {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        });
    </script>
</body>
</html>