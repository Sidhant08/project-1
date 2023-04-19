<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='TG'
$cities = array(
		array('nm' => 'Andol','lat' => '17.81458000','lon' => '78.07713000','sc' => 'TG'),
		array('nm' => 'Asifabad','lat' => '19.35851000','lon' => '79.28415000','sc' => 'TG'),
		array('nm' => 'Bellampalli','lat' => '19.05577000','lon' => '79.49300000','sc' => 'TG'),
		array('nm' => 'Bhadradri Kothagudem','lat' => '17.55460000','lon' => '80.61976000','sc' => 'TG'),
		array('nm' => 'Bhadrachalam','lat' => '17.66846000','lon' => '80.88887000','sc' => 'TG'),
		array('nm' => 'Bhaisa','lat' => '19.11285000','lon' => '77.96336000','sc' => 'TG'),
		array('nm' => 'Bhongir','lat' => '17.51544000','lon' => '78.88563000','sc' => 'TG'),
		array('nm' => 'Bodhan','lat' => '18.66208000','lon' => '77.88581000','sc' => 'TG'),
		array('nm' => 'Balapur','lat' => '17.31018000','lon' => '78.49969000','sc' => 'TG'),
		array('nm' => 'Banswada','lat' => '18.37725000','lon' => '77.88007000','sc' => 'TG'),
		array('nm' => 'Chandur','lat' => '17.87455000','lon' => '78.10017000','sc' => 'TG'),
		array('nm' => 'Chatakonda','lat' => '17.55303000','lon' => '80.64770000','sc' => 'TG'),
		array('nm' => 'Dasnapur','lat' => '19.65399000','lon' => '78.51213000','sc' => 'TG'),
		array('nm' => 'Devarkonda','lat' => '16.69186000','lon' => '78.92073000','sc' => 'TG'),
		array('nm' => 'Dornakal','lat' => '17.44475000','lon' => '80.14905000','sc' => 'TG'),
		array('nm' => 'Farrukhnagar','lat' => '17.07787000','lon' => '78.20339000','sc' => 'TG'),
		array('nm' => 'Gaddi Annaram','lat' => '17.36687000','lon' => '78.52420000','sc' => 'TG'),
		array('nm' => 'Gadwal','lat' => '16.23504000','lon' => '77.79556000','sc' => 'TG'),
		array('nm' => 'Ghatkesar','lat' => '17.45081000','lon' => '78.68366000','sc' => 'TG'),
		array('nm' => 'Gopalur','lat' => '16.61220000','lon' => '77.80728000','sc' => 'TG'),
		array('nm' => 'Gudur','lat' => '17.49174000','lon' => '78.82302000','sc' => 'TG'),
		array('nm' => 'Hyderabad','lat' => '17.38405000','lon' => '78.45636000','sc' => 'TG'),
		array('nm' => 'Jagtial','lat' => '18.79473000','lon' => '78.91661000','sc' => 'TG'),
		array('nm' => 'Jangaon','lat' => '17.72602000','lon' => '79.15236000','sc' => 'TG'),
		array('nm' => 'Jangoan','lat' => '17.72943000','lon' => '79.16096000','sc' => 'TG'),
		array('nm' => 'Jayashankar Bhupalapally','lat' => '18.19678000','lon' => '79.93976000','sc' => 'TG'),
		array('nm' => 'Jogulamba Gadwal','lat' => '16.23401000','lon' => '77.80564000','sc' => 'TG'),
		array('nm' => 'Kagaznagar','lat' => '19.33159000','lon' => '79.46605000','sc' => 'TG'),
		array('nm' => 'Kamareddy','lat' => '18.32567000','lon' => '78.33416000','sc' => 'TG'),
		array('nm' => 'Karimnagar','lat' => '18.33844000','lon' => '79.22938000','sc' => 'TG'),
		array('nm' => 'Khammam','lat' => '17.50000000','lon' => '80.33333000','sc' => 'TG'),
		array('nm' => 'Kodar','lat' => '16.99850000','lon' => '79.96560000','sc' => 'TG'),
		array('nm' => 'Koratla','lat' => '18.82154000','lon' => '78.71186000','sc' => 'TG'),
		array('nm' => 'Kothapet','lat' => '19.35176000','lon' => '79.48323000','sc' => 'TG'),
		array('nm' => 'Kottagudem','lat' => '17.55106000','lon' => '80.61779000','sc' => 'TG'),
		array('nm' => 'Kottapalli','lat' => '18.49543000','lon' => '79.09430000','sc' => 'TG'),
		array('nm' => 'Kyathampalle','lat' => '19.66781000','lon' => '78.52890000','sc' => 'TG'),
		array('nm' => 'Kamareddi','lat' => '18.32001000','lon' => '78.34177000','sc' => 'TG'),
		array('nm' => 'Kukatpalli','lat' => '17.48486000','lon' => '78.41376000','sc' => 'TG'),
		array('nm' => 'Lakshettipet','lat' => '18.86667000','lon' => '79.21667000','sc' => 'TG'),
		array('nm' => 'Lal Bahadur Nagar','lat' => '17.34769000','lon' => '78.55757000','sc' => 'TG'),
		array('nm' => 'Mahabubabad','lat' => '17.60040000','lon' => '80.00543000','sc' => 'TG'),
		array('nm' => 'Mahbubnagar','lat' => '16.63171000','lon' => '77.75556000','sc' => 'TG'),
		array('nm' => 'Malkajgiri','lat' => '17.44781000','lon' => '78.52633000','sc' => 'TG'),
		array('nm' => 'Mancheral','lat' => '18.87074000','lon' => '79.42863000','sc' => 'TG'),
		array('nm' => 'Mandamarri','lat' => '18.96506000','lon' => '79.47475000','sc' => 'TG'),
		array('nm' => 'Manthani','lat' => '18.65087000','lon' => '79.66501000','sc' => 'TG'),
		array('nm' => 'Manuguru','lat' => '17.98102000','lon' => '80.75470000','sc' => 'TG'),
		array('nm' => 'Medak','lat' => '17.75000000','lon' => '78.25000000','sc' => 'TG'),
		array('nm' => 'Medchal','lat' => '17.62972000','lon' => '78.48139000','sc' => 'TG'),
		array('nm' => 'Medchal Malkajgiri','lat' => '17.60644000','lon' => '78.54007000','sc' => 'TG'),
		array('nm' => 'Mirialguda','lat' => '16.87220000','lon' => '79.56247000','sc' => 'TG'),
		array('nm' => 'Nalgonda','lat' => '17.16667000','lon' => '79.50000000','sc' => 'TG'),
		array('nm' => 'Nirmal','lat' => '19.09685000','lon' => '78.34407000','sc' => 'TG'),
		array('nm' => 'Nizamabad','lat' => '18.75000000','lon' => '78.25000000','sc' => 'TG'),
		array('nm' => 'Nagar Karnul','lat' => '16.48210000','lon' => '78.32471000','sc' => 'TG'),
		array('nm' => 'Narsingi','lat' => '18.04468000','lon' => '78.42516000','sc' => 'TG'),
		array('nm' => 'Narayanpet','lat' => '16.74799000','lon' => '77.49540000','sc' => 'TG'),
		array('nm' => 'Naspur','lat' => '18.84577000','lon' => '79.46165000','sc' => 'TG'),
		array('nm' => 'Palwancha','lat' => '17.58152000','lon' => '80.67651000','sc' => 'TG'),
		array('nm' => 'Patancheru','lat' => '17.53334000','lon' => '78.26450000','sc' => 'TG'),
		array('nm' => 'Peddapalli','lat' => '18.61357000','lon' => '79.37442000','sc' => 'TG'),
		array('nm' => 'Paloncha','lat' => '17.60184000','lon' => '80.70509000','sc' => 'TG'),
		array('nm' => 'Quthbullapur','lat' => '17.50107000','lon' => '78.45818000','sc' => 'TG'),
		array('nm' => 'Rajanna Sircilla','lat' => '18.38629000','lon' => '78.81560000','sc' => 'TG'),
		array('nm' => 'Ramagundam','lat' => '18.75500000','lon' => '79.47400000','sc' => 'TG'),
		array('nm' => 'Rangareddi','lat' => '17.27883000','lon' => '78.16844000','sc' => 'TG'),
		array('nm' => 'Ramgundam','lat' => '18.80084000','lon' => '79.45206000','sc' => 'TG'),
		array('nm' => 'Sadaseopet','lat' => '17.61925000','lon' => '77.95263000','sc' => 'TG'),
		array('nm' => 'Sangareddi','lat' => '17.62477000','lon' => '78.08669000','sc' => 'TG'),
		array('nm' => 'Sathupalli','lat' => '17.24968000','lon' => '80.86899000','sc' => 'TG'),
		array('nm' => 'Secunderabad','lat' => '17.50427000','lon' => '78.54263000','sc' => 'TG'),
		array('nm' => 'Serilingampalle','lat' => '17.49313000','lon' => '78.30196000','sc' => 'TG'),
		array('nm' => 'Siddipet','lat' => '18.10483000','lon' => '78.84858000','sc' => 'TG'),
		array('nm' => 'Singapur','lat' => '17.46982000','lon' => '78.12574000','sc' => 'TG'),
		array('nm' => 'Sirpur','lat' => '19.47953000','lon' => '79.57558000','sc' => 'TG'),
		array('nm' => 'Sirsilla','lat' => '18.38865000','lon' => '78.81048000','sc' => 'TG'),
		array('nm' => 'Sriramnagar','lat' => '17.26652000','lon' => '78.25544000','sc' => 'TG'),
		array('nm' => 'Suriapet','lat' => '17.14054000','lon' => '79.62045000','sc' => 'TG'),
		array('nm' => 'Tandur','lat' => '17.24849000','lon' => '77.57698000','sc' => 'TG'),
		array('nm' => 'Uppal Kalan','lat' => '17.40577000','lon' => '78.55911000','sc' => 'TG'),
		array('nm' => 'Vemalwada','lat' => '18.46523000','lon' => '78.86894000','sc' => 'TG'),
		array('nm' => 'Vikarabad','lat' => '17.33810000','lon' => '77.90441000','sc' => 'TG'),
		array('nm' => 'Wanparti','lat' => '16.36738000','lon' => '78.06889000','sc' => 'TG'),
		array('nm' => 'Warangal','lat' => '18.00000000','lon' => '79.83333000','sc' => 'TG'),
		array('nm' => 'Yellandu','lat' => '17.59064000','lon' => '80.32146000','sc' => 'TG'),
		array('nm' => 'Zahirabad','lat' => '17.68138000','lon' => '77.60743000','sc' => 'TG'),
		array('nm' => 'Adilabad','lat' => '19.50000000','lon' => '78.50000000','sc' => 'TG'),
		array('nm' => 'Alampur','lat' => '15.87987000','lon' => '78.13352000','sc' => 'TG')
);
