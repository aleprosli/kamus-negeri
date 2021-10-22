@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Perkataan</div>

                <div class="card-body">
                  <h3>Sila Isi Perkataan di bawah</h3>
                  <form method="POST" action="{{ route('perkataan_kamus:update',$perkataan) }}">
                    @csrf
                  <div class="mb-3">
                    <label for="perkataan" class="form-label">Perkataan</label>
                    <input type="text" name="perkataan" class="form-control" id="perkataan" placeholder="{{ $perkataan->perkataan }}">
                  </div>
                  <div class="mb-3">
                    <label for="perkataan" class="form-label">Maksud</label>
                    <input type="text" name="maksud_perkataan" class="form-control" id="maksud" placeholder="{{ $perkataan->maksud_perkataan }}">
                  </div>
                  <div class="mb-3">
                    <label for="perkataan" class="form-label">Contoh Ayat</label>
                    <input type="text" name="contoh_ayat" class="form-control" id="contohayat" placeholder="{{ $perkataan->contoh_ayat }}">
                  </div>
                  <div class="mb-3">
                    <label for="perkataan" class="form-label">Bunyi Sebutan</label>
                    <input type="text" name="maksud_ayat" class="form-control" id="bunyisebutan" placeholder="{{ $perkataan->maksud_ayat }}">
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                 </div>
                </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection