@extends('layouts.app')
@section('title', 'Examples Blade')
@section('content')
    <section class="my-5">
        <h1 class=" mt-10 text-center text-4xl">Examples Blade</h1>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">If - ElseIf - Else</h2>
        
        <h2>
            @if (date('l') == 'Monday')
            <h3 class="mt-10 text-center text-2xl" >Today is: Monday</h3>
            @elseif(date('l') == 'Tuesday')
            <h3 class="mt-10 text-center text-2xl">Today is: Tuesday</h3>
            @elseif(date('l') == 'Wednesday')
            <h3 class="mt-10 text-center text-2xl">Today is: Wednesday</h3>
            @elseif(date('l') == 'Thursday')
            <h3 class="mt-10 text-center text-2xl">Today is: Thursday</h3>
            @elseif(date('l') == 'Friday')
            <h3 class="mt-10 text-center text-2xl">Today is: Friday</h3>
            @else
            <h3 class="mt-10 text-center text-2xl">Today is: Saturday or Sunday</h3>
            @endif
        </h2>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">Switch</h2>
        <h2>
            <section class="d-flex justify-center mt-10 ">
                <h1 class="text-center"><button type="button" class="focus:outline-none  text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 btn1" onclick = "funcion('btn1');">Red</button>
                <button type="button" class=" focus:outline-none  text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn2" onclick = "funcion('btn2');" >Green</button>
                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" onclick = "funcion('btn3');">Yellow</button></h1>
                
            </section>
        <script>
            const result = document.querySelector('.result')
            function funcion(btn){
                switch (btn) {
                    case 'btn1':
                        alert('you clicked the button red')
                        break;
                        case 'btn2':
                        alert('you clicked the button green')
                        break;
                        case 'btn3':
                        alert('you clicked the button yellow')
                        break;
                
                    default:
                        break;
                }
            }
        </script>
        </h2>

        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">For</h2>
        <h2>
            <?php
            $fruits = ['🍇','🍈','🍉','🍌','🍑']
            ?>
            @for ($i = 0; $i < count($fruits); $i++)
                <h2 class="mt-10 text-center text-2xl">{{$fruits[$i]}}</h2>
            @endfor
            
        </h2>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">ForEach</h2>
        <h2>
            <?php
                 $capitalesCiudades = array(' Bogota' =>'Cundinamarca' , ' Medellin' =>'Antioquia','Manizales' =>'Caldas','Pereira' =>'Risaralda' ); 
            ?>
            @foreach ($capitalesCiudades as $capital=>$departamento)
                <h1 class="my-10 text-center   fw-bold">{{$capital.' es la capital de '.$departamento}}  </h1>
            @endforeach
            
        </h2>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">While</h2>
        <h2>
            <?php
                 $frase = "";
                 $n = 1;
            ?>
           @while ($n < 10)
                <h1 class="mt-10 text-center   fw-bold">
                    {{'El valor de n es : '.$n}}
                </h1>
                <?php
                $n++
                ?>
               
           @endwhile
            
        </h2>
        
        
    </section>
@endsection