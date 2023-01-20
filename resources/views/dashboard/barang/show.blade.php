@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >Detail</h2>

            <a class="btn btn-success" href="/dashboard/barang"><span data-feather="arrow-left"></span>Kembali</a>
            <a class="btn btn-warning" href="/dashboard/barang/{{ $barangs->id }}/edit"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/barang/{{ $barangs->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Delete</button>
                </form>

            <article class="my-3 fs-5">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text">  </span>
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Barang</h6>
            </div>
            <span class="text">{{ $barangs->nama }}</span>
          </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Supplier</h6>
            </div>
            <span class="text">{{ $barangs->supplier->nama }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Stok</h6>
            </div>
            <span class="text">{{ $barangs->stok }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Jenis</h6>
            </div>
            <span class="text">{{ $barangs->jenis }}</span>
          </li>
        </ul>
            </article>
        </div>
    </div>
</div>

@endsection