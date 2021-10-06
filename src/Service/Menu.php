<?php

namespace Apothan\OpenTourLibBundle\Service;

use Apothan\OpenTourLibBundle\Service\RestClient;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Intl\Countries;

class Menu
{
    protected $restclient;
    protected $params;

    function __construct(ParameterBagInterface $params, RestClient $rest)
    {
        
       $this->restclient = $rest;
       $this->params = $params;
    }

    function getMenuItemsOld($settings)
    {
        //Determine Settings---
        $viewmode = 'country';
        if(isset($settings['viewmode']))
            foreach($settings['viewmode'] as $mode => $choice)
                if($choice === 1)
                {
                    $viewmode = $mode;
                    break;
                }
            

        $limit = $settings['limit'] ?? 0;
        //---//
        
        $menuitems = [];
        $dataArray = null;
       
        $dataArray["query"][]["subcategories"] = ['category' => 'Tour'];
        $dataArray["query"][]["countries"] = 'Tour';
            /*
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

        
        //get product categories
        $dataArray["query"][1]["subcategories"] = $categoriesjson;
        $dataArray["query"][2]["subcategories"] = $categoriesGBjson;
        $dataArray["query"][3]["subcategories"] = $categoriesFRjson; 
        $dataArray["query"][4]["subcategories"] = $categoriesESjson;
        $dataArray["query"][5]["subcategories"] = $categoriesGRjson;
        $dataArray["query"][6]["subcategories"] = $categoriesPTjson;
        //get countries       
        $dataArray["query"][7]["countries"] = 'Tour';
        //get cities
        $dataArray["query"][8]["cities"] = $citiesjson;
        $dataArray["query"][9]["cities"] = $citiesGBjson;
        $dataArray["query"][10]["cities"] = $citiesFRjson;
        $dataArray["query"][11]["cities"] = $citiesESjson;
        $dataArray["query"][12]["cities"] = $citiesGRjson;
        $dataArray["query"][13]["cities"] = $citiesPTjson;        
        //$dataArray["query"][14]["cities"] = $citiesDEjson;
        
        //$dataArray["query"][3]["productavailrqs"] = $searchjson2;
                */
        
        $json = json_encode($dataArray);

        $ApiUser = $this->params->get('opentour.apiuser');
        $ApiPass = $this->params->get('opentour.apipass');
        $this->restclient->setUser($ApiUser, $ApiPass);
        $ApiUrl = $this->params->get('opentour.apiurl');
        $return = $this->restclient->post('https://'.$ApiUrl.'/api/requests.json', $json);

        //dump($return); die();
        $results = json_decode($return, true);
        $results = $results['results'];

        if($viewmode == 'category' && isset($results[0]))
        {
            $categories = [];
            foreach($results[0] as $key => $categoryInfo)
            {
                $categories[$key]['name'] = $categoryInfo['category'];
                $categories[$key]['id'] = $categoryInfo['id'];
            }

            $menuitems = $categories;
        }
        elseif($viewmode == 'country' && isset($results[1]))
        {
            $countries = [];
            foreach($results[1] as $key => $countryInfo)
            {
                $countries[$key]['name'] = Countries::getName($countryInfo['country']);
                $countries[$key]['code'] = $countryInfo['country'];
            }

            $menuitems = $countries;
        }
        //dump( $results); die();
        /*
        $orderIndex = array();
        $count = 0;
        if(is_object($results))
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
                         
                }//die();
                $count++;
            }
        //dump($menuitems);die();
        $temparray = array();
        foreach($orderIndex as $country => $cities)
        {
            if(in_array($country, array_keys($menuitems['cities'])))
                $temparray[$country] = $menuitems['cities'][$country];
        }
        $menuitems['cities'] = $temparray;
        */

        return $menuitems;
    }

