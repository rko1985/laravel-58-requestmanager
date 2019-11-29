@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Edit item</h2>

        <form action="/request/{{$item->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" id="text" name="text" class="form-control" value="{{$item->text}}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" id="body" name="body" class="form-control" value="{{$item->body}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection