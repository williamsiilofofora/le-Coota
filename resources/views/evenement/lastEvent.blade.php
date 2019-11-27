@foreach ($lastEvent as $lastEvent)
<div  class='container-fluid lastEvent'style="background-image: url('{{ asset('images/interieur.jpg')}}');">
    <h3>Prochain concert</h3>
        <p>Retrouvez {{$lastEvent->title}} le
            {{ \Carbon\Carbon::parse($lastEvent->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
    <div class='container'>
        <div class="imageArtiste"><img class="" src="{{asset('images/thumb') }}/{{$lastEvent->image}}" alt=""></div>
        <div class=" col-6 desc"><p >{{Str::limit($lastEvent->description,150)}}</p></div>
    </div>

    <?php $concert =\Carbon\Carbon::parse($lastEvent->dateConcert)->format('Y-m-d-H-i-s');?>
    <input type=hidden id=variableAPasser value=<?php echo $concert ; ?>>

    <div class="numbers row col-4">
        <div class="bloc" id="days">

        </div>
        <div class="bloc" id="hours">

        </div>
        <div class="bloc" id="minutes">

        </div>
        <div class="bloc" id="seconds">

        </div>
    </div>
</div>
@endforeach