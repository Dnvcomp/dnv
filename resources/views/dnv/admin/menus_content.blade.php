<table class="table table-hover table-bordered">
    <thead class="bg-light">
        <tr>
            <th>Имя</th>
            <th>Ссылка</th>
            <th>Удалить</th>
        </tr>
    </thead>
    @if($menus)
        @include(env('DNV').'.admin.customMenuItems', array('items' => $menus->roots(),'paddingLeft' => ''))
    @endif
</table>
{!! Html::link(route('admin.menus.create'),'Добавить пункт меню',['class' => 'btn']) !!}