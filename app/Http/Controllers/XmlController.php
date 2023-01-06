<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Module;
use App\Models\Note;
use App\Models\Seance;
use App\Models\User;
use DOMAttr;
use DOMDocument;
use DOMImplementation;
use DOMXPath;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class XmlController extends Controller
{
    public function XMLReleves($Classe)
    {

        $dom = new DOMDocument();
        $dom->encoding = 'UTF-8';
        $dom->xmlVersion = '1.0';
        $dom->xmlStandalone = false;
        $dom->formatOutput = true;
        $implement  = new DOMImplementation();
        $dom->appendChild($implement->createDocumentType('Eleves SYSTEM "RELEVES.dtd"'));

        $xml_file_name = 'Releves de notes/'.$Classe.'.xml';

        $Eleves = $dom->createElement('Eleves');
        $niveau = new DOMAttr('niveau',"$Classe");
        /*$xmlns = new DOMAttr('xmlns',"https://www.w3schools.com");
        $xmlns_xsi = new DOMAttr('xmlns:xsi',"http://www.w3.org/2001/XMLSchema-instance");
        $xsi_schemaLocation = new DOMAttr('xsi:schemaLocation',"https://www.w3schools.com/xml RELEVES.xsd");*/
        $Eleves->setAttributeNode($niveau);
        /*$Eleves->setAttributeNode($xmlns);
        $Eleves->setAttributeNode($xmlns_xsi);
        $Eleves->setAttributeNode($xsi_schemaLocation);*/
        $eleves = Eleve::all()->where('niveau','=',$Classe);
        $Moyenne_classe = 0;
        foreach ($eleves as $eleve)
        {
            $elev = $dom->createElement('Eleve');
            $code = new DOMAttr('id', $eleve->code);
            $nom = new DOMAttr('nom', $eleve->nom);
            $prenom = new DOMAttr('prenom', $eleve->prenom);
            $elev->setAttributeNode($code);
            $elev->setAttributeNode($nom);
            $elev->setAttributeNode($prenom);
            $Modules = Module::all()->where('niveau', '=', $Classe);
            $moyenne = 0;
            foreach ($Modules as $Module) {
                $module = $dom->createElement('Module');
                $code = new DOMAttr('id', $Module->code);
                $designation = new DOMAttr('designation', $Module->designation);
                $module->setAttributeNode($code);
                $module->setAttributeNode($designation);
                $ElementsModule = $Module->Elementmodule;
                $notem = 0;
                foreach ($ElementsModule as $ElementModule) {
                    $elementmodule = $dom->createElement('Element_module');
                    $code = new DOMAttr('id', $ElementModule->code);
                    $designation = new DOMAttr('designation', $ElementModule->designation);
                    $elementmodule->setAttributeNode($code);
                    $elementmodule->setAttributeNode($designation);
                    $noteElemod = (DB::select("select note from notes where elementmodule_code='".$ElementModule->code."' and eleve_id=".$eleve->id))[0]->note;
                    $note = $dom->createElement('Note', $noteElemod);
                    $elementmodule->appendChild($note);
                    $module->appendChild($elementmodule);
                    $notem += $noteElemod;
                }
                $notem = $notem / count($ElementsModule);
                $note = $dom->createElement('Note', $notem);
                $module->appendChild($note);
                $elev->appendChild($module);
                $moyenne += $notem;
            }
            $moyenne=($moyenne/count($Modules));
            $Moyenne = $dom->createElement('Moyenne',$moyenne);
            $elev->appendChild($Moyenne);
            $Eleves->appendChild($elev);
            $Moyenne_classe+=$moyenne;
        }
        $Moyenne_generale = $dom->createElement('Moyenne_generale',$Moyenne_classe/count($eleves));
        $Eleves->appendChild($Moyenne_generale);
        $dom->appendChild($Eleves);
        $dom->save($xml_file_name);

        //---------DTD Validation--------------------
        if($this->IsValidDTD($xml_file_name))
            echo "<center><h1>DTD Valid</h1></br>";
        //---------Schema Validation------------------
        if($this->IsValidSchema($xml_file_name,'Releves de notes/RELEVES.xsd'))
            echo "<h1>Schema valid</h1><br>
                    <h2>Les releves de notes ont bien été mises à jour</h2><br>
                    <a href='/dashboard'>Revenir au dashboard</a><br></center>";
    }

    public function XMLReleve($id)
    {
        $xq = xq_new();
        xq_load_file($xq, '/path/to/query.xq');
        $result = xq_execute($xq);

        $xml = xq_get_result($result);

        $fp = fopen('/path/to/output.xml', 'w');
        fwrite($fp, $xml);
        fclose($fp);

        $dom = new DOMDocument();
        $dom->encoding = 'UTF-8';
        $dom->xmlVersion = '1.0';
        $dom->xmlStandalone = false;
        $dom->formatOutput = true;
        $implement  = new DOMImplementation();
        $dom->appendChild($implement->createDocumentType('Eleves SYSTEM "RELEVE.dtd"'));

        $Eleve=Eleve::find($id);
        $xml_file_name = 'Releves de notes/'.$Eleve->niveau.'.xml';
        //$niveau = new DOMAttr('niveau',$Eleve->niveau);

        $doc = new DOMDocument;

// We don't want to bother with white spaces
        $doc->preserveWhiteSpace = false;

        $doc->load('Releves de notes/GINF1.xml');

        $xpath = new DOMXPath($doc);

// We start from the root element
        $query = "//Eleve[@id='".$Eleve->code."']";
        $note = $xpath->query($query);
        foreach ($note as $n)
            echo $n->nodeValue;

    }


    public function XMLCartes($Classe)
    {

        $dom = new DOMDocument();
        $dom->encoding = 'UTF-8';
        $dom->xmlVersion = '1.0';
        $dom->xmlStandalone = false;
        $dom->formatOutput = true;
        $implement  = new DOMImplementation();
        $dom->appendChild($implement->createDocumentType('Cartes SYSTEM "EMPLOIS.dtd"'));

        $xml_file_name = 'Cartes des etudiants/'.$Classe.'.xml';

        $Cartes = $dom->createElement('Cartes');
        $niveau = new DOMAttr('Niveau',"$Classe");
        $Cartes->setAttributeNode($niveau);
        /*$xmlns = new DOMAttr('xmlns',"https://www.w3schools.com");
        $xmlns_xsi = new DOMAttr('xmlns:xsi',"http://www.w3.org/2001/XMLSchema-instance");
        $xsi_schemaLocation = new DOMAttr('xsi:schemaLocation',"https://www.w3schools.com/xml RELEVES.xsd");*/
        /*$Eleves->setAttributeNode($xmlns);
        $Eleves->setAttributeNode($xmlns_xsi);
        $Eleves->setAttributeNode($xsi_schemaLocation);*/
        $eleves = Eleve::all()->where('niveau','=',$Classe);
        foreach ($eleves as $eleve) {
            $carte = $dom->createElement('Carte');
            $code = new DOMAttr('id', $eleve->code);
            $carte->setAttributeNode($code);
            $Nom = $dom->createElement('Nom', $eleve->nom);
            $Prenom = $dom->createElement('Prenom', $eleve->prenom);
            $CodeApogee = $dom->createElement('CodeApogee', $eleve->code);
            $Filiere = $dom->createElement('Filiere', $eleve->filiere_code);
            $Niveau = $dom->createElement('Niveau', $eleve->niveau);
            $Email = $dom->createElement('Email', $eleve->User->email);
            $Image = $dom->createElement('Image', $eleve->photo);
            $carte->appendChild($Nom);
            $carte->appendChild($Prenom);
            $carte->appendChild($CodeApogee);
            $carte->appendChild($Filiere);
            $carte->appendChild($Niveau);
            $carte->appendChild($Email);
            $carte->appendChild($Image);
            $Cartes->appendChild($carte);
        }
        $dom->appendChild($Cartes);
        $dom->save($xml_file_name);

        //---------DTD Validation--------------------
        if($this->IsValidDTD($xml_file_name))
            echo "<center><h1>DTD Valid</h1>";
        //---------Schema Validation------------------
        if($this->IsValidSchema($xml_file_name,'Cartes des etudiants/EMPLOIS.xsd'))
            echo "<h1>Schema valid</h1><br>
                    <h2>Les cartes des etudiants ont bien été mises à jour</h2><br>
                    <a href='/dashboard'>Revenir au dashboard</a><br></center>";
    }

    public function XMLEmplois($Classe)
    {

        $dom = new DOMDocument();
        $dom->encoding = 'UTF-8';
        $dom->xmlVersion = '1.0';
        $dom->xmlStandalone = false;
        $dom->formatOutput = true;
        $implement  = new DOMImplementation();
        $dom->appendChild($implement->createDocumentType('EmploisDuTemps SYSTEM "EMPLOIS.dtd"'));

        $xml_file_name = 'Emplois du temps/'.$Classe.'.xml';

        $Emplois = $dom->createElement('EmploisDuTemps');
        $niveau = new DOMAttr('Niveau',"$Classe");
        /*$xmlns = new DOMAttr('xmlns',"https://www.w3schools.com");
        $xmlns_xsi = new DOMAttr('xmlns:xsi',"http://www.w3.org/2001/XMLSchema-instance");
        $xsi_schemaLocation = new DOMAttr('xsi:schemaLocation',"https://www.w3schools.com/xml RELEVES.xsd");*/
        $Emplois->setAttributeNode($niveau);
        /*$Eleves->setAttributeNode($xmlns);
        $Eleves->setAttributeNode($xmlns_xsi);
        $Eleves->setAttributeNode($xsi_schemaLocation);*/

        for($i=1;$i<2;$i++)
        {
            $Emploi = $dom->createElement('Emploi');
            $mismestre = new DOMAttr('Misemestre', 'misemestre_'.$i);
            $Emploi->setAttributeNode($mismestre);
            $Seances = Seance::all()->where('niveau','=',$Classe)->where('misemestre','=',$i);
            foreach ($Seances as $Seance){
                $seance = $dom->createElement('Seance');
                $Matiere = $dom->createElement('Matiere',$Seance->element_module);
                $Sorte = $dom->createElement('Sorte', $Seance->type);
                $Prof = $dom->createElement('Prof', $Seance->prof);
                $Jour = $dom->createElement('Jour', $Seance->jour);
                $Temps = $dom->createElement('Temps', $Seance->temps);
                $Salle = $dom->createElement('Salle', $Seance->salle);
                $seance->appendChild($Matiere);
                $seance->appendChild($Sorte);
                $seance->appendChild($Prof);
                $seance->appendChild($Jour);
                $seance->appendChild($Temps);
                $seance->appendChild($Salle);
                $Emploi->appendChild($seance);
            }
            $Emplois->appendChild($Emploi);
        }
        $dom->appendChild($Emplois);
        $dom->save($xml_file_name);
        //---------DTD Validation--------------------
        if($this->IsValidDTD($xml_file_name))
            echo "<center><h1>DTD Valid</h1></br>";
        //---------Schema Validation------------------
        if($this->IsValidSchema($xml_file_name,'Emplois du temps/EMPLOIS.xsd'))
            echo "<h1>Schema valid</h1><br>
                    <h2>Les emplois du temps ont bien été mises à jour</h2><br>
                    <a href='/dashboard'>Revenir au dashboard</a><br></center>";
    }

    public function IsValidDTD($filePath)
    {
        $xml = new DOMDocument;
        if($xml->load($filePath)){
            if(!$xml->validate()){
                File::delete($filePath);
                return false;
            }
            return true;
        }
        return false;
    }

    public function IsValidSchema($xmlPath,$xsdPath)
    {
        $xml = new DOMDocument;
        if($xml->load($xmlPath)){
            if(!$xml->schemaValidate($xsdPath)){
                File::delete($xmlPath);
                return false;
            }
            return true;
        }
        return false;
    }
}
