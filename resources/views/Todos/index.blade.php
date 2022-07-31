@extends("layouts.app")
@section("title", "Todo List")
@section("content")
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center my-5">Todos Page</h1>

        <div class="card ">
            <div class="card-header">
                Todos
            </div>

            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo )
                    <li class="list-group-item">
                        {{ $todo->name }}

                        @if (!$todo->completed)
                        <a href="/todo/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-end mx-2">Completed</a>
                        @endif
                        <a href="/todo/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
