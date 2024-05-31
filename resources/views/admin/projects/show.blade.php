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
        <strong>Update at :</strong>{{ $project->updated_at }}
    </div>
    @if ($project->summary)
        <p class="mt-5"><strong>Content:</strong>{{ $project->summary }}</p>
    @endif
    <div>
        <a class="my_arrow_show" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-arrow-turn-up"></i></a>
    </div>
@endsection