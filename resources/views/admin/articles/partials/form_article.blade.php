<label for="">Статус</label>
<select class="form-control" name="published">
	@if (isset($article->id))
		<option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
		<option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
	@else
		<option value="0">Не опубликовано</option>
		<option value="1">Опубликовано</option>
	@endif
</select>


<label>Изображение</label>
<form action="" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<input type="file" name="image" value="{{$article->image ?? ''}}">
	</div>
	<button class="btn btn-primary" type="submit">Загрузить</button>
</form>
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title ?? ''}}" required>

<label for="">Slug (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автогенерация" value="{{$article->slug ?? ''}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
		@include('admin.articles.partials.categories_article', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ''}}</textarea>

<label for="">Текст</label>
<textarea style="min-height: 250px" class="form-control" id="description" name="description">{{$article->description ?? ''}}</textarea>

<hr/>

<label for="">Мета-заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета-заголовок" value="{{$article->meta_title ?? ''}}" required>

<label for="">Мета-описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета-описание. Попытайтесь уложиться в 300 символов или того меньше, гугл вас за это возлюбит." value="{{$article->meta_description ?? ''}}" required>

<label for="">Мета-ключи</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Мета-ключи, через запятую" value="{{$article->meta_keyword ?? ''}}" required>

<hr/>

<input type="submit" class="btn btn-primary" value="Сохранить">