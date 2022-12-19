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

class XmlController extends Controller
{
    public function XMLGINF1(){
        $Eleves = Eleve::all()->where('niveau','=','GINF1');
        $Moyenne = array();
        foreach ($Eleves as $eleve)
            $Moyenne[$eleve->code] = $eleve->Moyenne;

        $Modules = Module::all()->where('niveau','=',"GINF1");
        $Element_module = array();
        foreach ($Modules as $item){
            $Element_module[$item->code] = $item->Elementmodule;
        }

        $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $xml_file = 'Releve de notes/GINF1.xml';
        /*=================Schema/DTD===============*/
        $ELEVES = $dom->createElement('Eleves');
        $niveau = new DOMAttr('niveau','GINF1');
        $ELEVES->setAttributeNode($niveau);
        $dom->appendChild($ELEVES);
        $somme_note_eleves = 0;
        foreach ($Eleves as $eleve){
            $ELEVE = $dom->createElement('Eleve');
            $eleve_code = new DOMAttr('code',$eleve->code);
            $eleve_nom = new DOMAttr('nom',$eleve->nom);
            $eleve_prenom = new DOMAttr('prenom',$eleve->prenom);
            $ELEVE->setAttributeNode($eleve_code);
            $ELEVE->setAttributeNode($eleve_nom);
            $ELEVE->setAttributeNode($eleve_prenom);
            $somme_note_module=0;
            foreach ($Modules as $module){
                $MODULE = $dom->createElement('Module');
                $module_code = new DOMAttr('code',$module->code);
                $module_designation = new DOMAttr('designation',$module->designation);
                $MODULE->setAttributeNode($module_code);
                $MODULE->setAttributeNode($module_designation);
                $somme_note=0;
                foreach ($Element_module[$module->code] as $element){
                    $ELEMENT = $dom->createElement('Element_module');
                    $element_code = new DOMAttr('code',$element->code);
                    $element_designation = new DOMAttr('designation',$element->designation);
                    $ELEMENT->setAttributeNode($element_code);
                    $ELEMENT->setAttributeNode($element_designation);
                    $note = DB::select("select * from notes where eleve_code='$eleve->code' and elementmodule_code='$element->code'");
                    $somme_note += $note[0]->note;
                    $NOTE = $dom->createElement('note',$note[0]->note);
                    $ELEMENT->appendChild($NOTE);
                    $MODULE->appendChild($ELEMENT);
                }
                $somme_note_module += $somme_note/count($Element_module[$module->code]);
                $NOTE = $dom->createElement('note',$somme_note/count($Element_module[$module->code]));
                $MODULE->appendChild($NOTE);
                $ELEVE->appendChild($MODULE);
            }
            $MOYENNE = $dom->createElement('moyenne',$somme_note_module/12);
            $ELEVE->appendChild($MOYENNE);
            $somme_note_eleves += $somme_note_module/12;
            $ELEVES->appendChild($ELEVE);
        }
        $MOYENNE_GENERALE = $dom->createElement('moyenne_generale',$somme_note_eleves/count($Eleves));
        $ELEVES->appendChild($MOYENNE_GENERALE);
        $dom->save($xml_file);
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
