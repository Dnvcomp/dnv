<div class="col-lg-12">
    {!! Form::open(['url'=>(isset($article->id)) ? route('admin.articles.update', ['articles'=>$article->alias]) : route('admin.articles.store'),'class'=>'text-info','method'=>'post','enctype'=>'multipart/form-data']) !!}
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Название</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp;Заголовок материала</small>
            {!! Form::text('title',isset($article->title) ? $article->title : old('title'),['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Ключевые слова</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp;Заголовок материала</small>
            {!! Form::text('keywords',isset($article->keywords) ? $article->keywords : old('keywords'),['class'=>'form-control','placeholder'=>'Введите ключевые слова для статьи']) !!}
        </div>
    </div>
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Мета описание</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp;Заголовок материала</small>
            {!! Form::text('description',isset($article->description) ? $article->description : old('description'),['class'=>'form-control','placeholder'=>'Введите первое предложение статьи']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Автор </h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Псевдоним автора (Уникальный)</small>
            {!! Form::text('alias',isset($article->alias) ? $article->alias : old('alias'),['class'=>'form-control','placeholder'=>'Введите имя, логин или псевдоним на английском языке,(можно латиница)']) !!}
        </div>
    </div>

    <div class="row mb-md--5">
        <div class="col-lg-12 mb--50">
            <h5>Краткий текст статьи</h5>
            {!! Form::textarea('desc', isset($article->desc) ? $article->desc  : old('desc'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите краткий, небольшой текст статьи']) !!}
        </div>
    </div>
    <div class="row mb-md--5">
        <div class="col-lg-12 mb--50">
            <h5>Полный текст статьи</h5>
            {!! Form::textarea('text', isset($article->text) ? $article->text  : old('text'), ['id'=>'editor2','class' => 'form-control','placeholder'=>'Введите полный текст статьи']) !!}
        </div>
    </div>
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            @if(isset($article->img->max))
                <div class="form-group">
                    <h5>Изображение материала:</h5>
                    {{ Html::image(asset(env('DNV')).'/assets/img/articles/'.$article->img->max,'',['style'=>'width:400px']) }}
                    {!! Form::hidden('old_image',$article->img->max) !!}
                </div>
            @endif
            <div class="form-group">
                <h5>Изображение материала:</h5>
                {!! Form::file('image', ['class' => 'feature__title','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
            </div>
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Категория материала</h5>
                {!! Form::select('category_id', $categories,isset($article->category_id) ? $article->category_id  : '', ['class' => 'custom-select']) !!}
        </div>
    </div>
    @if(isset($article->id))
        <input type="hidden" name="_method" value="PUT">
    @endif
    {!! Form::button('Сохранить', ['class' => 'btn mb--9pt5','type'=>'submit']) !!}
    {!! Form::close() !!}
    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor2');
    </script>
</div>
