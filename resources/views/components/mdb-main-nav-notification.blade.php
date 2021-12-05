<style>
[data-notification-status="unread"] {
    background: var(--mdb-teal);
}
[data-notification-status="unread"]:hover, [data-notification-status="unread"] a:hover {
    background: var(--mdb-success);
}
</style>

<!-- Notification dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
        data-mdb-toggle="dropdown" aria-expanded="false">
        <span data-mdb-toggle="tooltip" data-mdb-html="true" data-mdb-placement="bottom" title="@lang('Notifications')">
            <i class="fas fa-bell"></i>
        </span>
        @if($count_notifications = $notifications->where('read', false)->count())
        <span class="badge rounded-pill badge-notification bg-danger">
            {{ $count_notifications }}
        </span>
        @endif
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        <li>
            <ul
                class="dropdown-item list-group list-group-horizontal d-flex justify-content-between p-0 align-self-center">
                <li class="list-group-item border border-info rounded-start px-1 m-0 p-1"><a href="#">Ver todas as
                        notificações</a></li>
                <li class="list-group-item border border-info rounded-end px-1 m-0 p-1"><a href="#">Marcar todas como
                        lida</a></li>
            </ul>
        </li>
        @if($notifications)
            @foreach ($notifications->all() as $notification)
                <li
                    class="list-group-item border border-info rounded px-1 m-0 p-1"
                    data-notification-status="{{ $notification['read'] ? 'read' : 'unread' }}"
                    data-notification-id="{{ $notification['id'] }}"
                    data-notification-date="{{ $notification['time']->toISOString() }}">
                    <a gtm-id="Notifications" class="dropdown-item text-wrap p-1 px-2"
                        href="#notification" rel="nofollow">
                        <p class="small text-muted mb-1">
                            <span title="{{ $notification['time']->format('d/m/Y H:i:s') }}">
                                {{ $notification['time']->diffForHumans() }}
                            </span>
                            |
                            <span>@lang('To') {{ __($notification['to']) ?? __('you') }}</span>
                        </p>
                        <p class="mb-0">{{ $notification['title'] }}</p>
                    </a>
                </li>
            @endforeach
        @else
            <li class="list-group-item border border-info rounded px-1 m-0 p-1">
                <span gtm-id="Notifications" class="dropdown-item text-wrap p-1 px-2">
                    <span class="mb-0">Nenhuma notificação</span>
                </span>
            </li>
        @endif
    </ul>
</li>
