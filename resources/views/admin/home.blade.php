@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin View</div>

                <div class="card-body">
                  Welcome to admin dashboard
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-header">Perkataan Kamus</div>

                <div class="card-body">
                    <a href="{{ route('perkataan_kamus:index') }}" type="button" class="btn btn-info">Index</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection