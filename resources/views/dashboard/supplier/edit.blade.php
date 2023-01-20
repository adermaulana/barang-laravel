@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Supplier</h1>
      </div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/supplier/{{ $supplier->id }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
         <div class="mb-3">
        <label for="nama" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama',$supplier->nama)  }}">
            @error('nama')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
            <button style="background-color:black; color:white;" type="submit" class="btn btn">Update Supplier</button>
    </form>  
</div>  

<script>
    
</script>

@endsection