@foreach($items as $item)
    <li class="mainmenu__item menu-item-has-children">
        <a href="{{ $item->url() }}" class="mainmenu__link">
            <span data-hover="{{ $item->title }}" class="mm-text">{{ $item->title }}</span>
        </a>
    </li>
@endforeach