<?php
namespace App\Controllers;

class Brjson extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM branch');
        $branches = $query->getResultArray();

        // Return as JSON
        return $this->response->setJSON($branches);
        
    }
     public function kurs()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM kursdata');
        $kursdata = $query->getResultArray();

        // Return as JSON
        return $this->response->setJSON($kursdata);
        
    }
     public function Article()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM articles');
        $article = $query->getResultArray();

        // Return as JSON
        return $this->response->setJSON($article);
        
    }


}