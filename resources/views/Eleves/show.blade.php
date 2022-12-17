<a href="/dashboard">Dashboard</a>
<td><a href="/Note/{{$E->code}}/edit"><strong> Notes et Resultats </strong></a></td>

<center>
    <h1>{{$Eleve->nom}} {{$Eleve->prenom}}</h1>
    <table border="3">
        <tr>
            <th>Code etudiant</th>
            <td>{{$Eleve->code}}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{$Eleve->nom}}</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>{{$Eleve->prenom}}</td>
        </tr>
        <tr>
            <th>Filiere</th>
            <td>{{$Eleve->filiere_code}}</td>
        </tr>
        <tr>
            <th>Niveau</th>
            <td>{{$Eleve->niveau}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$User->email}}</td>
        </tr>
    </table>
</center>


