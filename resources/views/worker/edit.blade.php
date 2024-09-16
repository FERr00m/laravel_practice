<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Edit Page
<div>

    <div>
        <hr>

        <form action="{{ route('worker.update', $worker->id) }}" method="post">
            @csrf
            @method('Patch')
            <input type="text" name="name" id="" placeholder="name" value="{{ old('name') ?? $worker->name }}">
            <input type="text" name="surname" id="" placeholder="surname" value="{{ old('surname') ?? $worker->surname }}">
            <input type="email" name="email" id="" placeholder="email" value="{{ old('email') ?? $worker->email }}">
            <input type="number" name="age" id="" placeholder="age" value="{{ old('age') ?? $worker->age }}">
            <textarea name="description" id="" placeholder="description">{{ old('description') ?? $worker->description }}</textarea>

            <label>
                is_married
                <input type="checkbox" name="is_married" {{ old('is_married') || $worker->is_married ? 'checked' : '' }} id="" placeholder="is_married">

            </label>

            <div>
                <button type="submit">Send</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <a href="{{ route('worker.index') }}">Back</a>
        </div>
        <hr>
    </div>

</div>
</body>
</html>
