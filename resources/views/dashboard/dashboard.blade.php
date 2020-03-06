@extends('layouts.dashBoardNav')

@section('content')
<div class="col-md-12 dash">

    <form id="form-list-events">
        <legend>Liste des evénements</legend>

        <div class="pull-right">
            {{-- <a class="btn btn-default-btn-xs btn-primary"><i class="glyphicon glyphicon-refresh"></i> Refresh</a> --}}
            <a href="{{route('event.create')}}" class="btn btn-default-btn-xs btn-success"><i
                    class="glyphicon glyphicon-plus"></i> Nouveau</a>
        </div>
        <table class="table table-bordered table-condensed table-hover">
            <thead>
                <tr>
                    <td>#</td>
                    <th>Nom du groupe</th>
                    <th>Style</th>
                    <th>Origine</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>

            </thead>
            @foreach ($eventDash as $events)
            <tbody id="form-list-events-body">
                <tr>
                    <td><img class="circle" src="{{asset('images/thumb') }}/{{$events->image}}"
                            alt="{{$events->title}}">
                    </td>
                    <td>{{$events->title}}</td>
                    <td>{{$events->style}}</td>
                    <td>{{$events->origine}}</td>
                    <td>{{$events->dateConcert}}</td>
                    <td>
                        <a title="voir event" class="btn btn-default btn-sm " data-toggle="modal"
                            data-target="#concertId{{$events->id}}" data-id="{{$events->id}}"><i
                                class="fa fa-eye btn btn-primary"></i>
                        </a>
                        <a href="{{route('event.edit',$events->id)}}" title="editer event"
                            class="btn btn-default btn-sm "> <i class="fa fa-edit btn btn-success"></i> </a>
                        <a href="{{route('event.destroy',$events->id)}}" title="supprimer event"
                            class="btn btn-default btn-sm "> <i class="fa fa-trash btn btn-dark" aria-hidden="true"></i>
                        </a>


                    </td>
                </tr>
            </tbody>
            <!-- Modal -->
            <div class="modal flip animated" id="concertId{{$events->id}}" tabindex="-1" role="dialog"
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
                                alt="{{$events->title}}"><br>
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

        </table>
        <div> {{$eventDash->links()}}</div>
    </form>

    <form id="form-list-events">
        <legend>Liste des cadeaux</legend>

        <div class="pull-right">
            {{-- <a class="btn btn-default-btn-xs btn-primary"><i class="glyphicon glyphicon-refresh"></i> Refresh</a> --}}
            <a href="{{route('cadeau.create')}}" class="btn btn-default-btn-xs btn-success"><i class=""></i> Nouveau</a>
        </div>
        <table class="table table-bordered table-condensed table-hover">
            <thead>
                <tr>
                    <th>Nom du cadeau</th>
                    <th>Lien</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($cadeauDash as $cadeaux)
            <tbody id="form-list-cado-body">
                <tr>
                    <td>{{$cadeaux->title}}</td>
                    <td>{{$cadeaux->lien}}</td>
                    <td>{{$cadeaux->dateCadeaux}}</td>

                    <td>
                        <a href="{{route('cadeau.edit',$cadeaux->id)}}" title="editer cadeau"
                            class="btn btn-default btn-sm "> <i class="fa fa-edit btn btn-success "></i> </a>
                        <a href="{{route('cadeau.destroy',$cadeaux->id)}}" title="supprimer cadeau"
                            class="btn btn-default btn-sm "> <i class="fa fa-trash btn btn-dark" aria-hidden="true"></i>
                        </a>


                    </td>
                </tr>
            </tbody>
            @endforeach

        </table>
        <div> {{$eventDash->links()}}</div>
    </form>
</div>

@endsection