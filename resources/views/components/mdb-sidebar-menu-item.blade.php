<a href="@if($route) @route($route) @else {{ $link }} @endif"
    class="list-group-item list-group-item-action py-2 ripple
            @if ($flag_active && $route && $flag_active_class) @isActive($route, $flag_active_class, '') @endif"

    @if ($flag_active)
    @isActive($route, 'aria-current="true"', '')
    @endif
    style="@if ($flag_active && $route && $flag_active_style) @isActive($route, $flag_active_style, '') @endif"
    >
    {!! $icon !!}
    <span>
        {{ $name }}
    </span>
</a>