    public function getMenuItems(): Array
    {

        $dataArray = $dataArray2 = [];
        $hasCategoryCountries = false;
        $categories = [];
        $countries = [];
        $menuData = [];

        //subcategroy request
        $dataArray["query"][]["subcategories"] = ['category' => 'Tour'];
        //countries request
        $dataArray["query"][]["countries"] = ['category' => 'Tour'];

        $results = $this->queryApi($dataArray);

        if(isset($results[0]))
        {
            //get countries based on categories
            foreach($results[0] as $categoryInfo)
                $dataArray2["query"][]["countries"] = ['subcategory' => $categoryInfo['id']];

            //if we recieved a response from the subcategories array, we make a note fore later
            $hasCategoryCountries = true;

            foreach($results[0] as $key => $categoryInfo)
            {
                //and assign the name and id to the array we will be returning
                $categories[$key]['name'] = $categoryInfo['category'];
                $categories[$key]['id'] = $categoryInfo['id'];
            }
        }

        if(isset($results[1]))
        {
            //get cities based on countries
            foreach($results[1] as $countryInfo)
                $dataArray2["query"][]["cities"] = ['country' => $countryInfo['country'], 'category' => 'Tour'];

            //get categories based on countries 
            foreach($results[1] as $countryInfo)
                $dataArray2["query"][]["subcategories"] = ['country' => $countryInfo['country']];
            
            foreach($results[1] as $key => $countryInfo)
            {
                //and assign the name and id to the array we will be returning
                $countries[$key]['name'] = Countries::getName($countryInfo['country']);
                $countries[$key]['code'] = $countryInfo['country'];
            }
        }

        //if the second query array is set
        if(count($dataArray2) > 0)
        {
            //then we make the call for the secondary info
            $results2 = $this->queryApi($dataArray2);

            //set arrays for the different secondary queries
            $parts = ['countries' => [], 'cities' => [], 'subcategories' => []];

            //if we have a list of first query categories
            if($hasCategoryCountries)
                $parts['countries'] = array_splice($results2, 0, count($results[0]));

            $parts['cities'] = array_splice($results2, 0, count($results[1]));
            $parts['subcategories'] = array_splice($results2, 0);
         

            foreach($categories as $key => $category)
            {
                //cycle through the countries
                foreach($parts['countries'][$key] as $key2 => $countryInfo)
                {
                    //add the country to the category
                    $categories[$key]['countries'][$key2]['name'] = Countries::getName($countryInfo['country']);
                    $categories[$key]['countries'][$key2]['code'] = $countryInfo['country'];
                    $categories[$key]['countries'][$key2]['total'] = $countryInfo['total'];
                }
            }

            foreach($countries as $key => $country)
            {
                foreach($parts['cities'][$key] as $key2 => $city)
                {
                    //add the city to the country
                    $countries[$key]['cities'][$key2]['name'] = $city['city'];
                }
                if(isset($parts['subcategories'][$key]))
                    foreach($parts['subcategories'][$key] as $key2 => $categoryInfo)
                    {
                        $countries[$key]['categories'][$key2]['name'] = $categoryInfo['category'];
                        $countries[$key]['categories'][$key2]['id'] = $categoryInfo['id'];
                        $countries[$key]['categories'][$key2]['total'] = $categoryInfo['total'];
                    }
            }
        }

        $menuData = [
            'countries' => $countries,
            'categories' => $categories
        ];

        return $menuData;
    }

    function getCategories(): Array
    {
        $dataArray = $dataArray2 = [];
        $categories = [];

        //Query for the categories
        $dataArray["query"][]["subcategories"] = ['category' => 'Tour'];
        $results = $this->queryApi($dataArray);
        
        //if there are categories returned
        if(isset($results[0]))
        {
            //we now need to get products for each category available
            //create a grouped query for all the categories
            //foreach($results[0] as $key => $categoryInfo)
            //    $dataArray2["query"][]["productavailrqs"] = ['servicerequest' => ['category' => 'Tour', 'subcategory' => $categoryInfo['id']]];

            //now we send the grouped query request
            $results2 = [];//$this->queryApi($dataArray2);

            //cycle through the categories
            foreach($results[0] as $key => $categoryInfo)
            {
                //and assign the name and id to the array we will be returning
                $categories[$key]['name'] = $categoryInfo['category'];
                $categories[$key]['id'] = $categoryInfo['id'];

                //we also add the tour products to the same array, the order should be the same as the order queried
                if(isset($results2[$key]) && isset($results2[$key]['products']))
                    $categories[$key]['tours'] = $results2[$key]['products'];
            }
        }

        return $categories;
    }
    
