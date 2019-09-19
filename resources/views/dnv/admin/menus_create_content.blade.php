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
    <!-- accordion -->
    <div id="accordion" class="mb--20">
        <div class="card">
            <div class="card-header" id="headingOne">
                <div class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div>
                    <h5 class="mb-0">{!! Form::radio('type', 'customLink',(isset($type) && $type == 'customLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                        <span class="label">Пользовательская ссылка:</span>
                    </h5>
                </div>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Путь для ссылки:</small>
                    {!! Form::text('custom_link',(isset($menu->path) && $type=='customLink') ? $menu->path  : old('custom_link'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
                </div>
            </div>
        </div>
        <!-- // headingOne-->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div>
                        <h5 class="mb-0">{!! Form::radio('type', 'blogLink',(isset($type) && $type == 'blogLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                            <span class="label">Раздел Статьи:</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="col">
                        <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Ссылка на категорию статьи:</small>
                        @if($categories)
                            {!! Form::select('category_alias',$categories,(isset($option) && $option) ? $option : FALSE, ['class'=>'custom-select']) !!}
                        @endif
                    </div>
                    <div class="col">
                        <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Ссылка на материал статьи:</small>
                        {!! Form::select('article_alias', $articles, (isset($option) && $option) ? $option :FALSE, ['class'=>'custom-select','placeholder' => 'Не используется']) !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- // headingTwo-->
        <div class="card">
            <div class="card-header" id="headingThree">
                <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5 class="mb-0">{!! Form::radio('type', 'portfolioLink',(isset($type) && $type == 'portfolioLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                        <span class="label">Раздел авторы:</span>
                    </h5>
                </div>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <small id="smallTitle" class="form-text text-muted"><i class="fa fa-paragraph" aria-hidden="true"></i>&nbsp;&nbsp;Ссылка на запись автора:</small>
                    {!! Form::select('portfolio_alias', $portfolios, (isset($option) && $option) ? $option :FALSE, ['class'=>'custom-select','placeholder' => 'Не используется']) !!}
                </div>
            </div>
        </div>
        </div>
        <br>
        @if(isset($menu->id))
            <input type="hidden" name="_method" value="PUT">
        @endif
        {!! Form::button('Сохранить', ['class' => 'btn mb--9pt4','type'=>'submit']) !!}
        {!! Form::close() !!}
</div>
