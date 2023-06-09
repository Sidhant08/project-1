<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='PB'

$cities = array(
		array('nm' => 'Abohar','lat' => '30.14453000','lon' => '74.19552000','sc' => 'PB'),
		array('nm' => 'Adampur','lat' => '31.43224000','lon' => '75.71484000','sc' => 'PB'),
		array('nm' => 'Ajitgarh','lat' => '30.65000000','lon' => '76.70000000','sc' => 'PB'),
		array('nm' => 'Ajnala','lat' => '31.84473000','lon' => '74.76295000','sc' => 'PB'),
		array('nm' => 'Akalgarh','lat' => '29.82074000','lon' => '75.89078000','sc' => 'PB'),
		array('nm' => 'Alawalpur','lat' => '31.43161000','lon' => '75.65614000','sc' => 'PB'),
		array('nm' => 'Amloh','lat' => '30.60837000','lon' => '76.23199000','sc' => 'PB'),
		array('nm' => 'Amritsar','lat' => '31.67000000','lon' => '74.84000000','sc' => 'PB'),
		array('nm' => 'Anandpur Sahib','lat' => '31.23926000','lon' => '76.50253000','sc' => 'PB'),
		array('nm' => 'Badhni Kalan','lat' => '30.68130000','lon' => '75.29087000','sc' => 'PB'),
		array('nm' => 'Bakloh','lat' => '32.47939000','lon' => '75.91874000','sc' => 'PB'),
		array('nm' => 'Banga','lat' => '31.18874000','lon' => '75.99495000','sc' => 'PB'),
		array('nm' => 'Banur','lat' => '30.55407000','lon' => '76.71948000','sc' => 'PB'),
		array('nm' => 'Barnala','lat' => '30.37451000','lon' => '75.54870000','sc' => 'PB'),
		array('nm' => 'Bhatinda','lat' => '30.20747000','lon' => '74.93893000','sc' => 'PB'),
		array('nm' => 'Batala','lat' => '31.80921000','lon' => '75.20294000','sc' => 'PB'),
		array('nm' => 'Begowal','lat' => '31.61152000','lon' => '75.52135000','sc' => 'PB'),
		array('nm' => 'Bhadaur','lat' => '30.47651000','lon' => '75.33049000','sc' => 'PB'),
		array('nm' => 'Bhawanigarh','lat' => '30.26685000','lon' => '76.03854000','sc' => 'PB'),
		array('nm' => 'Bhogpur','lat' => '31.55442000','lon' => '75.64271000','sc' => 'PB'),
		array('nm' => 'Bhikhi','lat' => '30.05918000','lon' => '75.53500000','sc' => 'PB'),
		array('nm' => 'Budhlada','lat' => '29.92799000','lon' => '75.56205000','sc' => 'PB'),
		array('nm' => 'Bagha Purana','lat' => '30.68809000','lon' => '75.09838000','sc' => 'PB'),
		array('nm' => 'Balachor','lat' => '31.06062000','lon' => '76.30166000','sc' => 'PB'),
		array('nm' => 'Chima','lat' => '30.68540000','lon' => '76.08643000','sc' => 'PB'),
		array('nm' => 'Dasuya','lat' => '31.81679000','lon' => '75.65310000','sc' => 'PB'),
		array('nm' => 'Dera Baba Nanak','lat' => '32.03733000','lon' => '75.02787000','sc' => 'PB'),
		array('nm' => 'Dhanaula','lat' => '30.28216000','lon' => '75.57341000','sc' => 'PB'),
		array('nm' => 'Dhilwan','lat' => '31.51432000','lon' => '75.34574000','sc' => 'PB'),
		array('nm' => 'Dhariwal','lat' => '31.95616000','lon' => '75.32386000','sc' => 'PB'),
		array('nm' => 'Dhuri','lat' => '30.36846000','lon' => '75.86791000','sc' => 'PB'),
		array('nm' => 'Dirba','lat' => '30.07222000','lon' => '75.99607000','sc' => 'PB'),
		array('nm' => 'Doraha','lat' => '30.79953000','lon' => '76.02355000','sc' => 'PB'),
		array('nm' => 'Dina Nagar','lat' => '32.13664000','lon' => '75.47291000','sc' => 'PB'),
		array('nm' => 'Faridkot','lat' => '30.67399000','lon' => '74.75579000','sc' => 'PB'),
		array('nm' => 'Fatehgarh Churian','lat' => '31.86431000','lon' => '74.95665000','sc' => 'PB'),
		array('nm' => 'Fatehgarh Sahib','lat' => '30.64379000','lon' => '76.34787000','sc' => 'PB'),
		array('nm' => 'Firozpur','lat' => '30.92574000','lon' => '74.61311000','sc' => 'PB'),
		array('nm' => 'Firozpur District','lat' => '30.89000000','lon' => '74.56000000','sc' => 'PB'),
		array('nm' => 'Fazilka','lat' => '30.40207000','lon' => '74.02836000','sc' => 'PB'),
		array('nm' => 'Gardhiwala','lat' => '31.74147000','lon' => '75.75567000','sc' => 'PB'),
		array('nm' => 'Garhshankar','lat' => '31.21537000','lon' => '76.14149000','sc' => 'PB'),
		array('nm' => 'Ghanaur','lat' => '30.33092000','lon' => '76.61203000','sc' => 'PB'),
		array('nm' => 'Giddarbaha','lat' => '30.19953000','lon' => '74.66627000','sc' => 'PB'),
		array('nm' => 'Gurdaspur','lat' => '31.92000000','lon' => '75.27000000','sc' => 'PB'),
		array('nm' => 'Guru Har Sahai','lat' => '30.70862000','lon' => '74.40407000','sc' => 'PB'),
		array('nm' => 'Hariana','lat' => '31.63512000','lon' => '75.83887000','sc' => 'PB'),
		array('nm' => 'Hoshiarpur','lat' => '31.53723000','lon' => '75.91269000','sc' => 'PB'),
		array('nm' => 'Hajipur','lat' => '31.97714000','lon' => '75.75438000','sc' => 'PB'),
		array('nm' => 'Jagraon','lat' => '30.78783000','lon' => '75.47391000','sc' => 'PB'),
		array('nm' => 'Jaito','lat' => '30.45126000','lon' => '74.89189000','sc' => 'PB'),
		array('nm' => 'Jalandhar','lat' => '31.41667000','lon' => '75.61667000','sc' => 'PB'),
		array('nm' => 'Jalalabad','lat' => '30.60622000','lon' => '74.25727000','sc' => 'PB'),
		array('nm' => 'Jandiala','lat' => '31.15930000','lon' => '75.61755000','sc' => 'PB'),
		array('nm' => 'Jandiala Guru','lat' => '31.56198000','lon' => '75.02770000','sc' => 'PB'),
		array('nm' => 'Kalanaur','lat' => '32.01227000','lon' => '75.15063000','sc' => 'PB'),
		array('nm' => 'Kapurthala','lat' => '31.38011000','lon' => '75.38105000','sc' => 'PB'),
		array('nm' => 'Kartarpur','lat' => '31.44268000','lon' => '75.49847000','sc' => 'PB'),
		array('nm' => 'Khamanon','lat' => '30.81725000','lon' => '76.35478000','sc' => 'PB'),
		array('nm' => 'Khanna','lat' => '30.70547000','lon' => '76.22196000','sc' => 'PB'),
		array('nm' => 'Kharar','lat' => '30.74632000','lon' => '76.64689000','sc' => 'PB'),
		array('nm' => 'Khemkaran','lat' => '31.14443000','lon' => '74.55938000','sc' => 'PB'),
		array('nm' => 'Kot Isa Khan','lat' => '30.94659000','lon' => '75.13780000','sc' => 'PB'),
		array('nm' => 'Kotkapura','lat' => '30.58190000','lon' => '74.83298000','sc' => 'PB'),
		array('nm' => 'Laungowal','lat' => '30.19393000','lon' => '75.68089000','sc' => 'PB'),
		array('nm' => 'Ludhiana','lat' => '30.91204000','lon' => '75.85379000','sc' => 'PB'),
		array('nm' => 'Majitha','lat' => '31.75711000','lon' => '74.95891000','sc' => 'PB'),
		array('nm' => 'Makhu','lat' => '31.10335000','lon' => '74.99631000','sc' => 'PB'),
		array('nm' => 'Malaut','lat' => '30.21121000','lon' => '74.48180000','sc' => 'PB'),
		array('nm' => 'Maur Mandi','lat' => '30.08333000','lon' => '75.25000000','sc' => 'PB'),
		array('nm' => 'Moga','lat' => '30.80376000','lon' => '75.14938000','sc' => 'PB'),
		array('nm' => 'Mohali','lat' => '30.67995000','lon' => '76.72211000','sc' => 'PB'),
		array('nm' => 'Morinda','lat' => '30.79014000','lon' => '76.49883000','sc' => 'PB'),
		array('nm' => 'Mukerian','lat' => '31.95394000','lon' => '75.61716000','sc' => 'PB'),
		array('nm' => 'Sri Muktsar Sahib','lat' => '30.47426000','lon' => '74.51660000','sc' => 'PB'),
		array('nm' => 'Machhiwara','lat' => '30.91557000','lon' => '76.20016000','sc' => 'PB'),
		array('nm' => 'Malerkotla','lat' => '30.53090000','lon' => '75.87949000','sc' => 'PB'),
		array('nm' => 'Mansa','lat' => '29.98844000','lon' => '75.40167000','sc' => 'PB'),
		array('nm' => 'Nakodar','lat' => '31.12586000','lon' => '75.47508000','sc' => 'PB'),
		array('nm' => 'Nangal','lat' => '31.38966000','lon' => '76.37574000','sc' => 'PB'),
		array('nm' => 'Nawanshahr','lat' => '31.12450000','lon' => '76.11613000','sc' => 'PB'),
		array('nm' => 'Nabha','lat' => '30.37577000','lon' => '76.15292000','sc' => 'PB'),
		array('nm' => 'Nurmahal','lat' => '31.09662000','lon' => '75.59386000','sc' => 'PB'),
		array('nm' => 'Nurpur Kalan','lat' => '31.16667000','lon' => '76.48333000','sc' => 'PB'),
		array('nm' => 'Pathankot','lat' => '32.27484000','lon' => '75.65287000','sc' => 'PB'),
		array('nm' => 'Patiala','lat' => '30.33625000','lon' => '76.39220000','sc' => 'PB'),
		array('nm' => 'Patti','lat' => '31.28092000','lon' => '74.85849000','sc' => 'PB'),
		array('nm' => 'Phagwara','lat' => '31.22452000','lon' => '75.77387000','sc' => 'PB'),
		array('nm' => 'Phillaur','lat' => '31.01887000','lon' => '75.79111000','sc' => 'PB'),
		array('nm' => 'Qadian','lat' => '31.82198000','lon' => '75.37663000','sc' => 'PB'),
		array('nm' => 'Rupnagar','lat' => '31.04000000','lon' => '76.52000000','sc' => 'PB'),
		array('nm' => 'Rahon','lat' => '31.05275000','lon' => '76.11907000','sc' => 'PB'),
		array('nm' => 'Raikot','lat' => '30.65000000','lon' => '75.60000000','sc' => 'PB'),
		array('nm' => 'Rajasansi','lat' => '31.72021000','lon' => '74.80080000','sc' => 'PB'),
		array('nm' => 'Rajpura','lat' => '30.47856000','lon' => '76.59284000','sc' => 'PB'),
		array('nm' => 'Ram Das','lat' => '31.96739000','lon' => '74.90870000','sc' => 'PB'),
		array('nm' => 'Rampura','lat' => '30.25600000','lon' => '75.24116000','sc' => 'PB'),
		array('nm' => 'Samrala','lat' => '30.83601000','lon' => '76.19324000','sc' => 'PB'),
		array('nm' => 'Sanaur','lat' => '30.30182000','lon' => '76.45786000','sc' => 'PB'),
		array('nm' => 'Sangrur','lat' => '30.24506000','lon' => '75.84488000','sc' => 'PB'),
		array('nm' => 'Sardulgarh','lat' => '29.69224000','lon' => '75.23608000','sc' => 'PB'),
		array('nm' => 'Shahid Bhagat Singh Nagar','lat' => '31.13183000','lon' => '76.13328000','sc' => 'PB'),
		array('nm' => 'Shahkot','lat' => '31.08173000','lon' => '75.33708000','sc' => 'PB'),
		array('nm' => 'Sham Churasi','lat' => '31.50028000','lon' => '75.74917000','sc' => 'PB'),
		array('nm' => 'Sirhind-Fategarh','lat' => '30.64321000','lon' => '76.38421000','sc' => 'PB'),
		array('nm' => 'Sultanpur Lodhi','lat' => '31.21468000','lon' => '75.19602000','sc' => 'PB'),
		array('nm' => 'Sunam','lat' => '30.12883000','lon' => '75.79943000','sc' => 'PB'),
		array('nm' => 'Talwandi Bhai','lat' => '30.85584000','lon' => '74.92979000','sc' => 'PB'),
		array('nm' => 'Talwara','lat' => '31.93760000','lon' => '75.88657000','sc' => 'PB'),
		array('nm' => 'Tarn Taran Sahib','lat' => '31.45191000','lon' => '74.92777000','sc' => 'PB'),
		array('nm' => 'Zira','lat' => '30.96853000','lon' => '74.99106000','sc' => 'PB'),
		array('nm' => 'Bholath','lat' => '31.54277778','lon' => '75.50750000','sc' => 'PB'),
		array('nm' => 'Dhudi','lat' => '30.69636000','lon' => '74.85246000','sc' => 'PB'),
		array('nm' => 'Dera Bassi','lat' => '30.58720000','lon' => '76.84280000','sc' => 'PB'),
		array('nm' => 'Ishanpur','lat' => '30.63929000','lon' => '76.11761000','sc' => 'PB')
);