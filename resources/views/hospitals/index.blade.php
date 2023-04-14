@extends('hospitals.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Daftar Rumah Sakit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('hospitals.create') }}"> Tambah Rumah Sakit</a>
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
            <th>Email</th>
            <th>Telepon</th>
            <th width="200px">Action</th>
        </tr>
        
        @foreach ($hospitals as $hospital)
        <tr>
            <td>{{ $hospital->name }}</td>
            <td>{{ $hospital->address }}</td>
            <td>{{ $hospital->email }}</td>
            <td>{{ $hospital->phone }}</td>
            <td >
                <form action="{{ route('hospitals.destroy',$hospital->id) }}" method="POST">
   
                    <a class="btn btn-info mb-1" href="{{ route('hospitals.show',$hospital->id) }}">View</a>
    
                    <a class="btn btn-outline-info mb-1" href="{{ route('hospitals.edit',$hospital->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- <div class="row text-center">
        {!! $hospitals->links() !!}
    </div> --}}
      
@endsection