    function getCountries(): Array
    {
        $dataArray = $dataArray2 = [];
        $countries = [];

        //Query for countries
        $dataArray["query"][]["countries"] = ['category' => 'Tour'];
        $results = $this->queryApi($dataArray);

        if(isset($results[0]))
        {
             //we now need to get products for each country available
            //create a grouped query for all the countries
           
            //foreach($results[0] as $countryInfo)
            //    $dataArray2["query"][]["productavailrqs"] = ['servicerequest' => ['category' => 'Tour', 'country' => $countryInfo['country']]];
            
            //now we send the grouped query request
            $results2 = [];//$this->queryApi($dataArray2);

            //cycle through the countries
            foreach($results[0] as $key => $countryInfo)
            {
                //and assign the name and id to the array we will be returning
                $countries[$key]['name'] = Countries::getName($countryInfo['country']);
                $countries[$key]['code'] = $countryInfo['country'];

                //we also add the tour products to the same array, the order should be the same as the order queried
                if(isset($results2[$key]) && isset($results2[$key]['products']))
                    $countries[$key]['tours'] = $results2[$key]['products'];
            }
        }

        return $countries;
    }

    function getCountryCities(): Array
    {
        $dataArray = $dataArray2 = $dataArray3 = [];
        $countries = [];

        //Query for countries
        $dataArray["query"][]["countries"] = ['category' => 'Tour'];
        $results = $this->queryApi($dataArray);

        if(isset($results[0]))
        {
            //get cities based on the countries
            foreach($results[0] as $countryInfo)
                $dataArray2["query"][]["cities"] = ['country' => $countryInfo['country'], 'category' => 'Tour'];
            $results2 = $this->queryApi($dataArray2);

            //next, we get all the products based on the cities
            //we do this by foreaching through the countries and then the cities, this causes the query group to be created in the 
            //2 level foreached order of each city and we can later match the order.
            /*
            if(isset($results2[0]))
            {
                foreach($results2 as $countryIndex)
                    foreach($countryIndex as $city)
                        $dataArray3["query"][]["productavailrqs"] = ['servicerequest' => ['category' => 'Tour', 'city' => $city['city']]];
            }
            else //if there's no city we don't need to continue;
                return [];
            */
            //now we send the grouped query request
            $results3 = [];//$this->queryApi($dataArray3);

            //this index is simply a count to anchor the products with the city.
            $cityIndex=0;
            //cycle through the countries
            foreach($results[0] as $key => $countryInfo)
            {
                //and assign the name and id to the array we will be returning
                $countries[$key]['name'] = Countries::getName($countryInfo['country']);
                $countries[$key]['code'] = $countryInfo['country'];

                //check that this country has cities
                if(isset($results2[$key]) && isset($results2[$key][0]))
                {
                   //cycle through the cities
                    foreach($results2[$key] as $key2 => $city)
                    {
                        //add the city to the country
                        $countries[$key]['cities'][$key2]['name'] = $city['city'];
                        //if there is an array of products at this index of city, add it to the city
                        if(isset($results3[$cityIndex]) && isset($results3[$cityIndex]['products']))
                            $countries[$key]['cities'][$key2]['tours'] = $results3[$cityIndex]['products'];
                          
                        $cityIndex++;
                    }
                }
            }

        }

        return $countries;
    }

