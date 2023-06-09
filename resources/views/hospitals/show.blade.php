@extends('hospitals.layout')
  
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Detail Rumah Sakit</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $hospital->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                {{ $hospital->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $hospital->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon :</strong>
                {{ $hospital->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pasien :</strong>
                @foreach($hospital->patients()->get() as $patient)
                <div class="card shadow-sm mb-2 ">
                    <div class="card-body ">
                         {{ $patient->name }}
                        </div>
                    </div>
                    @endforeach 
            </div>
        </div>
         
        
        
    </div>
@endsection