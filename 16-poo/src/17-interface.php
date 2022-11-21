<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Interface</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen overflow-hidden">
    <main class="m-5 p-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-4xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Interface
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px]">
            <form action="" method="post" class="mx-auto 
                                                 flex 
                                                 flex-col 
                                                 justify-center 
                                                 items-center 
                                                 gap-4" enctype="multipart/form-data">
                <input class="hidden" type="file" name="image" accept="image/*" required>
                <button type="button" class="bg-black/60 
                                              transition
                                             hover:bg-black/80
                                               py-14 
                                               px-10 
                                               rounded-lg btn-select">Select File</button>
                <button class="bg-green-800
                                 transition
                               hover:bg-green-600
                                 py-4 
                                 px-7 
                                 rounded-lg"> Upload Image</button>
            </form>
            <?php
                interface Image {
                    public function uploadImage($file);
                }

                class Upload implements Image {
                    private $file;

                    public function uploadImage($file) {
                        $this->file = $file;
                        move_uploaded_file($_FILES['image']['tmp_name'], $this->file);
                        echo '<p class="bg-green-400 my-4 mb-2 text-black/50 p-2 ring-1 ring-white/50 rounded"> 
                                Upload Image Successfully! 
                              </p>';
                    }
                }
                if ($_FILES) {
                    $ui = new Upload();
                    $ui->uploadImage('public/uploads/'.$_FILES['image']['name']);
                }
            ?>
            </section>  
    </main>
    <script>
        const btnSelect = document.querySelector('.btn-select')
        btnSelect.addEventListener('click', e => {
            document.querySelector('input[type=file]').click()
        })
    </script>
</body>
</html>
