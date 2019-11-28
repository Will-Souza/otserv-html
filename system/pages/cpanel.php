<?PHP 
defined('MYAAC') or die('Direct access not allowed!');

$number_of_rows = 0;
if(!$logged){
	echo  '
		Please enter your account name and your password.<br>
		<a href="index.php?subtopic=createaccount" >Create an account</a> if you do not have one yet.<br /><br />
		<form action="index.php?subtopic=cpanel" method="post" >
			<div class="TableContainer" >  
				<table class="Table1" cellpadding="0" cellspacing="0" >    
					<div class="CaptionContainer" >      
						<div class="CaptionInnerContainer" >        
							<span class="CaptionEdgeLeftTop" style="background-image:url('.$template_path.'/images/content/box-frame-edge.gif);" /></span>        
							<span class="CaptionEdgeRightTop" style="background-image:url('.$template_path.'/images/content/box-frame-edge.gif);" /></span>        
							<span class="CaptionBorderTop" style="background-image:url('.$template_path.'/images/content/table-headline-border.gif);" ></span>        
							<span class="CaptionVerticalLeft" style="background-image:url('.$template_path.'/images/content/box-frame-vertical.gif);" /></span>        
							<div class="Text" >Account Login</div>        
							<span class="CaptionVerticalRight" style="background-image:url('.$template_path.'/images/content/box-frame-vertical.gif);" /></span>        
							<span class="CaptionBorderBottom" style="background-image:url('.$template_path.'/images/content/table-headline-border.gif);" ></span>        
							<span class="CaptionEdgeLeftBottom" style="background-image:url('.$template_path.'/images/content/box-frame-edge.gif);" /></span>        
							<span class="CaptionEdgeRightBottom" style="background-image:url('.$template_path.'/images/content/box-frame-edge.gif);" /></span>      
						</div>    
					</div>    
					<tr>      
						<td>        
							<div class="InnerTableContainer" >          
								<table style="width:100%;" >
									<tr>	
										<td class="LabelV" >
											<span>Account Name:</span>
										</td>
										<td style="width:100%;" >
											<input type="password" name="account_login" SIZE="30" maxlength="30" >
										</td>
									</tr>
									<tr>
										<td class="LabelV" >
											<span>Password:</span>
										</td>
										<td>
											<input type="password" name="password_login" size="30" maxlength="29" >
										</td>
									</tr>          
								</table>        
							</div>  
						</table>
					</div>
				</td>
			</tr><br />
			<table width="100%" >
				<tr align="center" >
					<td>
						<table border="0" cellspacing="0" cellpadding="0" >
							<tr>
								<td style="border:0px;" >
									<div class="BigButton" style="background-image:url('.$template_path.'/images/buttons/sbutton.gif)" >
										<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" >
											<div class="BigButtonOver" style="background-image:url('.$template_path.'/images/buttons/sbutton_over.gif);" ></div>
											<input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$template_path.'/images/buttons/_sbutton_submit.gif" >
										</div>
									</div>
								</td>
								<tr>
							</form>
						</table>
					</td>
					<td>
						<table border="0" cellspacing="0" cellpadding="0" >
							<form action="index.php?subtopic=lostaccount" method="post" >
								<tr>
									<td style="border:0px;" >
										<div class="BigButton" style="background-image:url('.$template_path.'/images/buttons/sbutton.gif)" >
											<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" >
												<div class="BigButtonOver" style="background-image:url('.$template_path.'/images/buttons/sbutton_over.gif);" ></div>
												<input class="ButtonText" type="image" name="Account lost?" alt="Account lost?" src="'.$template_path.'/images/buttons/_sbutton_accountlost.gif" >
											</div>
										</div>
									</td>
								</tr>
							</form>
						</table>
					</td>
				</tr>
			</table>';
	}else{
		if(admin()){			
			$time = time();
			/* Inicio de conteúdo */
			if ($action == ""){
				echo  '
		<center>
				<table>
					<tbody>
						<tr>
							<td><img src="'.$template_path.'/images/content/headline-bracer-left.gif"></td>
							<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">Welcome to Admin Panel<br></td>
							<td><img src="'.$template_path.'/images/content/headline-bracer-right.gif"></td>
						</tr>
					</tbody>
				</table>
			</center><br />';
			echo '
			<table border="0" cellspacing="1" cellpadding="7" width="100%">
			<tr bgcolor="'.$config['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>General Control Panel</b></font></td>
			</tr>
			
			<tr bgcolor="'.$config['darkborder'].'">
				<td colspan="1"><b>Options</b></td>
				<td colspan="1" width="80%"><b>Informations</b></td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td align="center"><a href="index.php?subtopic=cpanel&action=captura_dados">Show Info</a></td>
				<td>Show internal information of the server</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td align="center"><a href="index.php?subtopic=cpanel&action=querys">Add Systems</a></td>
				<td>Add systems to the database</td>
			</tr>';
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td align="center"><a href="index.php?subtopic=cpanel&action=announcements">Featured Article</a></td>
				<td>Home page featured article.</td>
			</tr>';
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td align="center"><a href="index.php?subtopic=cpanel&action=social">Social Network</a></td>
				<td>Set your social network links, like facebook and twitter to be showed  in home page.</td>
			</tr>';
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td align="center"><a href="index.php?subtopic=polls">Manage Polls</a></td>
				<td>Create and manage your polls.</td>
			</tr>';
			
			echo '</table>';
				}
				
			/* Exibe informações */
			if ($action == "captura_dados"){
			echo '
			<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
			<tr BGCOLOR="'.$config['vdarkborder'].'">
			<td CLASS="white"><b>Wait a second ...</b></td>
			</tr>
			<tr BGCOLOR='.$config['darkborder'].'>
			<td>Searching needed data. Please wait.</td>
			</tr>
			</TABLE>
			<meta http-equiv="refresh" content="5; index.php?subtopic=cpanel&action=dados_sucesso" />
			';}
			if ($action == "dados_sucesso"){
			echo '<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
			<tr BGCOLOR="'.$config['vdarkborder'].'">
			<td CLASS="white"><b>Wait a second ...</b></td>
			</tr>
			<tr BGCOLOR='.$config['darkborder'].'>
			<td><font color="green"><b>Found needed data successfully!</b></font><br /><small>Redirecting ... </small></td>
			</tr>
			</TABLE>
			<meta http-equiv="refresh" content="3; index.php?subtopic=cpanel&action=informacoes_server" />
			';}
			if ($action == "informacoes_server"){
			echo '
			<table border="0" cellspacing="1" cellpadding="7" width="100%">
			<tr bgcolor="'.$config['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Control Panel - Server Informations</b></font></td>
			</tr>
			
			<tr bgcolor="'.$config['darkborder'].'">
				<td colspan="1"><b>Options</b></td>
				<td colspan="1" width="80%"><b>Informations</b></td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Server Path</b></td>
				<td>'.$config['server_path'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Max<br />online players</b></td>
				<td>'.$config['lua']['maxPlayers'].' players</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Access IP</b></td>
				<td>'.$config['lua']['ip'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Access PORT</b></td>
				<td>'.$config['lua']['statusPort'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Server<br /> localization</b></td>
				<td>'.$config['lua']['location'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Database</b><br /><font size="1">(MySQL, Sqlite)</font></td>
				<td>'.$config['database_type'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>User&nbsp;'.$config['database_type'].'</b></td>
				<td>'.$config['database_user'].'</td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Password&nbsp;'.$config['database_type'].'</b></td>
				<td><input type="text" value="'.$config['database_password'].'" readonly="readonly" disabled="disabled" /></td>
			</tr>';
			
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['darkborder']; } else { $bgcolor = $config['lightborder']; } $number_of_rows++;
			echo '
			<tr bgcolor="'.$bgcolor.'">
				<td><b>Database Name</b></td>
				<td>'.$config['database_name'].'</td>
			</tr>';
			 
			echo '</table><br />
			<a href="index.php?subtopic=cpanel">BACK</a>';}
			/* Exibe informações FIM */
			
			//Tiny Editor
				echo  '
					<script type="text/javascript" src="'.$template_path.'/tiny_mce/tiny_mce.js"></script>
					<script type="text/javascript">
						tinyMCE.init({
							// General options
							mode : "textareas",
							theme : "simple",
							plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
					
							// Theme options
							theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
							theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
							theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl",
							theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
							theme_advanced_toolbar_location : "top",
							theme_advanced_toolbar_align : "left",
							theme_advanced_statusbar_location : "bottom",
							theme_advanced_resizing : true,
					
							// Example content CSS (should be your site CSS)
							content_css : "css/content.css",
					
							// Drop lists for link/image/media/template dialogs
							template_external_list_url : "lists/template_list.js",
							external_link_list_url : "lists/link_list.js",
							external_image_list_url : "lists/image_list.js",
							media_external_list_url : "lists/media_list.js",
					
							// Style formats
							style_formats : [
								{title : \'Bold text\', inline : \'b\'},
								{title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},
								{title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},
								{title : \'Example 1\', inline : \'span\', classes : \'example1\'},
								{title : \'Example 2\', inline : \'span\', classes : \'example2\'},
								{title : \'Table styles\'},
								{title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}
							],
					
							// Replace values for the template plugin
							template_replace_values : {
								username : "Some User",
								staffid : "991234"
							}
						});
					</script>';
			
			///FEATURED ARTICLE
			if ($action == "announcements"){
			echo '
			<script type="text/javascript">
			
			var accountHttp;
			
			//sprawdza czy dane konto istnieje czy nie
			function checkAccount()
			{
				if(document.getElementById("account_name").value=="")
				{
					document.getElementById("acc_name_check").innerHTML = \'<img src="images/nok.gif" />\';
					return;
				}
				accountHttp=GetXmlHttpObject();
				if (accountHttp==null)
				{
					return;
				}
				var account = document.getElementById("account_name").value;
				var url="ajax/check_account.php?account=" + account + "&uid="+Math.random();
				accountHttp.onreadystatechange=AccountStateChanged;
				accountHttp.open("GET",url,true);
				accountHttp.send(null);
			} 
			
			var emailHttp;
			
			//sprawdza czy dane konto istnieje czy nie
			function checkEmail()
			{
				if(document.getElementById("email").value=="")
				{
					document.getElementById("email_check").innerHTML = \'<img src="images/nok.gif" />\';
					return;
				}
				emailHttp=GetXmlHttpObject();
				if (emailHttp==null)
				{
					return;
				}
				var email = document.getElementById("email").value;
				var url="ajax/check_email.php?email=" + email + "&uid="+Math.random();
				emailHttp.onreadystatechange=EmailStateChanged;
				emailHttp.open("GET",url,true);
				emailHttp.send(null);
			} 
			
			function EmailStateChanged() 
			{ 
				if (emailHttp.readyState==4)
				{ 
					document.getElementById("email_check").innerHTML=emailHttp.responseText;
				}
			}
			
				function validate_required(field,alerttxt)
				{
				with (field)
				{
				if (value==null||value==""||value==" ")
				  {alert(alerttxt);return false;}
				else {return true}
				}
				}
			
				function validate_email(field,alerttxt)
				{
				with (field)
				{
				apos=value.indexOf("@");
				dotpos=value.lastIndexOf(".");
				if (apos<1||dotpos-apos<2) 
				  {alert(alerttxt);return false;}
				else {return true;}
				}
				}
			
				function validate_form(thisform)
				{
				with (thisform)
				{
				if (validate_required(title,"Please enter a title!")==false)
				  {title.focus();return false;}
				if (validate_required(text,"Please enter your e-mail!")==false)
				  {text.focus();return false;}
				if (validate_email(email,"Invalid e-mail format!")==false)
				  {email.focus();return false;}
				if (verifpass==1) {
				if (validate_required(passor,"Please enter password!")==false)
				  {passor.focus();return false;}
				if (validate_required(passor2,"Please repeat password!")==false)
				  {passor2.focus();return false;}
				if (passor2.value!=passor.value)
				  {alert(\'Repeated password is not equal to password!\');return false;}
				}
				if(rules.checked==false)
				  {alert(\'To create account you must accept server rules!\');return false;}
				}
				}
			</script>
			<p>Now you can add a short text about one featured article of your latest news, just fill the fields below.</p>
			<form action="index.php?subtopic=cpanel&action=announcements_add" method="post">
			<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
			<tr BGCOLOR="'.$config['vdarkborder'].'">
			<td CLASS="white" colspan="2"><b>New Featured Article</b></td>
			</tr>
			  <tr bgcolor="'.$config['darkborder'].'">
				<td width="20%">Title:</td>
				<td width="80%"><input type="text" name="title" /></td>
			  </tr>
			  <tr bgcolor="'.$config['lightborder'].'">
				<td>Text:</td>
				<td><textarea name="text" id="elm1" cols="50" rows="6" maxlength="240"></textarea></td>
			  </tr>
			  <tr bgcolor="'.$config['darkborder'].'">
				<td>Read More Link:</td>
				<td><input type="text" name="read_more"/></td>
			  </tr>
			  <tr bgcolor="'.$config['lightborder'].'">
				<td>Author:</td>
				<td><select name="author">';
			$players_from_logged_acc = $account_logged->getPlayersList();
			if(count($players_from_logged_acc) > 0) {
			foreach($players_from_logged_acc as $player) {
			echo  '<option>'.$player->getName().'</option>';
			}
			} else {
			echo  'You don\'t have any character on your account.';
			}
			echo '
			</select></td>
			  </tr>
			</table>
			<br />
			
			<div class="BigButton" style="background-image:url('.$template_path.'/images/buttons/sbutton.gif)">
			<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;'.$template_path.'/images/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
			<input class="ButtonText" name="Submit" alt="Submit" src="'.$template_path.'/images/buttons/_sbutton_submit.gif" type="image">
			</div></div>
			</form>
			';
			}
			if ($action == "announcements_add"){
				
				$featured_title = addslashes($_POST['title']);
				$featured_text =  addslashes($_POST['text']);
				$featured_author = addslashes($_POST['author']);
				$featured_read_more = addslashes($_POST['read_more']);
	
				$feat = $SQL->query("INSERT INTO `z_featured_article` (`id`,`title` ,`text` ,`date` ,`author`, `read_more`) VALUES (NULL , '$featured_title', '$featured_text', '".time()."',  '$featured_author', '$featured_read_more');") or die(mysql_error());
				echo '<div align="center" style="font-size:18px;font-weight:bold;">Featured Article <font color="red">'.$featured_title.'</font> added!</div>';
			}
			///FEATURED ARTICLE END
			
			///SOCIAL NETWORK
			if($action == "social"){
				
				$nFace = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'facebook'")->fetch();
				$nTweet = $SQL->query("SELECT " .$SQL->fieldName('network_link'). " FROM " .$SQL->tableName('z_network_box'). " WHERE " .$SQL->fieldName('network_name'). " = 'twitter'")->fetch();
			//POST LINK FACEBOOK
			if(isset($_POST['facebook_save'])){
				if(empty($nFace)){
					$intoFace = $SQL->query("INSERT INTO `z_network_box` (network_name, network_link) VALUES ('facebook', '$_POST[facebook_profile]')");
					if($intoFace){
						echo '<meta http-equiv="refresh" content="0;URL=?subtopic=cpanel&action=social">';
						unset($_POST['facebook_save']);
					}
				} else {
					$fLink = $_POST['facebook_profile'];
					$sqlFace = $SQL->query("UPDATE " .$SQL->tableName('z_network_box'). " SET " .$SQL->fieldName('network_link'). " = '$fLink' WHERE " .$SQL->fieldName('network_name'). " = 'facebook'");
					if($sqlFace){
						echo '<meta http-equiv="refresh" content="0;URL=?subtopic=cpanel&action=social">';
						unset($_POST['facebook_save']);
					}
				}
			}
			//POST LINK TWITTER
			if(isset($_POST['twitter_save'])){
				if(empty($nTweet)){
					$intoTweet = $SQL->query("INSERT INTO `z_network_box` (network_name, network_link) VALUES ('twitter', '$_POST[twitter_profile]')");
					if($intoTweet){
						echo '<meta http-equiv="refresh" content="0;URL=?subtopic=cpanel&action=social">';
						unset($_POST['twitter_save']);
					}
				} else {
					$tLink = $_POST['twitter_profile'];
					$sqlTwit = $SQL->query("UPDATE " .$SQL->tableName('z_network_box'). " SET " .$SQL->fieldName('network_link'). " = '$tLink' WHERE " .$SQL->fieldName('network_name'). " = 'twitter'");
					if($sqlTwit){
						echo '<meta http-equiv="refresh" content="0;URL=?subtopic=cpanel&action=social">';
						unset($_POST['twitter_save']);
					}
				}
			}
			echo  '
				<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
					<TR>
						<TD>Fill the fields with your social informations.<BR>
							<BR>
							<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
								<TR BGCOLOR=#505050>
									<TD CLASS=white COLSPAN=3><B>Network Box Links</B></TD>
								</TR>
								<TR BGCOLOR=#D4C0A1>
									<TD><B>Facebook Page</B></TD>
									<form name="facebook" action="" method="post">
										<td>https://www.facebook.com/<input type="text" name="facebook_profile" value="'.$nFace['network_link'].'"></td>
										<td><button type="submit" name="facebook_save">Save</button></td>
									</form>
								</TR>
								<TR BGCOLOR=#F1E0C6>
									<td><B>Twitter Profile</B></td>
									<form name="twitter" action="#" method="post">
										<td>https://twitter.com/<input type="text" name="twitter_profile" value="'.$nTweet['network_link'].'"></td>
										<td><button type="submit" name="twitter_save">Save</button></td>
									</form>
								</TR>
							</TABLE>
							<BR>
						</TD>
					</TR>
				</TABLE>
				<center>
					<table border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td style="border: 0px none;">
									<div class="BigButton" style="background-image: url('.$template_path.'/images/buttons/sbutton.gif);">
										<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$template_path.'/images/buttons/sbutton_over.gif);"></div>
										<a href="index.php?subtopic=cpanel"><input class="ButtonText" name="Back" alt="Back" src="'.$template_path.'/images/vips/_sbutton_back.gif" type="image"></a></div></div>
								</td>
							</tr>
						</tbody>
					</table>
				</center>';
			}
			///SOCIAL NETWORKS END
			
			///SYSTEMS
			if ($action == "querys"){
				echo '
					<div class="InnerTableContainer" align="center">
						<table>
							<tbody>
								<tr>
									<td>
										<div class="TableShadowContainerRightTop">
											<div class="TableShadowRightTop" style="background-image: url('.$template_path.'/images/content/table-shadow-rt.gif);"></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image: url('.$template_path.'/images/content/table-shadow-rm.gif);">
											<div class="TableContentContainer">
												<table class="TableContent" style="border: 1px solid #faf0d7;">
													<tbody>
														<tr style="background-color: #505050;"></tr>
														<tr class="Table" style="background-color: #d4c0a1;">
															<td style="width: 800; border: 1px; border-style: solid; border-color: #FAF0D7; padding: 5px;">
																[<a href="index.php?subtopic=cpanel&action=pagseguro_add">PagSeguro Auto Return</a>]<br />
																<small>System fix bug of page <a href="index.php?subtopic=history" target="_Blank">Trans. History</a>.</small><br /><br />
																[<a href="index.php?subtopic=cpanel&action=woe">Woe</a>]<br />
																<small>System install <b>WOE</b> database tables<i> (Only querys in the database)</i></small><br /><br />
																[<a href="index.php?subtopic=cpanel&action=guild_war">Guild War</a>]<br />
																<small>System install <b>Guild War</b> database tables<i> (Only querys in the database)</i></small><br /><br />
																[<a href="index.php?subtopic=cpanel&action=videos">Movies</a>]<br />
																<small>Add querys of the galery movie</small><br />
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="TableShadowContainer">
											<div class="TableBottomShadow" style="background-image: url('.$template_path.'/images/content/table-shadow-bm.gif);">
											<div class="TableBottomLeftShadow" style="background-image: url('.$template_path.'/images/content/table-shadow-bl.gif);"></div>
											<div class="TableBottomRightShadow" style="background-image: url('.$template_path.'/images/content/table-shadow-br.gif);"></div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><br /><br />
				<center>
					<table border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td style="border: 0px none;">
									<div class="BigButton" style="background-image: url('.$template_path.'/images/buttons/sbutton.gif);">
										<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$template_path.'/images/buttons/sbutton_over.gif);"></div>
									<a href="index.php?subtopic=cpanel"><input class="ButtonText" name="Back" alt="Back" src="'.$template_path.'/images/vips/_sbutton_back.gif" type="image"></a></div></div>
								</td>
							</tr>
						</tbody>
					</table>
				</center>';
			}
		}
	}
?>