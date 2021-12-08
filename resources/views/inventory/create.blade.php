@extends('templates.main')

@section('navbar')
  @include('templates.partials.navbar')
@endsection

@section('content')
  <center>
      <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="{{url('inventory.store')}}">
      	@csrf
        <section class="base">
          <div>
            <label>Nama Produk</label>
            <input type="text" name="nama" autofocus="" required="" />
          </div>

          <div>
            <label>Gambar Produk</label>
            <input type="file" name="foto" required="" />
          </div>

          <div>
            <label>Kondisi</label>
            <input type="text" name="kondisi" autofocus="" required="" />
          </div>

          <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" autofocus="" required="" />
          </div>

          <div>
           <button type="submit" href="{{url('inventory.index')}}">Simpan Produk</button>
          </div>
        </section>
      </form>
@endsection