@if(count ($errors) > 0)
    <div class="container">
        <br>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>  
@endif

@if(session('success'))
    <div class="container">
        <br>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="container">
        <br>
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    </div>
@endif

@if(session('status'))
    <div class="container">
        <br>
        <div class="alert alert-info">
            {{ session('status')}}
        </div>
    </div>
@endif