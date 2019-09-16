
<ul>
@foreach($childs as $child)
    <li>
        {{ $child->menu_name }}
        @if(count($child->childs))
            @include('menu.child_menu',['childs' => $child->childs])
        @endif
    </li>
    @endforeach
    </ul>