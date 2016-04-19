<title><?php 

	/*Ideal layout*/
	if (stripos($_SERVER['REQUEST_URI'], 'about.php') !== false) {echo 'About Us | ';}
	if (stripos($_SERVER['REQUEST_URI'],'auto.php') !== false) {echo 'Auto Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'boat.php') !== false) {echo 'Boat Insurance | ';} 
	if (stripos($_SERVER['REQUEST_URI'],'business.php') !== false) {echo 'Business Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'business-detail.php') !== false) {echo 'Business Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'businessquote.php') !== false) {echo 'Business Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'calculators.php') !== false) {echo 'Calculators | ';}
	if (stripos($_SERVER['REQUEST_URI'],'carriers.php') !== false) {echo 'Carriers | ';}
	if (stripos($_SERVER['REQUEST_URI'],'casualty.php') !== false) {echo 'Casualty Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'claims.php') !== false) {echo 'Claims | ';}
	if (stripos($_SERVER['REQUEST_URI'],'clientservices.php') !== false) {echo 'Client Services | ';}
	if (stripos($_SERVER['REQUEST_URI'],'condo.php') !== false) {echo 'Condo Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'contact.php') !== false) {echo 'Contact Us | ';}
	if (stripos($_SERVER['REQUEST_URI'],'coverage.php') !== false) {echo 'Coverage Area | ';}
	if (stripos($_SERVER['REQUEST_URI'],'flood.php') !== false) {echo 'Flood Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'glossary.php') !== false) {echo 'Glossary | ';}
	if (stripos($_SERVER['REQUEST_URI'],'health.php') !== false) {echo 'Health Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'homeowners.php') !== false) {echo 'Homeowners Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'homequote.php') !== false) {echo 'Homeowners Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo '';}
	if (stripos($_SERVER['REQUEST_URI'],'liability.php') !== false) {echo 'Liability Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'life.php') !== false) {echo 'Life Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'life-detail.php') !== false) {echo 'Life Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'lifequote.php') !== false) {echo 'Life Quote | ';}
	if (stripos($_SERVER['REQUEST_URI'],'links.php') !== false) {echo 'Links | ';}
	if (stripos($_SERVER['REQUEST_URI'],'mobile.php') !== false) {echo 'Mobile Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'motorcycle.php') !== false) {echo 'Motorcycle Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'privacy.php') !== false) {echo 'Privacy Policy | ';}
	if (stripos($_SERVER['REQUEST_URI'],'property.php') !== false) {echo 'Property Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'property-detail.php') !== false) {echo 'Property Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'quote.php') !== false) {echo 'Get a Quote | ';}
	if (stripos($_SERVER['REQUEST_URI'],'resources.php') !== false) {echo 'Resources | ';}
	if (stripos($_SERVER['REQUEST_URI'],'rv.php') !== false) {echo 'RV Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'services.php') !== false) {echo 'Services | ';}
	if (stripos($_SERVER['REQUEST_URI'],'sport-vehicle.php') !== false) {echo 'Sport Vehicle Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'staff.php') !== false) {echo 'Our Staff | ';}
	if (stripos($_SERVER['REQUEST_URI'],'terms.php') !== false) {echo 'Terms and Conditions | ';}
	if (stripos($_SERVER['REQUEST_URI'],'vehicle.php') !== false) {echo 'Vehicle Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'vehicle-detail.php') !== false) {echo 'Vehicle Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'watercraft.php') !== false) {echo 'Watercraft Insurance | ';}
	
	/*Green Hazel pages */
	if (stripos($_SERVER['REQUEST_URI'],'auto-insurance.php') !== false) {echo 'Auto Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'business-insurance.php') !== false) {echo 'Business Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'certificate-request.php') !== false) {echo 'Certificate Request | ';}
	if (stripos($_SERVER['REQUEST_URI'],'commercial-auto.php') !== false) {echo 'Commercial Auto | ';}
	if (stripos($_SERVER['REQUEST_URI'],'commercial-property.php') !== false) {echo 'Commercial Property | ';}
	if (stripos($_SERVER['REQUEST_URI'],'commercial-umbrella.php') !== false) {echo 'Umbrella Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'flood-insurance.php') !== false) {echo 'Flood Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'health-insurance.php') !== false) {echo 'Health Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'homeowners-insurance.php') !== false) {echo 'Homeowners Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'insurance-quote.php') !== false) {echo 'Insurance Quote | ';}
	if (stripos($_SERVER['REQUEST_URI'],'life-insurance.php') !== false) {echo 'Life Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'personal-insurance.php') !== false) {echo 'Personal Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'property-insurance-information.php') !== false) {echo 'Property Insurance Information | ';}
	if (stripos($_SERVER['REQUEST_URI'],'small-business-package.php') !== false) {echo 'Small Business Package | ';}
	if (stripos($_SERVER['REQUEST_URI'],'tenant-dwelling-insurance.php') !== false) {echo 'Tenant Dwelling Insurance | ';}
	if (stripos($_SERVER['REQUEST_URI'],'vehicle-insurance.php') !== false) {echo 'Vehicle Insurance | ';}
	
	
	
	?><?PHP echo $businessName . " | " . $titleTag; ?></title>
