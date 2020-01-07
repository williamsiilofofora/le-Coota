@extends('layouts.dashBoardNav')

@section('content')


<div class="container-fluid ">
    @if (session('status'))
    <div class="message status">
        {{ session('status') }}
    </div>
    @endif
    <div class="container formcard">
        <div class="formBox">
            <form method="POST" action="{{ route('cadeau.store') }}" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Poster un nouveau cadeau</h2>
                    </div>
                </div>
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">Nom du cadeau</div>
                            <input type="text" name="title" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="">Date du cadeau</div>
                            <input type="datetime" name="dateCadeaux" class="input" value="2020-06-30 21:00:00"><span
                                class="fa fa-calendar"></span>
                            <span>Ex:2019-06-30 21:00:00</span>
                        </div>
                    </div>
                </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="inputBox ">
                    <div class="inputText">Lien</div>
                    <input type="text" name="lien" class="input">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inputBox ">
                    <div class="inputText">Description du cadeau</div>
                    <textarea type="text" name="descriptionCadeaux" class="input"></textarea>
                </div>
            </div>
        </div>

        <input class="btn btn-success" type="submit" value="Publier">
        </form>
    </div>
</div>
</div>
@endsection