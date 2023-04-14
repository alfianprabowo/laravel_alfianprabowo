@extends('hospitals.layout')
   
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Rumah Sakit</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('hospitals.update',$hospital->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4 mb-2">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="name" value="{{ $hospital->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <input class="form-control" name="address" placeholder="Alamat" value="{{ $hospital->address }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Email :</strong>
                    <input type="text" name="email" value="{{ $hospital->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Telepon :</strong>
                    <input class="form-control" name="phone" placeholder="Telepon" value="{{ $hospital->phone }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection