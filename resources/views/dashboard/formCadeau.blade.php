<div class="container">
    @if (session('status'))
    <div class="message status">
        {{ session('status') }}
    </div>
    @endif
    <div class="container">

        <div class="formBox">
            <form method="POST" action="" enctype="multipart/form-data" novalidate>
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
                            <div class="inputText">Date du cadeau</div>
                            <input type="text" name="dateCadeaut" class="input">
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
                            <textarea type="text" name="descriptionCadeau" class="input"></textarea>
                        </div>
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Publier">
            </form>
        </div>
    </div>
</div>