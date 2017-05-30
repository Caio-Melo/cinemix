
<form method="POST" action="{{ route('generos.store')}}">
     {{csrf_field()}}
Nome: 
<input type="text" name="nome">
<input type="submit" value="Cadastrar">
</form>