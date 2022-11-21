<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Method Contruct</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen overflow-hidden">
    <main class="m-5 p-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-4xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Method Contruct
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px]">
                <?php
                    class PlayList{
                        
                        // Attributes
                        private $name;
                        private $artist =  Array();
                        private $album  =  Array();
                        private $image  =  Array();
                        private $year   =  Array();

                        // Methods
                        public function __construct($name){
                            $this->name = $name;

                        }
                        public function setPlaylist($artist,$album,$image,$year){
                            $this->artist[] = $artist;
                            $this->album[] = $album;
                            $this->image[] = $image;
                            $this->year[] = $year;


                        }
                        public function getPlaylist(){
                            echo '<h3 class="text-center text-sky-500 text-2xl"><b>'.$this->name.'</b></h3>';
                            for ($i=0; $i < count($this->artist) ; $i++) { 
                                echo '<ul class="mt-8 flex flex-col justify-center items-center self-center text-center">';
                                echo '<div class="flex  gap-4">';
                                echo '<li> <strong  >Artist:</strong>'.$this->artist[$i].'</li>';
                                echo '<li> <strong>Album:</strong>'.$this->album[$i].'</li>';
                                echo '</div>';
                                echo '<li> <strong>Image:</strong><img src="'.$this->image[$i].'" width="200px"></li>';
                                echo '<li> <strong>Year:</strong>'.$this->year[$i].'</li>';
                                echo '</ul>';
                            }
                        }
                    }
                    $pl = new PlayList('Pop');
                    $pl->setPlaylist('Feid','Prohibidox','https://i.ytimg.com/vi/r__2bKb6I4g/maxresdefault.jpg',2022);
                    $pl->setPlaylist('BadBunny','Yonaguni','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRokYTtHWov2lwpO5aPe6EoPDcaRHwJuHHu5_fx9NSV36Me2nsGfCThn-vNdy6JlfwcydA&usqp=CAU',1991);
                    $pl->setPlaylist('Arcangel','Invicto','data:image/jpeg;base64,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',1991);
                    echo $pl->getPlaylist();

                ?>
            </section>  
    </main>
</body>
</html>
