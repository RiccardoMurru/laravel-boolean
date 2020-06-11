@extends('template.main')

@section('content')

<h2>I nostri studenti</h2>
<div class="students">
    @foreach ($students as $student)
    <a class="student" href=" {{ route('student.show', ['id' => $student['id']] ) }}">
        <div class="student_info">
            <img src="{{ $student['img'] }}" alt=" {{ $student['name'] }}">
            <h3>{{ $student['name'] }}</h3>
            <p>Assunt{{ ($student['gender'] == 'm' ? 'o' : 'a') }}
                da {{ $student['company'] }} come {{ $student['role'] }}</p>
            <p>{{ $student['description'] }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection