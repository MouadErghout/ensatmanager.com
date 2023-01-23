<a href="/dashboard">Dashboard</a><br>
<h2>GINF1</h2><br>
<a href="/Releves de notes/GINF1">Mettre à jour les releves de notes de la classe <strong>GINF1</strong></a><br>
<a href="/Cartes des etudiants/GINF1">Mettre à jour les cartes des etudiants de la classe <strong>GINF1</strong></a><br>
<h2>AP2</h2><br>
<a href="/Releves de notes/AP2">Mettre à jour les releves de notes de la classe <strong>AP2</strong></a><br>
<a href="/Cartes des etudiants/AP2">Mettre à jour les cartes des etudiants de la classe <strong>AP2</strong></a><br>
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
