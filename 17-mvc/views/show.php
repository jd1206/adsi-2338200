<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MVC - OOP</title>
        <script src="../public/js/tailwind-3.2.1.js"></script>
        <link rel="stylesheet" href="../public/css/custom.css">
    </head>
    <body>
        <main class="my-10 mx-auto p-10 w-8/12 bg-white/50 rounded-xl">
            <headre class="text-black/60 flex gap-4 justify-center items-center pb-4 border-b-2 border-white/90">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <h1 class="text-3xl ">Information</h1>
            </headre>
            <section>
                <a href="./" class="flex mt-10 p-2 justify-center items-center gap-2 bg-blue-600 rounded w-2/12 hover:scale-105 text-white hover:bg-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                    Back list Users
                </a>
                

        
            <?php while($row = mysqli_fetch_array($data)):?>
                
                    <div class="flex flex-col justify-center items-center">
                        <img src="<?php echo $row['photo']?>" class="w-10 rounded-full mx-auto">
                        <div>

                            <?php  echo 'Name: '. $row['fullname']?>
                        </div>
                        <div>

                            <?php echo 'Rol: '.$row['role']?>
                        </div>
                    </div>
                   
                   
                   
                </tr>
            <?php endwhile?>
       
        
    
            </section>
        </main>
        <script src="../public/js/jquery-3.6.0.min.js"></script>
        <script>
            
        </script>
    </body>
</html>