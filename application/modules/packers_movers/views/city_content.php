<?php
$htmlcontent='';
if(strtolower($city)=="patna"){
	$htmlcontent="<p>Patna is the capital city of Bihar state. Patna is the largest town and headquarters of Patna district, Patna division and Bihar state. The Directorate of Economics and Statistics (Government of Bihar), Nominal GDP of Patna District was estimated to be INR 63,176.55 crores in 2011-12. Is Patna good city to live?
In the 2019 index, Patna had scored a dismal 109 out of 111 cities surveyed on livability parameters. Patna scored 53.26 out of 100 in overall ease of living, 47.02 in terms of quality of life, 49.32 in sustainability, 24.61 in economic ability and 77.50 in citizen perception survey (CPS)</p>
<p>Patna is also famous for litti chokha, a roasted salted wheat-flour cake filled with sattu (baked chickpea flour) and some special spices, which is served with baigan bharta chatni, made of roasted chili, eggplant (brinjal) and tomatoes.</p>
";
}elseif(strtolower($city)=="noida"){
	$htmlcontent="<p>Noida, is a planned city of the Indian state of Uttar Pradesh, located in Gautam Buddh Nagar district. It is a satellite city of Delhi and is a part of the National Capital Region <b>NCR</b> of India. The population of Noida was <b>642,381</b> as per provisional reports of Census of India 2011. The city is managed by New Okhla Industrial Development Authority (NOIDA). The district's administrative headquarters are in the nearby city of <a href='https://ompackersindia.com/greater-noida-packers-movers-uttar-pradesh'><b>Greater Noida</b></a>.</p>";
}elseif(strtolower($city)=="indore"){
	
}
elseif(strtolower($city)=="bhubaneswar"){
	$htmlcontent="<p>Bhubaneswar is an ancient city in India's eastern state of Odisha, formerly <b>Orissa</b>. It the the capital city of Odisha and also the largest city of the state. Bhubaneswar replaced Cuttack as the capital on 19 August 1949, 2 years after India gained its independence from British Government. The modern city was designed by the German architect Otto Konigsberger in 1946. Along with Jamshedpur and <a href='https://ompackersindia.com/chandigarh-packers-movers-punjab'>Chandigarh</a>, it was one of modern India's first planned cities. Bhubaneswar and <a href='https://ompackersindia.com/cuttack-packers-movers-odisha'><b>Cuttack</b></a> are often referred to as the 'twin cities of Odisha'. Many temples built from sandstone are dotted around Bindu Sagar Lake in the old city, including the 11th-century Hindu Lingaraja Temple.</p>";
}
elseif(strtolower($city)=="ranchi"){
	$htmlcontent="<p>Ranchi is the capital city of the Indian state of Jharkhand. Ranchi was the centre of the Jharkhand movement, which called for a separate state for the tribal regions of South Bihar, northern Odisha, western West Bengal and the eastern area of what is present-day Chhattisgarh.</p>";
}
elseif(strtolower($city)=="greater noida"){
	$htmlcontent="<p>Greater Noida is a planned city located in Gautam Budh Nagar district of Uttar Pradesh. The city was created as an extension to <a href='https://ompackersindia.com/noida-packers-movers-uttar-pradesh'>Noida</a> area under the UP Industrial Area Development Act, 1976. Situated 30km south-east of the capital city of New Delhi, it takes around 30 minutes to travel between the cities via the Noida-Greater Noida Expressway.</p>";
}
elseif(strtolower($city)=="indore"){
	$htmlcontent="<p>Indore is a city in west-central India. It's known for the 7-story Rajwada Palace and the Lal Baag Palace, which date back to Indore's 19th-century Holkar dynasty. The Holkar rulers are honored by a cluster of tombs and cenotaphs at Chhatri Baag. The night market Sarafa Bazar sells street food. Indore is situated on the Malwa plateau at an altitude of 553 m above sea level, on the banks of two small rivulets – the Saraswati and the Khan</p>";
}
elseif(strtolower($city)=="ghaziabad"){
	$htmlcontent="<p>Ghaziabad is a city in the Indian state of Uttar Pradesh and a part of the NCR. It is the administrative headquarters of Ghaziabad district and is the largest city in western Uttar Pradesh, with a population of 1,729,000.</p>";
}
elseif(strtolower($city)==""){
	$htmlcontent="<p></p>";
}
echo $htmlcontent;