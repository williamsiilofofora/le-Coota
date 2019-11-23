<div class="container">
    <div class="title">
        <h2>Les concerts</h2>
    </div>

    <div class="card-deck container " style="display: -webkit-inline-box;">

        @foreach ($event as $events)
        <div class="card col-xl-4">
            <div class="card-img"><img class="card-img-top" src="{{asset('images/thumb') }}/{{$events->image}}"
                    alt="Card image cap"></div>

            <div class="card-body">
                <h4 class="card-title">{{$events->title}}</h4>
                <h6 class="">Style: {{$events->style}}</h6>
                <p>Le {{ \Carbon\Carbon::parse($events->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
                <p class="card-text">{{$events->description}}</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-success"></button><br>
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        @endforeach

    </div>
</div>