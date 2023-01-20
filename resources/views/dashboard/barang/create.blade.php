@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Barang Baru</h1>
      </div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/barang" class="mb-5" enctype="multipart/form-data">
        @csrf
         <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama')  }}">
            @error('nama')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <select class="form-select" name="supplier_id">
                @foreach ($suppliers as $supplier)

                 @if(old('supplier_id') == $supplier->id)
                  <option value="{{ $supplier->id }} " selected> {{ $supplier->nama }} </option>
                 @else
                  <option value="{{ $supplier->id }}"> {{ $supplier->nama }} </option>
                 @endif

                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control @error('title') is-invalid @enderror" id="stok" name="stok" required autofocus value="{{ old('stok')  }}">
            @error('stok')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ old('jenis')  }}">
            @error('jenis')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
            <button style="background-color:black; color:white;" type="submit" class="btn btn">Tambah Barang</button>
    </form>  
</div>  

<script>
    
</script>

@endsection