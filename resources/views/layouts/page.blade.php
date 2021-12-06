@extends('layouts.app')

@section('app-head-content')
<!-- Styles -->
<!-- stack-styles -->
@stack('styles')
<!-- END stack-styles -->
@endsection

@section('app-body-content')
<!-- stack-scripts -->
@stack('scripts')
<!-- END stack-scripts -->
@endsection

@section('base-content')
    @auth
    <x-mdb-main-navigation-bar />
    @endauth

<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-3">
            @yield('content')
        </section>
    </div>
</main>
<!--Main layout-->
@endsection
