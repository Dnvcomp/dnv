<tbody>
@foreach($items as $item)
    <tr>
        <th>{{ $paddingLeft }} {!! Html::link(route('admin.menus.edit',['menus' => $item->id]),$item->title) !!}</th>
        <th>{{ $item->url() }}</th>
        <th>
            {!! Form::open(['url' => route('admin.menus.destroy',['menus'=> $item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
            {{ method_field('DELETE') }}
            {!! Form::button('Удалить', ['class' => 'btn-danger','type'=>'submit']) !!}
            {!! Form::close() !!}
        </th>
    </tr>
    @if($item->hasChildren())
        @include(env('DNV').'.admin.customMenuItems', array('items' => $item->children(),'paddingLeft' => $paddingLeft.''))
    @endif
@endforeach
</tbody>