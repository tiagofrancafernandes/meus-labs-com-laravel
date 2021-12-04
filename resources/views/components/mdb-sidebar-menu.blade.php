<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            @foreach ($menu_items as $item)
            <x-mdb-sidebar-menu-item :item="$item"/>
            @endforeach
        </div>
    </div>
</nav>
<!-- Sidebar -->
