<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/tailwind-3.2.1.js"></script>
    <title>Private(Attributes/Methods)</title>
</head>
<body class="bg-gradient-to-r from-cyan-500 to-blue-700 min-h-screen overflow-hidden">
    <main class="m-5 p-5 border-white border-4 rounded-xl mx-auto bg-white/30 max-w-lg">
            <h1 class="m-4 text-center text-2xl text-white  ">
                <a href="../index.php" class="float-left transition hover:text-indigo-800 hover:-translate-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
                Private(Attributes/Methods)
            </h1>
            <section class="bg-black/50 p-5 rounded-xl text-white min-h-[400px] overflow-x-auto">
                    <form action="" method="post" class="m-4 rounded-xl flex flex-col justify-center items-start self-center ring-1 ring-indigo-200 p-4 gap-4">
                        <h3 class="text-2xl font-bold mx-auto my-2"><strong>Table Maker</strong> </h3>
                        <label for="num_rows" class="m-0 flex justify-between items-center w-[220px]">
                            <strong>Number of Rows:</strong>
                            <input class="rounded-xl p-1 text-black" type="number" id="num_rows" name="num_rows" min="1" max="40" required>
                        </label>
                        <label for="num_cols" class="m-0 flex justify-between items-center w-[220px]">
                            <strong>Number of Cols:</strong>
                            <input class="rounded-xl p-1 text-black" type="number" id="num_cols" name="num_cols" min="1" max="20" required>
                        </label>
                        <button class="mx-auto mt-4 bg-black/40 border-white/60 border p-2 rounded-md transition hover:scale-110 hover:bg-white/40 hover:text-black/40">Render Table</button>
                    </form>
                    <?php
                        class RenderTable{
                            private $nr;
                            private $nc;
                            public function __construct($nr,$nc)
                            {
                                $this->nr = $nr;
                                $this->nc = $nc;
                                $this->renderTableHeader();
                                $this->renderTableBody();
                                $this->renderTableFooter();


                            }
                            private function renderTableHeader(){
                                echo '<table class="border-collapse my-4 mx-auto">';
                            }
                            private function renderTableBody(){
                                for ($i=1; $i <= $this->nr ; $i++) { 
                                    echo '<tr>';
                                        for ($j=1; $j <= $this->nc ; $j++) { 
                                            echo '<td class="p-1 ring-1 ring-lime-100 text-center">R'.$i.'C'.$j. '</td>';
                                        }
                                    echo '</tr>';
                                }
                            }
                            private function renderTableFooter(){
                                echo '</table>';
                            }

                        }
                        if($_POST){
                            $nr = $_POST['num_rows'];
                            $nc = $_POST['num_cols'];

                            $rt = new RenderTable($nr,$nc);
                            
                            

                        }
                    ?>
            </section>  
    </main>
</body>
</html>
