@extends('layouts.admin')

@section('title')
    | {{$project->name}}
@endsection

@section('content')
<div class="container mt-3 show-container">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    <h1 class="my-3">{{$project->name}}</h1>


    <h3>{{$project->client_name}}</h3>

    @if ($project->cover_image)
        <div>
            <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->cover_image_original}}">
            <p><i>{{$project->cover_image_original}}</i></p>
        </div>
    @endif

    <img src="{{$project->cover_image}}" alt="{{$project->name}}">

    <p>{{$project->summary}}</p>

    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna all'elenco</a>
    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>


</div>
@endsection
