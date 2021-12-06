@extends('layouts.main')
@section('container')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ml-5">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark" style="color: rgb(78, 87, 100) !important">Home</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page" style="color: rgb(78, 87, 100) !important">Login</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex login-container">
        <div class="container">
            <div class="d-flex p-5">
                <h1 class="text-light flex-fill fs-1 fw-bold"> Login</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center flex-row-reverse mt-5">
            <div class="col-lg-5 mb-4">
                <div class="card border-0 mw" style="border-radius:1rem;background-color:rgb(246, 243, 243)">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center mb-5 header-color fw-bold">Masukkan Email atau No. HP</h3>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-5 col-lg-10 offset-lg-1">
                                <label for="email" class="form-label text-center fw-bold"> Alamat Email/No. HP</label>
                                <input type="emailhp" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@gmail.com" autofocus required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger rounded-pill p-3 fw-bold" style="width: 200px">Lanjutkan</button> 
                            </div>                         
                        </form>
                        <h5 class="card-title text-center mt-5 header-color">Atau login melalui metode lain</h5>
                        <div class="d-flex justify-content-center mt-5">
                            <a href="/auth/facebook" class="btn rounded-pill me-4" style="background-color: white"><i class="bi bi-facebook"></i></a>
                            <button type="button" class="btn rounded-pill me-4" style="background-color: white"><i class="bi bi-google"></i></button>
                            <button type="button" class="btn btn-dark rounded-pill"><i class="bi bi-apple"></i></button>
                        </div>
                    </div>
                  </div>
              </div>
            <div class="col-lg-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">
                                <img src="/image/icon-cash-on-hand.svg" alt="cashonhand" style="height: 60px">
                            </div>
                            <div class="col-9 of-1 mb-4">
                                <h5 class="header-color lh-32 fw-bold">Proses Transaksi Otomatis Tersimpan</h5>
                                <h6 class="sublist">Simpan dan selesaikan transaksi pembelian Orbit dalam 3 hari tanpa harus membuat ulang pesanan Anda.</h6>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-4">
                            <div class="col-2">
                                <img src="/image/icon-deliver.svg" alt="deliver" style="height: 60px">
                            </div>
                            <div class="col-9 of-1 mb-4">
                                <h5 class="header-color lh-32 fw-bold">Cek Status Pengiriman</h5>
                                <h6 class="sublist">Cek status pesanan modem Orbit Anda dengan mudah di mana saja.</h6>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-4">
                            <div class="col-2">
                                <img src="/image/icon-internet.svg" alt="internet" style="height: 60px">
                            </div>
                            <div class="col-9 of-1">
                                <h5 class="header-color lh-32 fw-bold">Cek dan Beli Paket Data</h5>
                                <h6 class="sublist">Cek sisa paket data dan beli paket data tambahan untuk modem Orbit Anda.</h6>
                            </div>
                        </div>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
@endsection

