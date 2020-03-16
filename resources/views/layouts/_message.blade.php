@if(session('success'))

<div class="alert alert-warning alert-success fade show" role="alert">
	<strong>Success !</strong> {{session('success')}}
	<button type="button" class="close" data-dismiss="alert" aria-lable="close">
		<span aria-hiden="true">&times;</span>
	</button>
</div>
@endif