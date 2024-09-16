@extends('layout.main')

@section('content')
Index Page

<hr>
Search
<div>
    <form action="{{ route('worker.index') }}">
        <div><input type="text" name="name" id="" placeholder="name" value="{{ request()->get('name') }}"></div>
        <div><input type="text" name="surname" id="" placeholder="surname"></div>
        <div><input type="text" name="email" id="" placeholder="email"></div>
        <div><input type="number" name="from" id="" placeholder="from"></div>
        <div><input type="number" name="to" id="" placeholder="to"></div>
        <div><input type="text" name="description" id="" placeholder="description"></div>
        <div><input type="checkbox" name="is_married" id=""> isMaried</div>

        <div>
            <button>Search</button>
        </div>
        <a href="{{ route('worker.index') }}">reset</a>
    </form>
</div>
<div>
    <a href="{{ route('worker.create') }}">Add</a>
</div>
<div>
    @foreach($workers as $worker)
        <div>
            <hr>
            {{ $worker->name }}
            {{ $worker->surname }}
            {{ $worker->email }}
            {{ $worker->age }}
            {{ $worker->description }}
            {{ $worker->is_married }}
            <div>
                <a href="{{ route('worker.show', $worker->id) }}">Show</a>
            </div>
            <hr>
        </div>

    @endforeach
</div>

<div class="my-nav">
    {{ $workers->withQueryString()->links() }}
</div>

@endsection
