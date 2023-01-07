<h1>Dashboard</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>
<a href="/Releve de note/{{$Eleve->id}}">Note et Resultas</a><br><br>
<a href="/Carte etudiant/{{$Eleve->id}}">Carte d'etudiant</a>
<center>
    @if($Eleve->photo)
        <div class="container">
            <img src="{{ url('Cartes des etudiants/images/'.$Eleve->photo) }}"
                 style="height: 100px; width: 150px;">
        </div>
    @else
        <div class="container">
            <form method="post" action="store-image/{{$Eleve->id}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="image">
                    <input type="file" class="form-control" required name="image">
                </div>

                <div class="post_button">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    @endif
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

