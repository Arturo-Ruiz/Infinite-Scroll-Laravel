@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8" id="container">
        @include('users.pagination')
    </div>
    <div id="loading" hidden>
        <h1>Loading...</h1>
    </div>
</div>
<script>
    let users = 2;
    const loading = document.getElementById('loading');

    window.onscroll = ()=>{
        alert('hiciste scroll')
    }

</script>
@endsection