    function getCategoryCountries(): Array
    {
        $dataArray = $dataArray2 = $dataArray3 = [];
        $categories = [];

        //Query for categories
        $dataArray["query"][]["subcategories"] = ['category' => 'Tour'];
        $results = $this->queryApi($dataArray);
       
        if(isset($results[0]))
        {
            //get countries based on categories
            foreach($results[0] as $categoryInfo)
                $dataArray2["query"][]["countries"] = ['subcategory' => $categoryInfo['id']];
            $results2 = $this->queryApi($dataArray2);

            //next, we get all the products based on the countries
            //we do this by foreaching through the categories and then the countries, this causes the query group to be created in the 
            //2 level foreached order of each country and we can later match the order.
            /*
            if(isset($results2[0]))
            {
                foreach($results2 as $key => $categoryIndex)
                {
                    foreach($categoryIndex as $country)
                        $dataArray3["query"][]["productavailrqs"] = ['servicerequest' => ['subcategory' => $results[0][$key]['id'], 'country' => $country['country']]];
                }
            }
            else //if there's no category we don't need to continue;
                return [];
            */
            //now we send the grouped query request
            $results3 = [];//$this->queryApi($dataArray3);
            
            //this index is simply a count to anchor the product's order with the country.
            $countryIndex=0;
            //cycle through the categories
            foreach($results[0] as $key => $category)
            {
                //and assign the name and id to the array we will be returning
                $categories[$key]['name'] = $category['category'];
                $categories[$key]['id'] = $category['id'];

                //check that this category has countries
                if(isset($results2[$key]) && isset($results2[$key][0]))
                {
                   //cycle through the countries
                    foreach($results2[$key] as $key2 => $countryInfo)
                    {
                        //add the country to the category
                        $categories[$key]['countries'][$key2]['name'] = Countries::getName($countryInfo['country']);
                        $categories[$key]['countries'][$key2]['code'] = $countryInfo['country'];
                        //if there is an array of products at this index of ccountry, add it to the country
                        if(isset($results3[$countryIndex]) && isset($results3[$countryIndex]['products']))
                            $categories[$key]['countries'][$key2]['tours'] = $results3[$countryIndex]['products'];
                          
                        $countryIndex++;
                    }
                }
            }

        }
       
        return $categories;
    }

    function getCountryCategories(): Array
    {
        $dataArray = $dataArray2 = $dataArray3 = [];
        $countries = [];

        
        //Query for countries
        $dataArray["query"][]["countries"] = ['category' => 'Tour'];
        $results = $this->queryApi($dataArray);
       
        if(isset($results[0]))
        {
            //get categories based on countries 
            foreach($results[0] as $countryInfo)
                $dataArray2["query"][]["subcategories"] = ['country' => $countryInfo['country']];
            $results2 = $this->queryApi($dataArray2);
            
            //next, we get all the products based on the countries
            //we do this by foreaching through the categories and then the countries, this causes the query group to be created in the 
            //2 level foreached order of each country and we can later match the order.
            /*
            if(isset($results2[0]))
            {
                foreach($results2 as $key => $categoryIndex)
                {
                    foreach($categoryIndex as $country)
                        $dataArray3["query"][]["productavailrqs"] = ['servicerequest' => ['subcategory' => $results[0][$key]['id'], 'country' => $country['country']]];
                }
            }
            else //if there's no category we don't need to continue;
                return [];
            */
            
            foreach($results[0] as $key => $countryInfo)
            {
                $countries[$key]['name'] = Countries::getName($countryInfo['country']);
                $countries[$key]['code'] = $countryInfo['country'];

                if(isset($results2[$key]) && isset($results2[$key][0]))
                {
                    foreach($results2[$key] as $key2 => $categoryInfo)
                    {
                        $countries[$key]['categories'][$key2]['name'] = $categoryInfo['category'];
                        $countries[$key]['categories'][$key2]['id'] = $categoryInfo['id'];
                    }
                }
            }

        }
        
        return $countries;
    }

    function queryApi(Array $query): Array
    {
        $json = json_encode($query);

        $ApiUser = $this->params->get('opentour.apiuser');
        $ApiPass = $this->params->get('opentour.apipass');
        $this->restclient->setUser($ApiUser, $ApiPass);
        $ApiUrl = $this->params->get('opentour.apiurl');
        $return = $this->restclient->post('https://'.$ApiUrl.'/api/requests.json', $json);

        //dump($return); die();
        $results = json_decode($return, true);
       
        $results = $results['results'] ?? [];

        return $results;
    }

    /*
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
    */
}
