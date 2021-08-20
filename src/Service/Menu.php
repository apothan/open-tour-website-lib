<?php

namespace Apothan\OpenTourLibBundle\Service;

use Apothan\OpenTourLibBundle\Service\RestClient;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class Menu
{
    protected $restclient;
    protected $params;

    function __construct(ParameterBagInterface $params, RestClient $rest)
    {
        
       $this->restclient = $rest;
       $this->params = $params;
    }

    function getMenuItems()
    {
       
        $categoriesjson['country'] = 'IT';
        $categoriesjson['category'] = 'Tour';

        $categoriesGBjson['country'] = 'GB';
        $categoriesGBjson['category'] = 'Tour';

        $categoriesFRjson['country'] = 'FR';
        $categoriesFRjson['category'] = 'Tour';

        $categoriesESjson['country'] = 'ES';
        $categoriesESjson['category'] = 'Tour';

        $categoriesGRjson['country'] = 'GR';
        $categoriesGRjson['category'] = 'Tour';

        $categoriesPTjson['country'] = 'PT';
        $categoriesPTjson['category'] = 'Tour';

        $categoriesDEjson['country'] = 'DE';
        $categoriesDEjson['category'] = 'Tour';

        $citiesjson['country'] = 'IT';
        $citiesjson['category'] = 'Excursion';

        $citiesGRjson['country'] = 'GR';
        $citiesGRjson['category'] = 'Excursion';

        $citiesGBjson['country'] = 'GB';
        $citiesGBjson['category'] = 'Excursion';

        $citiesFRjson['country'] = 'FR';
        $citiesFRjson['category'] = 'Excursion';

        $citiesESjson['country'] = 'ES';
        $citiesESjson['category'] = 'Excursion';

        $citiesPTjson['country'] = 'PT';
        $citiesPTjson['category'] = 'Excursion';

        /*$citiesDEjson['country'] = 'DE';
        $citiesDEjson['category'] = 'Excursion';*/

        $dataArray = null;

        $dataArray["query"][1]["subcategories"] = $categoriesjson;
        $dataArray["query"][2]["subcategories"] = $categoriesGBjson;
        $dataArray["query"][3]["subcategories"] = $categoriesFRjson; 
        $dataArray["query"][4]["subcategories"] = $categoriesESjson;
        $dataArray["query"][5]["subcategories"] = $categoriesGRjson;
        $dataArray["query"][6]["subcategories"] = $categoriesPTjson;       
        $dataArray["query"][7]["countries"] = 'Tour';
        $dataArray["query"][8]["cities"] = $citiesjson;
        $dataArray["query"][9]["cities"] = $citiesGBjson;
        $dataArray["query"][10]["cities"] = $citiesFRjson;
        $dataArray["query"][11]["cities"] = $citiesESjson;
        $dataArray["query"][12]["cities"] = $citiesGRjson;
        $dataArray["query"][13]["cities"] = $citiesPTjson;        
        //$dataArray["query"][14]["cities"] = $citiesDEjson;
        
        //$dataArray["query"][3]["productavailrqs"] = $searchjson2;

        
        $json = json_encode($dataArray);

        $ApiUser = $this->params->get('opentour.apiuser');
        $ApiPass = $this->params->get('opentour.apipass');
        $this->restclient->setUser($ApiUser, $ApiPass);
        $ApiUrl = $this->params->get('opentour.apiurl');
        $return = $this->restclient->post('https://'.$ApiUrl.'/api/requests.json', $json);
        //dump($return); die();
        $results = json_decode($return);
        //dump( $results); die();
        $count = 0;
        foreach ($results->results as $key => $countryitem)
        {
            switch ($key) {
                case 1:
                    $country = 'IT';
                    break;
                case 2:
                    $country = 'GB';
                    break;
                case 3:
                    $country = 'FR';
                    break;
                case 4:
                    $country = 'ES';
                    break;
                case 5:
                    $country = 'GR';
                    break;
                case 6:
                    $country = 'PT';
                    break;
                //case 7:
                    //$country = 'DE';
                    //break;
            }
            //VarDumper::dump($countryitem);

            $orderIndex = array(
                'IT' => array("Rome", "Florence", "Venice"),
                'GB' => array("London", "Edinburgh", "Glasgow"),
                'FR' => array("Paris", "Nice", "Avignon"),
                'ES' => array("Barcelona", "Madrid", "Costa del Sol"),
                'GR' => array("Athens", "Mykonos", "Santorin"),
                'PT' => array("Porto", "Lisbon", "Algarve"),
                'DE' => array("Munich", "Frankfurt", "Berlin"),
                'Hungary' => array(),
                'Switzerland' => array(),
                'Austria' => array()
            );
//dump($countryitem);die();
            foreach ($countryitem as $key2 => $categoryname)
            {
                
                if ($count < 6)
                {
                    $menuitems['categories'][$country][$key2]['category'] = $categoryname->category;
                    $menuitems['categories'][$country][$key2]['categoryid'] = $categoryname->id;
                }
                if ($count == 6) {
                    if ($categoryname->country == 'IT' || $categoryname->country == 'GB' || $categoryname->country == 'FR' || $categoryname->country == 'ES' || $categoryname->country == 'GR' || $categoryname->country == 'PT' || $categoryname->country == 'AF')
                        continue;
                    else
                        $menuitems['othercountries'][] = $categoryname->country;
                    //dump($categoryname);
                }
                if ($count >= 7) 
                {
                    if(in_array($categoryname->city, $orderIndex[$categoryname->country]))
                    {
                        $menuitems['cities'][$categoryname->country][array_search($categoryname->city, $orderIndex[$categoryname->country])] = $categoryname->city;
                        ksort($menuitems['cities'][$categoryname->country]);
                    }
                    else
                        $menuitems['cities'][$categoryname->country][] = $categoryname->city;
                }
                    /*$menuitems[$country][$key2]['city'] = $categoryname->city;
                if (isset($categoryname->city))
                    foreach ($categoryname->city as $key3 => $city) {
                        $menuitems[$country][$key2]['cities'][] = $city;
                    } */    
            }//die();
            $count++;
        }//die();
        //dump($menuitems);die();
        $temparray = array();
        foreach($orderIndex as $country => $cities)
        {
            if(in_array($country, array_keys($menuitems['cities'])))
                $temparray[$country] = $menuitems['cities'][$country];
        }
        $menuitems['cities'] = $temparray;

        return $menuitems;
    }

    
    function country_format($in, $type)
    {
        $out = "";
        $long = array('Afghanistan' , 'Åland Islands' , 'Albania' , 'Algeria' , 'American Samoa' , 'Andorra' , 'Angola' , 'Anguilla' , 'Antarctica' , 'Antigua and Barbuda' , 'Argentina' , 'Armenia' , 'Aruba' , 'Australia' , 'Austria' , 'Azerbaijan' , 'Bahamas' , 'Bahrain' , 'Bangladesh' , 'Barbados' , 'Belarus' , 'Belgium' , 'Belize' , 'Benin' , 'Bermuda' , 'Bhutan' , 'Bolivia' , 'Bonaire - Sint Eustatius and Saba' , 'Bosnia and Herzegovina' , 'Botswana' , 'Bouvet Island' , 'Brazil' , 'British Indian Ocean Territory' , 'Brunei Darussalam' , 'Bulgaria' , 'Burkina Faso' , 'Burundi' , 'Cambodia' , 'Cameroon' , 'Canada' , 'Cape Verde' , 'Cayman Islands' , 'Central African Republic' , 'Chad' , 'Chile' , 'China' , 'Christmas Island' , 'Cocos (Keeling) Islands' , 'Colombia' , 'Comoros' , 'Congo' , 'Congo - the Democratic Republic of the' , 'Cook Islands' , 'Costa Rica' , 'Côte d\'Ivoire' , 'Croatia' , 'Cuba' , 'Curaçao' , 'Cyprus' , 'Czech Republic' , 'Denmark' , 'Djibouti' , 'Dominica' , 'Dominican Republic' , 'Ecuador' , 'Egypt' , 'El Salvador' , 'Equatorial Guinea' , 'Eritrea' , 'Estonia' , 'Ethiopia' , 'Falkland Islands (Malvinas)' , 'Faroe Islands' , 'Fiji' , 'Finland' , 'France' , 'French Guiana' , 'French Polynesia' , 'French Southern Territories' , 'Gabon' , 'Gambia' , 'Georgia' , 'Germany' , 'Ghana' , 'Gibraltar' , 'Greece' , 'Greenland' , 'Grenada' , 'Guadeloupe' , 'Guam' , 'Guatemala' , 'Guernsey' , 'Guinea' , 'Guinea-Bissau' , 'Guyana' , 'Haiti' , 'Heard Island and McDonald Islands' , 'Holy See (Vatican City State)' , 'Honduras' , 'Hong Kong' , 'Hungary' , 'Iceland' , 'India' , 'Indonesia' , 'Iran - Islamic Republic of' , 'Iraq' , 'Ireland' , 'Isle of Man' , 'Israel' , 'Italy' , 'Jamaica' , 'Japan' , 'Jersey' , 'Jordan' , 'Kazakhstan' , 'Kenya' , 'Kiribati' , 'Korea - Democratic People\'s Republic of' , 'Korea - Republic of' , 'Kuwait' , 'Kyrgyzstan' , 'Lao People\'s Democratic Republic' , 'Latvia' , 'Lebanon' , 'Lesotho' , 'Liberia' , 'Libya' , 'Liechtenstein' , 'Lithuania' , 'Luxembourg' , 'Macao' , 'Macedonia - the former Yugoslav Republic of' , 'Madagascar' , 'Malawi' , 'Malaysia' , 'Maldives' , 'Mali' , 'Malta' , 'Marshall Islands' , 'Martinique' , 'Mauritania' , 'Mauritius' , 'Mayotte' , 'Mexico' , 'Micronesia' , 'Moldova - Republic of' , 'Monaco' , 'Mongolia' , 'Montenegro' , 'Montserrat' , 'Morocco' , 'Mozambique' , 'Myanmar' , 'Namibia' , 'Nauru' , 'Nepal' , 'Netherlands' , 'New Caledonia' , 'New Zealand' , 'Nicaragua' , 'Niger' , 'Nigeria' , 'Niue' , 'Norfolk Island' , 'Northern Mariana Islands' , 'Norway' , 'Oman' , 'Pakistan' , 'Palau' , 'Palestinian Territory - Occupied' , 'Panama' , 'Papua New Guinea' , 'Paraguay' , 'Peru' , 'Philippines' , 'Pitcairn' , 'Poland' , 'Portugal' , 'Puerto Rico' , 'Qatar' , 'Réunion' , 'Romania' , 'Russian Federation' , 'Rwanda' , 'Saint Barthélemy' , 'Saint Helena - Ascension and Tristan da Cunha' , 'Saint Kitts and Nevis' , 'Saint Lucia' , 'Saint Martin (French part)' , 'Saint Pierre and Miquelon' , 'Saint Vincent and the Grenadines' , 'Samoa' , 'San Marino' , 'Sao Tome and Principe' , 'Saudi Arabia' , 'Senegal' , 'Serbia' , 'Seychelles' , 'Sierra Leone' , 'Singapore' , 'Sint Maarten (Dutch part)' , 'Slovakia' , 'Slovenia' , 'Solomon Islands' , 'Somalia' , 'South Africa' , 'South Georgia and the South Sandwich Islands' , 'South Sudan' , 'Spain' , 'Sri Lanka' , 'Sudan' , 'Suriname' , 'Svalbard and Jan Mayen' , 'Swaziland' , 'Sweden' , 'Switzerland' , 'Syrian Arab Republic' , 'Taiwan - Province of China' , 'Tajikistan' , 'Tanzania - United Republic of' , 'Thailand' , 'Timor-Leste' , 'Togo' , 'Tokelau' , 'Tonga' , 'Trinidad and Tobago' , 'Tunisia' , 'Turkey' , 'Turkmenistan' , 'Turks and Caicos Islands' , 'Tuvalu' , 'Uganda' , 'Ukraine' , 'United Arab Emirates' , 'United Kingdom' , 'United States' , 'United States Minor Outlying Islands' , 'Uruguay' , 'Uzbekistan' , 'Vanuatu' , 'Venezuela' , 'Viet Nam' , 'Virgin Islands - British' , 'Virgin Islands - U.S.' , 'Wallis and Futuna' , 'Western Sahara' , 'Yemen' , 'Zambia' , 'Zimbabwe');
        $short = array('AF','AX','AL','DZ','AS','AD','AO','AI','AQ','AG','AR','AM','AW','AU','AT','AZ','BS','BH','BD','BB','BY','BE','BZ','BJ','BM','BT','BO','BQ','BA','BW','BV','BR','IO','BN','BG','BF','BI','KH','CM','CA','CV','KY','CF','TD','CL','CN','CX','CC','CO','KM','CG','CD','CK','CR','CI','HR','CU','CW','CY','CZ','DK','DJ','DM','DO','EC','EG','SV','GQ','ER','EE','ET','FK','FO','FJ','FI','FR','GF','PF','TF','GA','GM','GE','DE','GH','GI','GR','GL','GD','GP','GU','GT','GG','GN','GW','GY','HT','HM','VA','HN','HK','HU','IS','IN','ID','IR','IQ','IE','IM','IL','IT','JM','JP','JE','JO','KZ','KE','KI','KP','KR','KW','KG','LA','LV','LB','LS','LR','LY','LI','LT','LU','MO','MK','MG','MW','MY','MV','ML','MT','MH','MQ','MR','MU','YT','MX','FM','MD','MC','MN','ME','MS','MA','MZ','MM','NA','NR','NP','NL','NC','NZ','NI','NE','NG','NU','NF','MP','NO','OM','PK','PW','PS','PA','PG','PY','PE','PH','PN','PL','PT','PR','QA','RE','RO','RU','RW','BL','SH','KN','LC','MF','PM','VC','WS','SM','ST','SA','SN','RS','SC','SL','SG','SX','SK','SI','SB','SO','ZA','GS','SS','ES','LK','SD','SR','SJ','SZ','SE','CH','SY','TW','TJ','TZ','TH','TL','TG','TK','TO','TT','TN','TR','TM','TC','TV','UG','UA','AE','GB','US','UM','UY','UZ','VU','VE','VN','VG','VI','WF','EH','YE','ZM','ZW');
//$in = strtolower(trim($in));
        switch($type){
            case 'long':$out = str_replace($short, $long, $in);break;
            case 'short':$out = str_replace($long, $short, $in);break;
        }
        return $out;
    }

}
