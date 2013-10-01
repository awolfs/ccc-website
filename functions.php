<?php
function sponsorbar($type, $array)
{
	$list = '<div class="spns-box '.strtolower($type).'"><div>'.$type.'</div><ul>';
	foreach($array as $brand => $url)
	{
		$list .= '<li><a href="'.$url.'" title="'.$brand.'" alt="'.$brand.'" target="_blank"><img src="/images/sponsors/'.strtolower(str_replace(' ', '', $brand)).'.png" alt="'.$brand.'" title="'.$brand.'" /></a></li>';
	}
	$list .= '</ul></div>';
	return $list;
}

function sponsorblock($title = null)
{
	$diamond = array(
		'Schuberg Philis' => 'http://www.schubergphilis.com/',
		'Citrix' => 'http://www.citrix.com/'
	);
	$platinum = array(
		'Juniper' => 'http://www.juniper.net'
	);

	$gold = array(
		'Shape Blue' => 'http://www.shapeblue.com/',
		'NetApp' => 'http://www.netapp.com',
		'Cloudsoft' => 'http://www.cloudsoftcorp.com/',
		'Nexenta' => 'http://www.nexenta.com',
		'Ikoula' => 'http://express.ikoula.co.uk/cloudstack',
		'Leaseweb' => 'http://www.leaseweb.com/'
	);
	$silver = array(
		'Atom 86' => 'http://www.atom86.net/',
		'Apalia' => 'http://www.apalia.net/',
		'Elasticsearch' => 'http://www.elasticsearch.com'
	);
	$hackathon = array(
		'Exoscale' => 'http://www.exoscale.ch/'
	);
	$community = array(
		'Apache' => 'http://www.apache.org/'
	);
	
	if($title != null)
	{
		echo '<h1><span>'.$title.'</span></h1>';
	}
	else
	{
		echo '<h1><span>Sponsors</span></h1>';
	}
	
	$d = (!empty($diamond)) ? sponsorbar('Diamond', $diamond) : '';
	$p = (!empty($platinum)) ? sponsorbar('Platinum', $platinum) : '';
	$g = (!empty($gold)) ? sponsorbar('Gold', $gold) : '';
	$s = (!empty($silver)) ? sponsorbar('Silver', $silver) : '';
	$h = (!empty($hackathon)) ? sponsorbar('Hackathon', $hackathon) : '';
	$c = (!empty($community)) ? sponsorbar('Community', $community) : '';
	
	echo $d.$p.$g.$s.$h.$c;
}
?>
