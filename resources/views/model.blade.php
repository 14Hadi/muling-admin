@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card shadow-sm ">
          <div class="card-body">

            <form action="{{ route('post_model') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div>
                <label for="formFileLg" class="form-label">Upload / Update Model Baru</label>
                <input name="model" class="form-control form-control-lg" id="formFileLg" type="file" accept=".pkl">
              </div>


              <div class="mt-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>

            @error('model')
            <div class="alert alert-warning mt-4" role="alert">
              {{  $message }}
            </div>
            @enderror

            @if (session('success'))
              <div class="alert alert-success mt-4" role="alert">
                {{ session('success') }}
              </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
