<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='JK'
$cities = array(
		array('nm' => 'Akhnur','lat' => '32.86667000','lon' => '74.73333000','sc' => 'JK'),
		array('nm' => 'Anantnag','lat' => '33.73068000','lon' => '75.15418000','sc' => 'JK'),
		array('nm' => 'Awantipur','lat' => '33.91978000','lon' => '75.01515000','sc' => 'JK'),
		array('nm' => 'Badgam','lat' => '33.89001000','lon' => '74.66297000','sc' => 'JK'),
		array('nm' => 'Bandipore','lat' => '34.50404000','lon' => '74.82832000','sc' => 'JK'),
		array('nm' => 'Bandipura','lat' => '34.41728000','lon' => '74.64308000','sc' => 'JK'),
		array('nm' => 'Banihal','lat' => '33.43647000','lon' => '75.19684000','sc' => 'JK'),
		array('nm' => 'Batoti','lat' => '33.11826000','lon' => '75.30889000','sc' => 'JK'),
		array('nm' => 'Bhadarwah','lat' => '32.97941000','lon' => '75.71723000','sc' => 'JK'),
		array('nm' => 'Bijbehara','lat' => '33.79378000','lon' => '75.10700000','sc' => 'JK'),
		array('nm' => 'Bishnah','lat' => '32.61060000','lon' => '74.85557000','sc' => 'JK'),
		array('nm' => 'Baramula','lat' => '34.19287000','lon' => '74.36920000','sc' => 'JK'),
		array('nm' => 'Doda','lat' => '33.14916000','lon' => '75.54746000','sc' => 'JK'),
		array('nm' => 'Ganderbal','lat' => '34.29467000','lon' => '75.19996000','sc' => 'JK'),
		array('nm' => 'Gho Brahmanan de','lat' => '32.55590000','lon' => '74.95390000','sc' => 'JK'),
		array('nm' => 'Gandarbal','lat' => '34.22619000','lon' => '74.77478000','sc' => 'JK'),
		array('nm' => 'Hiranagar','lat' => '32.45493000','lon' => '75.27187000','sc' => 'JK'),
		array('nm' => 'Hajan','lat' => '34.29895000','lon' => '74.61681000','sc' => 'JK'),
		array('nm' => 'Jammu','lat' => '32.75000000','lon' => '74.83333000','sc' => 'JK'),
		array('nm' => 'Jaurian','lat' => '32.83255000','lon' => '74.57612000','sc' => 'JK'),
		array('nm' => 'Kathua','lat' => '32.58333000','lon' => '75.50000000','sc' => 'JK'),
		array('nm' => 'Katra','lat' => '32.99167000','lon' => '74.93195000','sc' => 'JK'),
		array('nm' => 'Khaur','lat' => '32.60270000','lon' => '74.80918000','sc' => 'JK'),
		array('nm' => 'Kishtwar','lat' => '33.52958000','lon' => '76.01462000','sc' => 'JK'),
		array('nm' => 'Kulgam','lat' => '33.64456000','lon' => '75.01923000','sc' => 'JK'),
		array('nm' => 'Kupwara','lat' => '34.53193000','lon' => '74.26605000','sc' => 'JK'),
		array('nm' => 'Kud','lat' => '33.07246000','lon' => '75.28727000','sc' => 'JK'),
		array('nm' => 'Ladakh','lat' => '34.33333000','lon' => '77.41667000','sc' => 'JK'),
		array('nm' => 'Magam','lat' => '34.09256000','lon' => '74.59016000','sc' => 'JK'),
		array('nm' => 'Nawanshahr','lat' => '32.76505000','lon' => '74.52772000','sc' => 'JK'),
		array('nm' => 'Noria','lat' => '32.52095000','lon' => '74.79845000','sc' => 'JK'),
		array('nm' => 'Padam','lat' => '33.46659000','lon' => '76.88488000','sc' => 'JK'),
		array('nm' => 'Pahlgam','lat' => '34.01592000','lon' => '75.31899000','sc' => 'JK'),
		array('nm' => 'Parol','lat' => '32.34598000','lon' => '75.43441000','sc' => 'JK'),
		array('nm' => 'Pattan','lat' => '34.16125000','lon' => '74.55634000','sc' => 'JK'),
		array('nm' => 'Pulwama','lat' => '33.87405000','lon' => '74.89955000','sc' => 'JK'),
		array('nm' => 'Punch','lat' => '33.70178000','lon' => '74.19916000','sc' => 'JK'),
		array('nm' => 'Qazigund','lat' => '33.63828000','lon' => '75.14261000','sc' => 'JK'),
		array('nm' => 'Rajaori','lat' => '33.37526000','lon' => '74.30920000','sc' => 'JK'),
		array('nm' => 'Ramban','lat' => '33.32301000','lon' => '75.18610000','sc' => 'JK'),
		array('nm' => 'Riasi','lat' => '33.08115000','lon' => '74.83242000','sc' => 'JK'),
		array('nm' => 'Rajauri','lat' => '33.25000000','lon' => '74.25000000','sc' => 'JK'),
		array('nm' => 'Ramgarh','lat' => '33.40379000','lon' => '74.22388000','sc' => 'JK'),
		array('nm' => 'Ramnagar','lat' => '32.80728000','lon' => '75.31119000','sc' => 'JK'),
		array('nm' => 'Samba','lat' => '32.57523000','lon' => '75.10929000','sc' => 'JK'),
		array('nm' => 'Shupiyan','lat' => '33.73067000','lon' => '74.81869000','sc' => 'JK'),
		array('nm' => 'Sopur','lat' => '34.28671000','lon' => '74.47228000','sc' => 'JK'),
		array('nm' => 'Soyibug','lat' => '34.07677000','lon' => '74.70570000','sc' => 'JK'),
		array('nm' => 'Srinagar','lat' => '34.08565000','lon' => '74.80555000','sc' => 'JK'),
		array('nm' => 'Sumbal','lat' => '34.23072000','lon' => '74.64720000','sc' => 'JK'),
		array('nm' => 'Thang','lat' => '34.92740000','lon' => '76.79336000','sc' => 'JK'),
		array('nm' => 'Thanna Mandi','lat' => '33.54204000','lon' => '74.38100000','sc' => 'JK'),
		array('nm' => 'Tral','lat' => '33.92708000','lon' => '75.11585000','sc' => 'JK'),
		array('nm' => 'Tsrar Sharif','lat' => '33.86319000','lon' => '74.76524000','sc' => 'JK'),
		array('nm' => 'Udhampur','lat' => '33.00000000','lon' => '75.16667000','sc' => 'JK'),
		array('nm' => 'Uri','lat' => '34.08064000','lon' => '74.05088000','sc' => 'JK')
);
