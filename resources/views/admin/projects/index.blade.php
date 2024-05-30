@extends('layouts.admin')
@section('content')
    <h1>Progetti del Sito</h1>
    <table class="table table-striped text-center">
       <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>slug</th>
            <th>create at</th>
          </tr>
       </thead>
       <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td >{{ $project->id }}</td>
                    <td >{{ $project->name }}</td>
                    <td >{{ $project->slug }}</td>
                    <td >{{ $project->created_at}}</td>
                    <td >
                        <div>
                            <a href="{{ route('admin.projects.show',["project"=>$project->id]) }}">view</a>
                        </div>
                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection