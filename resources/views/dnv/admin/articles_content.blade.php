@if($articles)
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Изображение</th>
            <th scope="col">Категория</th>
            <th scope="col">Автор</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{!! Html::link(route('admin.articles.edit',['articles'=>$article->alias]),$article->title) !!}</td>
                <td class="text-left">{{ str_limit($article->text,200)}}</td>
                <td>
                    @if(isset($article->img->mini))
                        {!! Html::image(asset(env('DNV')).'/assets/img/articles/'.$article->img->mini) !!}
                    @endif
                </td>
                <td>{{ $article->category->title}}</td>
                <td>{{ $article->alias }}</td>
                <td>
                    {!! Form::open(['url'=>route('admin.articles.destroy',['articles'=>$article->alias]),'class'=>'form-horizontal','method'=>'post']) !!}
                    {{ method_field('DELETE') }}
                    {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! Html::link(route('admin.articles.create'),'Добавить  материал',['class' => 'btn btn-success']) !!}
@endif