@extends('layout')

@section('content')
@if($show == 'link')
<a href="#">Link</a>
@else
<ul>
    @foreach($proizvodi as $proizvod)
        <li>
        <a href="/proizvod/{{ $proizvod['id'] }}"> {{ $proizvod['ime'] }} </a>
        </li>
    @endforeach
</ul>
@endif
<div {{ $mode =='dark' ? "class=bg-dark" : "style=background-color:pink;" }}>
    <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nisl dolor, ullamcorper ac quam vitae, congue posuere velit. Nam vitae dapibus leo, non rutrum libero. Morbi eget laoreet ante, luctus luctus leo. Nulla facilisi. Cras tempor turpis in molestie malesuada. Nam sit amet vestibulum ante, non pulvinar ligula. Duis at maximus dui, ac tincidunt urna.
    </p>
</div>
@endsection