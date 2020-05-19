@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in!
=======
                    You are logged ijkgn!
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
