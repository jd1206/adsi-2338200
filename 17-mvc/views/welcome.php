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
                <h1 class="text-3xl ">List All Users</h1>
            </headre>
            <section>
                <a href="?method=add" class="flex mt-10 p-2 justify-center items-center gap-2 bg-blue-600 rounded w-2/12 hover:scale-105 text-white hover:bg-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                    Add Users
                </a>
                <table class="w-full mt-4 text-sm text-left text-gray-500 dark:text-gray-400 rounded">
        <thead class=" text-center text-white uppercase bg-black/50 text-xl ">
            <tr class="rounded">
                <th scope="col" class="py-3 px-6 ">
                    Id
                </th>
                <th scope="col" class="py-3 px-6 ">
                    Full Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Photo
                </th>
                <th scope="col" class="py-3 px-6 ">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($data)):?>
                <tr class="bg-black/60 odd:bg-white/20 border-b text-center font-bold text-lg">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $row['id']?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $row['fullname']?>
                    </td>
                    <td class="py-4 px-6">
                        <img src="<?php echo $row['photo']?>" class="w-10 rounded-full mx-auto">
                    </td>
                    <td class="py-4 px-6 flex justify-center items-center">
                        <a href="?method=show&id=<?php echo $row['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-2 mx-2 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </a>
                        <a href="?method=edit&id=<?php echo $row['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-2 mx-2 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                        <a href="javascript:;" data-id="<?php echo $row['id']?>" class="btn-delete bg-red-500 rounded items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-2 mx-2 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </a>
                    </td>
                </tr>
                
            <?php endwhile?>
        </tbody>
        
    </table>
            </section>
        </main>
        <script src="../public/js/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.btn-delete').click(function(event){
                    $id = $(this).attr('data-id')
                    if(confirm ('Are your sure')){
                        window.location.replace('?method=delete&id='+ $id)
                    }
                });
            });
        </script>
    </body>
</html>