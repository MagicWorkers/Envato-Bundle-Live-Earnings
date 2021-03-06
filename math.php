<?php

/*

math.php
Envato-Bundle-Live-Earnings
Created 13.08.2014
MagicWorkers


Support
-----------
http://codecanyon.net/forums/thread/live-bundle-earnings-code-gift-from-magicworkers-/139131
http://codecanyon.net/user/MagicWorkers
support@magicworkers.com


Usage 
-----------

1- Change your $html for bundle url.
2- Edit Config Here Are Values
3- Publish And Use Your bundle.php

*/


// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

// get DOM from URL or file 
$html = file_get_html('http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659');

$totalsales = $html->find('.sidebar-stats__number', 0, 1)->plaintext;
$totalsales = str_replace(array(','), '' , $totalsales);


// CONFIG HERE
$itemprice = "18.00";   		 // YOUR BUNDLE ITEM PRICE
$bundleprice = "30.00"; 		 // BUNDLE PRICE
$bundletotalprice = "1093.00";	 // BUNDLE TOTAL PRICE WRITE TOTAL ITEM PRICES
$bundle_start_time = strtotime('13 August 2014 4:00am'); // BUNDLE START TIME
$bundle_length = 60*60*24*7; // BUNDLE LENGTH




// DONT CHANGE UNDER
$math1 = ($bundleprice) * ($totalsales); // total earnings
$math2 = ($math1) / 2; // authors earnings

$math3 = ($itemprice) / ($bundletotalprice); // your % earning
$math3 = ($math3) * (100);

$yourearning = ($math2 / 100) * ($math3);

$expected_earnings = 0;

$percentage_time = (time() - $bundle_start_time)/$bundle_length;
$expected_earnings = $yourearning / $percentage_time;



// Expected Sales Count 

if($totalsales>1){

$mathcount = ($yourearning) / ($totalsales);
$expected_sales_count = ($expected_earnings) / ($mathcount);
$expected_sales_count = ceil($expected_sales_count);

}else{
	
echo  "Your bundle link wrong , or your bundle has been finished";	
	
}


 ?>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
</style>


<table width="100%" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="63" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size: 16px; color: #333;"><img src="envato.png" width="181" height="57"  alt=""/></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#e58a3b" style="font-size: 16px; color: #fff;">Bundle Live Earnings </td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff" style="font-size: 16px; color: #333;">Total Sales</td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#1b87c8" style="color: #fff;"><? echo $totalsales; ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff"><span style="font-size: 16px; color: #333;">Your Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#81b441" style="color: #fff">&dollar;<? echo number_format($yourearning, 2); ?></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#fff"><span style="font-size: 16px; color: #333;">Expected Earnings</span></td>
  </tr>
  <tr>
    <td height="42" align="center" valign="middle" bgcolor="#d43d3c" style="color: #fff"> <? echo round($expected_sales_count); ?> Item Sales -  About &dollar;<? echo number_format($expected_earnings, 2); ?></td>
  </tr>
  
  <tr>
    <td height="40" align="center" valign="middle" background="bg_under.png"><table width="358" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="29" height="16" align="center" valign="middle"><a href="http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659"><img src="bundle.png" width="16" height="16"  alt=""/></a></td>
        <td width="78" align="center" valign="middle"><a href="http://themeforest.net/item/the-envato-market-bundle-is-on-for-1-week/8468659" style="font-size: 12px; color: #666;" target="_blank">Bundle info</a></td>
        <td width="29" align="center" valign="middle"><a href="https://github.com/MagicWorkers/Envato-Bundle-Live-Earnings"><img src="github.png" width="16" height="13"  alt=""/></a></td>
        <td width="93" align="center" valign="middle"><a href="https://github.com/MagicWorkers/Envato-Bundle-Live-Earnings" style="font-size: 12px; color: #666;" target="_blank">Github Project</a></td>
        <td width="29" align="center" valign="middle"><a href="http://themeforest.net/user/MagicWorkers"><img src="magicworkers.png" width="16" height="16"  alt=""/></a></td>
        <td width="102" align="center" valign="middle"><a href="http://themeforest.net/user/MagicWorkers" style="font-size: 12px; color: #666;">MagicWorkers</a></td>
      </tr>
    </table></td>
  </tr>
 
  
</table>
