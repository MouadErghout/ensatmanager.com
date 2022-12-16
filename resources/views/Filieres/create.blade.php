<center>
    <h1>Ajouter un etudiant</h1>
    <form action='/Filiere' method='POST'>
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
                <td><input type="submit" name="Enregistrer"></td>
                <td><input type="reset" name="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
