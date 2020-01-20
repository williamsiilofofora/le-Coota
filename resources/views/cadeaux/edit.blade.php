@extends('layouts.dashBoardNav')

@section('content')





    <div class="container formcard formcadeau edit">
<div class=" ">
    <div class="formBox">
        <form method="POST" action="{{route('cadeau.update',$cadeau->id)}}" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-sm-12">
                    <h2>Editer cadeau</h2>
                </div>
            </div>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <div class="inputBox ">
                        <div class="inputText">Nom du cadeau</div>
                        <input type="text" name="title" class="input">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="inputBox">
                        <div class="inputText">Date du cadeau</div>
                        <input type="text" name="dateCadeaux" class="input">
                        <span>Ex:2020-06-30 21:00:00</span>
                    </div>
                    <div class="form-group">
                        {{-- <input id="datetimepicker" type="text" > --}}
                        {{-- <div class='input-group date' >
                <input type='text' class="form-control"id='datetimepicker' />
                <span class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </span>
            </div> --}}
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

            <input class="btn btn-primary" type="submit" value="Publier">
        </form>
    </div>
</div></div>
@endsection