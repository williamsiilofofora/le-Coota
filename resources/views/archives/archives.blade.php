@extends('layouts.app')

@section('content')
<section id="archive">
    <div class="headerArchives">

        <img src="{{asset('images/cootajpg.jpg')}} " alt="">

    </div>
    <h4>Ils sont tous passé ici</h4>
    <p>Retrouvez tout les artistes qui sont passer au coota</p>
    <div class="list-type1 archive container ">
        <ol>
            @foreach ($eventArchives as $eventArchives)
            <li><div class="list row"style="text-align:left;">

<span class="col-3">"{{$eventArchives->title}}"</span>
<span class=" col-3"><strong>Style:</strong> {{$eventArchives->style}}</span>
<span class=" col-3"><strong>Origine:</strong> {{$eventArchives->origine}}</span>
<span class=" col-3"><strong>Passé le:</strong> {{$eventArchives->dateConcert}}</span>
<a href="{{ $eventArchives->lienFB}}" class="fa fa-facebook" target="_blank"></a>
                <a href="{{ $eventArchives->lienUT}}" class="fa fa-youtube" target="_blank"></a>


            </div>

            </li>

            @endforeach
    </div>
    </ol>
</section>
@endsection