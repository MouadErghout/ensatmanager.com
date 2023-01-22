<a href="/dashboard">Dashboard</a><br>
<center>
    <h1>Liste des Profs</h1>
    <table border="3">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th colspan="3"><a href="Prof/create">Ajouter</a> </th>
        </tr>
        @forelse($Profs as $P)
            <tr>
                <td>{{$P->nom}}</td>
                <td>{{$P->prenom}}</td>
                <td><a href="/Prof/{{$P->id}}/edit"><strong> Modifier </strong></a></td>
                <td><a href="/Prof/{{$P->id}}"><strong> Supprimer </strong></a></td>
                <td><a href="/Prof/{{$P->id}}"><strong> Plus </strong></a></td>
            </tr>
        @empty
            <tr aria-colspan="8">la listes des Profs est vide</tr>
        @endforelse
    </table>
    <br>
</center>
