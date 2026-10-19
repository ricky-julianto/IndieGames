@extends('layouts.app')     
@section('title', 'Project')
@section('content')

<div class="container mt-5">
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar project mahasiswa Universitas Pamulang</p>
    </div>
    <div class="row justify-content-center g-4">
        @foreach ($projects as $project)
        <div class="col-md-4">
            <div class="card">
               <img src="{{ asset('images/' . $project->image) }}"
                    alt="{{ $project->name }}"
                    class="card-img-top"
                    style="width: 100%; height: auto; display: block;">
                <div class="card-body">
                    <span class="badge {{ $project->status === 'Selesai' ? 'bg-success' : 'bg-warning' }}">
                        {{ $project->status }}
                    </span>
                    <h5 class="card-title">
                        {{ $project->tittle }} 
                    </h5>
                    <p class="card-text">
                        {{ Str::limit($project->description, 50) }}
                    </p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small class="text-muted">
                            Tech: {{ $project->teknologi }}
                        </small>
                    </div>
                    <a href="{{ route('project.show', $project->id) }}"
                       class="btn btn-primary w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center gap-4 mt-4">
        @if ($projects->onFirstPage())
        <span class="text-muted">Previous</span>
    @else
        <a href="{{ $projects->previousPageUrl() }}">Previous</a>
    @endif

    @if ($projects->hasMorePages())
        <a href="{{ $projects->nextPageUrl() }}">Next</a>
    @else
        <span class="text-muted">Next</span>
    @endif
</div>
    </div>
</div>
@endsection