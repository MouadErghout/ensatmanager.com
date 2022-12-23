<h1>Dashboard</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
<a href="/Releve de note/{{$Eleve->id}}">Note et Resultas</a>
<center>
    <h1>{{$Eleve->nom.' '.$Eleve->prenom}}</h1>
    <table>
        <tr>
            <td>Code Apogee</td>
            <td>{{$Eleve->code}}</td>
        </tr>
        <tr>
            <td>Filiere</td>
            <td>{{$Eleve->filiere_code}}</td>
        </tr>
        <tr>
            <td>Niveau</td>
            <td>{{$Eleve->niveau}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$User->email}}</td>
        </tr>
    </table>
</center>

