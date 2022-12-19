<?php

namespace App\Http\Controllers;

use DOMAttr;
use DOMDocument;
use Illuminate\Http\Request;

class XmlController extends Controller
{

    static public function XMLGINF1($Modules,$Notes,$Moyenne)
    {
        $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $xml_file_name = 'Releve'.$Notes[0]->eleve_code.'xml';

        $root = $dom->createElement('Releve_note');
        foreach ($Modules as $M)

                $module = $dom->createElement('Module');
                $module->setAttributeNode(new DOMAttr('id', $M->code));
                $module->setAttributeNode(new DOMAttr('designation', $M->designation));

                foreach ($M->Elementmodule as $EM) {
                    $elementmodule = $dom->createElement('Element_module');
                    $elementmodule->setAttributeNode(new DOMAttr('id', $EM->code));
                    $elementmodule->setAttributeNode(new DOMAttr('designation', $EM->designation));
                    $elementmodule->appendChild($dom->createElement('Note'));
                    $module->appendChild($elementmodule);
                }
                $module->appendChild($dom->createElement('Note',0));
                $root->appendChild($module);
        $dom->save($xml_file_name);
        return Redirect('/Eleve');
    }

    public function index()
    {
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
