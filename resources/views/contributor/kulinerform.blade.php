@extends('layouts.user')


@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- End plugin css for this page -->
@endpush
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Add Kuliner </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Kuliner</li>
          </ol>
        </nav>
      </div>
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="/insertkuliner" method="POST" enctype="multipart/form-data">
            @csrf
          <h4 class="card-title">Kuliner Form Input</h4>
          <p class="card-description"> Input Below Here </p>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input name='name' type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleSelectGender">Kategori</label>
              <select name='address' class="form-control" id="exampleSelectGender">
                <option selected>Pilih Kategori</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Snack">Snack</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Wilayah</label>
              <input name='kategori' type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input name='foto' type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Deskripsi</label>
              <textarea name='description' class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="row justify-content-end">
              <a href="{{ route('contributor.datakuliner') }}" class="btn btn-secondary mr-2">Cancel</a>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
@push('js')
        <!-- Plugin js for this page -->
        <script src="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2/select2.min.js"></script>
        <script src="{{ asset('THEMEWAGON') }}/template/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- End plugin js for this page -->
            <!-- Custom js for this page -->
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/file-upload.js"></script>
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/typeahead.js"></script>
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
@endpush