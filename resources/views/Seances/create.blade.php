<center>
    <h1>Ajouter une Seance</h1>
    <form action='/Seance' method='POST'>
        @csrf
        <table>
            <tr>
                <td>Element module</td>
                <td><input type="text" name="element_module"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Prof</td>
                <td><input type="text" name="prof"></td>
            </tr>
            <tr>
                <td>Mi-semestre</td>
                <td><input type="text" name="misemestre"></td>
            </tr>
            <tr>
                <td>jour</td>
                <td><input type="text" name="jour"></td>
            </tr>
            <tr>
                <td>temps</td>
                <td><input type="text" name="temps"></td>
            </tr>
            <tr>
                <td>Salle</td>
                <td><input type="text" name="salle"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Enregistrer"></td>
                <td><input type="reset" name="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
