@extends('layouts.default')


@section('main')

<link rel="stylesheet" href="css/admin.css">

<div class="formulaire">
<form>
  
    
    <fieldset>
    <legend>Prix</legend>
    <input type="text" name="prix" />
  
  </fieldset>

  <fieldset>
    <legend>Nom</legend>
    <input type="text" name="name" />
  
  </fieldset>

  <fieldset>
    <legend>Description</legend>
    <textarea id="desc" name="desc" rows="5" cols="33">
    </textarea>
  
  </fieldset>
  
 
  <label for="photo" class="photo-file">Choose a picture : </label>


  <input type="file" id="photo" class="input-photo" name="photo" accept="image/*">
 
 
  <button>Ajouter au catalogue</button>

</form>

</div>

@endsection