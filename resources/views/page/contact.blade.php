@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container py-5">

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-center mb-4">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="text-muted">
                Hubungi HOLLOW.MARCH untuk pertanyaan dan kerja sama.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">

                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Nama lengkap"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No. HP</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    class="form-control"
                                    placeholder="08xxxxxxxxxx"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Pesan</label>
                                <select name="category" class="form-select" required>
                                    <option value="">Pilih pesan</option>
                                    <option value="Pertanyaan">Pertanyaan</option>
                                    <option value="Saran">Saran</option>
                                    <option value="Pengaduan">Pengaduan</option>
                                    <option value="Bisnis">Kerja Sama</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea
                                    name="message"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Tulis pesan lu di sini..."
                                    required
                                ></textarea>
                            </div>

                            <button type="submit" class="btn btn-dark w-100">
                                Kirim Pesan
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection