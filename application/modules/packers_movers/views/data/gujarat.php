<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='GJ'
$cities = array(
		array('nm' => 'Abrama','lat' => '20.85865000','lon' => '72.90648000','sc' => 'GJ'),
		array('nm' => 'Adalaj','lat' => '23.16453000','lon' => '72.58107000','sc' => 'GJ'),
		array('nm' => 'Ahmedabad','lat' => '23.02579000','lon' => '72.58727000','sc' => 'GJ'),
		array('nm' => 'Ahwa','lat' => '20.75718000','lon' => '73.68626000','sc' => 'GJ'),
		array('nm' => 'Amod','lat' => '21.99317000','lon' => '72.87047000','sc' => 'GJ'),
		array('nm' => 'Amreli','lat' => '21.50789000','lon' => '71.18323000','sc' => 'GJ'),
		array('nm' => 'Amroli','lat' => '21.25084000','lon' => '72.83878000','sc' => 'GJ'),
		array('nm' => 'Anand','lat' => '22.40000000','lon' => '72.75000000','sc' => 'GJ'),
		array('nm' => 'Anjar','lat' => '23.11316000','lon' => '70.02671000','sc' => 'GJ'),
		array('nm' => 'Ankleshwar','lat' => '21.63236000','lon' => '72.99001000','sc' => 'GJ'),
		array('nm' => 'Bagasra','lat' => '21.48719000','lon' => '70.95516000','sc' => 'GJ'),
		array('nm' => 'Banas Kantha','lat' => '24.25000000','lon' => '72.50000000','sc' => 'GJ'),
		array('nm' => 'Bedi','lat' => '22.50143000','lon' => '70.04363000','sc' => 'GJ'),
		array('nm' => 'Bhachau','lat' => '23.29858000','lon' => '70.34279000','sc' => 'GJ'),
		array('nm' => 'Bharuch','lat' => '21.69482000','lon' => '72.98050000','sc' => 'GJ'),
		array('nm' => 'Bhavnagar','lat' => '21.76287000','lon' => '72.15331000','sc' => 'GJ'),
		array('nm' => 'Bhuj','lat' => '23.25397000','lon' => '69.66928000','sc' => 'GJ'),
		array('nm' => 'Bhanvad','lat' => '21.93053000','lon' => '69.78081000','sc' => 'GJ'),
		array('nm' => 'Bhayavadar','lat' => '21.85523000','lon' => '70.24791000','sc' => 'GJ'),
		array('nm' => 'Bilimora','lat' => '20.76957000','lon' => '72.96134000','sc' => 'GJ'),
		array('nm' => 'Bilkha','lat' => '21.44150000','lon' => '70.60063000','sc' => 'GJ'),
		array('nm' => 'Borsad','lat' => '22.40788000','lon' => '72.89817000','sc' => 'GJ'),
		array('nm' => 'Botad','lat' => '22.16917000','lon' => '71.66671000','sc' => 'GJ'),
		array('nm' => 'Babra','lat' => '21.84577000','lon' => '71.30544000','sc' => 'GJ'),
		array('nm' => 'Bantva','lat' => '21.48815000','lon' => '70.07576000','sc' => 'GJ'),
		array('nm' => 'Bardoli','lat' => '21.12297000','lon' => '73.11151000','sc' => 'GJ'),
		array('nm' => 'Chaklasi','lat' => '22.65320000','lon' => '72.94497000','sc' => 'GJ'),
		array('nm' => 'Chalala','lat' => '21.41073000','lon' => '71.16621000','sc' => 'GJ'),
		array('nm' => 'Chhala','lat' => '23.30779000','lon' => '72.77404000','sc' => 'GJ'),
		array('nm' => 'Chhota Udepur','lat' => '22.30401000','lon' => '74.01580000','sc' => 'GJ'),
		array('nm' => 'Chikhli','lat' => '20.75751000','lon' => '73.06268000','sc' => 'GJ'),
		array('nm' => 'Chotila','lat' => '22.42347000','lon' => '71.19641000','sc' => 'GJ'),
		array('nm' => 'Chanasma','lat' => '23.71472000','lon' => '72.11279000','sc' => 'GJ'),
		array('nm' => 'Dabhoi','lat' => '22.18333000','lon' => '73.43333000','sc' => 'GJ'),
		array('nm' => 'Dahegam','lat' => '23.16903000','lon' => '72.82161000','sc' => 'GJ'),
		array('nm' => 'Dayapar','lat' => '23.63371000','lon' => '68.90192000','sc' => 'GJ'),
		array('nm' => 'Delvada','lat' => '20.77544000','lon' => '71.04646000','sc' => 'GJ'),
		array('nm' => 'Devbhumi Dwarka','lat' => '22.20253000','lon' => '69.65498000','sc' => 'GJ'),
		array('nm' => 'Devgadh Bariya','lat' => '22.70517000','lon' => '73.90882000','sc' => 'GJ'),
		array('nm' => 'Dhandhuka','lat' => '22.38185000','lon' => '71.98664000','sc' => 'GJ'),
		array('nm' => 'Dhanera','lat' => '24.50967000','lon' => '72.02343000','sc' => 'GJ'),
		array('nm' => 'Dharampur','lat' => '20.53693000','lon' => '73.17368000','sc' => 'GJ'),
		array('nm' => 'Dhola','lat' => '21.88129000','lon' => '71.77269000','sc' => 'GJ'),
		array('nm' => 'Dholka','lat' => '22.72732000','lon' => '72.44128000','sc' => 'GJ'),
		array('nm' => 'Dhoraji','lat' => '21.73359000','lon' => '70.45004000','sc' => 'GJ'),
		array('nm' => 'Dhrol','lat' => '22.56700000','lon' => '70.41769000','sc' => 'GJ'),
		array('nm' => 'Dhrangadhra','lat' => '22.99167000','lon' => '71.46793000','sc' => 'GJ'),
		array('nm' => 'Dhuwaran','lat' => '22.23779000','lon' => '72.75910000','sc' => 'GJ'),
		array('nm' => 'Dhari','lat' => '21.32855000','lon' => '71.02645000','sc' => 'GJ'),
		array('nm' => 'Dohad','lat' => '22.90000000','lon' => '74.00000000','sc' => 'GJ'),
		array('nm' => 'Dungarpur','lat' => '21.28777000','lon' => '71.75560000','sc' => 'GJ'),
		array('nm' => 'Dwarka','lat' => '22.23944000','lon' => '68.96778000','sc' => 'GJ'),
		array('nm' => 'Dakor','lat' => '22.75268000','lon' => '73.14967000','sc' => 'GJ'),
		array('nm' => 'Damnagar','lat' => '21.69232000','lon' => '71.51747000','sc' => 'GJ'),
		array('nm' => 'Disa','lat' => '24.25612000','lon' => '72.17928000','sc' => 'GJ'),
		array('nm' => 'Gadhada','lat' => '21.96957000','lon' => '71.57828000','sc' => 'GJ'),
		array('nm' => 'Gandevi','lat' => '20.81214000','lon' => '72.99811000','sc' => 'GJ'),
		array('nm' => 'Gandhinagar','lat' => '23.21667000','lon' => '72.68333000','sc' => 'GJ'),
		array('nm' => 'Gariadhar','lat' => '21.53889000','lon' => '71.57737000','sc' => 'GJ'),
		array('nm' => 'Ghogha','lat' => '21.68813000','lon' => '72.27630000','sc' => 'GJ'),
		array('nm' => 'Gir Somnath','lat' => '20.91287000','lon' => '70.36710000','sc' => 'GJ'),
		array('nm' => 'Godhra','lat' => '22.77547000','lon' => '73.61488000','sc' => 'GJ'),
		array('nm' => 'Gondal','lat' => '21.96074000','lon' => '70.80255000','sc' => 'GJ'),
		array('nm' => 'Gandhidham','lat' => '23.08333000','lon' => '70.13333000','sc' => 'GJ'),
		array('nm' => 'Halvad','lat' => '23.01516000','lon' => '71.18029000','sc' => 'GJ'),
		array('nm' => 'Hansot','lat' => '21.58496000','lon' => '72.80764000','sc' => 'GJ'),
		array('nm' => 'Himatnagar','lat' => '23.59893000','lon' => '72.96602000','sc' => 'GJ'),
		array('nm' => 'Halol','lat' => '22.50321000','lon' => '73.47242000','sc' => 'GJ'),
		array('nm' => 'Harij','lat' => '23.69356000','lon' => '71.90700000','sc' => 'GJ'),
		array('nm' => 'Jalalpur','lat' => '20.94896000','lon' => '72.89829000','sc' => 'GJ'),
		array('nm' => 'Jambusar','lat' => '22.05236000','lon' => '72.80074000','sc' => 'GJ'),
		array('nm' => 'Jamnagar','lat' => '22.47292000','lon' => '70.06673000','sc' => 'GJ'),
		array('nm' => 'Jasdan','lat' => '22.03709000','lon' => '71.20794000','sc' => 'GJ'),
		array('nm' => 'Jetalsar','lat' => '21.70891000','lon' => '70.57695000','sc' => 'GJ'),
		array('nm' => 'Jetpur','lat' => '21.75482000','lon' => '70.62347000','sc' => 'GJ'),
		array('nm' => 'Jhulasan','lat' => '23.32860000','lon' => '72.47314000','sc' => 'GJ'),
		array('nm' => 'Jodhpur','lat' => '21.90174000','lon' => '70.03270000','sc' => 'GJ'),
		array('nm' => 'Jodiya Bandar','lat' => '22.71667000','lon' => '70.28333000','sc' => 'GJ'),
		array('nm' => 'Junagadh','lat' => '21.25000000','lon' => '70.33333000','sc' => 'GJ'),
		array('nm' => 'Kachchh','lat' => '23.58333000','lon' => '70.00000000','sc' => 'GJ'),
		array('nm' => 'Kadi','lat' => '23.29908000','lon' => '72.33362000','sc' => 'GJ'),
		array('nm' => 'Kadod','lat' => '21.21717000','lon' => '73.21972000','sc' => 'GJ'),
		array('nm' => 'Kapadvanj','lat' => '23.02302000','lon' => '73.07113000','sc' => 'GJ'),
		array('nm' => 'Karamsad','lat' => '22.54243000','lon' => '72.90392000','sc' => 'GJ'),
		array('nm' => 'Katpur','lat' => '21.05869000','lon' => '71.79457000','sc' => 'GJ'),
		array('nm' => 'Kawant','lat' => '22.09282000','lon' => '74.05078000','sc' => 'GJ'),
		array('nm' => 'Keshod','lat' => '21.30328000','lon' => '70.24861000','sc' => 'GJ'),
		array('nm' => 'Khambhat','lat' => '22.31744000','lon' => '72.61916000','sc' => 'GJ'),
		array('nm' => 'Kheda','lat' => '22.75000000','lon' => '72.83333000','sc' => 'GJ'),
		array('nm' => 'Khedbrahma','lat' => '24.02990000','lon' => '73.04632000','sc' => 'GJ'),
		array('nm' => 'Kheralu','lat' => '23.88534000','lon' => '72.61869000','sc' => 'GJ'),
		array('nm' => 'Kodinar','lat' => '20.79393000','lon' => '70.70216000','sc' => 'GJ'),
		array('nm' => 'Kosamba','lat' => '21.46202000','lon' => '72.95842000','sc' => 'GJ'),
		array('nm' => 'Kundla','lat' => '21.34222000','lon' => '71.30633000','sc' => 'GJ'),
		array('nm' => 'Kutiyana','lat' => '21.62410000','lon' => '69.98494000','sc' => 'GJ'),
		array('nm' => 'Kalol','lat' => '22.60777000','lon' => '73.46272000','sc' => 'GJ'),
		array('nm' => 'Kalavad','lat' => '22.20789000','lon' => '70.38343000','sc' => 'GJ'),
		array('nm' => 'Kandla','lat' => '23.03333000','lon' => '70.21667000','sc' => 'GJ'),
		array('nm' => 'Kanodar','lat' => '24.08932000','lon' => '72.39354000','sc' => 'GJ'),
		array('nm' => 'Kathor','lat' => '21.28854000','lon' => '72.94070000','sc' => 'GJ'),
		array('nm' => 'Lakhtar','lat' => '22.85683000','lon' => '71.78844000','sc' => 'GJ'),
		array('nm' => 'Limbdi','lat' => '22.56507000','lon' => '71.81076000','sc' => 'GJ'),
		array('nm' => 'Lalpur','lat' => '22.19073000','lon' => '69.96351000','sc' => 'GJ'),
		array('nm' => 'Lathi','lat' => '21.72310000','lon' => '71.38843000','sc' => 'GJ'),
		array('nm' => 'Lunavada','lat' => '23.12841000','lon' => '73.61043000','sc' => 'GJ'),
		array('nm' => 'Mahemdavad','lat' => '22.82359000','lon' => '72.75551000','sc' => 'GJ'),
		array('nm' => 'Mahesana','lat' => '23.66667000','lon' => '72.50000000','sc' => 'GJ'),
		array('nm' => 'Mahudha','lat' => '22.82082000','lon' => '72.94032000','sc' => 'GJ'),
		array('nm' => 'Meghraj','lat' => '23.49805000','lon' => '73.51352000','sc' => 'GJ'),
		array('nm' => 'Mendarda','lat' => '21.32112000','lon' => '70.44078000','sc' => 'GJ'),
		array('nm' => 'Modasa','lat' => '23.46253000','lon' => '73.29857000','sc' => 'GJ'),
		array('nm' => 'Morbi','lat' => '22.81731000','lon' => '70.83770000','sc' => 'GJ'),
		array('nm' => 'Morwa','lat' => '22.90469000','lon' => '73.83912000','sc' => 'GJ'),
		array('nm' => 'Mundra','lat' => '22.83918000','lon' => '69.72190000','sc' => 'GJ'),
		array('nm' => 'Malpur','lat' => '23.36035000','lon' => '73.46595000','sc' => 'GJ'),
		array('nm' => 'Mandal','lat' => '23.28865000','lon' => '71.91854000','sc' => 'GJ'),
		array('nm' => 'Mandvi','lat' => '22.83282000','lon' => '69.35237000','sc' => 'GJ'),
		array('nm' => 'Mangrol','lat' => '21.12268000','lon' => '70.11484000','sc' => 'GJ'),
		array('nm' => 'Mansa','lat' => '23.42564000','lon' => '72.65739000','sc' => 'GJ'),
		array('nm' => 'Manavadar','lat' => '21.49813000','lon' => '70.13775000','sc' => 'GJ'),
		array('nm' => 'Nadiad','lat' => '22.69385000','lon' => '72.86157000','sc' => 'GJ'),
		array('nm' => 'Naliya','lat' => '23.26058000','lon' => '68.82655000','sc' => 'GJ'),
		array('nm' => 'Narmada','lat' => '21.87377000','lon' => '73.49527000','sc' => 'GJ'),
		array('nm' => 'Naroda','lat' => '23.07041000','lon' => '72.65702000','sc' => 'GJ'),
		array('nm' => 'Navsari','lat' => '20.95000000','lon' => '72.92000000','sc' => 'GJ'),
		array('nm' => 'Okha','lat' => '22.46756000','lon' => '69.07002000','sc' => 'GJ'),
		array('nm' => 'Olpad','lat' => '21.33649000','lon' => '72.75161000','sc' => 'GJ'),
		array('nm' => 'Paddhari','lat' => '22.43654000','lon' => '70.60162000','sc' => 'GJ'),
		array('nm' => 'Padra','lat' => '22.23980000','lon' => '73.08451000','sc' => 'GJ'),
		array('nm' => 'Parnera','lat' => '20.56101000','lon' => '72.94846000','sc' => 'GJ'),
		array('nm' => 'Patan','lat' => '23.70000000','lon' => '71.80000000','sc' => 'GJ'),
		array('nm' => 'Petlad','lat' => '22.47681000','lon' => '72.79995000','sc' => 'GJ'),
		array('nm' => 'Porbandar','lat' => '21.64219000','lon' => '69.60929000','sc' => 'GJ'),
		array('nm' => 'Palanpur','lat' => '24.17128000','lon' => '72.43827000','sc' => 'GJ'),
		array('nm' => 'Palitana','lat' => '21.52519000','lon' => '71.82309000','sc' => 'GJ'),
		array('nm' => 'Paliyad','lat' => '22.25757000','lon' => '71.56024000','sc' => 'GJ'),
		array('nm' => 'Panch Mahals','lat' => '22.75000000','lon' => '73.60000000','sc' => 'GJ'),
		array('nm' => 'Pardi','lat' => '20.50870000','lon' => '72.94569000','sc' => 'GJ'),
		array('nm' => 'Roha','lat' => '23.19646000','lon' => '69.27076000','sc' => 'GJ'),
		array('nm' => 'Radhanpur','lat' => '23.83238000','lon' => '71.60470000','sc' => 'GJ'),
		array('nm' => 'Rajkot','lat' => '22.33333000','lon' => '70.83333000','sc' => 'GJ'),
		array('nm' => 'Rajpipla','lat' => '21.86667000','lon' => '73.50000000','sc' => 'GJ'),
		array('nm' => 'Rajula','lat' => '21.03854000','lon' => '71.44345000','sc' => 'GJ'),
		array('nm' => 'Ranavav','lat' => '21.68734000','lon' => '69.74485000','sc' => 'GJ'),
		array('nm' => 'Rapar','lat' => '23.57267000','lon' => '70.64718000','sc' => 'GJ'),
		array('nm' => 'Sabar Kantha','lat' => '23.62974000','lon' => '73.00197000','sc' => 'GJ'),
		array('nm' => 'Sachin','lat' => '21.08718000','lon' => '72.88153000','sc' => 'GJ'),
		array('nm' => 'Salaya','lat' => '22.31038000','lon' => '69.60376000','sc' => 'GJ'),
		array('nm' => 'Sankheda','lat' => '22.17021000','lon' => '73.57820000','sc' => 'GJ'),
		array('nm' => 'Sarkhej','lat' => '22.98297000','lon' => '72.50196000','sc' => 'GJ'),
		array('nm' => 'Savarkundla','lat' => '21.33726000','lon' => '71.30350000','sc' => 'GJ'),
		array('nm' => 'Shivrajpur','lat' => '22.42319000','lon' => '73.60865000','sc' => 'GJ'),
		array('nm' => 'Shahpur','lat' => '22.15611000','lon' => '70.77068000','sc' => 'GJ'),
		array('nm' => 'Sihor','lat' => '21.71134000','lon' => '71.96179000','sc' => 'GJ'),
		array('nm' => 'Sikka','lat' => '22.43218000','lon' => '69.84158000','sc' => 'GJ'),
		array('nm' => 'Sinor','lat' => '21.91117000','lon' => '73.33974000','sc' => 'GJ'),
		array('nm' => 'Sojitra','lat' => '22.53884000','lon' => '72.71984000','sc' => 'GJ'),
		array('nm' => 'Songadh','lat' => '21.16966000','lon' => '73.56357000','sc' => 'GJ'),
		array('nm' => 'Surendranagar','lat' => '22.72706000','lon' => '71.64856000','sc' => 'GJ'),
		array('nm' => 'Sanand','lat' => '22.99227000','lon' => '72.38177000','sc' => 'GJ'),
		array('nm' => 'Sayla','lat' => '22.54925000','lon' => '71.48324000','sc' => 'GJ'),
		array('nm' => 'Surat','lat' => '21.17801000','lon' => '72.81189000','sc' => 'GJ'),
		array('nm' => 'Talaja','lat' => '21.35270000','lon' => '72.03524000','sc' => 'GJ'),
		array('nm' => 'Tankara','lat' => '22.65622000','lon' => '70.74945000','sc' => 'GJ'),
		array('nm' => 'Tapi','lat' => '21.12000000','lon' => '73.40000000','sc' => 'GJ'),
		array('nm' => 'Tharad','lat' => '24.39597000','lon' => '71.62577000','sc' => 'GJ'),
		array('nm' => 'The Dangs','lat' => '20.75000000','lon' => '73.75000000','sc' => 'GJ'),
		array('nm' => 'Than','lat' => '22.57422000','lon' => '71.19942000','sc' => 'GJ'),
		array('nm' => 'Thasra','lat' => '22.79831000','lon' => '73.21174000','sc' => 'GJ'),
		array('nm' => 'Umreth','lat' => '22.69881000','lon' => '73.11561000','sc' => 'GJ'),
		array('nm' => 'Umrala','lat' => '21.84353000','lon' => '71.80305000','sc' => 'GJ'),
		array('nm' => 'Un','lat' => '23.88745000','lon' => '71.76975000','sc' => 'GJ'),
		array('nm' => 'Una','lat' => '20.82318000','lon' => '71.03795000','sc' => 'GJ'),
		array('nm' => 'Unjha','lat' => '23.80366000','lon' => '72.39101000','sc' => 'GJ'),
		array('nm' => 'Upleta','lat' => '21.74015000','lon' => '70.28256000','sc' => 'GJ'),
		array('nm' => 'Utran','lat' => '21.23333000','lon' => '72.86667000','sc' => 'GJ'),
		array('nm' => 'Vadnagar','lat' => '23.78593000','lon' => '72.63893000','sc' => 'GJ'),
		array('nm' => 'Vadodara','lat' => '22.29941000','lon' => '73.20812000','sc' => 'GJ'),
		array('nm' => 'Vallabh Vidyanagar','lat' => '22.53333000','lon' => '72.90000000','sc' => 'GJ'),
		array('nm' => 'Valsad','lat' => '20.50000000','lon' => '73.08333000','sc' => 'GJ'),
		array('nm' => 'Vapi','lat' => '20.37175000','lon' => '72.90493000','sc' => 'GJ'),
		array('nm' => 'Vartej','lat' => '21.73947000','lon' => '72.06553000','sc' => 'GJ'),
		array('nm' => 'Vasa','lat' => '22.66079000','lon' => '72.75519000','sc' => 'GJ'),
		array('nm' => 'Vejalpur','lat' => '22.69021000','lon' => '73.56299000','sc' => 'GJ'),
		array('nm' => 'Veraval','lat' => '20.90770000','lon' => '70.36786000','sc' => 'GJ'),
		array('nm' => 'Vijapur','lat' => '23.56230000','lon' => '72.74848000','sc' => 'GJ'),
		array('nm' => 'Vinchia','lat' => '22.21027000','lon' => '71.37967000','sc' => 'GJ'),
		array('nm' => 'Virpur','lat' => '23.18920000','lon' => '73.47987000','sc' => 'GJ'),
		array('nm' => 'Visnagar','lat' => '23.69855000','lon' => '72.55210000','sc' => 'GJ'),
		array('nm' => 'Vyara','lat' => '21.11079000','lon' => '73.39365000','sc' => 'GJ'),
		array('nm' => 'Vaghodia','lat' => '22.30505000','lon' => '73.40016000','sc' => 'GJ'),
		array('nm' => 'Visavadar','lat' => '21.33954000','lon' => '70.74966000','sc' => 'GJ'),
		array('nm' => 'Waghai','lat' => '20.77048000','lon' => '73.50074000','sc' => 'GJ'),
		array('nm' => 'Wankaner','lat' => '22.61198000','lon' => '70.94379000','sc' => 'GJ'),
		array('nm' => 'Bagasara','lat' => '21.48333333','lon' => '70.95000000','sc' => 'GJ'),
		array('nm' => 'Dahod','lat' => '22.52000000','lon' => '74.15000000','sc' => 'GJ'),
		array('nm' => 'Dangs','lat' => '20.75000000','lon' => '73.75000000','sc' => 'GJ'),
		array('nm' => 'Delwada','lat' => '20.78330000','lon' => '71.05000000','sc' => 'GJ'),
		array('nm' => 'Jalalpore','lat' => '20.94910000','lon' => '72.91360000','sc' => 'GJ'),
		array('nm' => 'Jodia','lat' => '22.71667000','lon' => '70.28333000','sc' => 'GJ'),
		array('nm' => 'Kavant','lat' => '22.09282000','lon' => '74.05078000','sc' => 'GJ'),
		array('nm' => 'Khambhalia','lat' => '22.20000000','lon' => '69.65000000','sc' => 'GJ'),
		array('nm' => 'Kutch district','lat' => '23.91500000','lon' => '70.36700000','sc' => 'GJ'),
		array('nm' => 'Mehsana','lat' => '23.60000000','lon' => '72.40000000','sc' => 'GJ'),
		array('nm' => 'Morva Hadaf','lat' => '22.90469000','lon' => '73.83912000','sc' => 'GJ'),
		array('nm' => 'Panchmahal district','lat' => '22.75000000','lon' => '73.60000000','sc' => 'GJ'),
		array('nm' => 'Pavi Jetpur','lat' => '22.34472000','lon' => '73.84093000','sc' => 'GJ'),
		array('nm' => 'Siddhpur','lat' => '23.91670000','lon' => '72.38330000','sc' => 'GJ'),
		array('nm' => 'Thangadh','lat' => '22.56666667','lon' => '71.18333333','sc' => 'GJ'),
		array('nm' => 'Vallabhipur','lat' => '21.88780000','lon' => '71.87950000','sc' => 'GJ'),
		array('nm' => 'Vansda','lat' => '20.45000000','lon' => '73.22000000','sc' => 'GJ'),
		array('nm' => 'Vaso','lat' => '22.66079000','lon' => '72.75519000','sc' => 'GJ'),
		array('nm' => 'Vinchhiya','lat' => '22.21027000','lon' => '71.37967000','sc' => 'GJ'),
		array('nm' => 'Wadhai','lat' => '20.76666667','lon' => '73.48333333','sc' => 'GJ'),
		array('nm' => 'Wadhwan','lat' => '22.70000000','lon' => '71.68333333','sc' => 'GJ'),
		array('nm' => 'Agol','lat' => '23.15000000','lon' => '72.26666667','sc' => 'GJ'),
		array('nm' => 'Akrund','lat' => '23.28333333','lon' => '73.11666667','sc' => 'GJ'),
		array('nm' => 'Amod,','lat' => '21.99100000','lon' => '72.87100000','sc' => 'GJ'),
		array('nm' => 'Bakharla','lat' => '21.73151700','lon' => '69.63529600','sc' => 'GJ'),
		array('nm' => 'Balagam','lat' => '21.36666667','lon' => '70.10000000','sc' => 'GJ'),
		array('nm' => 'Balasinor','lat' => '22.95589100','lon' => '73.33649900','sc' => 'GJ'),
		array('nm' => 'Balisana','lat' => '23.81643600','lon' => '72.25753600','sc' => 'GJ'),
		array('nm' => 'Bamanbore','lat' => '22.41666667','lon' => '71.01666667','sc' => 'GJ'),
		array('nm' => 'Bandia','lat' => '23.39604000','lon' => '69.01155000','sc' => 'GJ'),
		array('nm' => 'Bhadran','lat' => '22.35930000','lon' => '72.90050000','sc' => 'GJ'),
		array('nm' => 'Bhandu','lat' => '23.70000000','lon' => '72.36666667','sc' => 'GJ'),
		array('nm' => 'Bhatha','lat' => '21.18333333','lon' => '72.76666667','sc' => 'GJ'),
		array('nm' => 'Bhildi','lat' => '24.18333333','lon' => '72.03333333','sc' => 'GJ'),
		array('nm' => 'Bhojpur Dharampur','lat' => '23.25000000','lon' => '69.67000000','sc' => 'GJ'),
		array('nm' => 'Chaloda','lat' => '22.80000000','lon' => '72.45000000','sc' => 'GJ'),
		array('nm' => 'Champaner','lat' => '22.48590000','lon' => '73.53710000','sc' => 'GJ'),
		array('nm' => 'Chuda','lat' => '22.48333333','lon' => '71.68333333','sc' => 'GJ'),
		array('nm' => 'Dabhoda','lat' => '23.16666667','lon' => '72.73333333','sc' => 'GJ'),
		array('nm' => 'Dandi','lat' => '21.32988000','lon' => '72.62484000','sc' => 'GJ'),
		array('nm' => 'Danta','lat' => '24.18861111','lon' => '72.76583333','sc' => 'GJ'),
		array('nm' => 'Detroj','lat' => '23.33333333','lon' => '72.18333333','sc' => 'GJ'),
		array('nm' => 'Dhansura','lat' => '23.35000000','lon' => '73.20000000','sc' => 'GJ'),
		array('nm' => 'Dharasana','lat' => '20.68333333','lon' => '72.91666667','sc' => 'GJ'),
		array('nm' => 'Dhasa','lat' => '21.80000000','lon' => '71.51666667','sc' => 'GJ'),
		array('nm' => 'Dholera','lat' => '22.24800000','lon' => '72.19500000','sc' => 'GJ'),
		array('nm' => 'Dumkhal','lat' => '21.73960000','lon' => '73.84490000','sc' => 'GJ'),
		array('nm' => 'Ghodasar','lat' => '24.45000000','lon' => '71.85000000','sc' => 'GJ'),
		array('nm' => 'Gorwa','lat' => '22.33010000','lon' => '73.16110000','sc' => 'GJ'),
		array('nm' => 'Halenda','lat' => '22.08818500','lon' => '71.05171000','sc' => 'GJ'),
		array('nm' => 'Harsol','lat' => '23.36000000','lon' => '73.02000000','sc' => 'GJ'),
		array('nm' => 'Hathuran','lat' => '21.50000000','lon' => '72.97000000','sc' => 'GJ'),
		array('nm' => 'Idar','lat' => '23.83000000','lon' => '73.00000000','sc' => 'GJ'),
		array('nm' => 'Jakhau','lat' => '23.21861111','lon' => '68.71694444','sc' => 'GJ'),
		array('nm' => 'Jalia','lat' => '21.80000000','lon' => '70.25000000','sc' => 'GJ'),
		array('nm' => 'Jambuda','lat' => '22.51666667','lon' => '70.21666667','sc' => 'GJ'),
		array('nm' => 'Jarod','lat' => '22.43300000','lon' => '73.33300000','sc' => 'GJ'),
		array('nm' => 'Jetalpur','lat' => '22.88333333','lon' => '72.60000000','sc' => 'GJ'),
		array('nm' => 'Jetpur Navagadh','lat' => '21.75482000','lon' => '70.62347000','sc' => 'GJ'),
		array('nm' => 'Jhalod','lat' => '23.10027778','lon' => '74.15611111','sc' => 'GJ'),
		array('nm' => 'Jodhpur Ahmedabad','lat' => '21.88000000','lon' => '70.03000000','sc' => 'GJ'),
		array('nm' => 'Kachholi','lat' => '20.83333333','lon' => '72.96666667','sc' => 'GJ'),
		array('nm' => 'Kandla port','lat' => '23.03000000','lon' => '70.22000000','sc' => 'GJ'),
		array('nm' => 'Kariana','lat' => '21.88333333','lon' => '71.35000000','sc' => 'GJ'),
		array('nm' => 'Karjan','lat' => '22.05304167','lon' => '73.12351389','sc' => 'GJ'),
		array('nm' => 'Kayavarohan','lat' => '22.06700000','lon' => '73.25000000','sc' => 'GJ'),
		array('nm' => 'Kerwada','lat' => '21.90000000','lon' => '72.85000000','sc' => 'GJ'),
		array('nm' => 'Khavda','lat' => '23.85000000','lon' => '69.72000000','sc' => 'GJ'),
		array('nm' => 'Khedoi','lat' => '23.05927778','lon' => '69.91895556','sc' => 'GJ'),
		array('nm' => 'Kherali','lat' => '22.68333333','lon' => '71.60000000','sc' => 'GJ'),
		array('nm' => 'Kothara','lat' => '23.13300000','lon' => '68.93200000','sc' => 'GJ'),
		array('nm' => 'Kotharia','lat' => '22.23000000','lon' => '70.81000000','sc' => 'GJ'),
		array('nm' => 'Kukarmunda','lat' => '21.51666667','lon' => '74.13333333','sc' => 'GJ'),
		array('nm' => 'Kukma','lat' => '23.21782200','lon' => '69.77792200','sc' => 'GJ'),
		array('nm' => 'Lakhpat','lat' => '23.82611111','lon' => '68.77694444','sc' => 'GJ'),
		array('nm' => 'Langhnaj','lat' => '23.45000000','lon' => '72.48333333','sc' => 'GJ'),
		array('nm' => 'Limkheda','lat' => '22.81666667','lon' => '73.98333333','sc' => 'GJ'),
		array('nm' => 'Ladol','lat' => '23.61666667','lon' => '72.73333333','sc' => 'GJ'),
		array('nm' => 'Madhavpur Ghed','lat' => '21.29929167','lon' => '70.02513889','sc' => 'GJ'),
		array('nm' => 'Madhi','lat' => '22.10000000','lon' => '69.10000000','sc' => 'GJ'),
		array('nm' => 'Mahisa','lat' => '22.85000000','lon' => '73.05000000','sc' => 'GJ'),
		array('nm' => 'Mahuva','lat' => '21.08330000','lon' => '71.80000000','sc' => 'GJ'),
		array('nm' => 'Mangrol Junagadh','lat' => '21.12000000','lon' => '70.12000000','sc' => 'GJ'),
		array('nm' => 'Mithapur','lat' => '22.41000000','lon' => '69.00000000','sc' => 'GJ'),
		array('nm' => 'Nadiad,','lat' => '22.70000000','lon' => '72.87000000','sc' => 'GJ'),
		array('nm' => 'Nagwa','lat' => '25.69621000','lon' => '84.23590000','sc' => 'GJ'),
		array('nm' => 'Naldhara','lat' => '20.96666667','lon' => '73.16666667','sc' => 'GJ'),
		array('nm' => 'Nargol','lat' => '20.23300000','lon' => '72.75000000','sc' => 'GJ'),
		array('nm' => 'Nikora','lat' => '21.78586000','lon' => '73.13968000','sc' => 'GJ'),
		array('nm' => 'Nizar','lat' => '21.47727000','lon' => '74.19595000','sc' => 'GJ'),
		array('nm' => 'Odadar','lat' => '21.56666667','lon' => '69.66666667','sc' => 'GJ'),
		array('nm' => 'Palanswa','lat' => '23.46666667','lon' => '70.93333333','sc' => 'GJ'),
		array('nm' => 'Paliyad Bhavnagar','lat' => '22.25757000','lon' => '71.56024000','sc' => 'GJ'),
		array('nm' => 'Palsana','lat' => '21.08000000','lon' => '72.98000000','sc' => 'GJ'),
		array('nm' => 'Pipavav','lat' => '20.96666667','lon' => '71.56666667','sc' => 'GJ'),
		array('nm' => 'Piplod','lat' => '22.81666667','lon' => '73.90000000','sc' => 'GJ'),
		array('nm' => 'Prabhas Patan','lat' => '20.88808000','lon' => '70.40129000','sc' => 'GJ'),
		array('nm' => 'Prantij','lat' => '23.43841944','lon' => '72.85718056','sc' => 'GJ'),
		array('nm' => 'Ranpur','lat' => '22.36670000','lon' => '71.75000000','sc' => 'GJ'),
		array('nm' => 'Reha','lat' => '23.15172500','lon' => '69.75008600','sc' => 'GJ'),
		array('nm' => 'Samakhiali','lat' => '23.30340000','lon' => '70.50688000','sc' => 'GJ'),
		array('nm' => 'Sarbhon','lat' => '21.05000000','lon' => '73.08330000','sc' => 'GJ'),
		array('nm' => 'Sardoi','lat' => '23.56670000','lon' => '73.26670000','sc' => 'GJ'),
		array('nm' => 'Sathamba','lat' => '23.16912500','lon' => '73.32661667','sc' => 'GJ'),
		array('nm' => 'Savli','lat' => '22.56666667','lon' => '73.21666667','sc' => 'GJ'),
		array('nm' => 'Supedi','lat' => '21.76200000','lon' => '70.37800000','sc' => 'GJ'),
		array('nm' => 'Sutrapada','lat' => '20.89280000','lon' => '70.46500000','sc' => 'GJ'),
		array('nm' => 'Umarpada','lat' => '21.45000000','lon' => '73.50000000','sc' => 'GJ'),
		array('nm' => 'Vadgam','lat' => '24.08333333','lon' => '72.48333333','sc' => 'GJ'),
		array('nm' => 'Vaghodia INA','lat' => '22.30000000','lon' => '73.38330000','sc' => 'GJ'),
		array('nm' => 'Vanala','lat' => '22.45000000','lon' => '71.98333333','sc' => 'GJ'),
		array('nm' => 'Vanthli','lat' => '21.48330000','lon' => '70.33330000','sc' => 'GJ'),
		array('nm' => 'Vasavad','lat' => '21.82657000','lon' => '71.02436000','sc' => 'GJ'),
		array('nm' => 'Vataman','lat' => '22.53000000','lon' => '72.42000000','sc' => 'GJ'),
		array('nm' => 'Viramgam','lat' => '23.12000000','lon' => '72.03000000','sc' => 'GJ')
);
