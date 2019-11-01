{{-- controle de erros de formulário --}}
@if(count($errors) != 0)
		<?php foreach ($errors->all() as $erro): ?>
			<p class="alert alert-danger">{{ $erro }}</p>
		<?php endforeach ?>
@endif