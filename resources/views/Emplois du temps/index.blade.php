<center>
    <h1><strong>La Liste des Modules</strong></h1>
    <table border="3" >
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Semestre</th>
            <th colspan="2"><a href="Module/create">Ajouter</a></th>
        </tr>
        @forelse($Modules as $elem)
            <tr>
                <td> {{$elem->code}} </td>
                <td> {{$elem['designation']}} </td>
                <td> {{$elem['filiere_code']}} </td>
                <td> {{$elem['niveau']}} </td>
                <td> {{$elem['semestre']}} </td>
                <td><a href="/Module/{{$elem->id}}/edit"><strong> Modifier </strong></a></td>
                <td><a href="/Module/{{$elem->id}}"><strong> Supprimer </strong></a></td>
                <td><a href="/Module/{{$elem->id}}"><strong> Plus </strong></a></td>
            </tr>
        @empty
            <tr ><td colspan="5">La table est vide</td></tr>
        @endforelse
    </table>
    <br>
    <a href="/dashboard">Dashboard</a>
</center>
