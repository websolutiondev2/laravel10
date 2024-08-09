@extends ('layouts.default')

<!-- Adding Content To pages -->
 @section ('123')
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
@stop