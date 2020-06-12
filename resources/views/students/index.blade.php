@extends('template.main')

@section('content')

<h2>I nostri studenti</h2>
<select name="gender" id="gender">
    @foreach ($genders as $gender)
    <option value="{{ $gender }}"> @switch($gender)
        @case('m')
        Uomo
        @break
        @case('f')
        Donna
        @break
        @default
        Tutti
        @endswitch</option>
    @endforeach
</select>
<div class="students">
    @foreach ($students as $student)
    <a class="student" href=" {{ route('student.show', ['slug' => $student['slug']] ) }}">
        <div class="student_info">
            <img src="{{ $student['img'] }}" alt=" {{ $student['name'] }}">
            <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
            <p>Assunt{{ ($student['gender'] == 'm' ? 'o' : 'a') }}
                da {{ $student['company'] }} come {{ $student['role'] }}</p>
            <p>{{ $student['description'] }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection