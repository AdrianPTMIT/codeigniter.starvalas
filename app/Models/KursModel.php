<?php

namespace App\Models;
use CodeIgniter\Model;
use DOMDocument;

class KursModel extends Model
{
  protected $table = 'kursdata';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $protectFields = true;

  protected $allowedFields = ['currency_code', 'buy_rate', 'sell_rate'];


  public function getKurs()
  {

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTMLFile('https://www.bca.co.id/en/informasi/kurs');
    libxml_clear_errors();


    $tables = $dom->getElementsByTagName('table');
    $table = $tables->item(0);


    $rates = [];
    $rowIndex = 0;

    if ($table) {
      foreach ($table->getElementsByTagName('tr') as $row) {
        $tds = $row->getElementsByTagName('td');


        if ($rowIndex === 1) {
          $rowIndex++;
          continue;
        }

        // Show array of E-rate buy and sell 
        if ($tds->length >= 3) {
          $currency = trim($tds->item(0)->nodeValue);
          $buy = str_replace(',', '', trim($tds->item(1)->nodeValue));
          $sell = str_replace(',', '', trim($tds->item(2)->nodeValue));


          $rates[] = [
            'currency_code' => $currency,
            'buy_rate' => $buy,
            'sell_rate' => $sell
          ];

        }

        $rowIndex++;

      }

      return $this->insertBatch($rates);



    }


  }
  public function getUpdate()
  {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTMLFile('https://www.bca.co.id/en/informasi/kurs');
    libxml_clear_errors();

    $span = $dom->getElementsByTagName('span');
    $lastUpdate = $span->item(16)->nodeValue;
    return $lastUpdate;
  }

  public function getAllRates()
  {
    return $this->findAll();
  }

  public function deleteData()
  {

    return $this->emptyTable();


  }



}

