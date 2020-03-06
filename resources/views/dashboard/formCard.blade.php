@extends('layouts.dashBoardNav')

@section('content')


<div class="container-fluid">
    @if (session('status'))
    <div class="message status">
        {{ session('status') }}
    </div>
    @endif
    <div class="container formcard">

        <div class="formBox">
            <form class="" method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Poster un nouvel evenement</h2>
                    </div>
                </div>
                @csrf
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">Nom du groupe</div>
                            <input type="text" name="title" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="">Date du concert</div>
                            <input type="datetime" name="dateConcert" class="input" value="2020-06-30 21:00:00"><span
                                class="fa fa-calendar">
                            </span>
                            <span>Ex:2019-06-30 21:00:00</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">Style de musique</div>
                            <input type="text" name="style" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Origine du groupe</div>
                            <input type="text" name="origine" class="input">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">Lien Facebook</div>
                            <input type="text" name="lienFB" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Lien YouTube</div>
                            <input type="text" name="lienUT" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">Description du groupe</div>
                            <textarea type="text" name="description" class="input"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <label for="file-upload" class="custom-file-upload" style="margin-bottom:30px;">
                                <i class="fa fa-cloud-upload"></i> Photo
                            </label>
                            <input id="file-upload" type="file" id="image" name="image" />
                        </div>
                    </div>
                </div>

                <div class="col form-group col-3">
                    <input class="btn btn-success" type="submit" value="Publier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection