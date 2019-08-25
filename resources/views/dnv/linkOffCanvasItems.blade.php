@foreach($items as $item)
<li class="menu-item-has-children active">
    <a href="{{ $item->url() }}"><span class="mm-text">{{ $item->title }}</span></a>
    @if($item->hasChildren())
        <ul class="sub-menu">
            <li>
                <a href="{{ $item->url() }}"><span class="mm-text">{{ $item->title }}</span></a>
                @include(env('DNV').'.linkMenuItems',['items'=>$item->children()])
            </li>
        </ul>
    @endif
</li>
@endforeach