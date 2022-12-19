<a href="/dashboard">Dashboard</a>
<a href="/RelevesGINF1">Releves</a>

<center>
    <h1>Liste des Eleves</h1>
    <table border="3">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th colspan="3"><a href="Eleve/create">Ajouter</a> </th>
        </tr>
        @forelse($Eleves as $E)
            <tr>
                <td>{{$E->code}}</td>
                <td>{{$E->nom}}</td>
                <td>{{$E->prenom}}</td>
                <td>{{$E->filiere_code}}</td>
                <td>{{$E->niveau}}</td>
                <td><a href="/Eleve/{{$E->id}}/edit"><strong> Modifier </strong></a></td>
                <td><a href="/Eleve/{{$E->id}}"><strong> Supprimer </strong></a></td>
                <td><a href="/Eleve/{{$E->id}}"><strong> Plus </strong></a></td>
            </tr>
        @empty
            <tr aria-colspan="8">la listes des Eleves est vide</tr>
        @endforelse
    </table>
    <br>
</center>
