<script id="student-template" type="text/x-handlebars-template">
    <a class="student" href=" {{ url('students/show')}}/@{{ slug }}">
        <div class="student_info">
            <img src="@{{ img }}" alt=" @{{ name }}">
            <h3>@{{ name }} (@{{ age }} anni)</h3>
            <p> @{{ assunzione }}
                da @{{ company }} come @{{ role }}</p>
            <p>@{{ description }}</p>
        </div>
    </a>
</script>