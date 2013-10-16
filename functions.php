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
		'Juniper' => 'http://www.juniper.net',
		'Sungard' => 'http://www.sungard.com'
	);

	$gold = array(
		'Shape Blue' => 'http://www.shapeblue.com/',
		'NetApp' => 'http://www.netapp.com',
		'Cloudsoft' => 'http://www.cloudsoftcorp.com/',
		'Nexenta' => 'http://www.nexenta.com',
		'Ikoula' => 'http://express.ikoula.co.uk/cloudstack',
		'Leaseweb' => 'http://www.leaseweb.com/',
		'SolidFire' => 'http://solidfire.com/'
	);
	$silver = array(
		'Atom 86' => 'http://www.atom86.net/',
		'Apalia' => 'http://www.apalia.net/',
		'Elasticsearch' => 'http://www.elasticsearch.com',
		'2source4' => 'http://www.2source4.nl',
		'iamsterdam' => 'http://www.iamsterdam.com/',
		'cloudbees' => 'http://www.cloudbees.com/'
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

function scheduleColorScheme()
{
	$table = '<table>';
	
	$colors = array(
		'Effectenbeurs' => 'color-one',
		'Veilingzaal' => 'color-two',
		'Grote zaal' => 'color-three',
		'Administratiezaal' => 'color-four',
		'Beursfoyer' => 'color-five',
		'Glazen zaal' => 'color-six',
		'Verweykamer' => 'color-seven',
		'Berlagezaal' => 'color-eight'
	);
	
	foreach($colors as $space => $color)
	{
		$table .= '<tr class="'.$color.'">
			<td>'.$space.'</td>
			</td>
		</tr>';
	}

	$table .= '</table>';
	return $table;
}

function schedule($day)
{
	$json = file_get_contents('http://lanyrd.com/2013/cloudstack-collaboration-conference-europe/schedule/df4ae374310b53f0.v1.json');
	$schedule = json_decode($json);
	$table = '';
	
	switch($day)
	{
		case 'wednesday':
			$session = $schedule->sessions[0]->sessions;
		break;
		case 'thursday':
			$session = $schedule->sessions[1]->sessions;
		break;
		case 'friday':
			$session = $schedule->sessions[2]->sessions;
		break;
	}
	
	$table = '<table class="schedule">
		<tr>
			<th>Time</th>
			<th>Space</th>
			<th>Speaker</th>
		</tr>';
		
		foreach($session as $info)
		{
 	                $titlePlus = '';
	                $speaker = '';
	                $more = '';
	                $abstract = '';
	                $bio = '';
			
			switch($info->space)
			{
				case 'Effectenbeurs':
					$color = ' color-one';
				break;
				case 'Veilingzaal':
					$color = ' color-two';
				break;
				case 'Grote zaal':
					$color = ' color-three';
				break;
				case 'Administratiezaal':
					$color = ' color-four';
				break;
				case 'Beursfoyer':
					$color = ' color-five';
				break;
				case 'Glazen zaal':
					$color = ' color-eight';
				break;
				case 'Verweykamer':
					$color = ' color-seven';
				break;
				case 'Berlagezaal':
					
					$color = ' color-six';
				break;
			}
			
			if(isset($info->speakers[0]->name))
			{
				$titlePlus = '<div class="more-info-click">+</div>';
				$speakers = '';
				$bio = '';
				$abstract = '';
				
				if(count($info->speakers) > 1)
				{
					foreach($info->speakers as $key)
					{
						$speakers .= '<a href="'.$key->web_url.'" target="_blank" title="'.$key->name.'" alt="'.$key->name.'" >'.$key->name.'</a>, ';
						$more .= '<tr><td width="90" height="90">
							<span class="image">
								<a href="'.$key->web_url.'" target="_blank" title="'.$key->name.'" alt="'.$key->name.'" >
									<img src="'.$key->image_75.'" />
								</a>
							</span>
						</td>';
						if(!empty($key->speaker_bio))
						{ 
							
							$bio .= '<span class="bio"><h4>Bio</h4>'.$key->speaker_bio.'</span>';
						}
						else
						{
							$bio = '';
						}
						$more .= '<td><h2 class="speaker">'.$key->name.'</h2>'.$bio.'</td></tr>';
					}
					$speaker = substr($speakers, 0, -2);
				}
				else
				{
					$speaker = '<a href="'.$info->speakers[0]->web_url.'" target="_blank" title="'.$info->speakers[0]->name.'" alt="'.$info->speakers[0]->name.'" >'.$info->speakers[0]->name.'</a>';
					
					if($info->speakers[0]->speaker_bio !== '')
					{ 
						$bio = '<span class="bio"><h4>Bio</h4>'.$info->speakers[0]->speaker_bio.'</span>';
					}
					if($info->abstract !== '')
					{ 
						$abstract = '<span class="abstract"><h4>Abstract</h4>'.$info->abstract.'</span>';
					};
					
					$more = '<tr>
						<td width="90"><span class="image"><a href="'.$info->speakers[0]->web_url.'" target="_blank" title="'.$info->speakers[0]->name.'" alt="'.$info->speakers[0]->name.'" ><img src="'.$info->speakers[0]->image_75.'" /></a></span></td>
						<td>'.$bio.$abstract.'</td>
					</tr>';
				}
				
				$speaker = '<span class="speaker"><h2 class="speaker">By '.$speaker.'</h2></span>';
				$more = '<div class="more-info">
					<table>
						'.$more.'
					</table>
				</div>';
			}
			else
			{
				$speaker = $info->abstract;
				$more = '';
			}

			$table .= '<tr id="'.$info->event_id.'" data-url="'.$info->web_url.'" class="'.$color.'">
				<td class="time">'.$info->times.'</td>
				<td class="room">'.$info->space.'</td>
				<td class="info">
					<span class="title"><h1 class="title">'.$titlePlus.$info->title.'</h1></span>'.$speaker.
					$more.'
				</td>
			</tr>';
		}
	$table .= '</table>';
	return $table;
}

?>
