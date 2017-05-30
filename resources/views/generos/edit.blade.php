<form method="POST" action="{{ route('generos.update', $generos[0]->id) }}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
Nome: 
<input type="text" name="nome" value="{{ $generos[0]->nome }}">
<input type="submit" value="Cadastrar">
</form>