@extends('dashboard.app')
@section('content')
<div class="section-header">
    <h1>Data Reservasi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-header">
            <h2 class="section-title">Ubah Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.reservasi.update', $reservasi->id_reservasi) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Customer</label>
                    <select class="form-control" name="customer_id" id="exampleFormControlSelect1">
                        @foreach ($customers as $dt_customers)
                        <option value="{{ $dt_customers->customer_id }}" @if(old('customer_id')==$dt_customers->customer_id)selected
                            @elseif(!old('customer_id') && $reservasi->customer_id == $dt_customers->customer_id)selected
                            @endif
                            >{{ $dt_customers->nama_customer }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tanggal</label>
                    <select class="form-control" name="id_hotel" id="exampleFormControlSelect1">
                        @foreach ($hargahariini as $dt_hargahariini)
                        <option value="{{ $dt_hargahariini->id_hotel }}" @if(old('id_hotel')==$dt_hargahariini->id_hotel)selected
                            @elseif(!old('id_hotel') && $reservasi->id_hotel == $dt_hargahariini->id_hotel)selected
                            @endif
                            >{{ $dt_hargahariini->tanggal }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" id="exampleInputtanggal_mulai1" aria-describedby="idHelp" value="{{ old('tanggal_mulai', $reservasi->tanggal_mulai) }}">
                    <small id="idHelp" class="form-text text-muted"></small>
                    @error('tanggal_mulai')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                    <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputtanggal_akhir1" aria-describedby="idHelp" value="{{ old('tanggal_akhir', $reservasi->tanggal_akhir) }}">
                    <small id="idHelp" class="form-text text-muted"></small>
                    @error('tanggal_akhir')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection