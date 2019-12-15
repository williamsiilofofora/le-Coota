<div class="container-fluid">
    @if (session('status'))
    <div class="message status">
        {{ session('status') }}
    </div>
    @endif
    <div class="container">

        <div class="formBox col-10">
            <form class="" method="POST" action="" enctype="multipart/form-data" novalidate>
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
                        <div class="inputBox"id="datetimepicker">
                            <div class="inputText" >Date du concert</div>
                            <input type="text" name="dateConcert" class="input"><span class="fa fa-calendar">
                            </span>
                            <span>Ex:2019-06-30 21:00:00</span>
                        </div>
                    </div>
                    {{-- <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar">
                            </span>
                        </span>
                    </div> --}}
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
                    <input class="btn btn-primary" type="submit" value="Publier">
                </div>
            </form>
        </div>
    </div>
</div>