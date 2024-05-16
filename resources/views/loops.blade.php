<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body >
    <div class="container-fluid">
<ul class="list-group">
<pre>
    <?php
        // print_r($brand_1);
        // exit();
    ?>
</pre>
    <h5>The Loop test</h5>
    <h5>For Loop </h5>

    @for ( $i=0;$i<=10;$i++)
    The current Value is {{$i}} <br>
    @endfor
<hr>
<h4>For Each Loop</h4>
@foreach ($country as $cou)
The Country are <b>{{$cou}}  </b>    <br>
Loop Remaining {{$loop->remaining}}
@endforeach
<hr>
<h4> For Else Loop</h4>
@forelse($country as $cou)
    The Country are {{$cou}} <br>
    @empty
    <p>No Country found!</p>
@endforelse
<hr>
<h4> While Loop</h4>
@while($count<10)
{{$count}} <br>

@php  
$count++
@endphp
@endwhile
</div>
    </body>
</html>