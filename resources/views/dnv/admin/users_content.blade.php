<table class="table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Е-мэйл</th>
            <th scope="col">Логин</th>
            <th scope="col">Роль</th>
            <th scope="col">Удалить</th>
        </tr>
    </thead>
    @if($users)
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{!! Html::link(route('admin.users.edit',['users' => $user->id]),$user->name) !!}</th>
                    <th>{{ $user->email }}</th>
                    <th>{{ $user->login }}</th>
                    <th>{{ $user->roles->implode('name', ', ') }}</th>
                    <th>
                        {!! Form::open(['url' => route('admin.users.destroy',['users'=> $user->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class' => 'btn-french-5','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </th>
                </tr>
            @endforeach
        </tbody>
    @endif
</table>
{!! Html::link(route('admin.users.create'),'Добавить  пользователя',['class' => 'btn']) !!}
