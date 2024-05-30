@extends('layouts.admin')
@section('content')
    <h2>{{ $project->name }}</h2>
    <div>
        <strong>Slug :</strong>{{ $project->slug }}
    </div>
    <div class="mt-1">
        <strong>Created at :</strong>{{ $project->created_at }}
    </div>
    <div class="mb-4  border-bottom">
        <strong>Update at :</strong>{{ $project->update_at }}
    </div>
    <div>
        <strong>Summary</strong>{{ $project->summary }}
    </div>
@endsection