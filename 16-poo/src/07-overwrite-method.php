<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Overwrite Method </title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen overflow-hidden">
    <main class="m-5 p-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-4xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Overwrite Method    
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px]">
            <?php
              class VideoGame {
                protected $name;
                protected $platform;

                public function __construct($name, $platform) {
                  $this->name     = $name;
                  $this->platform = $platform;
                }

                public function showVideoGame() {
                  echo ' <b>Platform:</b> '.$this->platform.'</p>';
                }

              }

              class Game extends VideoGame {
                  public function showVideoGame() {
                    echo '<p class="mb-2 p-4 ring-1 ring-white/50 rounded"> <b>Name:</b> '.$this->name;
                    parent::showVideoGame();
                  }
              }
              $gm = new Game('Mario Oddysey', 'Nintendo Switch');
              $gm->showVideoGame();

              $gm = new Game('Halo Infinite', 'Xbox Series X');
              $gm->showVideoGame();

              $gm = new Game('God of War Ragnarok', 'Play Station 5');
              $gm->showVideoGame();
            ?>
            </section>  
    </main>
</body>
</html>
