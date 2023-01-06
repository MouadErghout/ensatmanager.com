<h1>Gestion d'emploi du temps de GINF1</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

<a href="/Emplois du temps/GINF1">Gestion des emplois du temps du 1ère mi-semestre</a><br>
<a href="Seance/GINF1">Gestion des emplois du temps du 2ème mi-semestre</a><br>
<a href="Seance/GINF1">Gestion des emplois du temps du 3ème mi-semestre</a><br>
<a href="Seance/GINF1">Gestion des emplois du temps du 4ème mi-semestre</a><br>

