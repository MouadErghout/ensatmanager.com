<center>
    <h1>Ajouter un Element de Module</h1>
    <form action='/Elementmodule' method='POST'>
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
                <td>Volume Horaire</td>
                <td><input type="text" name="VH"></td>
            </tr>
            <tr>
                <td>Poids</td>
                <td><input type="text" name="poids"></td>
            </tr>
            <tr>
                <td>Module</td>
                <td><input type="text" name="module"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Enregistrer"></td>
                <td><input type="reset" name="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
