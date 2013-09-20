<?php
$page = substr($_SERVER['REQUEST_URI'], 1);
$page = (!empty($page)) ? $page : 'home';
$menu = array(
'Home',
'Event' => array('Registration'),
'Sponsors',
'Call for papers',
'Contact'
);

function sponsorbar($type, $array)
{
$list = '<div class="sponsorsBox '.strtolower($type).'"><span>'.$type.'</span><ul>';
foreach($array as $brand => $url)
{
$list .= '<li><a href="'.$url.'" title="'.$brand.'" alt="'.$brand.'" target="_blank"><img src="/img/sponsors/'.strtolower(str_replace(' ', '', $brand)).'.png" alt="'.$brand.'" title="'.$brand.'" /></a></li>';
}
$list .= '</ul></div>';
return $list;
}

function sponsorblock($version, $title = null)
{
switch($version)
{
case 'old':
$diamond = array(
'Citrix' => 'http://www.citrix.com/'
);
$platinum = array(
'Schuberg Philis' => 'http://www.schubergphilis.com/',
'SolidFire' => 'http://solidfire.com/',
'Sungard' => 'http://www.sungardas.com/Pages/default.aspx'
);
$gold = array(
'Midokura' => 'http://www.midokura.com/',
'Nuagenetworks' => 'http://www.nuagenetworks.net/',
'CA Technologies' => 'http://www.ca.com/us/default.aspx',
'Scalr' => 'http://www.scalr.com/',
'Vmware' => 'http://www.vmware.com/'
);
$silver = array(
'Shape Blue' => 'http://www.shapeblue.com/',
'StrongAuth' => 'http://www.strongauth.com/',
'Inktank' => 'http://www.inktank.com/',
'Swiftstack' => 'http://www.swiftstack.com/',
'CloudOps' => 'http://www.cloudops.com/',
'Cisco' => 'http://www.cisco.com/'
);
$community = array(
'Apache' => 'http://www.apache.org/'
);
break;
case 'current':
$diamond = array(
'Schuberg Philis' => 'http://www.schubergphilis.com/',
'Citrix' => 'http://www.citrix.com/'
);
$platinum = array(

);
$gold = array(
'Shape Blue' => 'http://www.shapeblue.com/',
'NetApp' => 'http://www.netapp.com',
'Cloudsoft' => 'http://www.cloudsoftcorp.com/',
'Nexenta' => 'http://www.nexenta.com',
'Ikoula' => 'http://express.ikoula.co.uk/'
);
$silver = array(
'Atom 86' => 'http://www.atom86.net/',
'Apalia' => 'http://www.apalia.net/',
'Elasticsearch' => 'http://www.elasticsearch.com'
);
$community = array(
'Apache' => 'http://www.apache.org/'
);
$hackathon = array(
'Exoscale' => 'http://www.exoscale.ch/'
);
break;
}

if($title != null)
{
echo '<br class="clear"/><h1><span>'.$title.'</span></h1>';
}
else
{
echo '<br class="clear"/><h1><span>Sponsors</span></h1>';
}

echo (!empty($diamond)) ? sponsorbar('Diamond', $diamond) : '';
echo (!empty($platinum)) ? sponsorbar('Platinum', $platinum) : '';
echo (!empty($gold)) ? sponsorbar('Gold', $gold) : '';
echo (!empty($silver)) ? sponsorbar('Silver', $silver) : '';
echo (!empty($community)) ? sponsorbar('Community', $community) : '';
echo (!empty($hackathon)) ? sponsorbar('Hackathon', $hackathon) : '';
}
?>
<!doctype html><!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]--><!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]--><!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]--><!--[if gt IE 8]><!-->  <html class="lt-ie no-js" lang="en"> <!--<![endif]--><head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><title>Apache CloudStack Collaboration Conference - 20/21/22 November 2013</title><meta name="keywords" content="CloudStack Collaboration Conference Europe, apache, CloudStack, collaboration, conference, europe, 20, 21, 22, november, 2013" /><meta name="description" content="Cloudstack collaboration conference Europe" /><meta name="author" content="De Graaf & Partners Communications" /><meta name="robots" content="index, follow" /><meta name="viewport" content="width=device-width" /><link rel="shortcut icon" href="/img/favicon.ico" /><link rel="apple-touch-icon" href="/img/appletouch/icon.png" /><link rel="apple-touch-icon" sizes="57x57" href="/img/appletouch/57x57.png" /><link rel="apple-touch-icon" sizes="72x72" href="/img/appletouch/72x72.png" /><link rel="apple-touch-icon" sizes="114x114" href="/img/appletouch/114x114.png" /><!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--><link rel="stylesheet" type="text/css" href="/css/style.min.css" /></head><body><header><div class="container"><img src="/img/apachecloudstack.png" alt="ApacheCloudstack Logo" title="ApacheCloudstack Logo" /><div class="title">CloudStack Collaboration<br/>Conference Europe</div><div class="subtitle">20/21/22 November 2013 <span class="nodisplay">-</span> Beurs van Berlage, <wbr>Amsterdam</div></div><div class="banner nodisplay"><?php if($page === 'home'){ ?><ul class="bxslider"><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/0ABeb-gOksY?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>And this is why<br/>you should be there!</h1><p>20 November 2013: <strong>CloudStack Hack Day</strong><br/>21 November 2013: <strong>Conference Proper Begins</strong><br/>22 November 2013: <strong>Conference Ends</strong></p></div></div></li><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/FndJVdtfZiU?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>A personal invitation to CCC Europe</h1><span class="italic">Chip Childers</span></div></div></li><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/l8s-UhRVdlE?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>A personal invitation to CCC Europe</h1><span class="italic">Kelcey Damage</span></div></div></li></ul><?php }elseif($page === 'sponsors'){ ?><ul class="bxslider"><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/VVvD8E4i20M?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>Why sponsor,<br/>from our sponsors</h1><span class="italic">Giles Sirett</span></div></div></li><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/c7s_jHvztnc?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>Why sponsor,<br/>from our sponsors</h1><span class="italic">Dave Cahill</span></div></div></li><li><div class="container"><div class="eight columns alpha video"><iframe width="398" height="244" src="//www.youtube.com/embed/ivGsLcWX-1E?controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe></div><div class="eight columns omega"><h1>Why sponsor,<br/>from our sponsors</h1><span class="italic">Krishna Subramanian</span></div></div></li></ul><?php }else{ ?><div class="container center"><h1>And this is why<br/>you should be there!</h1><p>20 November 2013: <strong>CloudStack Hack Day</strong><br/>21 November 2013: <strong>Conference Proper Begins</strong><br/>22 November 2013: <strong>Conference Ends</strong></p></div><?php } ?></div><nav><div class="gammarays"><div>Gammarays</div></div><ul class="container"><?php
foreach($menu as $key => $link)
{
if(is_array($link))
{
echo '<li><a href="#" title="'.$key.'" alt="'.$key.'">'.$key.'</a><ul>';
foreach($link as $lnk)
{
$url = strtolower(str_replace( ' ', '-', $lnk));
$active = ($page === $url) ? 'active' : '';
echo '<li><a href="/'.$url.'" title="'.$lnk.'" alt="'.$lnk.'" class="'.$active.'">'.$lnk.'</a></li>';
}
echo '</ul></li>';
}
else
{
$url = strtolower(str_replace( ' ', '-', $link));
$active = ($page === $url) ? 'active' : '';
echo '<li><a href="/'.$url.'" title="'.$link.'" alt="'.$link.'" class="'.$active.'">'.$link.'</a></li>';
}
}
?></ul></nav></header><?php
if($page !== 'registration')
{
echo '<section id="body" class="container">';
if($page === 'home'){ sponsorblock('current'); };
if(is_file('./pages/'.$page.'.phtml'))
{
require_once('./pages/'.$page.'.phtml');
}
else
{
require_once('./pages/404.phtml');
}
if($page === 'sponsors'){ sponsorblock('current', 'Sponsors'); }; 
echo '</section>';
}
elseif($page === 'registration')
{
echo '<section id="body"><div class="container"><h1><span>Registration</span></div></h1><iframe src="http://www.eventbrite.com/event/7944350767?ref=eweb" frameborder="0" height="1750" width="100%" vspace="0" hspace="0" marginheight="0" marginwidth="0" scrolling="auto" allowtransparency="true"></iframe></section>';
}
?><footer><div class="container"><div class="eight columns">Apache, CloudStack, Apache CloudStack, and the Cloud Monkey</br> are trademarks or registered trademarks of the Apache Software Foundation</div><img src="/img/cloudmonkey.png" alt="Monkey!" title="Monkey!" class="cloudmonkey"/><div class="eight columns right">Web design and development by <a href="http://www.degraafenpartners.nl" target="_blank" alt="De Graaf &amp; Partners Communications" title="De Graaf &amp; Partners Communications">De Graaf &amp; Partners Communications</a></br> </div></div></footer><script src="/js/init.js"></script></body></html>
