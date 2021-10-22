@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Perkataan Kamus Yang Ada</div>

                <div class="card-body">
                  
                  <a href="{{ route('perkataan_kamus:create') }}" type="button" class="btn btn-primary">Tambah Perkataan</a>
                  <h1>Senarai perkataan</h1>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombor</th>
                        <th scope="col">Perkataan</th>
                        <th scope="col">Maksud Ayat</th>
                        <th scope="col">Contoh Ayat</th>
                        <th scope="col">Maksud Ayat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $semuaperkataankamus as $key => $perkataan)
                        <tr>
                          <th scope="row">{{ $key + 1 }}</th>
                          <td>{{ $perkataan->perkataan }}</td>
                          <td>{{ $perkataan->maksud_perkataan }}</td>
                          <td>{{ $perkataan->contoh_ayat }}</td>
                          <td>{{ $perkataan->maksud_ayat }}</td>
                          <td><a href="{{ route('perkataan_kamus:edit',$perkataan) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('perkataan_kamus:index') }}" type="button" class="btn btn-danger">Delete</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>                    

                </div>
            </div>

        </div>
    </div>
</div>
@endsection