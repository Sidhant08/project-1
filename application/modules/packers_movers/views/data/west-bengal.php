<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='WB'
$cities = array(
		array('nm' => 'Ahmedpur','lat' => '23.83009000','lon' => '87.68661000','sc' => 'WB'),
		array('nm' => 'Aistala','lat' => '23.18000000','lon' => '88.58000000','sc' => 'WB'),
		array('nm' => 'Aknapur','lat' => '18.38576389','lon' => '77.27225278','sc' => 'WB'),
		array('nm' => 'Alipurduar','lat' => '26.49136000','lon' => '89.52796000','sc' => 'WB'),
		array('nm' => 'Amta','lat' => '22.57333333','lon' => '88.01611111','sc' => 'WB'),
		array('nm' => 'Amtala','lat' => '22.22000000','lon' => '88.17000000','sc' => 'WB'),
		array('nm' => 'Andal','lat' => '23.60000000','lon' => '87.20000000','sc' => 'WB'),
		array('nm' => 'Arambagh','lat' => '22.88000000','lon' => '87.78000000','sc' => 'WB'),
		array('nm' => 'Asansol','lat' => '23.68333333','lon' => '86.96666667','sc' => 'WB'),
		array('nm' => 'Ashoknagar Kalyangarh','lat' => '22.83300000','lon' => '88.63300000','sc' => 'WB'),
		array('nm' => 'Badkulla','lat' => '23.28000000','lon' => '88.53000000','sc' => 'WB'),
		array('nm' => 'Baduria','lat' => '22.74000000','lon' => '88.79000000','sc' => 'WB'),
		array('nm' => 'Bagdogra','lat' => '26.69980400','lon' => '88.31939200','sc' => 'WB'),
		array('nm' => 'Bagnan','lat' => '22.47000000','lon' => '87.97000000','sc' => 'WB'),
		array('nm' => 'Bagula','lat' => '23.33500000','lon' => '88.64400000','sc' => 'WB'),
		array('nm' => 'Bahula','lat' => '23.65741900','lon' => '87.19597400','sc' => 'WB'),
		array('nm' => 'Baidyabati','lat' => '22.79000000','lon' => '88.32000000','sc' => 'WB'),
		array('nm' => 'Bakreswar','lat' => '23.88320000','lon' => '87.37265000','sc' => 'WB'),
		array('nm' => 'Balarampur','lat' => '23.09714000','lon' => '86.22292000','sc' => 'WB'),
		array('nm' => 'Bally','lat' => '22.65000000','lon' => '88.34000000','sc' => 'WB'),
		array('nm' => 'Balurghat','lat' => '25.21666667','lon' => '88.76666667','sc' => 'WB'),
		array('nm' => 'Bamangola','lat' => '25.17000000','lon' => '88.33500000','sc' => 'WB'),
		array('nm' => 'Baneswar','lat' => '26.65000000','lon' => '89.81666667','sc' => 'WB'),
		array('nm' => 'Bangaon','lat' => '23.07000000','lon' => '88.82000000','sc' => 'WB'),
		array('nm' => 'Bankra','lat' => '22.63000000','lon' => '88.30000000','sc' => 'WB'),
		array('nm' => 'Bankura','lat' => '23.25000000','lon' => '87.06666667','sc' => 'WB'),
		array('nm' => 'Bansberia','lat' => '22.97000000','lon' => '88.40000000','sc' => 'WB'),
		array('nm' => 'Bansihari','lat' => '25.40000000','lon' => '88.41670000','sc' => 'WB'),
		array('nm' => 'Barabazar','lat' => '23.36000000','lon' => '86.65000000','sc' => 'WB'),
		array('nm' => 'Baranagar','lat' => '22.64000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Barasat','lat' => '22.23333333','lon' => '88.45000000','sc' => 'WB'),
		array('nm' => 'Bardhaman','lat' => '23.25000000','lon' => '87.85000000','sc' => 'WB'),
		array('nm' => 'Barjora','lat' => '23.43333333','lon' => '87.28333333','sc' => 'WB'),
		array('nm' => 'Barrackpore','lat' => '22.75000000','lon' => '88.36666667','sc' => 'WB'),
		array('nm' => 'Baruipur','lat' => '22.35000000','lon' => '88.44000000','sc' => 'WB'),
		array('nm' => 'Basanti','lat' => '22.18915340','lon' => '88.67056850','sc' => 'WB'),
		array('nm' => 'Basirhat','lat' => '22.65722222','lon' => '88.89416667','sc' => 'WB'),
		array('nm' => 'Begampur','lat' => '22.74000000','lon' => '88.24000000','sc' => 'WB'),
		array('nm' => 'Belda','lat' => '22.08000000','lon' => '87.35000000','sc' => 'WB'),
		array('nm' => 'Beldanga','lat' => '23.93000000','lon' => '88.25000000','sc' => 'WB'),
		array('nm' => 'Beliatore','lat' => '23.33333333','lon' => '87.21666667','sc' => 'WB'),
		array('nm' => 'Berhampore','lat' => '24.10000000','lon' => '88.25000000','sc' => 'WB'),
		array('nm' => 'Bhadreswar','lat' => '22.82000000','lon' => '88.35000000','sc' => 'WB'),
		array('nm' => 'Bhandardaha','lat' => '22.62000000','lon' => '88.21000000','sc' => 'WB'),
		array('nm' => 'Bhatpara','lat' => '22.86666667','lon' => '88.41666667','sc' => 'WB'),
		array('nm' => 'Birbhum','lat' => '24.00000000','lon' => '87.58333000','sc' => 'WB'),
		array('nm' => 'Birpara','lat' => '26.50000000','lon' => '89.50000000','sc' => 'WB'),
		array('nm' => 'Bishnupur','lat' => '22.38000000','lon' => '88.27000000','sc' => 'WB'),
		array('nm' => 'Bolpur','lat' => '23.67000000','lon' => '87.72000000','sc' => 'WB'),
		array('nm' => 'Budge Budge','lat' => '22.47000000','lon' => '88.17000000','sc' => 'WB'),
		array('nm' => 'Bali Chak','lat' => '22.36482000','lon' => '87.55304000','sc' => 'WB'),
		array('nm' => 'Bawali','lat' => '22.42563000','lon' => '88.19336000','sc' => 'WB'),
		array('nm' => 'Canning','lat' => '22.32000000','lon' => '88.67000000','sc' => 'WB'),
		array('nm' => 'Chakapara','lat' => '22.63000000','lon' => '88.35000000','sc' => 'WB'),
		array('nm' => 'Chakdaha','lat' => '23.08000000','lon' => '88.52000000','sc' => 'WB'),
		array('nm' => 'Champadanga','lat' => '22.83000000','lon' => '87.96000000','sc' => 'WB'),
		array('nm' => 'Champdani','lat' => '22.80000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Chandannagar','lat' => '22.86666667','lon' => '88.38333333','sc' => 'WB'),
		array('nm' => 'Chandrakona','lat' => '22.73000000','lon' => '87.52000000','sc' => 'WB'),
		array('nm' => 'Chittaranjan','lat' => '23.87000000','lon' => '86.87000000','sc' => 'WB'),
		array('nm' => 'Churulia','lat' => '23.78000000','lon' => '87.08000000','sc' => 'WB'),
		array('nm' => 'Champahati','lat' => '22.40026000','lon' => '88.49209000','sc' => 'WB'),
		array('nm' => 'Contai','lat' => '21.78000000','lon' => '87.75000000','sc' => 'WB'),
		array('nm' => 'Cooch Behar','lat' => '26.31666667','lon' => '89.43333333','sc' => 'WB'),
		array('nm' => 'Cossimbazar','lat' => '24.12000000','lon' => '88.28000000','sc' => 'WB'),
		array('nm' => 'Dakshin Dinajpur','lat' => '25.22000000','lon' => '88.76000000','sc' => 'WB'),
		array('nm' => 'Dalkola','lat' => '25.87577000','lon' => '87.84009000','sc' => 'WB'),
		array('nm' => 'Dum Dum','lat' => '22.63333333','lon' => '88.42277778','sc' => 'WB'),
		array('nm' => 'Darjeeling','lat' => '27.04166667','lon' => '88.26305556','sc' => 'WB'),
		array('nm' => 'Daulatpur','lat' => '25.32605000','lon' => '88.32989000','sc' => 'WB'),
		array('nm' => 'Debagram','lat' => '23.68333333','lon' => '88.28333333','sc' => 'WB'),
		array('nm' => 'Debipur','lat' => '24.25029000','lon' => '88.61824000','sc' => 'WB'),
		array('nm' => 'Dhaniakhali','lat' => '22.97000000','lon' => '88.10000000','sc' => 'WB'),
		array('nm' => 'Dhulagari','lat' => '22.58222222','lon' => '88.17111111','sc' => 'WB'),
		array('nm' => 'Dhulian','lat' => '24.68000000','lon' => '87.97000000','sc' => 'WB'),
		array('nm' => 'Dhupguri','lat' => '26.60000000','lon' => '89.02000000','sc' => 'WB'),
		array('nm' => 'Diamond Harbour','lat' => '22.20000000','lon' => '88.20000000','sc' => 'WB'),
		array('nm' => 'Digha','lat' => '21.68000000','lon' => '87.55000000','sc' => 'WB'),
		array('nm' => 'Dinhata','lat' => '26.13000000','lon' => '89.47000000','sc' => 'WB'),
		array('nm' => 'Domjur','lat' => '22.64000000','lon' => '88.22000000','sc' => 'WB'),
		array('nm' => 'Dubrajpur','lat' => '23.80000000','lon' => '87.38000000','sc' => 'WB'),
		array('nm' => 'Durgapur','lat' => '23.55000000','lon' => '87.32000000','sc' => 'WB'),
		array('nm' => 'Egra','lat' => '21.90000000','lon' => '87.53000000','sc' => 'WB'),
		array('nm' => 'Falakata','lat' => '26.53000000','lon' => '89.20000000','sc' => 'WB'),
		array('nm' => 'Farakka','lat' => '24.81667000','lon' => '87.90000000','sc' => 'WB'),
		array('nm' => 'Fort Gloster','lat' => '22.50444444','lon' => '88.18333333','sc' => 'WB'),
		array('nm' => 'Gaighata','lat' => '22.93000000','lon' => '88.73000000','sc' => 'WB'),
		array('nm' => 'Gairkata','lat' => '26.68000000','lon' => '89.03000000','sc' => 'WB'),
		array('nm' => 'Gangadharpur','lat' => '22.76040000','lon' => '88.22180000','sc' => 'WB'),
		array('nm' => 'Gangarampur','lat' => '25.40000000','lon' => '88.52000000','sc' => 'WB'),
		array('nm' => 'Garui','lat' => '22.63333333','lon' => '88.40000000','sc' => 'WB'),
		array('nm' => 'Garulia','lat' => '22.82000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Ghatal','lat' => '22.67000000','lon' => '87.72000000','sc' => 'WB'),
		array('nm' => 'Giria','lat' => '24.51666667','lon' => '88.06666667','sc' => 'WB'),
		array('nm' => 'Gobardanga','lat' => '22.87000000','lon' => '88.76000000','sc' => 'WB'),
		array('nm' => 'Gobindapur','lat' => '22.59306000','lon' => '88.09139000','sc' => 'WB'),
		array('nm' => 'Gopinathpur','lat' => '23.22000000','lon' => '88.15000000','sc' => 'WB'),
		array('nm' => 'Gopalpur','lat' => '22.61845000','lon' => '88.75119000','sc' => 'WB'),
		array('nm' => 'Gorubathan','lat' => '26.97000000','lon' => '88.70000000','sc' => 'WB'),
		array('nm' => 'Gosaba','lat' => '22.16000000','lon' => '88.80000000','sc' => 'WB'),
		array('nm' => 'Gosanimari','lat' => '26.15000000','lon' => '89.36666667','sc' => 'WB'),
		array('nm' => 'Gurdaha','lat' => '22.73472222','lon' => '88.75944444','sc' => 'WB'),
		array('nm' => 'Guskhara','lat' => '23.49277778','lon' => '87.73472222','sc' => 'WB'),
		array('nm' => 'Habra','lat' => '22.83000000','lon' => '88.63000000','sc' => 'WB'),
		array('nm' => 'Haldia','lat' => '22.06046000','lon' => '88.10975000','sc' => 'WB'),
		array('nm' => 'Haldibari','lat' => '26.33000000','lon' => '88.77000000','sc' => 'WB'),
		array('nm' => 'Halisahar','lat' => '22.95000000','lon' => '88.42000000','sc' => 'WB'),
		array('nm' => 'Harindanga','lat' => '22.03333333','lon' => '88.31666667','sc' => 'WB'),
		array('nm' => 'Haringhata','lat' => '22.95000000','lon' => '88.57000000','sc' => 'WB'),
		array('nm' => 'Haripur','lat' => '22.93611000','lon' => '88.23194000','sc' => 'WB'),
		array('nm' => 'Hasimara','lat' => '26.75000000','lon' => '89.35000000','sc' => 'WB'),
		array('nm' => 'Hindusthan Cables Town','lat' => '23.82000000','lon' => '86.90000000','sc' => 'WB'),
		array('nm' => 'Hooghly','lat' => '22.91000000','lon' => '88.39000000','sc' => 'WB'),
		array('nm' => 'Howrah','lat' => '22.57688000','lon' => '88.31857000','sc' => 'WB'),
		array('nm' => 'Ichapur','lat' => '22.80499000','lon' => '88.37088000','sc' => 'WB'),
		array('nm' => 'Indpur','lat' => '23.16670000','lon' => '86.93330000','sc' => 'WB'),
		array('nm' => 'Ingraj Bazar','lat' => '25.00447000','lon' => '88.14573000','sc' => 'WB'),
		array('nm' => 'Islampur','lat' => '26.27000000','lon' => '88.20000000','sc' => 'WB'),
		array('nm' => 'Jafarpur','lat' => '22.32000000','lon' => '88.23000000','sc' => 'WB'),
		array('nm' => 'Jaigaon','lat' => '26.86666667','lon' => '89.38333333','sc' => 'WB'),
		array('nm' => 'Jalpaiguri','lat' => '26.51666667','lon' => '88.73333333','sc' => 'WB'),
		array('nm' => 'Jamuria','lat' => '23.70000000','lon' => '87.08000000','sc' => 'WB'),
		array('nm' => 'Jangipur','lat' => '24.47001000','lon' => '88.07659000','sc' => 'WB'),
		array('nm' => 'Jaynagar Majilpur','lat' => '22.17722222','lon' => '88.42583333','sc' => 'WB'),
		array('nm' => 'Jejur','lat' => '22.88000000','lon' => '88.12000000','sc' => 'WB'),
		array('nm' => 'Jhalida','lat' => '23.36541000','lon' => '85.97581000','sc' => 'WB'),
		array('nm' => 'Jhargram','lat' => '22.45000000','lon' => '86.98000000','sc' => 'WB'),
		array('nm' => 'Jhilimili','lat' => '22.81670000','lon' => '86.61670000','sc' => 'WB'),
		array('nm' => 'Kakdwip','lat' => '21.88330000','lon' => '88.18330000','sc' => 'WB'),
		array('nm' => 'Kalaikunda','lat' => '22.33916667','lon' => '87.22638889','sc' => 'WB'),
		array('nm' => 'Kaliaganj','lat' => '25.63000000','lon' => '88.32000000','sc' => 'WB'),
		array('nm' => 'Kalimpong','lat' => '27.07059000','lon' => '88.47529000','sc' => 'WB'),
		array('nm' => 'Kalna','lat' => '23.22000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Kalyani','lat' => '22.97500000','lon' => '88.43444444','sc' => 'WB'),
		array('nm' => 'Kamarhati','lat' => '22.67000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Kamarpukur','lat' => '22.91000000','lon' => '87.65000000','sc' => 'WB'),
		array('nm' => 'Kanchrapara','lat' => '22.97000000','lon' => '88.43000000','sc' => 'WB'),
		array('nm' => 'Kandi','lat' => '23.95000000','lon' => '88.03000000','sc' => 'WB'),
		array('nm' => 'Karimpur','lat' => '23.96666667','lon' => '88.61666667','sc' => 'WB'),
		array('nm' => 'Katwa','lat' => '23.65000000','lon' => '88.13000000','sc' => 'WB'),
		array('nm' => 'Kenda','lat' => '23.20000000','lon' => '86.53000000','sc' => 'WB'),
		array('nm' => 'Keshabpur','lat' => '22.97000000','lon' => '88.26000000','sc' => 'WB'),
		array('nm' => 'Kharagpur','lat' => '22.33023900','lon' => '87.32365300','sc' => 'WB'),
		array('nm' => 'Kharar','lat' => '22.70000000','lon' => '87.68000000','sc' => 'WB'),
		array('nm' => 'Kharba','lat' => '25.42000000','lon' => '88.07000000','sc' => 'WB'),
		array('nm' => 'Khardaha','lat' => '22.72000000','lon' => '88.38000000','sc' => 'WB'),
		array('nm' => 'Khatra','lat' => '22.98000000','lon' => '86.85000000','sc' => 'WB'),
		array('nm' => 'Kirnahar','lat' => '23.75000000','lon' => '87.87000000','sc' => 'WB'),
		array('nm' => 'Kolkata','lat' => '22.54111111','lon' => '88.33777778','sc' => 'WB'),
		array('nm' => 'Konnagar','lat' => '22.70000000','lon' => '88.35000000','sc' => 'WB'),
		array('nm' => 'Krishna Nagar','lat' => '23.40000000','lon' => '88.50000000','sc' => 'WB'),
		array('nm' => 'Krishnapur','lat' => '22.67000000','lon' => '88.26000000','sc' => 'WB'),
		array('nm' => 'Kshirpai','lat' => '22.71096640','lon' => '87.61740380','sc' => 'WB'),
		array('nm' => 'Kulpi','lat' => '22.08000000','lon' => '88.24000000','sc' => 'WB'),
		array('nm' => 'Kultali','lat' => '21.90000000','lon' => '88.40000000','sc' => 'WB'),
		array('nm' => 'Kulti','lat' => '23.73000000','lon' => '86.85000000','sc' => 'WB'),
		array('nm' => 'Kurseong','lat' => '26.88000000','lon' => '88.28000000','sc' => 'WB'),
		array('nm' => 'Lalgarh','lat' => '22.58000000','lon' => '87.05000000','sc' => 'WB'),
		array('nm' => 'Lalgola','lat' => '24.42000000','lon' => '88.25000000','sc' => 'WB'),
		array('nm' => 'Loyabad','lat' => '23.67000000','lon' => '86.67000000','sc' => 'WB'),
		array('nm' => 'Madanpur','lat' => '23.02000000','lon' => '88.48000000','sc' => 'WB'),
		array('nm' => 'Madhyamgram','lat' => '22.70000000','lon' => '88.45000000','sc' => 'WB'),
		array('nm' => 'Mahiari','lat' => '22.59000000','lon' => '88.24000000','sc' => 'WB'),
		array('nm' => 'Mahishadal','lat' => '22.18333300','lon' => '87.98333300','sc' => 'WB'),
		array('nm' => 'Mainaguri','lat' => '26.57000000','lon' => '88.82000000','sc' => 'WB'),
		array('nm' => 'Manikpara','lat' => '22.36666667','lon' => '87.11666667','sc' => 'WB'),
		array('nm' => 'Masila','lat' => '22.58083000','lon' => '88.23278000','sc' => 'WB'),
		array('nm' => 'Mathabhanga','lat' => '26.34197000','lon' => '89.21555000','sc' => 'WB'),
		array('nm' => 'Matiali','lat' => '26.92715900','lon' => '88.81330490','sc' => 'WB'),
		array('nm' => 'Matigara','lat' => '26.71666700','lon' => '88.38333300','sc' => 'WB'),
		array('nm' => 'Medinipur','lat' => '22.43333333','lon' => '87.33333333','sc' => 'WB'),
		array('nm' => 'Mejia','lat' => '23.57000000','lon' => '87.10000000','sc' => 'WB'),
		array('nm' => 'Memari','lat' => '23.20000000','lon' => '88.12000000','sc' => 'WB'),
		array('nm' => 'Mirik','lat' => '26.88700000','lon' => '88.18700000','sc' => 'WB'),
		array('nm' => 'Mohanpur','lat' => '21.83856000','lon' => '87.43145000','sc' => 'WB'),
		array('nm' => 'Monoharpur','lat' => '22.68000000','lon' => '88.30000000','sc' => 'WB'),
		array('nm' => 'Muragacha','lat' => '23.53631000','lon' => '88.39425000','sc' => 'WB'),
		array('nm' => 'Muri','lat' => '23.37000000','lon' => '85.86000000','sc' => 'WB'),
		array('nm' => 'Murshidabad','lat' => '24.18000000','lon' => '88.27000000','sc' => 'WB'),
		array('nm' => 'Nabadwip','lat' => '23.40722222','lon' => '88.37777778','sc' => 'WB'),
		array('nm' => 'Nabagram','lat' => '22.29000000','lon' => '88.51000000','sc' => 'WB'),
		array('nm' => 'Nadia','lat' => '23.40000000','lon' => '88.50000000','sc' => 'WB'),
		array('nm' => 'Nagarukhra','lat' => '22.94099000','lon' => '88.63701000','sc' => 'WB'),
		array('nm' => 'Nagrakata','lat' => '26.90000000','lon' => '88.96670000','sc' => 'WB'),
		array('nm' => 'Naihati','lat' => '22.90000000','lon' => '88.42000000','sc' => 'WB'),
		array('nm' => 'Naksalbari','lat' => '26.68333333','lon' => '88.21666667','sc' => 'WB'),
		array('nm' => 'Nalhati','lat' => '24.30000000','lon' => '87.82000000','sc' => 'WB'),
		array('nm' => 'Nalpur','lat' => '22.53000000','lon' => '88.19000000','sc' => 'WB'),
		array('nm' => 'Namkhana','lat' => '21.70000000','lon' => '88.14000000','sc' => 'WB'),
		array('nm' => 'Nandigram','lat' => '22.01000000','lon' => '87.99000000','sc' => 'WB'),
		array('nm' => 'Nangi','lat' => '22.50833333','lon' => '88.21527778','sc' => 'WB'),
		array('nm' => 'Nayagram','lat' => '22.03190000','lon' => '87.17810000','sc' => 'WB'),
		array('nm' => 'North 24 Parganas','lat' => '22.13000000','lon' => '88.50000000','sc' => 'WB'),
		array('nm' => 'Odlabari','lat' => '26.83638889','lon' => '88.62944444','sc' => 'WB'),
		array('nm' => 'Paikpara','lat' => '24.77121000','lon' => '87.92251000','sc' => 'WB'),
		array('nm' => 'Panagarh','lat' => '23.45000000','lon' => '87.43000000','sc' => 'WB'),
		array('nm' => 'Panchla','lat' => '22.54000000','lon' => '88.14000000','sc' => 'WB'),
		array('nm' => 'Panchmura','lat' => '22.96670000','lon' => '87.16670000','sc' => 'WB'),
		array('nm' => 'Pandua','lat' => '23.08000000','lon' => '88.28000000','sc' => 'WB'),
		array('nm' => 'Panihati','lat' => '22.69000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Panskura','lat' => '22.42000000','lon' => '87.70000000','sc' => 'WB'),
		array('nm' => 'Parbatipur','lat' => '22.66250000','lon' => '88.22222000','sc' => 'WB'),
		array('nm' => 'Paschim Medinipur','lat' => '22.43333333','lon' => '87.33333333','sc' => 'WB'),
		array('nm' => 'Patiram','lat' => '25.31666667','lon' => '88.75000000','sc' => 'WB'),
		array('nm' => 'Patuli','lat' => '23.55000000','lon' => '88.25000000','sc' => 'WB'),
		array('nm' => 'Pujali','lat' => '22.47000000','lon' => '88.15000000','sc' => 'WB'),
		array('nm' => 'Puncha','lat' => '23.12300000','lon' => '86.65300000','sc' => 'WB'),
		array('nm' => 'Purba Medinipur','lat' => '22.30000000','lon' => '87.91666667','sc' => 'WB'),
		array('nm' => 'Purulia','lat' => '23.33333333','lon' => '86.36666667','sc' => 'WB'),
		array('nm' => 'Patrasaer','lat' => '23.19697000','lon' => '87.53319000','sc' => 'WB'),
		array('nm' => 'Raghudebbati','lat' => '22.53000000','lon' => '88.20000000','sc' => 'WB'),
		array('nm' => 'Raghunathpur','lat' => '23.55000000','lon' => '86.67000000','sc' => 'WB'),
		array('nm' => 'Raiganj','lat' => '25.61666667','lon' => '88.11666667','sc' => 'WB'),
		array('nm' => 'Rajmahal','lat' => '25.05000000','lon' => '87.84000000','sc' => 'WB'),
		array('nm' => 'Rajnagar','lat' => '23.94720000','lon' => '87.36250000','sc' => 'WB'),
		array('nm' => 'Ramchandrapur','lat' => '22.90000000','lon' => '88.48000000','sc' => 'WB'),
		array('nm' => 'Ramjibanpur','lat' => '22.83000000','lon' => '87.62000000','sc' => 'WB'),
		array('nm' => 'Rampur Hat','lat' => '24.17737000','lon' => '87.78275000','sc' => 'WB'),
		array('nm' => 'Ranaghat','lat' => '23.18000000','lon' => '88.58000000','sc' => 'WB'),
		array('nm' => 'Raniganj','lat' => '23.62000000','lon' => '87.13000000','sc' => 'WB'),
		array('nm' => 'Raypur','lat' => '22.41083000','lon' => '88.50944000','sc' => 'WB'),
		array('nm' => 'Rishra','lat' => '22.71000000','lon' => '88.35000000','sc' => 'WB'),
		array('nm' => 'Ramnagar','lat' => '22.77778000','lon' => '88.24639000','sc' => 'WB'),
		array('nm' => 'Sahapur','lat' => '22.52000000','lon' => '88.17000000','sc' => 'WB'),
		array('nm' => 'Sainthia','lat' => '23.95000000','lon' => '87.67000000','sc' => 'WB'),
		array('nm' => 'Salanpur','lat' => '23.76702000','lon' => '86.87492000','sc' => 'WB'),
		array('nm' => 'Sankarpur','lat' => '23.60000000','lon' => '87.20000000','sc' => 'WB'),
		array('nm' => 'Sankrail','lat' => '22.57000000','lon' => '88.24000000','sc' => 'WB'),
		array('nm' => 'Santipur','lat' => '23.25000000','lon' => '88.43000000','sc' => 'WB'),
		array('nm' => 'Santoshpur','lat' => '22.50000000','lon' => '88.17000000','sc' => 'WB'),
		array('nm' => 'Santuri','lat' => '23.52720000','lon' => '86.85709000','sc' => 'WB'),
		array('nm' => 'Sarenga','lat' => '22.54000000','lon' => '88.21000000','sc' => 'WB'),
		array('nm' => 'Serampore','lat' => '22.75000000','lon' => '88.34000000','sc' => 'WB'),
		array('nm' => 'Serpur','lat' => '24.13000000','lon' => '88.00000000','sc' => 'WB'),
		array('nm' => 'Shyamnagar','lat' => '22.83000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Siliguri','lat' => '26.71004000','lon' => '88.42851000','sc' => 'WB'),
		array('nm' => 'Singur','lat' => '22.81000000','lon' => '88.23000000','sc' => 'WB'),
		array('nm' => 'Sodpur','lat' => '22.70416667','lon' => '88.39166667','sc' => 'WB'),
		array('nm' => 'Solap','lat' => '22.12777778','lon' => '88.15861111','sc' => 'WB'),
		array('nm' => 'Sonada','lat' => '27.00000000','lon' => '88.14000000','sc' => 'WB'),
		array('nm' => 'Sonamukhi','lat' => '23.30000000','lon' => '87.42000000','sc' => 'WB'),
		array('nm' => 'Sonarpur','lat' => '22.44259000','lon' => '88.43044000','sc' => 'WB'),
		array('nm' => 'South 24 Parganas','lat' => '22.16197000','lon' => '88.43170000','sc' => 'WB'),
		array('nm' => 'Srikhanda','lat' => '23.60000000','lon' => '88.08330000','sc' => 'WB'),
		array('nm' => 'Srirampur','lat' => '23.35000000','lon' => '88.12000000','sc' => 'WB'),
		array('nm' => 'Suri','lat' => '23.91666667','lon' => '87.53333333','sc' => 'WB'),
		array('nm' => 'Swarupnagar','lat' => '22.83330000','lon' => '88.86670000','sc' => 'WB'),
		array('nm' => 'Takdah','lat' => '27.03330000','lon' => '88.36670000','sc' => 'WB'),
		array('nm' => 'Taki','lat' => '22.59000000','lon' => '88.92000000','sc' => 'WB'),
		array('nm' => 'Tamluk','lat' => '22.30000000','lon' => '87.91666667','sc' => 'WB'),
		array('nm' => 'Tarakeswar','lat' => '22.89000000','lon' => '88.02000000','sc' => 'WB'),
		array('nm' => 'Titagarh','lat' => '22.74000000','lon' => '88.37000000','sc' => 'WB'),
		array('nm' => 'Tufanganj','lat' => '26.32000000','lon' => '89.67000000','sc' => 'WB'),
		array('nm' => 'Tulin','lat' => '23.37000000','lon' => '85.90000000','sc' => 'WB'),
		array('nm' => 'Uchalan','lat' => '23.03330000','lon' => '87.78330000','sc' => 'WB'),
		array('nm' => 'Ula','lat' => '22.72250000','lon' => '88.55556000','sc' => 'WB'),
		array('nm' => 'Uluberia','lat' => '22.47000000','lon' => '88.11000000','sc' => 'WB'),
		array('nm' => 'Uttar Dinajpur','lat' => '25.62000000','lon' => '88.12000000','sc' => 'WB'),
		array('nm' => 'Uttarpara Kotrung','lat' => '22.67000000','lon' => '88.35000000','sc' => 'WB'),
		array('nm' => 'Amlagora','lat' => '22.84616000','lon' => '87.33559000','sc' => 'WB')
);