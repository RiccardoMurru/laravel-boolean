@extends('template.main')

@section('content')
<h2>{{ $student['name'] }}</h2>
<div class="students">
    <div class="student">
        <div class="student_info">
            <img src="{{ $student['img'] }}" alt=" {{ $student['name'] }}">
            <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
            <p>Assunt{{ ($student['gender'] == 'm' ? 'o' : 'a') }}
                da {{ $student['company'] }} come {{ $student['role'] }}</p>
            <p>{{ $student['description'] }}</p>
        </div>
    </div>
</div>
</a>
@endsection