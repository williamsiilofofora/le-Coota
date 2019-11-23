<div class="container">
    @if (session('status'))
    <div class="message status">
    {{ session('status') }}
    </div>
    @endif
    
    <h2>Poster un nouvel evenement</h2>
    <form method="POST" action="" enctype="multipart/form-data" novalidate>
        @csrf
        <label for="title">Nom du groupe</label><br/>
        <input type="text" name="title" placeholder="Nom du Groupe"><br/>
        <label for="date">Date du concert</label><br/>
        <input type="date" name="dateConcert" placeholder="date de l'event"><br/>
        <label for="style">Style de musique</label><br/>
        <input type="text" name="style" placeholder="style de musique"><br/>
        <label for="description">Description du groupe</label><br/>
        <textarea name="description" placeholder="Ecrivez votre actu"></textarea><br/>
        <label for="image">Photo</label><br/>
        <input  type="file" id="image" name="image"><br/>
        <input  class="btn btn-primary" type="submit" value="Publier">
    </form>
</div>