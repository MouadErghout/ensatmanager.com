<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Module;
use App\Models\Note;
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
            echo "DTD Valid";
        //---------Schema Validation------------------
        if($this->IsValidSchema($xml_file_name))
            echo "Schema valid";

        //return Redirect('/Eleve');
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
    public function IsValidSchema($filePath)
    {
        $xml = new DOMDocument;
        if($xml->load($filePath)){
            if(!$xml->schemaValidate('Releves de notes/RELEVES.xsd')){
                File::delete($filePath);
                return false;
            }
            return true;
        }
        return false;
    }

    public function XMLReleve($id)
    {

        $xml = <<<'XML'
<?xml version="1.0"?>
<books>
    <book>
        <isbn>123456789098</isbn>
        <title>Harry Potter</title>
        <author>J K. Rowling</author>
        <edition>2005</edition>
    </book>
    <book>
        <placeItHere></placeItHere>
        <isbn>1</isbn>
        <title>stuffs</title>
        <author>DA</author>
        <edition>2014</edition>
    </book>
</books>
XML;

        $book = [
            'isbn'    => 123456789099,
            'title'   => 'Harry Potter 3',
            'author'  => 'J K. Rowling',
            'edition' => '2007'
        ];

        $dom = new DOMDocument();
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);

        $placeItHere = $xpath->query('/books/book/placeItHere')->item(0);
        $newBook = $placeItHere->appendChild($dom->createElement('book'));
        foreach ($book as $part => $value) {
            $element = $newBook->appendChild($dom->createElement($part));
            $element->appendChild($dom->createTextNode($value));
        }

        echo $dom->saveXML();

    }

    public function display(){
        $xml = simplexml_load_file('employees.xml');
        echo '<h2>Employees Listing</h2>';
        $list = $xml->record;
        for ($i = 0; $i < count($list); $i++) {
            echo '<b>Man no:</b> ' . $list[$i]->attributes()->man_no . '<br>';
            echo 'Name: ' . $list[$i]->name . '<br>';
            echo 'Position: ' . $list[$i]->position . '<br><br>';
        }
    }
}
