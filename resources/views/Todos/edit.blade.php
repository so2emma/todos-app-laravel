@extends("layouts.app")
@section("content")

    <h1 class="text-center my-5">
        Edit Todos
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                    <form action="/todo/{{ $todo->id }}/update-todo" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="name" name="name" value="{{ $todo->name }}">
                            @error("name")
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <textarea name="description" id="" cols="5" rows="5" placeholder="Description" class="form-control">{{ $todo->description }}
                            </textarea>
                            @error("description")
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success">Update Todo</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
