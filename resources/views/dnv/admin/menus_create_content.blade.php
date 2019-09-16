<div class="col-lg-12">
    {!! Form::open(['url' => (isset($menu->id)) ? route('admin.menus.update',['menus'=>$menu->id]) : route('admin.menus.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Заголовок</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Название пункта</small>
            {!! Form::text('title',isset($menu->title) ? $menu->title  : old('title'), ['class'=>'form-control','placeholder'=>'Введите название пункта']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Родительский пункт меню</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Родитель</small>
            {!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null,['class'=>'custom-select']) !!}
        </div>
    </div>
    <br>
    <h2 class="text-center">Тип меню</h2>
    <br>
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>{!! Form::radio('type', 'customLink',(isset($type) && $type == 'customLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                <span class="label">Пользовательская ссылка:</span>
            </h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Путь для ссылки:</small>
            {!! Form::text('custom_link',(isset($menu->path) && $type=='customLink') ? $menu->path  : old('custom_link'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>{!! Form::radio('type', 'blogLink',(isset($type) && $type == 'blogLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                <span class="label">Раздел Статьи:</span>
            </h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Ссылка на категорию статьи:</small>
            @if($categories)
                {!! Form::select('category_alias',$categories,(isset($option) && $option) ? $option : FALSE, ['class'=>'custom-select']) !!}
            @endif
        </div>
    </div>
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Ссылка на материал статьи</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;ссылка на материал статьи</small>
            {!! Form::select('article_alias', $articles, (isset($option) && $option) ? $option :FALSE, ['class'=>'custom-select','placeholder' => 'Не используется']) !!}

        </div>
        <div class="col-lg-6 mb--20">
            <h5>{!! Form::radio('type', 'portfolioLink',(isset($type) && $type == 'portfolioLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                <span class="label">Раздел авторы:</span>
            </h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Ссылка на запись автора:</small>
            {!! Form::select('portfolio_alias', $portfolios, (isset($option) && $option) ? $option :FALSE, ['class'=>'custom-select','placeholder' => 'Не используется']) !!}
        </div>
    </div>
    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Авторы</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;ссылка на автора статьи</small>
            {!! Form::select('filter_alias', $filters, (isset($option) && $option) ? $option :FALSE, ['class'=>'custom-select','placeholder' => 'Не используется']) !!}
        </div>
    </div>
    @if(isset($menu->id))
        <input type="hidden" name="_method" value="PUT">
    @endif

    {!! Form::button('Сохранить', ['class' => 'btn mb-5','type'=>'submit']) !!}
    {!! Form::close() !!}
</div>