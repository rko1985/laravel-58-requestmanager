@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Insert a new item</h2>

        <form action="/request" method="post">
            @csrf
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" id="text" name="text" class="form-control" placeholder="Enter text..">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" id="body" name="body" class="form-control" placeholder="Enter text..">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection