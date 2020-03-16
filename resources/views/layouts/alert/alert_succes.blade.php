@if (session('success'))
<div class="alert alert-primary" role="alert">
    <b>status</b> : {{ session('success') }}
</div>
@endif