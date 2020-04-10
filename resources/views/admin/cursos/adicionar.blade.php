@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
	<div class="container">
		<h3 class="center">Adicionar de Cursos</h3>
		<div class="row">
			<form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
				@csrf
				@include('admin.cursos._form')
				<button type="button" class="btn deep-orange">Salvar</button>
			</form>
		</div>
	</div>
	



@endsection
