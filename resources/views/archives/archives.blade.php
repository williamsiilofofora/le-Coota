@extends('layouts.app')

@section('content')
<section id="archive">
    <div class="headerArchives">

        <img src="{{asset('images/cootajpg.jpg')}} " alt="">

    </div>
    <h4 class="box col-3 mx-auto" >Ils sont tous passé ici</h4>
    <p>Retrouvez tout les artistes qui sont passer au coota</p>
    <div class="col-4">
        <form action="/search" method="GET">
            {{ csrf_field() }}
            <div class="input-group">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </span>
        </div>
        </form>
    </div>
    <div class=" list-type1 archive container ">
        <ol>
            @foreach ($eventArchives as $eventArchives)
            <li>
                <div class="list row" style="text-align:left;">

                    <span class="col-3">"{{$eventArchives->title}}"</span>
                    <span class=" col-3"><strong>Style:</strong> {{$eventArchives->style}}</span>
                    <span class=" col-3"><strong>Origine:</strong> {{$eventArchives->origine}}</span>
                    <span class=" col-3"><strong>Passé le:</strong> {{$eventArchives->dateConcert}}</span>
                    <a href="{{ $eventArchives->lienFB}}" class="fa fa-facebook" target="_blank"></a>
                    <a href="{{ $eventArchives->lienUT}}" class="fa fa-youtube" target="_blank"></a>


                </div>

            </li>

            @endforeach
{{-- {{ $eventArchives->links('archives.archives') }} --}}
        </ol>
    </div>
</section>
@endsection