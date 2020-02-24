<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    protected $fillable = ['name', 'english_name', 'alphabetic_code', 'digit_code', 'rate'];   

    public function updateCyrrency()
    {
        $date = date('d/m/Y');
        $url = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$date;
        $xml = file_get_contents($url, false);

        $array_currencies = simplexml_load_string($xml);

        if(empty($array_currencies))
            return;
        
        static::query()->truncate();
        foreach ($array_currencies as $cur) 
        {
            $currency = [];
            $currency["name"] = $cur->Name;
            $currency["english_name"] = $cur->Name;
            $currency["alphabetic_code"] = $cur->CharCode;
            $currency["digit_code"] = $cur->NumCode;
            $currency["rate"] = floatval($cur->Value);

            static::create($currency);
        }
  }
}
