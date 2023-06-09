<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='JH'
$cities = array(
		array('nm' => 'Bagra','lat' => '23.73333000','lon' => '86.31667000','sc' => 'JH'),
		array('nm' => 'Barki Saria','lat' => '24.17594000','lon' => '85.88938000','sc' => 'JH'),
		array('nm' => 'Barka Kana','lat' => '23.62118000','lon' => '85.46748000','sc' => 'JH'),
		array('nm' => 'Barwadih','lat' => '23.84780000','lon' => '84.11049000','sc' => 'JH'),
		array('nm' => 'Bhojudih','lat' => '23.63962000','lon' => '86.44105000','sc' => 'JH'),
		array('nm' => 'Bokaro','lat' => '23.68562000','lon' => '85.99026000','sc' => 'JH'),
		array('nm' => 'Bundu','lat' => '23.16095000','lon' => '85.59007000','sc' => 'JH'),
		array('nm' => 'Chakradharpur','lat' => '22.67611000','lon' => '85.62892000','sc' => 'JH'),
		array('nm' => 'Chatra','lat' => '24.20645000','lon' => '84.87085000','sc' => 'JH'),
		array('nm' => 'Chiria','lat' => '22.31093000','lon' => '85.27601000','sc' => 'JH'),
		array('nm' => 'Chakulia','lat' => '22.48301000','lon' => '86.71793000','sc' => 'JH'),
		array('nm' => 'Chandil','lat' => '22.95745000','lon' => '86.05331000','sc' => 'JH'),
		array('nm' => 'Chas','lat' => '23.63556000','lon' => '86.16712000','sc' => 'JH'),
		array('nm' => 'Chaibasa','lat' => '22.55038000','lon' => '85.80249000','sc' => 'JH'),
		array('nm' => 'Daltonganj','lat' => '24.03971000','lon' => '84.06580000','sc' => 'JH'),
		array('nm' => 'Deogarh','lat' => '24.44382000','lon' => '86.72607000','sc' => 'JH'),
		array('nm' => 'Dhanbad','lat' => '23.80199000','lon' => '86.44324000','sc' => 'JH'),
		array('nm' => 'Dhanwar','lat' => '24.41074000','lon' => '85.98183000','sc' => 'JH'),
		array('nm' => 'Dugda','lat' => '23.74516000','lon' => '86.17175000','sc' => 'JH'),
		array('nm' => 'Dumka','lat' => '24.30000000','lon' => '87.25000000','sc' => 'JH'),
		array('nm' => 'Garhwa','lat' => '24.07494000','lon' => '83.71023000','sc' => 'JH'),
		array('nm' => 'Ghatsila','lat' => '22.58531000','lon' => '86.47682000','sc' => 'JH'),
		array('nm' => 'Giridih','lat' => '24.25000000','lon' => '85.91667000','sc' => 'JH'),
		array('nm' => 'Gobindpur','lat' => '22.63393000','lon' => '86.07162000','sc' => 'JH'),
		array('nm' => 'Godda','lat' => '24.83333000','lon' => '87.21667000','sc' => 'JH'),
		array('nm' => 'Gomoh','lat' => '23.87355000','lon' => '86.15160000','sc' => 'JH'),
		array('nm' => 'Gopinathpur','lat' => '22.66301000','lon' => '86.07500000','sc' => 'JH'),
		array('nm' => 'Gua','lat' => '22.21361000','lon' => '85.38774000','sc' => 'JH'),
		array('nm' => 'Gumia','lat' => '23.79750000','lon' => '85.82523000','sc' => 'JH'),
		array('nm' => 'Gumla','lat' => '23.08055000','lon' => '84.53834000','sc' => 'JH'),
		array('nm' => 'Hazaribagh','lat' => '23.99241000','lon' => '85.36162000','sc' => 'JH'),
		array('nm' => 'Hazaribag','lat' => '24.00000000','lon' => '85.25000000','sc' => 'JH'),
		array('nm' => 'Hesla','lat' => '24.06313000','lon' => '85.87905000','sc' => 'JH'),
		array('nm' => 'Husainabad','lat' => '24.52849000','lon' => '84.00000000','sc' => 'JH'),
		array('nm' => 'Jagannathpur','lat' => '22.22115000','lon' => '85.63917000','sc' => 'JH'),
		array('nm' => 'Jamshedpur','lat' => '22.80278000','lon' => '86.18545000','sc' => 'JH'),
		array('nm' => 'Jamtara','lat' => '24.00000000','lon' => '86.85000000','sc' => 'JH'),
		array('nm' => 'Jasidih','lat' => '24.51379000','lon' => '86.64576000','sc' => 'JH'),
		array('nm' => 'Jharia','lat' => '23.74079000','lon' => '86.41456000','sc' => 'JH'),
		array('nm' => 'Jugsalai','lat' => '22.77668000','lon' => '86.18351000','sc' => 'JH'),
		array('nm' => 'Jumri Tilaiya','lat' => '24.43490000','lon' => '85.52951000','sc' => 'JH'),
		array('nm' => 'Jamadoba','lat' => '23.71667000','lon' => '86.40000000','sc' => 'JH'),
		array('nm' => 'Kenduadih','lat' => '23.77574000','lon' => '86.37609000','sc' => 'JH'),
		array('nm' => 'Kharsawan','lat' => '22.79093000','lon' => '85.83102000','sc' => 'JH'),
		array('nm' => 'Khunti','lat' => '23.07602000','lon' => '85.27818000','sc' => 'JH'),
		array('nm' => 'Kodarma','lat' => '24.46753000','lon' => '85.59397000','sc' => 'JH'),
		array('nm' => 'Kuju','lat' => '23.72536000','lon' => '85.51023000','sc' => 'JH'),
		array('nm' => 'Kalikapur','lat' => '22.61662000','lon' => '86.28810000','sc' => 'JH'),
		array('nm' => 'Kandra','lat' => '22.85170000','lon' => '86.05192000','sc' => 'JH'),
		array('nm' => 'Kanke','lat' => '23.43478000','lon' => '85.32059000','sc' => 'JH'),
		array('nm' => 'Katras','lat' => '23.79752000','lon' => '86.29834000','sc' => 'JH'),
		array('nm' => 'Latehar','lat' => '23.75000000','lon' => '84.40000000','sc' => 'JH'),
		array('nm' => 'Lohardaga','lat' => '23.50000000','lon' => '84.60000000','sc' => 'JH'),
		array('nm' => 'Madhupur','lat' => '24.27419000','lon' => '86.63929000','sc' => 'JH'),
		array('nm' => 'Malkera','lat' => '23.78213000','lon' => '86.28767000','sc' => 'JH'),
		array('nm' => 'Manoharpur','lat' => '22.37456000','lon' => '85.19234000','sc' => 'JH'),
		array('nm' => 'Mugma','lat' => '23.77015000','lon' => '86.72746000','sc' => 'JH'),
		array('nm' => 'Mushabani','lat' => '22.51135000','lon' => '86.45713000','sc' => 'JH'),
		array('nm' => 'Neturhat','lat' => '23.47457000','lon' => '84.26780000','sc' => 'JH'),
		array('nm' => 'Nirsa','lat' => '23.78438000','lon' => '86.70692000','sc' => 'JH'),
		array('nm' => 'Noamundi','lat' => '22.16094000','lon' => '85.50416000','sc' => 'JH'),
		array('nm' => 'Pakur','lat' => '24.63925000','lon' => '87.84239000','sc' => 'JH'),
		array('nm' => 'Palamu','lat' => '23.91667000','lon' => '84.08333000','sc' => 'JH'),
		array('nm' => 'Pashchim Singhbhum','lat' => '22.50000000','lon' => '85.50000000','sc' => 'JH'),
		array('nm' => 'Purba Singhbhum','lat' => '22.59238000','lon' => '86.48341000','sc' => 'JH'),
		array('nm' => 'Pathardih','lat' => '23.66580000','lon' => '86.43166000','sc' => 'JH'),
		array('nm' => 'Ramgarh','lat' => '23.63073000','lon' => '85.56057000','sc' => 'JH'),
		array('nm' => 'Ranchi','lat' => '23.34316000','lon' => '85.30940000','sc' => 'JH'),
		array('nm' => 'Ray','lat' => '23.68430000','lon' => '85.05457000','sc' => 'JH'),
		array('nm' => 'Sahibganj','lat' => '24.99354000','lon' => '87.67333000','sc' => 'JH'),
		array('nm' => 'Saraikela','lat' => '22.69963000','lon' => '85.93126000','sc' => 'JH'),
		array('nm' => 'Sijua','lat' => '23.77617000','lon' => '86.33028000','sc' => 'JH'),
		array('nm' => 'Simdega','lat' => '22.61523000','lon' => '84.50208000','sc' => 'JH'),
		array('nm' => 'Sini','lat' => '22.79325000','lon' => '85.94543000','sc' => 'JH'),
		array('nm' => 'Sarubera','lat' => '23.81813000','lon' => '85.99628000','sc' => 'JH'),
		array('nm' => 'Topchanchi','lat' => '23.90381000','lon' => '86.19792000','sc' => 'JH'),
		array('nm' => 'patamda','lat' => '24.30000000','lon' => '85.41667000','sc' => 'JH')
);
