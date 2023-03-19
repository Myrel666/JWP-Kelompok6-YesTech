@extends('layouts.user')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> List Destinasi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Destination tables</li>
                </ol>
              </nav>
            </div>
            <div class="row justify-content-end">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Destinasi</h4>
                    <a class="btn btn-success me-auto mb-3" href="{{ route('contributor.destinasi.form') }}">+ Add Destinasi</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($destinasi as $row)
                          <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->kategori}}</td>
                            <td>
                              <img src="{{asset('fotodestinasi/'.$row->foto)}}" alt="" style="width:50px;">
                            </td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->description}}</td>
                            <td>
                            <a href="/editdestinasi/{{$row->id}}" class="btn btn-primary mb-2">Edit</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection