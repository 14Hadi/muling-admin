@extends('layouts.main')

@section('content')
  <div class="container-fluid">

    <div class="card shadow-sm border">
      <div class="card-body">
        <h4 class="card-title">Feedback Pengguna</h4>
        <h6 class="card-subtitle">
          Data <code>feedback</code> pengguna aplikasi muling.
        </h6>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Saran</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1.</td>
              <td>Akbar</td>
              <td>akbar@gmail.com</td>
              <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, non!</td>
              <td>
                <button type="button" class="btn btn-danger btn-sm text-white">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection
