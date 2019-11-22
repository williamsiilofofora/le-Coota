
    </div>
    @if (session('status'))
    <div class="message status">
    {{ session('status') }}
    </div>
    @endif
    
    <h2>Poster un nouvel evenement</h2>
    <form method="POST" action="" enctype="multipart/form-data" novalidate>
        @csrf
        <input type="text" name="title" placeholder="Nom du Groupe"><br/>
        <input type="text" name="date" placeholder="date de l'event"><br/>
        <input type="text" name="style" placeholder="style de musique"><br/>
        <textarea name="description" placeholder="Ecrivez votre actu"></textarea><br/>
        <input  type="file" id="image" name="image">
        <label class="" for="image"></label><br/>
        <input  class="btn btn-primary" type="submit" value="Publier">
    </form>
</main>