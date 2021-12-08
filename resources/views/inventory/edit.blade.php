@extends('templates.main')

@section('navbar')
  @include('templates.partials.navbar')
@endsection

@section('content')
  <center>
        <h1>Edit Produk <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="edit-control.php" enctype="multipart/form-data" >
        <section class="base">
          <!-- menampung nilai id produk yang akan di edit -->
          <input name="id" value="<?php echo $data['id']; ?>"  hidden />
          <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
          </div>

          <div>
            <label>Gambar Produk</label>
            <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
            <input type="file" name="gambar" />
            <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
          </div>

          <div>
           <button type="submit">Simpan Perubahan</button>
          </div>
        </section>
      </form>
@endsection