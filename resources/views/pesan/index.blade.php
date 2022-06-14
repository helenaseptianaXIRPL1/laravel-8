
@extends('dashboard.layouts.main')

@section('lamara')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="col-md-12 ">
         <a href="/dashboard" class="btn btn-success " ><i class="bi bi-arrow-left"></i></a>

       <div class="card">

              @foreach ($barangs as $barang)

              @endforeach
           </div>
           <div class="card-body">
             <div class="row">
                 <div class="col-md-6">
                     <img src="{{ url('images') }}/{{ $barang->gambar }}" width="400" alt="">
                 </div>
                 <div class="col-md-6 mt-5">
                     <h2>{{ $barang->nama_barang }}</h2>
                     <table class="table">
                       <tbody>
                         <tr>
                           <td>Harga</td>
                           <td>:</td>
                           <td>Rp. {{ number_format($barang->harga) }}</td>
                         </tr>
                         <tr>
                          <td>Stok</td>
                          <td>:</td>
                          <td> {{ number_format($barang->stok) }}</td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td>:</td>

                            <td>{{ $barang->keterangan }}</td>
                        </tr>
                        <tr>
                            <td>isi Paket</td>
                            <td>:</td>

                             <td>
                                <p>1. l'amara Daily Nourishing Cleanser</p>
                              <p>2. l'amara Skin Activating Toner </p>
                              <p>3. l'amara Radiance Oil </p>
                              <p>4. l'amara Revealing Eye Cream </p>
                              <p>5. l'amara Moisture Boost Emulsion </p>
                             </td>
                          </tr>
                          <form action="{{ url('order') }}" method="post">
                            @csrf
                            <tr>
                                <td>Jumlah Pesan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="jumlah_pesan" class="form-control" required>
                                    <button type="submit"  class="btn btn-success mt-3">
                                    Masukkan<i class="bi bi-cart4"></i></button>
                                    </form>
                                </td>
                             </tr>




                       </tbody>
                     </table>
                 </div>
             </div>

           </div>
       </div>
     </div>

    </div>

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@endsection
