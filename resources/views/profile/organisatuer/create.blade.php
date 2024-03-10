
{{-- la forme pour crée une nauveau event  mais pas cmplaite  --}}

<form action="{{ route('events.store') }}" method="post">
    @csrf
    
    <label for="title">Titre</label>   
    <input type="string" id="title" name="title">

    <label for="user_id">user_id</label>   
    <input type="intger" id="user_id" name="user_id">

    <label for="description">Description</label>
    <textarea type="text" id="description" name="description"></textarea>

    <label for="date">Date</label>
    <input type="date" id="date" name="date"> 

    <label for="lieu">lieu</label>   
    <input type="string" id="lieu" name="lieu">

    <label for="categorie_id">categorie_id</label>   
    <input type="text" id="categorie_id" name="categorie_id">

    <label for="image">image</label>   
    <input type="string" id="image" name="image">



    <label for="nbPlace">nbPlace</label>   
    <input type="intger" id="nbPlace" name="nbPlace">

    {{-- <label for="isValide">isValide</label>   
    <input type="intger" id="isValide" name="isValide"> --}}


    <button type="submit">Ajouter</button>
</form>



