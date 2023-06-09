<?php 
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='KA'
$cities = array(
		array('nm' => 'Afzalpur','lat' => '17.19986000','lon' => '76.36018000','sc' => 'KA'),
		array('nm' => 'Ajjampur','lat' => '13.72794000','lon' => '76.00680000','sc' => 'KA'),
		array('nm' => 'Aland','lat' => '17.56425000','lon' => '76.56854000','sc' => 'KA'),
		array('nm' => 'Alnavar','lat' => '15.42727000','lon' => '74.74111000','sc' => 'KA'),
		array('nm' => 'Alur','lat' => '12.97805000','lon' => '75.99094000','sc' => 'KA'),
		array('nm' => 'Anekal','lat' => '12.71110000','lon' => '77.69557000','sc' => 'KA'),
		array('nm' => 'Ankola','lat' => '14.66049000','lon' => '74.30470000','sc' => 'KA'),
		array('nm' => 'Annigeri','lat' => '15.42513000','lon' => '75.43350000','sc' => 'KA'),
		array('nm' => 'Arkalgud','lat' => '12.76171000','lon' => '76.06035000','sc' => 'KA'),
		array('nm' => 'Arsikere','lat' => '13.31446000','lon' => '76.25704000','sc' => 'KA'),
		array('nm' => 'Athni','lat' => '16.72613000','lon' => '75.06421000','sc' => 'KA'),
		array('nm' => 'Aurad','lat' => '18.25397000','lon' => '77.41761000','sc' => 'KA'),
		array('nm' => 'Bagalkot','lat' => '16.18000000','lon' => '75.69000000','sc' => 'KA'),
		array('nm' => 'Bail-Hongal','lat' => '15.81370000','lon' => '74.85895000','sc' => 'KA'),
		array('nm' => 'Ballari','lat' => '15.15000000','lon' => '76.55000000','sc' => 'KA'),
		array('nm' => 'Bangalore Rural','lat' => '13.22567000','lon' => '77.57501000','sc' => 'KA'),
		array('nm' => 'Bangalore','lat' => '13.00000000','lon' => '77.58333000','sc' => 'KA'),
		array('nm' => 'Bangarapet','lat' => '12.99116000','lon' => '78.17804000','sc' => 'KA'),
		array('nm' => 'Bannur','lat' => '12.33295000','lon' => '76.86201000','sc' => 'KA'),
		array('nm' => 'Bantval','lat' => '12.89050000','lon' => '75.03489000','sc' => 'KA'),
		array('nm' => 'Basavakalyan','lat' => '17.87445000','lon' => '76.94972000','sc' => 'KA'),
		array('nm' => 'Basavana Bagevadi','lat' => '16.57278000','lon' => '75.97252000','sc' => 'KA'),
		array('nm' => 'Belgaum','lat' => '16.33333000','lon' => '74.75000000','sc' => 'KA'),
		array('nm' => 'Bellary','lat' => '15.14205000','lon' => '76.92398000','sc' => 'KA'),
		array('nm' => 'Belluru','lat' => '12.98140000','lon' => '76.73308000','sc' => 'KA'),
		array('nm' => 'Beltangadi','lat' => '13.98333000','lon' => '75.30000000','sc' => 'KA'),
		array('nm' => 'Belur','lat' => '13.16558000','lon' => '75.86519000','sc' => 'KA'),
		array('nm' => 'Bengaluru','lat' => '12.97194000','lon' => '77.59369000','sc' => 'KA'),
		array('nm' => 'Bhadravati','lat' => '13.84846000','lon' => '75.70502000','sc' => 'KA'),
		array('nm' => 'Bhatkal','lat' => '13.98534000','lon' => '74.55531000','sc' => 'KA'),
		array('nm' => 'Bhalki','lat' => '18.04348000','lon' => '77.20600000','sc' => 'KA'),
		array('nm' => 'Bijapur','lat' => '16.82442000','lon' => '75.71537000','sc' => 'KA'),
		array('nm' => 'Bilgi','lat' => '16.34714000','lon' => '75.61804000','sc' => 'KA'),
		array('nm' => 'Birur','lat' => '13.59723000','lon' => '75.97167000','sc' => 'KA'),
		array('nm' => 'Byndoor','lat' => '13.86667000','lon' => '74.63333000','sc' => 'KA'),
		array('nm' => 'Byadgi','lat' => '14.67325000','lon' => '75.48680000','sc' => 'KA'),
		array('nm' => 'Badami','lat' => '15.91495000','lon' => '75.67683000','sc' => 'KA'),
		array('nm' => 'Bagepalli','lat' => '13.78338000','lon' => '77.79667000','sc' => 'KA'),
		array('nm' => 'Banavar','lat' => '13.41029000','lon' => '76.16314000','sc' => 'KA'),
		array('nm' => 'Bidar','lat' => '18.08333000','lon' => '77.33333000','sc' => 'KA'),
		array('nm' => 'Canacona','lat' => '14.99590000','lon' => '74.05056000','sc' => 'KA'),
		array('nm' => 'Challakere','lat' => '14.31800000','lon' => '76.65165000','sc' => 'KA'),
		array('nm' => 'Chamrajnagar','lat' => '11.96000000','lon' => '77.09000000','sc' => 'KA'),
		array('nm' => 'Channagiri','lat' => '14.02399000','lon' => '75.92577000','sc' => 'KA'),
		array('nm' => 'Channapatna','lat' => '12.65143000','lon' => '77.20672000','sc' => 'KA'),
		array('nm' => 'Channarayapatna','lat' => '12.90642000','lon' => '76.38775000','sc' => 'KA'),
		array('nm' => 'Chik Ballapur','lat' => '13.43512000','lon' => '77.72787000','sc' => 'KA'),
		array('nm' => 'Chikkaballapur','lat' => '13.55000000','lon' => '77.87000000','sc' => 'KA'),
		array('nm' => 'Chikmagalur','lat' => '13.49000000','lon' => '75.73000000','sc' => 'KA'),
		array('nm' => 'Chiknayakanhalli','lat' => '13.41609000','lon' => '76.62063000','sc' => 'KA'),
		array('nm' => 'Chikodi','lat' => '16.42898000','lon' => '74.58591000','sc' => 'KA'),
		array('nm' => 'Chincholi','lat' => '17.46508000','lon' => '77.41874000','sc' => 'KA'),
		array('nm' => 'Chintamani','lat' => '13.40051000','lon' => '78.05172000','sc' => 'KA'),
		array('nm' => 'Chitradurga','lat' => '14.20000000','lon' => '76.50000000','sc' => 'KA'),
		array('nm' => 'Chitapur','lat' => '17.12357000','lon' => '77.08240000','sc' => 'KA'),
		array('nm' => 'Closepet','lat' => '12.72181000','lon' => '77.28149000','sc' => 'KA'),
		array('nm' => 'Coondapoor','lat' => '13.63126000','lon' => '74.69020000','sc' => 'KA'),
		array('nm' => 'Dakshina Kannada','lat' => '12.84000000','lon' => '75.29000000','sc' => 'KA'),
		array('nm' => 'Dandeli','lat' => '15.26667000','lon' => '74.61667000','sc' => 'KA'),
		array('nm' => 'Davanagere','lat' => '14.43000000','lon' => '75.90000000','sc' => 'KA'),
		array('nm' => 'Devanhalli','lat' => '13.24655000','lon' => '77.71183000','sc' => 'KA'),
		array('nm' => 'Dharwad','lat' => '15.37000000','lon' => '75.14000000','sc' => 'KA'),
		array('nm' => 'Dod Ballapur','lat' => '13.29452000','lon' => '77.53777000','sc' => 'KA'),
		array('nm' => 'French Rocks','lat' => '12.50094000','lon' => '76.67416000','sc' => 'KA'),
		array('nm' => 'Gadag','lat' => '15.49835000','lon' => '75.65187000','sc' => 'KA'),
		array('nm' => 'Gadag-Betageri','lat' => '15.41670000','lon' => '75.61670000','sc' => 'KA'),
		array('nm' => 'Gajendragarh','lat' => '15.73628000','lon' => '75.96976000','sc' => 'KA'),
		array('nm' => 'Gangolli','lat' => '13.65024000','lon' => '74.67072000','sc' => 'KA'),
		array('nm' => 'Gangawati','lat' => '15.43130000','lon' => '76.52933000','sc' => 'KA'),
		array('nm' => 'Gokak','lat' => '16.16901000','lon' => '74.82393000','sc' => 'KA'),
		array('nm' => 'Gokarna','lat' => '14.55000000','lon' => '74.31667000','sc' => 'KA'),
		array('nm' => 'Goribidnur','lat' => '13.61072000','lon' => '77.51738000','sc' => 'KA'),
		array('nm' => 'Gorur','lat' => '12.82297000','lon' => '76.06463000','sc' => 'KA'),
		array('nm' => 'Gubbi','lat' => '13.31216000','lon' => '76.94102000','sc' => 'KA'),
		array('nm' => 'Gudibanda','lat' => '13.67099000','lon' => '77.70414000','sc' => 'KA'),
		array('nm' => 'Gulbarga','lat' => '17.16667000','lon' => '77.08333000','sc' => 'KA'),
		array('nm' => 'Guledagudda','lat' => '16.05025000','lon' => '75.78997000','sc' => 'KA'),
		array('nm' => 'Gundlupet','lat' => '11.81004000','lon' => '76.69027000','sc' => 'KA'),
		array('nm' => 'Gurmatkal','lat' => '16.86773000','lon' => '77.39088000','sc' => 'KA'),
		array('nm' => 'Hadagalli','lat' => '15.02048000','lon' => '75.93185000','sc' => 'KA'),
		array('nm' => 'Haliyal','lat' => '15.32864000','lon' => '74.75638000','sc' => 'KA'),
		array('nm' => 'Hampi','lat' => '15.33520000','lon' => '76.46030000','sc' => 'KA'),
		array('nm' => 'Harihar','lat' => '14.51288000','lon' => '75.80716000','sc' => 'KA'),
		array('nm' => 'Harpanahalli','lat' => '14.78766000','lon' => '75.98863000','sc' => 'KA'),
		array('nm' => 'Hassan','lat' => '12.95000000','lon' => '76.08333000','sc' => 'KA'),
		array('nm' => 'Haveri','lat' => '14.73732000','lon' => '75.41062000','sc' => 'KA'),
		array('nm' => 'Heggadadevankote','lat' => '12.08809000','lon' => '76.32957000','sc' => 'KA'),
		array('nm' => 'Hirekerur','lat' => '14.45506000','lon' => '75.39520000','sc' => 'KA'),
		array('nm' => 'Hiriyur','lat' => '13.94455000','lon' => '76.61723000','sc' => 'KA'),
		array('nm' => 'Holalkere','lat' => '14.04295000','lon' => '76.18496000','sc' => 'KA'),
		array('nm' => 'Hole Narsipur','lat' => '12.78635000','lon' => '76.24331000','sc' => 'KA'),
		array('nm' => 'Homnabad','lat' => '17.77074000','lon' => '77.12519000','sc' => 'KA'),
		array('nm' => 'Honnali','lat' => '14.23976000','lon' => '75.64507000','sc' => 'KA'),
		array('nm' => 'Honavar','lat' => '14.28088000','lon' => '74.44497000','sc' => 'KA'),
		array('nm' => 'Hosanagara','lat' => '13.91387000','lon' => '75.06503000','sc' => 'KA'),
		array('nm' => 'Hosangadi','lat' => '13.69756000','lon' => '74.95427000','sc' => 'KA'),
		array('nm' => 'Hosdurga','lat' => '13.79631000','lon' => '76.28408000','sc' => 'KA'),
		array('nm' => 'Hoskote','lat' => '13.07070000','lon' => '77.79814000','sc' => 'KA'),
		array('nm' => 'Hospet','lat' => '15.26954000','lon' => '76.38710000','sc' => 'KA'),
		array('nm' => 'Hubli','lat' => '15.34776000','lon' => '75.13378000','sc' => 'KA'),
		array('nm' => 'Hukeri','lat' => '16.23082000','lon' => '74.60244000','sc' => 'KA'),
		array('nm' => 'Hungund','lat' => '16.06213000','lon' => '76.05860000','sc' => 'KA'),
		array('nm' => 'Hunsur','lat' => '12.30359000','lon' => '76.29275000','sc' => 'KA'),
		array('nm' => 'Hangal','lat' => '14.76465000','lon' => '75.12460000','sc' => 'KA'),
		array('nm' => 'Ilkal','lat' => '15.95923000','lon' => '76.11351000','sc' => 'KA'),
		array('nm' => 'Indi','lat' => '17.17735000','lon' => '75.95260000','sc' => 'KA'),
		array('nm' => 'Jagalur','lat' => '14.51957000','lon' => '76.33915000','sc' => 'KA'),
		array('nm' => 'Jamkhandi','lat' => '16.50461000','lon' => '75.29146000','sc' => 'KA'),
		array('nm' => 'Jevargi','lat' => '17.01394000','lon' => '76.77317000','sc' => 'KA'),
		array('nm' => 'Kadur','lat' => '13.55285000','lon' => '76.01164000','sc' => 'KA'),
		array('nm' => 'Kalghatgi','lat' => '15.18315000','lon' => '74.97099000','sc' => 'KA'),
		array('nm' => 'Kampli','lat' => '15.40626000','lon' => '76.60013000','sc' => 'KA'),
		array('nm' => 'Karwar','lat' => '14.81361000','lon' => '74.12972000','sc' => 'KA'),
		array('nm' => 'Kavalur','lat' => '15.28829000','lon' => '75.94330000','sc' => 'KA'),
		array('nm' => 'Kerur','lat' => '16.01384000','lon' => '75.54631000','sc' => 'KA'),
		array('nm' => 'Khanapur','lat' => '15.63969000','lon' => '74.50847000','sc' => 'KA'),
		array('nm' => 'Kodagu','lat' => '12.41667000','lon' => '75.75000000','sc' => 'KA'),
		array('nm' => 'Kodigenahalli','lat' => '13.72136000','lon' => '77.38629000','sc' => 'KA'),
		array('nm' => 'Kodlipet','lat' => '12.80087000','lon' => '75.88662000','sc' => 'KA'),
		array('nm' => 'Kolar','lat' => '13.13000000','lon' => '78.23000000','sc' => 'KA'),
		array('nm' => 'Kollegal','lat' => '12.15449000','lon' => '77.11051000','sc' => 'KA'),
		array('nm' => 'Konanur','lat' => '12.63016000','lon' => '76.05037000','sc' => 'KA'),
		array('nm' => 'Konnur','lat' => '16.20138000','lon' => '74.74886000','sc' => 'KA'),
		array('nm' => 'Koppa','lat' => '13.53044000','lon' => '75.36329000','sc' => 'KA'),
		array('nm' => 'Koppal','lat' => '15.50000000','lon' => '76.20000000','sc' => 'KA'),
		array('nm' => 'Koratagere','lat' => '13.52200000','lon' => '77.23730000','sc' => 'KA'),
		array('nm' => 'Kotturu','lat' => '14.82442000','lon' => '76.22005000','sc' => 'KA'),
		array('nm' => 'Krishnarajpet','lat' => '12.66621000','lon' => '76.48770000','sc' => 'KA'),
		array('nm' => 'Kudachi','lat' => '16.62784000','lon' => '74.85408000','sc' => 'KA'),
		array('nm' => 'Kumsi','lat' => '14.05455000','lon' => '75.39992000','sc' => 'KA'),
		array('nm' => 'Kumta','lat' => '14.42853000','lon' => '74.41890000','sc' => 'KA'),
		array('nm' => 'Kundgol','lat' => '15.25612000','lon' => '75.24735000','sc' => 'KA'),
		array('nm' => 'Kunigal','lat' => '13.02319000','lon' => '77.02518000','sc' => 'KA'),
		array('nm' => 'Kurgunta','lat' => '17.19321000','lon' => '77.35772000','sc' => 'KA'),
		array('nm' => 'Kushtagi','lat' => '15.75623000','lon' => '76.19112000','sc' => 'KA'),
		array('nm' => 'Kushalnagar','lat' => '12.45795000','lon' => '75.95904000','sc' => 'KA'),
		array('nm' => 'Kankanhalli','lat' => '12.54654000','lon' => '77.42005000','sc' => 'KA'),
		array('nm' => 'Karkala','lat' => '13.21428000','lon' => '74.99234000','sc' => 'KA'),
		array('nm' => 'Kudligi','lat' => '14.90500000','lon' => '76.38527000','sc' => 'KA'),
		array('nm' => 'Lakshmeshwar','lat' => '15.12689000','lon' => '75.46935000','sc' => 'KA'),
		array('nm' => 'Lingsugur','lat' => '16.15876000','lon' => '76.52174000','sc' => 'KA'),
		array('nm' => 'Londa','lat' => '15.46907000','lon' => '74.51906000','sc' => 'KA'),
		array('nm' => 'Maddagiri','lat' => '13.66035000','lon' => '77.21239000','sc' => 'KA'),
		array('nm' => 'Maddur','lat' => '12.58283000','lon' => '77.04294000','sc' => 'KA'),
		array('nm' => 'Madikeri','lat' => '12.42602000','lon' => '75.73820000','sc' => 'KA'),
		array('nm' => 'Mahalingpur','lat' => '16.38880000','lon' => '75.10873000','sc' => 'KA'),
		array('nm' => 'Malavalli','lat' => '12.38556000','lon' => '77.06045000','sc' => 'KA'),
		array('nm' => 'Malpe','lat' => '13.34962000','lon' => '74.70394000','sc' => 'KA'),
		array('nm' => 'Mandya','lat' => '12.52230000','lon' => '76.89746000','sc' => 'KA'),
		array('nm' => 'Mangalore','lat' => '12.91723000','lon' => '74.85603000','sc' => 'KA'),
		array('nm' => 'Manipal','lat' => '13.35000000','lon' => '74.78333000','sc' => 'KA'),
		array('nm' => 'Melukote','lat' => '12.66258000','lon' => '76.64861000','sc' => 'KA'),
		array('nm' => 'Muddebihal','lat' => '16.33782000','lon' => '76.13173000','sc' => 'KA'),
		array('nm' => 'Mudgal','lat' => '16.01191000','lon' => '76.44203000','sc' => 'KA'),
		array('nm' => 'Mudgere','lat' => '13.13353000','lon' => '75.64160000','sc' => 'KA'),
		array('nm' => 'Mudhol','lat' => '16.33354000','lon' => '75.28305000','sc' => 'KA'),
		array('nm' => 'Mulbagal','lat' => '13.16352000','lon' => '78.39346000','sc' => 'KA'),
		array('nm' => 'Mulgund','lat' => '15.28070000','lon' => '75.52132000','sc' => 'KA'),
		array('nm' => 'Mundargi','lat' => '15.20677000','lon' => '75.88390000','sc' => 'KA'),
		array('nm' => 'Mundgod','lat' => '14.97144000','lon' => '75.03658000','sc' => 'KA'),
		array('nm' => 'Munirabad','lat' => '15.30928000','lon' => '76.33830000','sc' => 'KA'),
		array('nm' => 'Murudeshwara','lat' => '14.09430000','lon' => '74.48450000','sc' => 'KA'),
		array('nm' => 'Mysore','lat' => '12.23000000','lon' => '76.42000000','sc' => 'KA'),
		array('nm' => 'Magadi','lat' => '12.95706000','lon' => '77.22374000','sc' => 'KA'),
		array('nm' => 'Malur','lat' => '13.00322000','lon' => '77.93798000','sc' => 'KA'),
		array('nm' => 'Manvi','lat' => '15.99126000','lon' => '77.05034000','sc' => 'KA'),
		array('nm' => 'Mayakonda','lat' => '14.28894000','lon' => '76.08305000','sc' => 'KA'),
		array('nm' => 'Mudbidri','lat' => '13.06653000','lon' => '74.99525000','sc' => 'KA'),
		array('nm' => 'Mulki','lat' => '13.09101000','lon' => '74.79353000','sc' => 'KA'),
		array('nm' => 'Nanjangud','lat' => '12.11764000','lon' => '76.68397000','sc' => 'KA'),
		array('nm' => 'Narasimharajapura','lat' => '13.61075000','lon' => '75.51200000','sc' => 'KA'),
		array('nm' => 'Naregal','lat' => '15.57316000','lon' => '75.80805000','sc' => 'KA'),
		array('nm' => 'Nargund','lat' => '15.72299000','lon' => '75.38666000','sc' => 'KA'),
		array('nm' => 'Navalgund','lat' => '15.55877000','lon' => '75.35305000','sc' => 'KA'),
		array('nm' => 'Nelamangala','lat' => '13.09978000','lon' => '77.39364000','sc' => 'KA'),
		array('nm' => 'Nyamti','lat' => '14.14869000','lon' => '75.57641000','sc' => 'KA'),
		array('nm' => 'Nagamangala','lat' => '12.81939000','lon' => '76.75456000','sc' => 'KA'),
		array('nm' => 'Piriyapatna','lat' => '12.33497000','lon' => '76.10073000','sc' => 'KA'),
		array('nm' => 'Ponnampet','lat' => '12.14473000','lon' => '75.94514000','sc' => 'KA'),
		array('nm' => 'Puttur','lat' => '12.75975000','lon' => '75.20169000','sc' => 'KA'),
		array('nm' => 'Pangala','lat' => '13.25000000','lon' => '74.75000000','sc' => 'KA'),
		array('nm' => 'Pavugada','lat' => '14.09953000','lon' => '77.28018000','sc' => 'KA'),
		array('nm' => 'Rabkavi','lat' => '16.47567000','lon' => '75.11060000','sc' => 'KA'),
		array('nm' => 'Raichur','lat' => '16.16000000','lon' => '76.91000000','sc' => 'KA'),
		array('nm' => 'Ramanagara','lat' => '12.65000000','lon' => '77.35000000','sc' => 'KA'),
		array('nm' => 'Robertsonpet','lat' => '12.95629000','lon' => '78.27539000','sc' => 'KA'),
		array('nm' => 'Ron','lat' => '15.69935000','lon' => '75.73408000','sc' => 'KA'),
		array('nm' => 'Ranibennur','lat' => '14.62239000','lon' => '75.62951000','sc' => 'KA'),
		array('nm' => 'Raybag','lat' => '16.49178000','lon' => '74.77391000','sc' => 'KA'),
		array('nm' => 'Sadalgi','lat' => '16.55870000','lon' => '74.53211000','sc' => 'KA'),
		array('nm' => 'Sakleshpur','lat' => '12.94119000','lon' => '75.78467000','sc' => 'KA'),
		array('nm' => 'Sandur','lat' => '15.08613000','lon' => '76.54692000','sc' => 'KA'),
		array('nm' => 'Sanivarsante','lat' => '12.72824000','lon' => '75.88669000','sc' => 'KA'),
		array('nm' => 'Sankeshwar','lat' => '16.25649000','lon' => '74.48195000','sc' => 'KA'),
		array('nm' => 'Sargur','lat' => '11.99971000','lon' => '76.39611000','sc' => 'KA'),
		array('nm' => 'Saundatti','lat' => '15.76615000','lon' => '75.11778000','sc' => 'KA'),
		array('nm' => 'Savanur','lat' => '14.97335000','lon' => '75.33724000','sc' => 'KA'),
		array('nm' => 'Seram','lat' => '17.17859000','lon' => '77.28998000','sc' => 'KA'),
		array('nm' => 'Shiggaon','lat' => '14.99053000','lon' => '75.22499000','sc' => 'KA'),
		array('nm' => 'Shikarpur','lat' => '14.26980000','lon' => '75.35643000','sc' => 'KA'),
		array('nm' => 'Shimoga','lat' => '14.05000000','lon' => '75.16000000','sc' => 'KA'),
		array('nm' => 'Shirhatti','lat' => '15.23352000','lon' => '75.57996000','sc' => 'KA'),
		array('nm' => 'Shorapur','lat' => '16.52100000','lon' => '76.75738000','sc' => 'KA'),
		array('nm' => 'Shrirangapattana','lat' => '12.42264000','lon' => '76.68439000','sc' => 'KA'),
		array('nm' => 'Shahpur','lat' => '16.69605000','lon' => '76.84220000','sc' => 'KA'),
		array('nm' => 'Shahabad','lat' => '17.13070000','lon' => '76.94361000','sc' => 'KA'),
		array('nm' => 'Siddapur','lat' => '14.34322000','lon' => '74.89400000','sc' => 'KA'),
		array('nm' => 'Sidlaghatta','lat' => '13.38896000','lon' => '77.86444000','sc' => 'KA'),
		array('nm' => 'Sindgi','lat' => '16.91883000','lon' => '76.23368000','sc' => 'KA'),
		array('nm' => 'Sindhnur','lat' => '15.76983000','lon' => '76.75581000','sc' => 'KA'),
		array('nm' => 'Sirsi','lat' => '14.62072000','lon' => '74.83554000','sc' => 'KA'),
		array('nm' => 'Siruguppa','lat' => '15.63000000','lon' => '76.89217000','sc' => 'KA'),
		array('nm' => 'Someshwar','lat' => '13.49112000','lon' => '75.06646000','sc' => 'KA'),
		array('nm' => 'Somvarpet','lat' => '12.59698000','lon' => '75.84957000','sc' => 'KA'),
		array('nm' => 'Sorab','lat' => '14.38144000','lon' => '75.09183000','sc' => 'KA'),
		array('nm' => 'Sringeri','lat' => '13.41698000','lon' => '75.25271000','sc' => 'KA'),
		array('nm' => 'Sravana Belgola','lat' => '12.85737000','lon' => '76.48886000','sc' => 'KA'),
		array('nm' => 'Srinivaspur','lat' => '13.33914000','lon' => '78.21175000','sc' => 'KA'),
		array('nm' => 'Sulya','lat' => '12.56100000','lon' => '75.38741000','sc' => 'KA'),
		array('nm' => 'Suntikoppa','lat' => '12.45594000','lon' => '75.82970000','sc' => 'KA'),
		array('nm' => 'Sagar','lat' => '14.16498000','lon' => '75.02901000','sc' => 'KA'),
		array('nm' => 'Sira','lat' => '13.74155000','lon' => '76.90430000','sc' => 'KA'),
		array('nm' => 'Tarikere','lat' => '13.70954000','lon' => '75.81382000','sc' => 'KA'),
		array('nm' => 'Tekkalakote','lat' => '15.53444000','lon' => '76.87703000','sc' => 'KA'),
		array('nm' => 'Terdal','lat' => '16.49379000','lon' => '75.04667000','sc' => 'KA'),
		array('nm' => 'Tiptur','lat' => '13.25630000','lon' => '76.47768000','sc' => 'KA'),
		array('nm' => 'Tirumakudal Narsipur','lat' => '12.21207000','lon' => '76.90180000','sc' => 'KA'),
		array('nm' => 'Tumkur','lat' => '13.50000000','lon' => '77.00000000','sc' => 'KA'),
		array('nm' => 'Turuvekere','lat' => '13.16374000','lon' => '76.66641000','sc' => 'KA'),
		array('nm' => 'Talikota','lat' => '16.47311000','lon' => '76.31085000','sc' => 'KA'),
		array('nm' => 'Tirthahalli','lat' => '13.68835000','lon' => '75.24548000','sc' => 'KA'),
		array('nm' => 'Udupi','lat' => '13.50000000','lon' => '74.87000000','sc' => 'KA'),
		array('nm' => 'Ullal','lat' => '12.80569000','lon' => '74.86058000','sc' => 'KA'),
		array('nm' => 'Uttar Kannada','lat' => '14.88333000','lon' => '74.58333000','sc' => 'KA'),
		array('nm' => 'Vadigenhalli','lat' => '13.29724000','lon' => '77.80184000','sc' => 'KA'),
		array('nm' => 'Virarajendrapet','lat' => '12.19644000','lon' => '75.80512000','sc' => 'KA'),
		array('nm' => 'Wadi','lat' => '17.05183000','lon' => '76.99048000','sc' => 'KA'),
		array('nm' => 'Yadgir','lat' => '16.73000000','lon' => '76.94000000','sc' => 'KA'),
		array('nm' => 'Yelahanka','lat' => '13.10073000','lon' => '77.59632000','sc' => 'KA'),
		array('nm' => 'Yelandur','lat' => '12.04629000','lon' => '77.03034000','sc' => 'KA'),
		array('nm' => 'Yelbarga','lat' => '15.61545000','lon' => '76.01184000','sc' => 'KA'),
		array('nm' => 'Yellapur','lat' => '14.96370000','lon' => '74.70929000','sc' => 'KA')
);
