<center>
    <h1>Liste des Notes</h1>
    <table border="3">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Filiere</th>
            <th>Niveau</th>
        </tr>
        @forelse($Notes as $E)
            <tr>
                <td>{{$E->eleve->code}}</td>
                <td>{{$E->elementmodule->code}}</td>
                <td>{{$E->note}}</td>
                <td><a href="/Note/{{$E->id}}/edit"><strong> Modifier </strong></a></td>
            </tr>
        @empty
            <tr aria-colspan="8">La listes des notes est vide</tr>
        @endforelse
    </table>
    <br>
    <a href="/dashboard">Dashboard</a>
</center>

