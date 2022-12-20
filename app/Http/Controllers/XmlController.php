<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Module;
use App\Models\Moyenne;
use App\Models\Note;
use DOMAttr;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class XmlController extends Controller
{
    public function XMLReleves($Classe)
    {
        $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $xml_file_name = 'Releve de notes/'.$Classe.'xml';

        $Eleves = $dom->createElement('Eleves');
        $niveau = new DOMAttr('niveau',$Classe);
        $Eleves->setAttributeNode($niveau);
        $eleves = Eleve::all()->where('niveau','=',$Classe);
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
                    $elementmodule = $dom->createElement('ElementModule');
                    $code = new DOMAttr('id', $ElementModule->code);
                    $designation = new DOMAttr('designation', $ElementModule->designation);
                    $elementmodule->setAttributeNode($code);
                    $elementmodule->setAttributeNode($designation);
                    $noteElemod = (Note::firstWhere('elementmodule_code', '=', $ElementModule->code, 'and', 'eleve_code', '=', $eleve->code))->note;
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
            $Moyenne = $dom->createElement('Moyenne_Eleve', $moyenne/count($Modules));
            $elev->appendChild($Moyenne);
            $Eleves->appendChild($elev);
        }
        $dom->appendChild($Eleves);
        $dom->save($xml_file_name);
    }

    public function index(){
        $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $xml_file_name = 'movies_list.xml';
        $root = $dom->createElement('Movies');
        $movie_node = $dom->createElement('movie');
        $attr_movie_id = new DOMAttr('movie_id', '5467');
        $movie_node->setAttributeNode($attr_movie_id);
        $child_node_title = $dom->createElement('Title', 'The Campaign');
        $movie_node->appendChild($child_node_title);
        $child_node_year = $dom->createElement('Year', 2012);
        $movie_node->appendChild($child_node_year);
        $child_node_genre = $dom->createElement('Genre', 'The Campaign');
        $movie_node->appendChild($child_node_genre);
        $child_node_ratings = $dom->createElement('Ratings', 6.2);
        $movie_node->appendChild($child_node_ratings);
        $root->appendChild($movie_node);
        $dom->appendChild($root);
        $dom->save($xml_file_name);
        echo "$xml_file_name has been successfully created";
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
