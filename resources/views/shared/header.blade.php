{{-- header --}}
<header>
    <nav class="header-navbar">
        <a class="header-navbar_brand" href="{{ route('staticPage.index') }}"><img class="header-navbar_logo"
                src="https://www.boolean.careers/images/common/logo.png" alt="Logo Boolean"></a>
        <div>
            <ul class="header-navbar_links">
                <li><a href="{{ route('staticPage.index') }}">Home</a></li>
                <li><a href="#">Corso</a></li>
                <li><a href="{{ route('student.index') }}">Dopo il corso</a></li>
                <li><a href="#">Lezione gratuita</a></li>
                <li><a href="#">Assumi i nostri studenti</a></li>
                <li><a href="#">Candidati ora</a></li>
            </ul>
        </div>
    </nav>
</header>