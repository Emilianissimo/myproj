@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary">Категорий {{$count_categories}}</span></p>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
				<p style="font-size: 20px; text-align: center;"><span class="badge badge-primary">Материалов {{$count_articles}}</span></p>
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
				<a class="btn btn-block btn-outline-secondary" href="{{route('admin.category.create')}}">Создать категории</a>
				@foreach ($categories as $category)
					<a class="list-group-item list-group-item-action" href="{{route('admin.category.edit', $category)}}">
					<h4 class="list-group-item-heading">{{$category->title}}</h4>
					<p class="list-group-item-text">{{$category->articles()->count()}}</p>
				</a>
				@endforeach
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-outline-secondary" href="{{route('admin.article.create')}}">Создать материал</a>
				@foreach ($articles as $article)
					<a class="list-group-item list-group-item-action" href="{{route('admin.article.edit', $article)}}">
					<h4 class="list-group-item-heading">{{$article->title}}</h4>
					<p class="list-group-item-text">{{$article->categories()->pluck('title')->implode(', ')}}</p>
				</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection