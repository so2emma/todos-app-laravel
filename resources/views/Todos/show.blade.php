@extends("layouts.app")
@section("title", "Todo")
@section("content")

<h1 class="text-center my-5">
    {{ $todo->name }}
</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Description
            </div>
            <div class="card-body">
                {{ $todo->description }}
            </div>
        </div>
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-info my-2">Edit</a>
        <a href="/todo/{{ $todo->id }}/delete" class="btn btn-info my-2">Delete</a>
    </div>
</div>
@endsection
