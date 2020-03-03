@foreach ($lastEvent as $lastEvent)
<div class='container-fluid lastEvent' style="background-image: url('{{ asset('images/biba.jpg')}}');">
    <div style="padding-top: 20px;">
        <div class="title col-10 col-sm-10 col-md-8 col-xl-3 mx-auto">
        <h3>Prochain concert</h3>
        <p>Retrouvez <strong>"{{$lastEvent->title}}"</strong><br> 
            le {{ \Carbon\Carbon::parse($lastEvent->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
    </div>
    </div>

    <div class='container last'>
        <div class="imageArtiste"><img class="" src="{{asset('images/thumb') }}/{{$lastEvent->image}}" alt=""></div>
        <div class="col-9 col-lg-6 col-xl-6 desc">
            <p>{{Str::limit($lastEvent->description,150)}}</p>
        </div>
        
    </div>

    <?php $concert =\Carbon\Carbon::parse($lastEvent->dateConcert)->format('Y-m-d-H-i-s');
   ?>
    <input type=hidden id="variableAPasser" value=<?php echo $concert ; ?>>
    <div>
    <div class="numbers row col-10 col-sm-10 col-lg-7 col-xl-3 ">
        {{-- <strong><p>Le concert commence dans :</p></strong> --}}
        <div class="bloc col-3 col-sm-2 " id="days">

        </div>
        <div class="bloc col-3 col-sm-2" id="hours">

        </div>
        <div class="bloc col-3 col-sm-2" id="minutes">

        </div>
        <div class="bloc col-3 col-sm-2" id="seconds">

        </div>
    </div>
</div>
</div>
@endforeach