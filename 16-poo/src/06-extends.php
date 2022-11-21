<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Extends</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen overflow-hidden">
    <main class="m-5 p-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-4xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Extends
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px]">
                <?php
                    class Operation{
                        protected $number1;
                        protected $number2;
                        public function __construct($number1,$number2)
                        {
                            $this->number1 = $number1;
                            $this->number2 = $number2;

                        }

                    }
                    class Addition extends Operation{
                        public function showResult(){
                            return'<p class="p-2 mb-4 rounded ring-1 gap-5 ring-white/20 text-center">
                                    The Addition is: <b>'.($this->number1 + $this->number2).'</b>
                                    </p>'; 
                        }
                    }
                    class Subtraccion extends Operation{
                        public function showResult(){
                            return'<p class="p-2 mb-4 rounded ring-1 gap-5 ring-white/20 text-center">
                                    The subtraccion is: <b>'.($this->number1 - $this->number2).'</b>
                                    </p>'; 
                        }
                    }
                    class Product extends Operation{
                        public function showResult(){
                            return'<p class="p-2 mb-4 rounded ring-1 gap-5 ring-white/20 text-center">
                                    The product is: <b>'.($this->number1 * $this->number2).'</b>
                                    </p>'; 
                        }
                    }
                    class Division extends Operation{
                        public function showResult(){
                            return'<p class="p-2 mb-4 rounded ring-1 gap-5 ring-white/20 text-center">
                                    The division is: <b>'.($this->number1 / $this->number2).'</b>
                                    </p>'; 
                        }
                    }
                    class Pow extends Operation{
                        public function showResult(){
                            return'<p class="p-2 mb-4 rounded ring-1 gap-5 ring-white/20 text-center">
                                    The pow is: <b>'.(pow($this->number1,$this->number2)).'</b>
                                    </p>'; 
                        }
                    }
                    $oper = new Addition(64,256);
                    echo $oper->showResult();
                    $oper = new Subtraccion(512,64);
                    echo $oper->showResult();
                    $oper = new Product(12,9);
                    echo $oper->showResult();
                    $oper = new Division(1024,32);
                    echo $oper->showResult();
                    $oper = new Pow(2,2);
                    echo $oper->showResult();
                    $oper = new Addition(2,2);
                    echo $oper->showResult();
                ?>
            </section>  
    </main>
</body>
</html>

