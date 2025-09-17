@extends('layouts.app')

@section('title','Arsip')

@section('content')
    <div class="content-container">
        <div class="d-flex konten">
            <div class="search-bar mb-3">
                <input type="text" class="form-control" placeholder="Search...">
            </div>

            <div class="info-box mb-3 p-3">
                <span class="badge bg-light text-dark">Jun 10, 2024</span>
                <span class="badge bg-light text-dark">9:41 AM</span>
            </div>
        </div>
        <div class="header">
            <h2>Arsip Dokumen Dinas Kebudayaan Provinsi Bali</h2>
            <button id="btnTambahBox" class="btn-add">+ Tambah Box</button>
            <div id="modalBox" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Tambah Box Baru</h3>
                    <form id="boxForm">
                    <label>Nama Box</label>
                    <input type="text" id="namaBox" required>

                    <label>Keterangan</label>
                    <textarea id="ketBox" required></textarea>

                    <button type="submit" class="btn-simpan">Simpan</button>
                    </form>
                </div>
                </div>
        </div>

        <div class="boxes">
            <div class="box" id="boxesContainer">
                <div class="box-image"></div>
                <div class="box-content">
                    <h3>BOX 1</h3>
                    <p>Keterangan box 1</p>
                </div>
            </div>
            <div class="box">
                <div class="box-image"></div>
                <div class="box-content">
                    <h3>BOX 1</h3>
                    <p>Keterangan box 1</p>
                </div>
            </div>
            <div class="box">
                <div class="box-image"></div>
                <div class="box-content">
                    <h3>BOX 1</h3>
                    <p>Keterangan box 1</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="module" src="{{ asset('resources/js/boxes.js') }}"></script>
@endpush