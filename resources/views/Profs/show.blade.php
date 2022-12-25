<a href="/dashboard">Dashboard</a>
<a href="/Releve de note/{{$Prof->id}}">Note et Resultas</a>


<center>
    <h1>{{$Prof->nom}} {{$Prof->prenom}}</h1>
    <table border="3">
        <tr>
            <th>Nom</th>
            <td>{{$Prof->nom}}</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>{{$Eleve->prenom}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$User->email}}</td>
        </tr>
    </table>
</center>


