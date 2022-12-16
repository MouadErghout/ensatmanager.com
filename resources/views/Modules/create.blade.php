<center>
    <h1>Ajouter un Module</h1>
    <form action='/Module' method='POST'>
        @csrf
        <table>
            <tr>
                <td>Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Designation</td>
                <td><input type="text" name="designation"></td>
            </tr>
            <tr>
                <td>Filiere</td>
                <td><input type="text" name="filiere"></td>
            </tr>
            <tr>
                <td>Niveau</td>
                <td><input type="text" name="niveau"></td>
            </tr>
            <tr>
                <td>Semestre</td>
                <td><input type="text" name="semestre"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Enregistrer"></td>
                <td><input type="reset" name="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
