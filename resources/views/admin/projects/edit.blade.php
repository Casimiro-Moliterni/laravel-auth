@extends('layouts.admin')
@section('content')
    <h2>Mofica il Progetto : <strong>{{ $project->name }}</strong></h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="name" placeholder="Es. Comic.com" name="name"
                    value="{{ old('name',$project->name) }}">
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Testo</label>
                <textarea class="form-control" id="summary" rows="3" name="summary">{{ old('summary',$project->summary) }}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
