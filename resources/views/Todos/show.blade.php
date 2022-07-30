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
    </div>
</div>
@endsection
