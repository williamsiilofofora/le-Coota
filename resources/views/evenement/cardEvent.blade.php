<div class="container">
    <div class="title col-4 mx-auto">
        <h2>Les concerts</h2>
    </div>

    <div class="card-deck container" style="display: -webkit-inline-box;">

       @foreach ($event as $events) 
        <div class="card col-xl-4  mb-4">
            <div class="card-img"><img class="card-img-top" src="{{asset('images/thumb') }}/{{$events->image}}"
                    alt="Card image cap"></div>

            <div class="card-body">
                <h4 class="card-title">{{$events->title}}</h4>
                <hr>
                <h6 class="">Style: {{$events->style}}</h6>
                <p>Origine: {{$events->origine}}</p>
                <p>Le {{ \Carbon\Carbon::parse($events->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
                <p class="card-text">{{Str::limit($events->description,150)}}</p>
            </div>
            <div class="card-footer">
                <button class="btn " ></button><br>
            <a href="{{ $events->lienFB}}" class="fa fa-facebook"></a>
            <a href="{{ $events->lienUT}}"class="fa fa-youtube"></a>
            </div>
        </div>
        @endforeach

    </div>
</div>