<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Method Class</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen transition-all duration-1000 overflow-hidden">
    <main class=" p-5 m-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-4xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Class (Attribute/Methods)
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px]">
                <?php
                    class Vehicle{
                        // Attributes
                        public $brand;
                        public $refer;
                        public $model;
                        public $color;

                        // Methods
                        public function setAttributes($brand,$refer,$model,$color){
                            $this->brand = $brand;
                            $this->refer = $refer;
                            $this->model = $model;
                            $this->color = $color;
                        }
                        public function getAttributes(){
                            return '<ul class=" mt-4 flex justify-center items-center gap-6 ring-2 ring-white/25 rounded p-2">
                                        <li> <b class=" text-sky-500">Brand:</b> '     .$this->brand.'</li>
                                        <li> <b class=" text-sky-500">Refer:</b>  '     .$this->refer.'</li>
                                        <li> <b class=" text-sky-500">Model:</b>  '     .$this->model.'</li>
                                        <li> <b class=" text-sky-500">Color:</b>  '     .$this->color.'</li>
                                    </ul>';
                        }
                    }
                    
                    $vh1 = new Vehicle;
                    $vh1->setAttributes("Toyota","Prado","2022","Black");
                    echo $vh1->getAttributes();

                    $vh2 = new Vehicle;
                    $vh2->setAttributes("Volkswagen","Golf","2020","Green");
                    $vh2->refer = 'Tiguan';
                    echo $vh2->getAttributes();

                    $vh3 = new Vehicle;
                    $vh3->setAttributes("Renault","Twingo","2012","Pink");
                    echo $vh3->getAttributes();

                    $vh4 = new Vehicle;
                    $vh4->setAttributes("Bugatti","Veiron","2012","Gold");
                    echo $vh4->getAttributes();
                    
                ?>
            </section>  
    </main>
</body>
</html>
