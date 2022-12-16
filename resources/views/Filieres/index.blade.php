<center>
    <h1><strong>La liste des Filieres</strong></h1>
    <table border="3" >
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th colspan="2"><a href="Filiere/create">Ajouter</a></th>
        </tr>
        @forelse($Filieres as $elem)
            <tr>
                <td> {{$elem->code}} </td>
                <td> {{$elem['designation']}} </td>
                <td><a href="/Filiere/{{$elem->id}}/edit"><strong> Modifier </strong></a></td>
                <td><a href="/Filiere/{{$elem->id}}"><strong> Plus </strong></a></td>
            </tr>
        @empty
            <tr ><td colspan="5">La table est vide</td></tr>
        @endforelse
    </table>
    <br>
    <a href="/dashboard">Dashboard</a>
</center>
