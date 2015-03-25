<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
	<link rel="stylesheet" type="text/css" href="mobile.css" />
	<title>Site web Planete</title>
</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="largeur320b">
<center>
	<table width="900" border="0" cellpadding="0" cellspacing="0" class="largeur320b"><tr>
		<td width="900" height="156" class="largeur320b">
			<img border="0" style="display:block;" class="largeur320b" src="planetes/planetes.png" width="900" height="156" alt="">
		</td>
	</tr></table>

	<table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="largeur320b"><tr>
		<td width="900" height="20" align="center">
			<font face="Arial,Helvetica,sans-serif" color="#ff7c06" style= "-webkit-text-size-adjust : none; font-size:45px; ">
			Salutation Guanai, nous avons re&ccirc;u votre message et nous somme pr&ecirc;t &agrave; vous aider !
			</font>
		</td>
	</tr></table>
	<table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="largeur320b"><tr>
		<td width="900" height="20" align="center">
			<font face="Arial,Helvetica,sans-serif" color="#441e13" style= "-webkit-text-size-adjust : none; font-size:22px; ">
				Voici les informations que vous avez demand&eacute; : 
			</font>
		</td>
	</tr></table>
	<table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="largeur320b">
	
<?php 
	$file = "planetesDetail.xml";
	$xml = simplexml_load_file($file);
	$index = 0;
	foreach($xml as $key){
		print('
		<tr>
			<td width="900" align="center" class="largeur320b">
				<table width="900" border="0" cellpadding="0" cellspacing="0" class="largeur320b">
					<tr>
						<td width="900" align="center" valign="top" class="largeur320b">
							<img border="0" style="display:block;" class="largeur320b" src="' .$key->img. '" width="500" alt="">
						</td>
					</tr>
					<tr>
						<td width="900" height="50" align="center" class="largeur320b">
							<font size="1" face="Arial, Helvetica, sans-serif" color="#ff7c06" style="-webkit-text-size-adjust:none;font-size:30px;">
								' .$key->title. '<br>
							</font>
							<font size="1" face="Arial, Helvetica, sans-serif" color="#441e13" style="-webkit-text-size-adjust:none;font-size:18px;line-height:33px;"><b>
								 ' .$key->taille. '<br>
							</b></font>
							<font size="1" class="hide" face="Arial, Helvetica, sans-serif" color="#441e13" style="-webkit-text-size-adjust:none;font-size:17px;">
								' .$key->distance. '
							</font>
						</td>
					</tr>
					<tr>
						<td width="900" height="50" align="center" class="largeur320b">	
							<table width="900" border="0" cellpadding="0" cellspacing="0" class="largeur320b"><tr>
								<td width="200"></td>
								<td width="500">
									<font size="1" class="hide" face="Arial, Helvetica, sans-serif" color="#441e13" style="-webkit-text-size-adjust:none;font-size:17px;">
									' .$key->description. '
									</font>
								</td>
								<td width="200"></td>
							</tr></table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="900" height="15" align="center" class="hide">
			</td>
		</tr>
		');
	}
?>
	</table>

	<table width="900" border="0" cellpadding="0" cellspacing="0" class="largeur320b"><tr>
		<td width="900" height="30" align="center" class="largeur320b">
			<font face="Arial,Helvetica,sans-serif" color="#7b7b7b" style= "-webkit-text-size-adjust : none; font-size:15px; ">
			Voulez vous chercher une planete en particulier ?
			</font>
		</td>
	</tr></table>
</center>
</body>
</html>