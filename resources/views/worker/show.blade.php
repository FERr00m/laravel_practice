@extends('layout.main')

@section('content')
Show Page
<div>

        <div>
            <hr>
            {{ $worker->name }}
            {{ $worker->surname }}
            {{ $worker->email }}
            {{ $worker->age }}
            {{ $worker->description }}
            <div>
                <a href="{{ route('worker.edit', $worker->id) }}">Edit</a>
            </div>
            <div>
                <a href="{{ route('worker.index') }}">Back</a>
            </div>
            <form action="{{ route('worker.delete', $worker->id) }}" method="post">
                @csrf
                @method('Delete')
                <button type="submit">Delete</button>
            </form>
            <hr>
        </div>

</div>
@endsection
