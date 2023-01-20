@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Barang</h1>
      </div>
      
      @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-10">
        <a style="background-color : black; color:white;" class="btn btn" href="/dashboard/barang/create">Tambah Barang Baru</a>
        <a class="btn btn-success" href="/dashboard/barang/export">Export Excel</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Supplier</th>
              <th scope="col">Stok</th>
              <th scope="col">Jenis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($barangs as $barang)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $barang->nama }} </td>
              <td>{{ $barang->supplier->nama }} </td>
              <td>{{ $barang->stok }} </td>
              <td>{{ $barang->jenis }} </td>
              <td>
                <a href="/dashboard/barang/{{ $barang->id }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="/dashboard/barang/{{ $barang->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/barang/{{ $barang->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>

            @endforeach 

          </tbody>
        </table>
      </div>
@endsection