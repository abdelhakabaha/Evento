
{{-- la forme pour crée une nauveau event  mais pas cmplaite  --}}

<form action="{{ route('events.store') }}" method="post">
    @csrf
    
    <label for="title">Titre</label>   
    <input type="text" id="title" name="title">

    <label for="title">user_id</label>   
    <input type="intger" id="user_id" name="user_id">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <label for="date">Date</label>
    <input type="date" id="date" name="date"> 

    <label for="title">lieu</label>   
    <input type="string" id="lieu" name="lieu">

    <label for="title">categorie_id</label>   
    <input type="text" id="categorie_id" name="categorie_id">

    <label for="title">image</label>   
    <input type="string" id="image" name="image">

    <label for="title">idcategorie</label>   
    <input type="intger" id="idcategorie" name="idcategorie">

    <label for="title">nbPlace</label>   
    <input type="intger" id="nbPlace" name="nbPlace">

    <label for="title">isValide</label>   
    <input type="intger" id="isValide" name="isValide">


    <button type="submit">Ajouter</button>
</form>

