<h1>Admin dashboard</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

<a href="Eleve">Gestion des Etudiants</a><br>
<a href="Prof">Gestion des Profs</a><br>
<a href="Filiere">Gestion des Filieres</a><br>
<a href="Module">Gestion des Modules</a><br>
<a href="Elementmodule">Gestion des Elements des modules</a><br>
<a href="Seances dashboard">Gestion d'emploi du temps</a><br>
