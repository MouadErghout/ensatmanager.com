<center>
    <h1><strong>La Liste des Elements de Modules</strong></h1>
    <table border="3" >
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th>Volume horaire</th>
            <th>Poids</th>
            <th>Module</th>
            <th colspan="2"><a href="Elementmodule/create">Ajouter</a></th>
        </tr>
        @forelse($elemodules as $elem)
            <tr>
                <td> {{$elem->code}} </td>
                <td> {{$elem['designation']}} </td>
                <td> {{$elem->vh}} </td>
                <td> {{$elem['poids']}} </td>
                <td> {{$elem['module_code']}} </td>
                <td><a href="/Elementmodule/{{$elem->id}}/edit"><strong> Modifier </strong></a></td>
                <td><a href="/Elementmodule/{{$elem->id}}"><strong> Supprimer </strong></a></td>
            </tr>
        @empty
            <tr ><td colspan="5">La table est vide</td></tr>
        @endforelse
    </table>
    <br>
    <a href="/dashboard">Dashboard</a>
</center>
