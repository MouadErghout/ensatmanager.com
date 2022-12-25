<h1>Geion d'emploi du temps</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

<a href="Seance/1">Gestion des emplois du temps du 1ère mi-semestre</a><br>
<a href="Seance/2">Gestion des emplois du temps du 2ème mi-semestre</a><br>
<a href="Seance/3">Gestion des emplois du temps du 3ème mi-semestre</a><br>
<a href="Seance/4">Gestion des emplois du temps du 4ème mi-semestre</a><br>

