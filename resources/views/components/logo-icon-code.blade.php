@php
    $dark = ($dark ?? '') == 'true' ? 'true' : 'false';
@endphp

<h2 logo-part="logo-main" dark="{{ $dark }}" class="mb-0" style="font-size: 2rem; user-select: none; padding: 0.5rem 1.5rem 0.5rem 0.5rem;">
    <span logo-part="logo-text" style="color: rgb(114, 159, 207);">
        DF
    </span>
    <span style="
        box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 5px 0px, rgba(0, 0, 0, 0.2) 0px 3px 10px 0px !important;
        background-color: rgb(114, 159, 207);
        border-radius: 50%;
        padding: 2% 10%;
        "
    logo-part="logo-icon">
        <i class="fas fa-database" style="color: rgb(32, 74, 135);"></i>
    </span>
</h2>
