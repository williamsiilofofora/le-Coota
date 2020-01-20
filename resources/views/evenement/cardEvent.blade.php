<div class="container" >
    <div class="title box col-8 col-sm-6 col-lg-3 col-xl-4 mx-auto">

        <h2>Les concerts</h2>

    </div>

    <div class="row container-fluid ">

        @foreach ($event as $events)

        <div class="card col-12 col-lg-5 mx-auto event">
            <div class="card-img image-fluid">
                <img class="card-img-top" src="{{asset('images/thumb') }}/{{$events->image}}" alt="Card image cap">
            </div>
            <div class="card-body">
                <input type="hidden" name="interv" id="interv" value="{{$events->id}}">
                <h4 class="card-title">{{$events->title}}</h4>
                <hr>
                <h6 class="">Style: {{$events->style}}</h6>
                <p>Origine: {{$events->origine}}</p>
                <p>Le {{ \Carbon\Carbon::parse($events->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
                <p class="card-text">{{Str::limit($events->description,150)}}</p>
            </div>
            <div class="card-footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#concertId{{$events->id}}" data-id="{{$events->id}}">
                    voir plus
                </button><br>
                <a href="{{ $events->lienFB}}" class="res fa fa-facebook" target="_blank"></a>
                <a href="{{ $events->lienUT}}" class="res fa fa-youtube" target="_blank"></a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal zoomInDown animated" id="concertId{{$events->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="nom_du_groupe">{{$events->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="image-fluid" src="{{asset('images/thumb') }}/{{$events->image}}"
                            alt="Card image cap"><br>
                        <h6 class="">Style: {{$events->style}}</h6>
                        <p>Origine: {{$events->origine}}</p>
                        <p>Le {{ \Carbon\Carbon::parse($events->dateConcert)->locale('fr_FR')->format('d M Y')}}</p>
                        <p class="card-text">{{$events->description}}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ $events->lienFB}}" class="res fa fa-facebook"></a>
                        <a href="{{ $events->lienUT}}" class="res fa fa-youtube"></a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>