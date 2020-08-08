@extends('adminlte.master');

@section('content')

<div class="card card-primary">
    <div class="ml-3 mt-3">
              <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" value="{{ old('judul', '') }}" id="judul" name="judul" placeholder="Masukkan Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" value="{{ old('isi', '') }}" id="isi" name="isi" placeholder="Masukkan Isi">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
    </div>
@endsection