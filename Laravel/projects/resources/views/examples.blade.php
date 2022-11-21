@extends('layouts.app')
@section('title', 'Examples Blade')
@section('content')
    <section class="my-5">
        <h1 class=" mt-10 text-center text-4xl">Examples Blade</h1>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">If - ElseIf - Else</h2>
        
        <h2>
            @if (date('l') == 'Monday')
            <h3 class="mt-10 text-center text-2xl" >Today is: Monday</h3>
            @elseif($date('l') == 'Tuesday')
            <h3 class="mt-10 text-center text-2xl">Today is: Tuesday</h3>
            @elseif($date('l') == 'Wednesday')
            <h3 class="mt-10 text-center text-2xl">Today is: Wednesday</h3>
            @elseif($date('l') == 'Thursday')
            <h3 class="mt-10 text-center text-2xl">Today is: Thursday</h3>
            @elseif($date('l') == 'Friday')
            <h3 class="mt-10 text-center text-2xl">Today is: Friday</h3>
            @else
            <h3 class="mt-10 text-center text-2xl">Today is: Saturday or Sunday</h3>
            @endif
        </h2>
        <h2 class="mt-10 text-center text-2xl text-red-500 fw-bold">Switch</h2>
        <h2>
            <?php
            $num1 = 4;
            $num2 = 5;
            $total = $num1 + $num2;
            ?>
            @switch($total)
            
                @case(9)
                    <h3 class="mt-10 text-center text-2xl">Tu resultado es: {{$total}}</h3>
                    @break
                @case(10)
                    
                    @break
                @default
                    
            @endswitch
            
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
        
    </section>
@endsection