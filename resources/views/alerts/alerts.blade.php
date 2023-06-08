@if ($flash = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $flash }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($flash = Session::get('failure'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $flash }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif