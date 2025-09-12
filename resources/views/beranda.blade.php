@extends('layouts.app')

@section('title','Beranda')

@section('content')
<div class="container-fluid beranda-container">

    {{-- search bar --}}
    <div class="search-bar mb-3">
        <input type="text" class="form-control" placeholder="Search...">
    </div>

    {{-- info box --}}
    <div class="info-box mb-3 p-3">
        <span class="badge bg-light text-dark">Jun 10, 2024</span>
        <span class="badge bg-light text-dark">9:41 AM</span>
    </div>

    {{-- labels --}}
    <div class="labels mb-4">
        <button class="btn btn-outline-secondary btn-sm">Label</button>
        <button class="btn btn-outline-secondary btn-sm">Label</button>
        <button class="btn btn-outline-secondary btn-sm">Label</button>
        <button class="btn btn-outline-secondary btn-sm">Label</button>
    </div>

    {{-- tabel kegiatan --}}
    <div class="table-responsive card p-3 shadow-sm mb-4">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Surat Perintah</td>
                    <td>12 Jun 2024</td>
                </tr>
                <tr>
                    <td>Laporan Kegiatan</td>
                    <td>05 Apr 2024</td>
                </tr>
                <tr>
                    <td>Surat Tugas</td>
                    <td>18 Mar 2024</td>
                </tr>
                <tr>
                    <td>Notulen Rapat</td>
                    <td>22 Feb 2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- preview arsip --}}
    <div class="preview-card p-3 shadow-sm">
        <p class="text-muted">Preview Arsip</p>
        <div class="icon mb-2">
            <i class="bi bi-file-earmark-fill text-primary" style="font-size:40px;"></i>
        </div>
        <h6>Nama Kegiatan</h6>
        <small class="text-muted">Dokumen Terkait</small><br>
        <small>11 Nov 2024</small>
        <div class="mt-3">
            <a href="#" class="btn btn-primary btn-sm">Download</a>
            <a href="#" class="d-block mt-2 small text-decoration-none">Lihat Lengkap</a>
        </div>
    </div>

</div>
@endsection
