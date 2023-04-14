@extends('patients.layout')
   
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Pasien</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
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
  
    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-4 mb-2">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="name" value="{{ $patient->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <input class="form-control" name="address" placeholder="Alamat" value="{{ $patient->address }}">
                </div>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Telepon :</strong>
                    <input class="form-control" name="phone" placeholder="Telepon" value="{{ $patient->phone }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Rumah Sakit :</strong>
                    <select  id="hospital-dropdown" class="form-control">
                        <option value="" >-- Pilih RS --</option>
                        {{-- @foreach ($hospital as $data)
                        <option value="{{$data->id}}">
                            {{$data->name}}
                        </option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection