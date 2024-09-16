@extends('layout.main')

@section('content')
Create Page
<div>

    <div>
        <hr>

        <form action="{{ route('worker.store') }}" method="post">
            @csrf
            <input type="text" name="name" id="" placeholder="name" value="{{ old('name') }}">
            @error('name')
            {{ $message }}
            @enderror
            <input type="text" name="surname" id="" placeholder="surname" value="{{ old('surname') }}">
            @error('surname')
            {{ $message }}
            @enderror
            <input type="email" name="email" id="" placeholder="email" value="{{ old('email') }}">
            @error('email')
            {{ $message }}
            @enderror
            <input type="number" name="age" id="" placeholder="age" value="{{ old('age') }}">
            @error('age')
            {{ $message }}
            @enderror
            <textarea name="description" id="" placeholder="description">{{ old('description') }}</textarea>
            @error('description')
            {{ $message }}
            @enderror

            <label>
                is_married
                <input type="checkbox" name="is_married" id=""
                       {{ old('is_married') == 'on' ? 'checked' : '' }} placeholder="is_married">
                @error('is_married')
                {{ $message }}
                @enderror
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
@endsection
