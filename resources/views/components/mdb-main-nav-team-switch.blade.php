<!-- Icon dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
        data-mdb-toggle="dropdown" aria-expanded="false">
        <span data-mdb-toggle="tooltip" data-mdb-html="true" data-mdb-placement="bottom"
            title="@lang('Change team view')">
            <i class="fas fa-users-cog"></i>
        </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li>
            <a
                class="dropdown-item p-0 p-l-1 py-2" href="#"
                data-current-team-id="{{ $current_team['id'] }}"
                data-current-team-name="{{ $current_team['name'] }}"
                data-current-team-slug="{{ $current_team['slug'] }}">
                <span class="px-1">
                    @lang('Current view'):
                </span>
                <br>
                <i class="fas fa-money-bill fa-fw ms-2"></i>
                {{ $current_team['name'] }}
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        @foreach ($allowed_teams as $team)
            <li>
                <a
                    class="dropdown-item d-flex flex-row justify-content-start align-items-center p-2"
                    href="#"
                    data-target-team-id="{{ $team['id'] }}"
                    data-target-team-name="{{ $team['name'] }}"
                    data-target-team-slug="{{ $team['slug'] }}">
                    <i class="{{ $team['icon'] }} mr-2"></i>
                    <span class="ms-2">{{ $team['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</li>
