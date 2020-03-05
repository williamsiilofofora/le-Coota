@extends('layouts.app')

@section('content')
<section id="archive">
    <div class="headerArchives">

        <img src="{{asset('images/cootajpg.jpg')}} " alt="">

    </div>
    <div style="text-align: center;">
        <h4 class="box col-8 col-lg-3 mx-auto">Ils sont tous passé ici</h4>
    </div>
    <div class="container-fluid ">
        <div class="table-wrapper mx-auto list-type">
            <div class="table-title">
                <div class="row flex-row justify-content-around">
                    {{-- <div class="col-sm-4">
                        <div class="show-entries">
                            <span>Montrer</span>
                            <select>
                                <option class='val' value="5">5</option>
                                <option class='val' value="10">10</option>
                                <option class='val' value="15">15</option>
                                <option class='val' value="20">20</option>
                            </select>

                            <span>entrées</span>
                        </div>
                    </div> --}}
                    <div class="col-5">
                        <p><strong>Retrouvez tout les artistes qui sont passés au coota</strong></p>
                    </div>
                    <div class="col-5">
                        <form action="/search" method="GET">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-prepend"><button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i></button></span>
                                <input type="search" name="search" class="form-control" placeholder="Rechercher">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom </i></th>
                        <th>Style </th>
                        <th>Origine </i></th>
                        <th>Date </th>
                        <th>Facebook </th>
                        <th>You Tube</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventArchives as $eventArchive)
                    <tr class="">
                        <td><img class="circle" src="{{asset('images/thumb') }}/{{$eventArchive->image}}"
                                alt="Card image cap"></td>
                        <td>{{$eventArchive->title}}</td>
                        <td>{{$eventArchive->style}}</td>
                        <td>{{$eventArchive->origine}}</td>
                        <td>{{$eventArchive->dateConcert}}</td>
                        <td> <a href="{{ $eventArchive->lienFB}}" class="fa fa-facebook" target="_blank"></a></td>
                        <td>
                            <a href="{{ $eventArchive->lienUT}}" class="fa fa-youtube" target="_blank"></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="clearfix">
                {{-- <div class="hint-text">Showing <b>5</b> out of <b>10</b> entries</div> --}}
                <div> {{$eventArchives->links()}}</div>
            </div>
        </div>
    </div>
</section>
@endsection