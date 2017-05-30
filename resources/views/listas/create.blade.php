
<form method="POST" action="{{ route('listas.store')}}">
     {{csrf_field()}}
     <input type="hidden" name="usuario_id" value="{{ Auth::user()->id }}" >
Nome: 
<input type="text" name="nome">




<input type="submit" value="Cadastrar">
</form>