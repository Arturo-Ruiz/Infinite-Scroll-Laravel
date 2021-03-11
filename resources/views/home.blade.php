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
        loading.removeAttribute('hidden')
        if((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight ){
            fetch(`/users/pagination?page=${users}`,{
                method:'get'
            })
            .then(response => response.text() )
            .then(html => {
                loading.setAttribute('hidden','')
                document.getElementById("container").innerHTML += html
                users++;                
            })
            .catch(error => console.log(error))
        }
    }

</script>
@endsection
