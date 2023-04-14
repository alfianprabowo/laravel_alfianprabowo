@extends('patients.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 mt-5">
        <div>
            <h2>Tambah Pasien Baru</h2>
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
   
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4 mb-2">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="name" class="form-control" placeholder="Rumah Sakit">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input class="form-control" name="address" placeholder="Jl.">
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Telepon :</strong>
                <input class="form-control" name="phone" placeholder="022825254">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Rumah Sakit :</strong>
                <select  id="hospital-dropdown" class="form-control ">
                    <option  >-- Pilih RS --</option>
                    {{-- @foreach ($hospital as $data) --}}
                        <option value={{$hospital->id}}>
                            {{$hospital->name}}
                        </option>
                    {{-- @endforeach --}}
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5  ">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#hospital-dropdown').on('change', function() {
               var hospital_id = $(this).val();
               console.log(hospital_id); 
        //        if(hospital_id) {
        //            $.ajax({
        //                url: '/hospitals/'+hospital_id,
        //                type: "GET",
        //                data : {"_token":"{{ csrf_token() }}"},
        //                dataType: "json",
        //                success:function(data)
        //                {
        //                  if(data){
        //                     $('# ').empty();
        //                     $('# ').append('<option hidden>Choose Course</option>'); 
        //                      
        //                 }else{
        //                     $('#').empty();
        //                 }
        //              }
        //            });
        //        }else{ 
        //        }
            });
    });
</script>
@endsection