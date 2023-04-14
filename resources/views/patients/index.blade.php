@extends('patients.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Pasien</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('patients.create') }}"> Tambah Pasien</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Alamat</th> 
            <th>Telepon</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->address }}</td> 
            <td>{{ $patient->phone }}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info mb-1" href="{{ route('patients.show',$patient->id) }}">View</a>
    
                    <a class="btn btn-outline-info mb-1" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- <div class="row text-center">
        {!! $patients->links() !!}
    </div> --}}
      
@endsection