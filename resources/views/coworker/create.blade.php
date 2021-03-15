@extends('layouts/dashboard')

@section('title')
Tambah Coworker
@endsection

@section('header')
Tambah Coworker
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Coworker</label>
                            <input type="input" class="form-control" name="name" value="{{old('name')}}"
                                placeholder="Nama Coworker">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat Coworker</label>
                            <input type="input" class="form-control" name="address" value="{{old('address')}}"
                                placeholder="Alamat Coworker">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lokasi</label>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-question"></i>
                              </button>
                            <input type="input" class="form-control" name="location" value="{{old('location')}}"
                                placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control" name="path">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>