@extends('layouts.app')
    @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Create Idea</h2>
<form action="{{route('idea.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">
        Title:
        <input type="text" name="title">
    </label><br>
    <label for="content">
        Description:
        <input type="text" name="description">
    </label><br>
    <label for="Role">
        Post as:
        <select name="user_id" id="">
            <option value="{{auth()->user()->id}}">Yourself</option>

            <option value="5">Anonymous</option>
        </select>

    </label><br>
    <label for="category">
        Category:

        <select name="category_id" id="">
        @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </label><br>
    <label for="Document">
        Select file to upload:
        <input type="file" name="document">
    </label><br>
{{--    <div class="form-group">--}}
{{--        <label for="document">Document:</label>--}}
{{--        <div class="custom-file">--}}
{{--            <input type="file" name="document" class="custom-file-input" id="document">--}}
{{--            <label class="custom-file-label" for="document">Choose file</label>--}}
{{--        </div>--}}
{{--    </div>--}}

    <button type="submit">Create idea</button>

</form>
</body>
</html>
@endsection
