<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='CT'
$cities = array(
		array('nm' => 'Akaltara','lat' => '22.02463000','lon' => '82.42641000','sc' => 'CT'),
		array('nm' => 'Ambikapur','lat' => '23.11892000','lon' => '83.19537000','sc' => 'CT'),
		array('nm' => 'Ambagarh Chauki','lat' => '20.77644000','lon' => '80.74608000','sc' => 'CT'),
		array('nm' => 'Arang','lat' => '21.19639000','lon' => '81.96912000','sc' => 'CT'),
		array('nm' => 'Baikunthpur','lat' => '23.26206000','lon' => '82.56051000','sc' => 'CT'),
		array('nm' => 'Balod','lat' => '20.73081000','lon' => '81.20578000','sc' => 'CT'),
		array('nm' => 'Baloda','lat' => '22.13890000','lon' => '82.48171000','sc' => 'CT'),
		array('nm' => 'Baloda Bazar','lat' => '21.65678000','lon' => '82.16062000','sc' => 'CT'),
		array('nm' => 'Basna','lat' => '21.27885000','lon' => '82.82670000','sc' => 'CT'),
		array('nm' => 'Bastar','lat' => '19.26794000','lon' => '81.73828000','sc' => 'CT'),
		array('nm' => 'Bemetara','lat' => '21.71556000','lon' => '81.53423000','sc' => 'CT'),
		array('nm' => 'Bhatgaon','lat' => '21.15000000','lon' => '81.70000000','sc' => 'CT'),
		array('nm' => 'Bhilai','lat' => '21.20919000','lon' => '81.42850000','sc' => 'CT'),
		array('nm' => 'Bhanpuri','lat' => '21.09190000','lon' => '80.93218000','sc' => 'CT'),
		array('nm' => 'Bhatapara','lat' => '21.73500000','lon' => '81.94711000','sc' => 'CT'),
		array('nm' => 'Bijapur','lat' => '18.84322000','lon' => '80.77610000','sc' => 'CT'),
		array('nm' => 'Bilaspur','lat' => '22.38333000','lon' => '82.13333000','sc' => 'CT'),
		array('nm' => 'Chhuikhadan','lat' => '21.52316000','lon' => '80.99788000','sc' => 'CT'),
		array('nm' => 'Champa','lat' => '22.03532000','lon' => '82.64234000','sc' => 'CT'),
		array('nm' => 'Deori','lat' => '21.45000000','lon' => '82.61667000','sc' => 'CT'),
		array('nm' => 'Dhamtari','lat' => '20.70718000','lon' => '81.54874000','sc' => 'CT'),
		array('nm' => 'Dongargaon','lat' => '20.97172000','lon' => '80.85077000','sc' => 'CT'),
		array('nm' => 'Dongargarh','lat' => '21.18893000','lon' => '80.75459000','sc' => 'CT'),
		array('nm' => 'Durg','lat' => '21.15000000','lon' => '81.40000000','sc' => 'CT'),
		array('nm' => 'Gandai','lat' => '21.66667000','lon' => '81.10013000','sc' => 'CT'),
		array('nm' => 'Gariaband','lat' => '20.63323000','lon' => '82.06221000','sc' => 'CT'),
		array('nm' => 'Gaurela','lat' => '22.75449000','lon' => '81.90107000','sc' => 'CT'),
		array('nm' => 'Gharghoda','lat' => '22.17427000','lon' => '83.35170000','sc' => 'CT'),
		array('nm' => 'Gidam','lat' => '18.97431000','lon' => '81.39894000','sc' => 'CT'),
		array('nm' => 'Jagdalpur','lat' => '19.08136000','lon' => '82.02131000','sc' => 'CT'),
		array('nm' => 'Janjgir-Champa','lat' => '21.90000000','lon' => '82.70000000','sc' => 'CT'),
		array('nm' => 'Jashpur','lat' => '22.78495000','lon' => '83.84573000','sc' => 'CT'),
		array('nm' => 'Jashpurnagar','lat' => '22.88783000','lon' => '84.13864000','sc' => 'CT'),
		array('nm' => 'Janjgir','lat' => '22.00922000','lon' => '82.57780000','sc' => 'CT'),
		array('nm' => 'Junagarh','lat' => '19.85993000','lon' => '82.93385000','sc' => 'CT'),
		array('nm' => 'Kabeerdham','lat' => '22.10000000','lon' => '81.20000000','sc' => 'CT'),
		array('nm' => 'Katghora','lat' => '22.50247000','lon' => '82.54279000','sc' => 'CT'),
		array('nm' => 'Kawardha','lat' => '22.00853000','lon' => '81.23148000','sc' => 'CT'),
		array('nm' => 'Khairagarh','lat' => '21.41859000','lon' => '80.97942000','sc' => 'CT'),
		array('nm' => 'Khamharia','lat' => '20.97600000','lon' => '82.25116000','sc' => 'CT'),
		array('nm' => 'Kharod','lat' => '21.74420000','lon' => '82.57880000','sc' => 'CT'),
		array('nm' => 'Kharsia','lat' => '21.98953000','lon' => '83.10476000','sc' => 'CT'),
		array('nm' => 'Kirandul','lat' => '18.63649000','lon' => '81.25827000','sc' => 'CT'),
		array('nm' => 'Kondagaon','lat' => '19.59083000','lon' => '81.66400000','sc' => 'CT'),
		array('nm' => 'Korba','lat' => '22.50000000','lon' => '82.60000000','sc' => 'CT'),
		array('nm' => 'Koriya','lat' => '23.48326000','lon' => '82.15037000','sc' => 'CT'),
		array('nm' => 'Kotaparh','lat' => '19.14256000','lon' => '82.32536000','sc' => 'CT'),
		array('nm' => 'Kota','lat' => '22.29507000','lon' => '82.02366000','sc' => 'CT'),
		array('nm' => 'Kumhari','lat' => '21.26667000','lon' => '81.51667000','sc' => 'CT'),
		array('nm' => 'Kurud','lat' => '20.83073000','lon' => '81.72212000','sc' => 'CT'),
		array('nm' => 'Kanker','lat' => '20.27193000','lon' => '81.49177000','sc' => 'CT'),
		array('nm' => 'Lormi','lat' => '22.27434000','lon' => '81.70181000','sc' => 'CT'),
		array('nm' => 'Mahasamund','lat' => '21.20000000','lon' => '82.50000000','sc' => 'CT'),
		array('nm' => 'Mungeli','lat' => '22.06566000','lon' => '81.68543000','sc' => 'CT'),
		array('nm' => 'Narayanpur','lat' => '19.60426000','lon' => '81.08119000','sc' => 'CT'),
		array('nm' => 'Narharpur','lat' => '20.44892000','lon' => '81.62004000','sc' => 'CT'),
		array('nm' => 'Pandaria','lat' => '22.22495000','lon' => '81.40994000','sc' => 'CT'),
		array('nm' => 'Pasan','lat' => '22.84412000','lon' => '82.19823000','sc' => 'CT'),
		array('nm' => 'Pathalgaon','lat' => '22.55656000','lon' => '83.46355000','sc' => 'CT'),
		array('nm' => 'Pendra','lat' => '22.77548000','lon' => '81.95968000','sc' => 'CT'),
		array('nm' => 'Pithora','lat' => '21.25021000','lon' => '82.51707000','sc' => 'CT'),
		array('nm' => 'Pandatarai','lat' => '22.18714000','lon' => '81.32815000','sc' => 'CT'),
		array('nm' => 'Patan','lat' => '21.03333000','lon' => '81.53333000','sc' => 'CT'),
		array('nm' => 'Raigarh','lat' => '22.08582000','lon' => '83.30603000','sc' => 'CT'),
		array('nm' => 'Raipur','lat' => '21.25621000','lon' => '81.69022000','sc' => 'CT'),
		array('nm' => 'Ratanpur','lat' => '22.28660000','lon' => '82.16823000','sc' => 'CT'),
		array('nm' => 'Raj Nandgaon','lat' => '21.16667000','lon' => '81.00000000','sc' => 'CT'),
		array('nm' => 'Raj-Nandgaon','lat' => '21.09687000','lon' => '81.02890000','sc' => 'CT'),
		array('nm' => 'Ramanuj Ganj','lat' => '23.80637000','lon' => '83.69981000','sc' => 'CT'),
		array('nm' => 'Sakti','lat' => '22.02662000','lon' => '82.96091000','sc' => 'CT'),
		array('nm' => 'Saraipali','lat' => '21.31530000','lon' => '83.00629000','sc' => 'CT'),
		array('nm' => 'Seorinarayan','lat' => '21.72055000','lon' => '82.59344000','sc' => 'CT'),
		array('nm' => 'Simga','lat' => '21.62810000','lon' => '81.70376000','sc' => 'CT'),
		array('nm' => 'Surguja','lat' => '22.89624000','lon' => '83.09631000','sc' => 'CT'),
		array('nm' => 'Sarangarh','lat' => '21.58614000','lon' => '83.07850000','sc' => 'CT'),
		array('nm' => 'Takhatpur','lat' => '22.12915000','lon' => '81.86959000','sc' => 'CT'),
		array('nm' => 'Umarkot','lat' => '19.66529000','lon' => '82.20629000','sc' => 'CT'),
		array('nm' => 'Uttar Bastar Kanker','lat' => '20.20000000','lon' => '81.10000000','sc' => 'CT')
);