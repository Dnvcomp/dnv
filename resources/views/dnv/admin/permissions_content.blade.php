<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Привилегии</h3>
            <form action="{{ route('admin.permissions.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-light">
                        <tr>
                            <th>Привилегии:</th>
                            @if(!$roles->isEmpty())
                                @foreach($roles as $item)
                                    <th>{{ $item->name }}</th>
                                @endforeach
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                            @if(!$priv->isEmpty())
                                @foreach($priv as $value)
                                    <tr>
                                        <th>{{ $value->name }}</th>
                                        @foreach($roles as $role)
                                            <th>
                                                @if($role->hasPermission($value->name))
                                                    <input checked name="{{ $role->id }}[]" type="checkbox" value="{{ $value->id }}" style="margin-left: 23px;">
                                                @else
                                                    <input name="{{ $role->id }}[]" type="checkbox" value="{{ $value->id }}" style="margin-left: 23px;">
                                                @endif
                                            </th>
                                        @endforeach
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <input class="btn mb--9pt4" type="submit" value="Обновить">
            </form>
        </div>
    </div>
</div>