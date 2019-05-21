@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary">Категорий 0</span></p>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary">Материалов 0</span></p>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary badge">Юзвери 0</span></p>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary">Сегодня 0</span></p>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-block btn-outline-secondary" href='{{route('admin.category.create')}}'>Создать категории</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">Количество материалов</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-outline-secondary" href='#'>Создать материал</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">Категории</p>
				</a>
			</div>
		</div>
	</div>
@endsection