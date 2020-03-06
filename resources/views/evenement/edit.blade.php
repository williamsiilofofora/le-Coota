@extends('layouts.dashBoardNav')

@section('content')





<div class="container formcard formcadeau edit">
    <div class=" ">
        <div class="formBox">
            <form method="POST" action="{{route('event.update',$event->id)}}" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Editer un evenement</h2>
                    </div>
                </div>
                @csrf
                @method('PUT')
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="">Nom du groupe</div>
                            <input type="text" name="title" class="input" value="{{ $event->title }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="">
                            <div class="">Date du concert</div>
                            <input type="datetime" name="dateConcert" class="input"
                                value="{{$event->dateConcert}}"><span class="fa fa-calendar">
                            </span>
                            <span>Ex:2019-06-30 21:00:00</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="">Style de musique</div>
                            <input type="text" name="style" class="input" value="{{$event->style}}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="">Origine du groupe</div>
                            <input type="text" name="origine" class="input" value="{{$event->origine}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="">Lien Facebook</div>
                            <input type="text" name="lienFB" class="input" value="{{$event->lienFB}}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="">Lien YouTube</div>
                            <input type="text" name="lienUT" class="input" value="{{$event->lienUT}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="">Description du groupe</div>
                            <textarea type="text" name="description" class="input">{{$event->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <label for="file-upload" class="custom-file-upload" style="margin-bottom:30px;">
                                <i class="fa fa-cloud-upload"></i> Photo
                            </label>
                            <input type="hidden" name="image" value="{{ $event->image }}" />
                            <input id="file-upload" type="file" id="image" name="image" />
                        </div>
                    </div>
                </div>

                <input class="btn btn-success" type="submit" value="Publier">
            </form>
        </div>
    </div>
</div>
@endsection