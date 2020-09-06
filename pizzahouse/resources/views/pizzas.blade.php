@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizza2.png" alt="Pizza House logo">
        <div class="title m-b-md">
            Here is the Best Pizzas
        </div>
        <!----------------Blade syntact practice  ------------------>
        <!-- Terminal: php arisan serve /pizzas

        <p>{{ $type }} - {{ $base }} - {{ $price }}</p>

        <!-- Query parameters test  {{-- Laravel comment tag --}} -->
        <!-- {{--<p>{{ $type }} - {{ $base }} - {{ $price }} - {{ $price2 }}</p>--}} -->
        
        
        
        @if($price>15)
            <p>This pizza is too expensive!</p>
        @elseif($price<5)
            <p>This pizza is cheap!</p>
        @else
            <p>This pizza is normally priced!</p>
        @endif

        @unless($base == 'Margarita') <!--//if (not...)-->
            <p>Valami izének az izéje</p>
        @endunless
        

        @php
            //echo $type;
            //echo "<BR>This is php native code<BR>";
            //$name = "Anything";
            //echo $name;
        @endphp

        <!----------------Blade Loops  ------------------>
        <!--@for($i = 0; $i < 5; $i++)
            <p>This value of i is {{$i}}</p>
        @endfor -->
        <HR>
        <p>Menu: <br>
            ------
        </p>
        

        <!-- for loop practice 
        @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->

        <!-- foreach loop practice -->
        @foreach($pizzas as $apizza)
            <div>
                {{$loop->index}} - {{$apizza['type']}} - {{$apizza['base']}} - {{$apizza['price']}}
                <!-- first and last practice -->
                <!--@if($loop->first)
                    <span>- first in the loop - </span>
                @endif

                @if($loop->last)
                    <span>- last in the loop - </span>
                @endif -->
            </div>
        @endforeach
        <br><hr>  
    </div>
</div>
@endsection