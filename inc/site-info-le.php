<?php
//JP Domain
function jpDomainFunc()
{
	$jpDomain = '';
	if (isset($_SERVER['HTTPS'])) {
		$jpDomain .= 'https://';
	} else {
		$jpDomain .= 'http://';
	}
	$jpDomain .= 'hakuryuko-resort.uenoki.com';
	return $jpDomain;
}
$siteJPDomain = jpDomainFunc();

//EN Domain
function enDomainFunc()
{
	$enDomain = '';
	if (isset($_SERVER['HTTPS'])) {
		$enDomain .= 'https://';
	} else {
		$enDomain .= 'http://';
	}
	$enDomain .= 'hakuryuko-resort.uenoki.com/en';
	return $enDomain;
}
$siteENDomain = enDomainFunc();

//SC Domain
function scDomainFunc()
{
	$enDomain = '';
	if (isset($_SERVER['HTTPS'])) {
		$enDomain .= 'https://';
	} else {
		$enDomain .= 'http://';
	}
	$enDomain .= 'hakuryuko-resort.uenoki.com/zh-cn';
	return $enDomain;
}
$siteSCDomain = scDomainFunc();

//TC Domain
function tcDomainFunc()
{
	$enDomain = '';
	if (isset($_SERVER['HTTPS'])) {
		$enDomain .= 'https://';
	} else {
		$enDomain .= 'http://';
	}
	$enDomain .= 'hakuryuko-resort.uenoki.com/zh-tw';
	return $enDomain;
}
$siteTCDomain = tcDomainFunc();

//Now Page
$nowPage = $_SERVER['REQUEST_URI'];
?>
<span class="link-language">
	<a class="link-jp" href="<?php echo $siteJPDomain . $nowPage; ?>">JP</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteENDomain . $nowPage; ?>">EN</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteSCDomain . $nowPage; ?>">SC</a>&nbsp;|&nbsp;<a class="link-en" href="<?php echo $siteTCDomain . $nowPage; ?>">TC</a>
</span>