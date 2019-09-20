<div class="col-lg-12">
    {!! Form::open(['url' => (isset($user->id)) ? route('admin.users.update',['users'=>$user->id]) :route('admin.users.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Имя</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Имя</small>
            {!! Form::text('name',isset($user->name) ? $user->name  : old('name'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Логин</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Логин</small>
            {!! Form::text('login',isset($user->login) ? $user->login  : old('login'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
    </div>

    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Е-мэйл</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Е-мэйл</small>
            {!! Form::text('email',isset($user->email) ? $user->email  : old('email'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Пароль</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Пароль</small>
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="row mb-md--5">
        <div class="col-lg-6 mb--20">
            <h5>Повторите пароль</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Повторите пароль</small>
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
        <div class="col-lg-6 mb--20">
            <h5>Роль</h5>
            <small id="smallTitle" class="form-text text-muted"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Роль пользователя</small>
            {!! Form::select('role_id', $roles, (isset($user)) ? $user->roles()->first()->id : null,['class'=>'custom-select']) !!}
        </div>
    </div>
    @if(isset($user->id))
        <input type="hidden" name="_method" value="PUT">
    @endif
    {!! Form::button('Сохранить', ['class' => 'btn','type'=>'submit']) !!}
    {!! Form::close() !!}
</div>