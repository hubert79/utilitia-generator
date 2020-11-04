<?php
	session_start ();
	
	if (isset($_POST['entityName']))
	{
		$valid_result = true;
		
		// Entity Name valid
		$entityName = $_POST['entityName'];
		$_SESSION['s_entityName'] = $entityName;
		
		if (strlen($entityName) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityName']="Wprowadź nazwę swojej firmy!";
		}
		
		$_SESSION['fr_entityName'] = $entityName;
		
		//Service Name
		$serviceName = $_POST['serviceName'];
		$_SESSION['s_serviceName'] = $serviceName;
							
		
		// Entity Adress URL valid
		$entityURLAdress = $_POST['entityURLAdress'];
		$_SESSION['s_entityURLAdress'] = $entityURLAdress;
		
		if (strlen($entityURLAdress) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityURLAdress']="Wprowadź adres URL swojej firmy!";
		}
		
		$_SESSION['fr_entityURLAdress'] = $entityURLAdress;
		
		// Data valid
		$yearDateOfPublication = $_POST['yearDateOfPublication'];
		$_SESSION['s_yearDateOfPublication'] = $yearDateOfPublication;
		
		$monthDateOfPublication = $_POST['monthDateOfPublication'];
		if(monthDateOfPublication < 10){
			$_SESSION['s_monthDateOfPublication'] = '0'.$monthDateOfPublication;
		} else {
			$_SESSION['s_monthDateOfPublication'] = $monthDateOfPublication;
		}

		$dayDateOfPublication = $_POST['dayDateOfPublication'];
		if(dayDateOfPublication < 10){
			$_SESSION['s_dayDateOfPublication'] = '0'.$dayDateOfPublication;
		} else {
			$_SESSION['s_dayDateOfPublication'] = $dayDateOfPublication;
		}

		$yearDateOfLastUpdate = $_POST['yearDateOfLastUpdate'];
		$_SESSION['s_yearDateOfLastUpdate'] = $yearDateOfLastUpdate;
		
		$monthDateOfLastUpdate = $_POST['monthDateOfLastUpdate'];
		if(monthDateOfLastUpdate < 10){
			$_SESSION['s_monthDateOfLastUpdate'] = '0'.$monthDateOfLastUpdate;
		} else {
			$_SESSION['s_monthDateOfLastUpdate'] = $monthDateOfLastUpdate;
		}
		
		$dayDateOfLastUpdate = $_POST['dayDateOfLastUpdate'];
		if(dayDateOfLastUpdate < 10){
			$_SESSION['s_dayDateOfLastUpdate'] = '0'.$dayDateOfLastUpdate;
		} else {
			$_SESSION['s_dayDateOfLastUpdate'] = $dayDateOfLastUpdate;
		}
		
		// Imposible data
		
		
		if($yearDateOfPublication > $yearDateOfLastUpdate)
		{
			$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty";
		}
		else if ($yearDateOfPublication == $yearDateOfLastUpdate)
		{
			if($monthDateOfPublication > $monthDateOfLastUpdate)
			{
				$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty";
			}
			else if($monthDateOfPublication == $monthDateOfLastUpdate)
			{
				if($dayDateOfPublication > $dayDateOfLastUpdate)
				{
					$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty";
				}
			}
		}
		
		function validData( $y, $m, $d, $error)
		{
			$valid_data = true;
		
			if((($y % 4 == 0) && ($y % 100 != 0)) || ($y % 400 == 0))
			{
				if($m == 2 && ($d > 29))
				{
					$valid_data = false;
				}
				else if(($m==4 || $m==6 || $m==9 || $m==11) && $d > 30)
				{
					$valid_data = false;
				}
			}
			else 
			{
				if($m==2 && $d > 28)
				{
					$valid_data = false;
				}
				else if(($m==4 || $m==6 || $m==9 || $m==11) && $d > 30)
				{
					$valid_data = false;
				}
			}
		
			if($valid_data == false)
			{
				$error = "Data nieprawidłowa";
			}
			else {echo "kot";}
		}
		
		// Publication data valid
		$valid_publication_data = true;
		
			if((($yearDateOfPublication % 4 == 0) && ($yearDateOfPublication % 100 != 0)) || ($yearDateOfPublication % 400 == 0))
			{
				if($monthDateOfPublication == 2 && ($dayDateOfPublication > 29))
				{
					$valid_publication_data = false;
				}
				else if(($monthDateOfPublication==4 || $monthDateOfPublication==6 || $monthDateOfPublication==9 || $monthDateOfPublication==11) && $dayDateOfPublication > 30)
				{
					$valid_publication_data = false;
				}
			}
			else 
			{
				if($monthDateOfPublication==2 && $dayDateOfPublication > 28)
				{
					$valid_publication_data = false;
				}
				else if(($monthDateOfPublication==4 || $monthDateOfPublication==6 || $monthDateOfPublication==9 || $monthDateOfPublication==11) && $dayDateOfPublication > 30)
				{
					$valid_publication_data = false;
				}
			}
		
			if($valid_publication_data == false)
			{
				$_SESSION['publication_data'] = "Data nieprawidłowa";
			}
		
		// Update data valid
		$valid_update_data = true;
		
			if((($yearDateOfLastUpdate % 4 == 0) && ($yearDateOfLastUpdate % 100 != 0)) || ($yearDateOfLastUpdate % 400 == 0))
			{
				if($monthDateOfLastUpdate == 2 && ($dayDateOfLastUpdate > 29))
				{
					$valid_update_data = false;
				}
				else if(($monthDateOfLastUpdate==4 || $monthDateOfLastUpdate==6 || $monthDateOfLastUpdate==9 || $monthDateOfLastUpdate==11) && $dayDateOfLastUpdate > 30)
				{
					$valid_update_data = false;
				}
			}
			else 
			{
				if($monthDateOfLastUpdate==2 && $dayDateOfLastUpdate > 28)
				{
					$valid_update_data = false;
				}
				else if(($monthDateOfLastUpdate==4 || $monthDateOfLastUpdate==6 || $monthDateOfLastUpdate==9 || $monthDateOfLastUpdate==11) && $dayDateOfLastUpdate > 30)
				{
					$valid_update_data = false;
				}
			}
		
			if($valid_update_data == false)
			{
				$_SESSION['update_data'] = "Data nieprawidłowa";
			}
		
		// Status valid
		$selectStatus = $_POST['selectStatus'];
		$_SESSION['s_selectStatus'] = $selectStatus;
		
		if(strlen($selectStatus) > 6)
		{
			// Content Not Accessible Status valid
			$contentNotAccessibleStatus = $_POST['contentNotAccessibleStatus'];
			$_SESSION['s_contentNotAccessibleStatus'] = $contentNotAccessibleStatus;
		
			if (strlen($contentNotAccessibleStatus) < 1)
			{
				$valid_result=false;
				$_SESSION['e_contentNotAccessibleStatus']="Wprowadź  treść niedostępną!";
			}
		
			$_SESSION['fr_contentNotAccessibleStatus'] = $contentNotAccessibleStatus;
			
			// Off Status valid
			$offStatus = $_POST['offStatus'];
			$_SESSION['s_offStatus'] = $offStatus;
		
			if (strlen($offStatus) < 1)
			{
				$valid_result=false;
				$_SESSION['e_offStatus']="Wprowadź opis treści niedostępnej!";
			}
		
			$_SESSION['fr_offStatus'] = $offStatus;
			
			// Link Status valid
			$linkStatus = $_POST['linkStatus'];
			$_SESSION['s_linkStatus'] = $linkStatus;
		
			if (strlen($linkStatus) < 1)
			{
				$valid_result=false;
				$_SESSION['e_linkStatus']="Wprowadź adres treści niedostępnej!";
			}
		
			$_SESSION['fr_linkStatus'] = $linkStatus;
		}
		
		// Declaration valid
		$nameExtermalEntity = $_POST['nameExtermalEntity'];
		$_SESSION['s_nameExtermalEntity'] = $nameExtermalEntity;
		
		$declaration = $_POST['declaration'];
		$_SESSION['s_declaration'] = $declaration;
		
		if($declaration === "Badania przeprowadzonego przez podmiot zewnętrzny")
		{
			if (strlen($nameExtermalEntity) < 1)
			{
				$valid_result=false;
				$_SESSION['e_nameExtermalEntity']="Wprowadź nazwę podmiotu zewnętrznego!";
			}
		
			$_SESSION['fr_nameExtermalEntity'] = $nameExtermalEntity;
		}

		//Date made declaration
		$yearDateOfMade = $_POST['yearDateOfMade'];
		$_SESSION['s_yearDateOfMade'] = $yearDateOfMade;
		
		$monthDateOfMade = $_POST['monthDateOfMade'];
		$_SESSION['s_monthDateOfMade'] = $monthDateOfMade;
		
		$dayDateOfMade = $_POST['dayDateOfMade'];
		$_SESSION['s_dayDateOfMade'] = $dayDateOfMade;
		
		// Arch access valid
		$archaccess = $_POST['archaccess'];
		$_SESSION['s_archaccess'] = $archaccess;
		
		if (strlen($archaccess) < 1)
		{
			$valid_result=false;
			$_SESSION['e_archaccess']="Wprowadź informacje dot. dostępności architektonicznej!";
		}
		
		$_SESSION['fr_entityURLAdress'] = $entityURLAdress;
		
		// Mobile application valid
		$mobApp = $_POST['mobApp'];
		$_SESSION['s_mobApp'] = $mobApp;
		$_Tak = "Tak";
		
		if($mobApp === "Tak"){
			$describeMobileApp = $_POST['describeMobileApp'];
			$_SESSION['s_describeMobileApp'] = $describeMobileApp;
		
			if (strlen($describeMobileApp) < 1)
			{
				$valid_result=false;
				$_SESSION['e_describeMobileApp']="Wprowadź opisaplikacji mobilnej!";
			}
			
			$_SESSION['fr_describeMobileApp'] = $describeMobileApp;
			
			$linkMobileApp = $_POST['linkMobileApp'];
			$_SESSION['s_linkMobileApp'] = $linkMobileApp;
		
			if (strlen($linkMobileApp) < 1)
			{
				$valid_result=false;
				$_SESSION['e_linkMobileApp']="Wprowadź adres URL aplikacji mobilnej!";
			}
			
			$_SESSION['fr_linkMobileApp'] = $linkMobileApp;
		}
		
		$_SESSION['fr_mobApp'] = $mobApp;
		
		// Additional information
		$addInformation = $_POST['addInformation'];
		$_SESSION['s_addInformation'] = $addInformation;
		
		if (strlen($addInformation) < 1)
		{
			$valid_result=false;
			$_SESSION['e_addInformation']="Wprowadź informacje dodatkowe!";
		}
		
		$_SESSION['fr_addInformation'] = $addInformation;
		
		if ($valid_result == true)
		{
			header('Location: generate.php');
		}
		
	}
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>formularz</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	
	<?php
		// Status list
		$_session['option_selectStatus'] = 'Zgodna';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['selectStatus']))
		{
			$_session['option_selectStatus'] = $_POST['selectStatus'];
		}
		
		function check_selected($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_selectStatus']);
			} else {echo '';}
		}
		
		// Declaration list
		$_session['option_declaration'] = 'Samooceny przeprowadzonej przez podmiot publiczny';
	
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['declaration']))
		{
			$_session['option_declaration'] = $_POST['declaration'];
		}
	
		function check_declaration($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_declaration']);
			} else {echo '';}
		}
	
		// Mobile app list mobApp
		$_session['option_mobApp'] = 'Nie';
	
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mobApp']))
		{
			$_session['option_mobApp'] = $_POST['mobApp'];
		}
	
		function check_mobileApp($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_mobApp']);
			} else {echo '';}
		}			
		
		// Data publication list
			
		$_session['option_yearDateOfPublication'] = '1980';
			
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfPublication']))
		{
			$_session['option_yearDateOfPublication'] = $_POST['yearDateOfPublication'];
		}
		
		function check_yearDateOfPublication($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_yearDateOfPublication']);
			} else {echo '';}
		}
	
		// monthDateOfPublication
		$_session['option_monthDateOfPublication'] = 'styczeń';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfPublication']))
		{
			$_session['option_monthDateOfPublication'] = $_POST['monthDateOfPublication'];
		}
		
		function check_monthDateOfPublication($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_monthDateOfPublication']);
			} else {echo '';}
		}

		// dayDateOfPublication
		$_session['option_dayDateOfPublication'] = '01';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfPublication']))
		{
			$_session['option_dayDateOfPublication'] = $_POST['dayDateOfPublication'];
		}
		
		function check_dayDateOfPublication($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_dayDateOfPublication']);
			} else {echo '';}
		}

		// yearDateOfLastUpdate
		$_session['option_yearDateOfLastUpdate'] = '1980';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfLastUpdate']))
		{
			$_session['option_yearDateOfLastUpdate'] = $_POST['yearDateOfLastUpdate'];
		}
		
		function check_yearDateOfLastUpdate($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_yearDateOfLastUpdate']);
			} else {echo '';}
		}

		// monthDateOfLastUpdate
		$_session['option_monthDateOfLastUpdate'] = 'styczeń';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfLastUpdate']))
		{
			$_session['option_monthDateOfLastUpdate'] = $_POST['monthDateOfLastUpdate'];
		}
		
		function check_monthDateOfLastUpdate($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_monthDateOfLastUpdate']);
			} else {echo '';}
		}

		// dayDateOfLastUpdate
		$_session['option_dayDateOfLastUpdate'] = '01';
	
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfLastUpdate']))
		{
			$_session['option_dayDateOfLastUpdate'] = $_POST['dayDateOfLastUpdate'];
		}
		
		function check_dayDateOfLastUpdate($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_ dayDateOfLastUpdate']);
			} else {echo '';}
		}
		
		//Date made declaration	
		$_session['option_yearDateOfMade'] = '1980';
			
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfMade']))
		{
			$_session['option_yearDateOfMade'] = $_POST['yearDateOfMade'];
		}
		
		function check_yearDateOfMade($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_yearDateOfMade']);
			} else {echo '';}
		}
	
		// monthDateOfMade
		$_session['option_monthDateOfMade'] = 'styczeń';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfMade']))
		{
			$_session['option_monthDateOfMade'] = $_POST['monthDateOfMade'];
		}
		
		function check_monthDateOfMade($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_monthDateOfMade']);
			} else {echo '';}
		}

		// dayDateOfMade
		$_session['option_dayDateOfMade'] = '01';
		
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfMade']))
		{
			$_session['option_dayDateOfMade'] = $_POST['dayDateOfMade'];
		}
		
		function check_dayDateOfMade($field_value, $option)
		{
			if($field_value === $option)
			{
				echo ' selected';
				unset($_SESSION['option_dayDateOfMade']);
			} else {echo '';}
		}
	?>
	
		<div id="content">
		
			<h1>Generator deklaracji dostępności</h1>
			
			<form class="form" method="post">
			
				<!-- Entity name Adress URL-->
				<fieldset>
					<legend>Dane podmiotu i strony</legend>
					<div>
						<label for="entityName">Nazwa podmiotu</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_entityName']))
							{
								echo $_SESSION['fr_entityName'];
								unset($_SESSION['fr_entityName']);
							}
							?>" name="entityName" id="entityName" />
							
							<?php
								if (isset($_SESSION['e_entityName']))
								{
									echo '<div class="error">'.$_SESSION['e_entityName'].'</div>';
									unset($_SESSION['e_entityName']);
								}
							?>
					</div>
					
					<div>
						<label for="serviceName">Nazwa strony internetowej</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_serviceName']))
							{
								echo $_SESSION['fr_serviceName'];
								unset($_SESSION['fr_serviceName']);
							}
							?>" name="serviceName" id="serviceName" />
							
							<?php
								if (isset($_SESSION['e_serviceName']))
								{
									echo '<div class="error">'.$_SESSION['e_serviceName'].'</div>';
									unset($_SESSION['e_serviceName']);
								}
							?>
					</div>
					
					<div>
						<label for="entityURLAdress">Adres URL podmiotu</label>
						<input type="url" value="<?php
							if (isset($_SESSION['fr_entityURLAdress']))
							{
								echo $_SESSION['fr_entityURLAdress'];
								unset($_SESSION['fr_entityURLAdress']);
							}
							?>" name="entityURLAdress" id="entityURLAdress" />
							
							<?php
								if (isset($_SESSION['e_entityURLAdress']))
								{
									echo '<div class="error">'.$_SESSION['e_entityURLAdress'].'</div>';
									unset($_SESSION['e_entityURLAdress']);
								}
							?>
					</div>
				</fieldset>
				
				<!-- Data of publication -->
				<fieldset>
					<legend>Data publikacji strony</legend>
					<div>
						<?php
							if (isset($_SESSION['e_imposible_data']))
							{
								echo '<div class="error">'.$_SESSION['e_imposible_data'].'</div>';
								unset($_SESSION['e_imposible_data']);
							}
						?>
								
						<div>
							<label for="yearDateOfPublication">Rok</label>
							<select name="yearDateOfPublication" id="yearDateOfPublication">
								<option value="1980" <?php check_yearDateOfPublication('1980',$_session['option_yearDateOfPublication']);?> >1980</option>
								<option value="1981" <?php check_yearDateOfPublication('1981',$_session['option_yearDateOfPublication']);?> >1981</option>
								<option value="1982" <?php check_yearDateOfPublication('1982',$_session['option_yearDateOfPublication']);?> >1982</option>
								<option value="1983" <?php check_yearDateOfPublication('1983',$_session['option_yearDateOfPublication']);?> >1983</option>
								<option value="1984" <?php check_yearDateOfPublication('1984',$_session['option_yearDateOfPublication']);?> >1984</option>
								<option value="1985" <?php check_yearDateOfPublication('1985',$_session['option_yearDateOfPublication']);?> >1985</option>
								<option value="1986" <?php check_yearDateOfPublication('1986',$_session['option_yearDateOfPublication']);?> >1986</option>
								<option value="1987" <?php check_yearDateOfPublication('1987',$_session['option_yearDateOfPublication']);?> >1987</option>
								<option value="1988" <?php check_yearDateOfPublication('1988',$_session['option_yearDateOfPublication']);?> >1988</option>
								<option value="1989" <?php check_yearDateOfPublication('1989',$_session['option_yearDateOfPublication']);?> >1989</option>
																<option value="1990" <?php check_yearDateOfPublication('1990',$_session['option_yearDateOfPublication']);?> >1990</option>
								<option value="1991" <?php check_yearDateOfPublication('1991',$_session['option_yearDateOfPublication']);?> >1991</option>
								<option value="1992" <?php check_yearDateOfPublication('1992',$_session['option_yearDateOfPublication']);?> >1992</option>
								<option value="1993" <?php check_yearDateOfPublication('1993',$_session['option_yearDateOfPublication']);?> >1993</option>
								<option value="1994" <?php check_yearDateOfPublication('1994',$_session['option_yearDateOfPublication']);?> >1994</option>
								<option value="1995" <?php check_yearDateOfPublication('1995',$_session['option_yearDateOfPublication']);?> >1995</option>
								<option value="1996" <?php check_yearDateOfPublication('1996',$_session['option_yearDateOfPublication']);?> >1996</option>
								<option value="1997" <?php check_yearDateOfPublication('1997',$_session['option_yearDateOfPublication']);?> >1997</option>
								<option value="1998" <?php check_yearDateOfPublication('1998',$_session['option_yearDateOfPublication']);?> >1998</option>
								<option value="1999" <?php check_yearDateOfPublication('1999',$_session['option_yearDateOfPublication']);?> >1999</option>
																<option value="2000" <?php check_yearDateOfPublication('2000',$_session['option_yearDateOfPublication']);?> >2000</option>
								<option value="2001" <?php check_yearDateOfPublication('2001',$_session['option_yearDateOfPublication']);?>  >2001</option>
								<option value="2002" <?php check_yearDateOfPublication('2002',$_session['option_yearDateOfPublication']);?>  >2002</option>
								<option value="2003" <?php check_yearDateOfPublication('2003',$_session['option_yearDateOfPublication']);?>  >2003</option>
								<option value="2004" <?php check_yearDateOfPublication('2004',$_session['option_yearDateOfPublication']);?>  >2004</option>
								<option value="2005" <?php check_yearDateOfPublication('2005',$_session['option_yearDateOfPublication']);?>  >2005</option>
								<option value="2006" <?php check_yearDateOfPublication('2006',$_session['option_yearDateOfPublication']);?>  >2006</option>
								<option value="2007" <?php check_yearDateOfPublication('2007',$_session['option_yearDateOfPublication']);?>  >2007</option>
								<option value="2008" <?php check_yearDateOfPublication('2008',$_session['option_yearDateOfPublication']);?>  >2008</option>	
								<option value="2009" <?php check_yearDateOfPublication('2009',$_session['option_yearDateOfPublication']);?>  >2009</option>
						
								<option value="2010" <?php check_yearDateOfPublication('2010',$_session['option_yearDateOfPublication']);?>  >2010</option>
								<option value="2011" <?php check_yearDateOfPublication('2011',$_session['option_yearDateOfPublication']);?>  >2011</option>
								<option value="2012" <?php check_yearDateOfPublication('2012',$_session['option_yearDateOfPublication']);?>  >2012</option>
								<option value="2013" <?php check_yearDateOfPublication('2013',$_session['option_yearDateOfPublication']);?>  >2013</option>
								<option value="2014" <?php check_yearDateOfPublication('2014',$_session['option_yearDateOfPublication']);?>  >2014</option>
								<option value="2015" <?php check_yearDateOfPublication('2015',$_session['option_yearDateOfPublication']);?>  >2015</option>
								<option value="2016" <?php check_yearDateOfPublication('2016',$_session['option_yearDateOfPublication']);?>  >2016</option>
								<option value="2017" <?php check_yearDateOfPublication('2017',$_session['option_yearDateOfPublication']);?>  >2017</option>
								<option value="2018" <?php check_yearDateOfPublication('2018',$_session['option_yearDateOfPublication']);?>  >2018</option>
								<option value="2019" <?php check_yearDateOfPublication('2019',$_session['option_yearDateOfPublication']);?>  >2019</option>
																<option value="2020" <?php check_yearDateOfPublication('2020',$_session['option_yearDateOfPublication']);?>  >2020</option>
								<option value="2021" <?php check_yearDateOfPublication('2021',$_session['option_yearDateOfPublication']);?>  >2021</option>
								<option value="2022" <?php check_yearDateOfPublication('2022',$_session['option_yearDateOfPublication']);?>  >2022</option>
							</select>
						</div>
								
						<div>
							<label for="monthDateOfPublication">Miesiąc</label>
							<select name="monthDateOfPublication" id="monthDateOfPublication">
								<option value="1" <?php check_monthDateOfPublication('1',$_session['option_monthDateOfPublication']);?> >styczeń</option>
								<option value="2" <?php check_monthDateOfPublication('2',$_session['option_monthDateOfPublication']);?> >Luty</option>
								<option value="3" <?php check_monthDateOfPublication('3',$_session['option_monthDateOfPublication']);?> >marzec</option>
								<option value="4" <?php check_monthDateOfPublication('4',$_session['option_monthDateOfPublication']);?> >kwiecień</option>
								<option value="5" <?php check_monthDateOfPublication('5',$_session['option_monthDateOfPublication']);?> >maj</option>
								<option value="6" <?php check_monthDateOfPublication('6',$_session['option_monthDateOfPublication']);?> >czerwiec</option>
								<option value="7" <?php check_monthDateOfPublication('7',$_session['option_monthDateOfPublication']);?> >lipiec</option>
								<option value="8" <?php check_monthDateOfPublication('8',$_session['option_monthDateOfPublication']);?> >sierpień</option>
								<option value="9" <?php check_monthDateOfPublication('9',$_session['option_monthDateOfPublication']);?> >wrzesień</option>
								<option value="10" <?php check_monthDateOfPublication('10',$_session['option_monthDateOfPublication']);?> >październik</option>
								<option value="11" <?php check_monthDateOfPublication('11',$_session['option_monthDateOfPublication']);?> >listopad</option>
								<option value="12" <?php check_monthDateOfPublication('12',$_session['option_monthDateOfPublication']);?> >grudzień</option>
							</select>
						</div>
								
						<div>
							<label for="dayDateOfPublication">Dzień</label>
							<select name="dayDateOfPublication" id="dayDateOfPublication">
								<option value="1" <?php check_dayDateOfPublication('1',$_session['option_dayDateOfPublication']);?> >01</option>
								<option value="2" <?php check_dayDateOfPublication('2',$_session['option_dayDateOfPublication']);?> >02</option>
								<option value="3" <?php check_dayDateOfPublication('3',$_session['option_dayDateOfPublication']);?> >03</option>
								<option value="4" <?php check_dayDateOfPublication('4',$_session['option_dayDateOfPublication']);?> >04</option>
								<option value="5" <?php check_dayDateOfPublication('5',$_session['option_dayDateOfPublication']);?> >05</option>
								<option value="6" <?php check_dayDateOfPublication('6',$_session['option_dayDateOfPublication']);?> >06</option>
								<option value="7" <?php check_dayDateOfPublication('7',$_session['option_dayDateOfPublication']);?> >07</option>
								<option value="8" <?php check_dayDateOfPublication('8',$_session['option_dayDateOfPublication']);?> >08</option>
								<option value="9" <?php check_dayDateOfPublication('9',$_session['option_dayDateOfPublication']);?> >09</option>
								
								<option value="10" <?php check_dayDateOfPublication('10',$_session['option_dayDateOfPublication']);?> >10</option>
								<option value="11" <?php check_dayDateOfPublication('11',$_session['option_dayDateOfPublication']);?> >11</option>
								<option value="12" <?php check_dayDateOfPublication('12',$_session['option_dayDateOfPublication']);?> >12</option>
								<option value="13" <?php check_dayDateOfPublication('13',$_session['option_dayDateOfPublication']);?> >13</option>
								<option value="14" <?php check_dayDateOfPublication('14',$_session['option_dayDateOfPublication']);?> >14</option>
								<option value="15" <?php check_dayDateOfPublication('15',$_session['option_dayDateOfPublication']);?> >15</option>
								<option value="16" <?php check_dayDateOfPublication('16',$_session['option_dayDateOfPublication']);?> >16</option>
								<option value="17" <?php check_dayDateOfPublication('17',$_session['option_dayDateOfPublication']);?> >17</option>
								<option value="18" <?php check_dayDateOfPublication('18',$_session['option_dayDateOfPublication']);?> >18</option>
								<option value="19" <?php check_dayDateOfPublication('19',$_session['option_dayDateOfPublication']);?> >19</option>
						
								<option value="20" <?php check_dayDateOfPublication('20',$_session['option_dayDateOfPublication']);?> >20</option>
								<option value="21" <?php check_dayDateOfPublication('21',$_session['option_dayDateOfPublication']);?> >21</option>
								<option value="22" <?php check_dayDateOfPublication('22',$_session['option_dayDateOfPublication']);?> >22</option>
								<option value="23" <?php check_dayDateOfPublication('23',$_session['option_dayDateOfPublication']);?> >23</option>
								<option value="24" <?php check_dayDateOfPublication('24',$_session['option_dayDateOfPublication']);?> >24</option>
								<option value="25" <?php check_dayDateOfPublication('25',$_session['option_dayDateOfPublication']);?> >25</option>
								<option value="26" <?php check_dayDateOfPublication('26',$_session['option_dayDateOfPublication']);?> >26</option>
								<option value="27" <?php check_dayDateOfPublication('27',$_session['option_dayDateOfPublication']);?> >27</option>
								<option value="28" <?php check_dayDateOfPublication('28',$_session['option_dayDateOfPublication']);?> >28</option>
								<option value="29" <?php check_dayDateOfPublication('29',$_session['option_dayDateOfPublication']);?> >29</option>
																<option value="30" <?php check_dayDateOfPublication('30',$_session['option_dayDateOfPublication']);?> >30</option>
								<option value="31" <?php check_dayDateOfPublication('31',$_session['option_dayDateOfPublication']);?> >31</option>
							</select>
						</div>
						<div>
							<?php
								if (isset($_SESSION['publication_data']))
								{
									echo '<div class="error">'.$_SESSION['publication_data'].'</div>';
									unset($_SESSION['publication_data']);
								}
							?>
						</div>
					</div>
				</fieldset>
				
				<!-- Data last update -->
				<fieldset>
					<legend>Data ostatniej istotnej aktualizacji</legend>
					<div>
						<label for="yearDateOfLastUpdate">Rok</label>
						<select name="yearDateOfLastUpdate" id="yearDateOfLastUpdate">
							<option value="1980" <?php check_yearDateOfLastUpdate('1980',$_session['option_yearDateOfLastUpdate']);?> >1980</option>
							<option value="1981" <?php check_yearDateOfLastUpdate('1981',$_session['option_yearDateOfLastUpdate']);?> >1981</option>
							<option value="1982" <?php check_yearDateOfLastUpdate('1982',$_session['option_yearDateOfLastUpdate']);?> >1982</option>
							<option value="1983" <?php check_yearDateOfLastUpdate('1983',$_session['option_yearDateOfLastUpdate']);?> >1983</option>
							<option value="1984" <?php check_yearDateOfLastUpdate('1984',$_session['option_yearDateOfLastUpdate']);?> >1984</option>
							<option value="1985" <?php check_yearDateOfLastUpdate('1985',$_session['option_yearDateOfLastUpdate']);?> >1985</option>
							<option value="1986" <?php check_yearDateOfLastUpdate('1986',$_session['option_yearDateOfLastUpdate']);?> >1986</option>
							<option value="1987" <?php check_yearDateOfLastUpdate('1987',$_session['option_yearDateOfLastUpdate']);?> >1987</option>
							<option value="1988" <?php check_yearDateOfLastUpdate('1988',$_session['option_yearDateOfLastUpdate']);?> >1988</option>
							<option value="1989" <?php check_yearDateOfLastUpdate('1989',$_session['option_yearDateOfLastUpdate']);?> >1989</option>
						
							<option value="1990" <?php check_yearDateOfLastUpdate('1990',$_session['option_yearDateOfLastUpdate']);?> >1990</option>
							<option value="1991" <?php check_yearDateOfLastUpdate('1991',$_session['option_yearDateOfLastUpdate']);?> >1991</option>
							<option value="1992" <?php check_yearDateOfLastUpdate('1992',$_session['option_yearDateOfLastUpdate']);?> >1992</option>
							<option value="1993" <?php check_yearDateOfLastUpdate('1993',$_session['option_yearDateOfLastUpdate']);?> >1993</option>
							<option value="1994" <?php check_yearDateOfLastUpdate('1994',$_session['option_yearDateOfLastUpdate']);?> >1994</option>
							<option value="1995" <?php check_yearDateOfLastUpdate('1995',$_session['option_yearDateOfLastUpdate']);?> >1995</option>
							<option value="1996" <?php check_yearDateOfLastUpdate('1996',$_session['option_yearDateOfLastUpdate']);?> >1996</option>
							<option value="1997" <?php check_yearDateOfLastUpdate('1997',$_session['option_yearDateOfLastUpdate']);?> >1997</option>
							<option value="1998" <?php check_yearDateOfLastUpdate('1998',$_session['option_yearDateOfLastUpdate']);?> >1998</option>
							<option value="1999" <?php check_yearDateOfLastUpdate('1999',$_session['option_yearDateOfLastUpdate']);?> >1999</option>
														<option value="2000" <?php check_yearDateOfLastUpdate('2000',$_session['option_yearDateOfLastUpdate']);?> >2000</option>
							<option value="2001" <?php check_yearDateOfLastUpdate('2001',$_session['option_yearDateOfLastUpdate']);?> >2001</option>
							<option value="2002" <?php check_yearDateOfLastUpdate('002',$_session['option_yearDateOfLastUpdate']);?> >2002</option>
							<option value="2003" <?php check_yearDateOfLastUpdate('2003',$_session['option_yearDateOfLastUpdate']);?> >2003</option>
							<option value="2004" <?php check_yearDateOfLastUpdate('2004',$_session['option_yearDateOfLastUpdate']);?> >2004</option>
							<option value="2005" <?php check_yearDateOfLastUpdate('2005',$_session['option_yearDateOfLastUpdate']);?> >2005</option>
							<option value="2006" <?php check_yearDateOfLastUpdate('2006',$_session['option_yearDateOfLastUpdate']);?> >2006</option>
							<option value="2007" <?php check_yearDateOfLastUpdate('2007',$_session['option_yearDateOfLastUpdate']);?> >2007</option>
							<option value="2008" <?php check_yearDateOfLastUpdate('2008',$_session['option_yearDateOfLastUpdate']);?> >2008</option>
							<option value="2009" <?php check_yearDateOfLastUpdate('2009',$_session['option_yearDateOfLastUpdate']);?> >2009</option>
														<option value="2010" <?php check_yearDateOfLastUpdate('2010',$_session['option_yearDateOfLastUpdate']);?> >2010</option>
							<option value="2011" <?php check_yearDateOfLastUpdate('2011',$_session['option_yearDateOfLastUpdate']);?> >2011</option>
							<option value="2012" <?php check_yearDateOfLastUpdate('20012',$_session['option_yearDateOfLastUpdate']);?> >2012</option>
							<option value="2013" <?php check_yearDateOfLastUpdate('20013',$_session['option_yearDateOfLastUpdate']);?> >2013</option>
							<option value="2014" <?php check_yearDateOfLastUpdate('20014',$_session['option_yearDateOfLastUpdate']);?> >2014</option>
							<option value="2015" <?php check_yearDateOfLastUpdate('2015',$_session['option_yearDateOfLastUpdate']);?> >2015</option>
							<option value="2016" <?php check_yearDateOfLastUpdate('20016',$_session['option_yearDateOfLastUpdate']);?> >2016</option>
							<option value="2017" <?php check_yearDateOfLastUpdate('20017',$_session['option_yearDateOfLastUpdate']);?> >2017</option>
							<option value="2018" <?php check_yearDateOfLastUpdate('20018',$_session['option_yearDateOfLastUpdate']);?> >2018</option>
							<option value="2019" <?php check_yearDateOfLastUpdate('20019',$_session['option_yearDateOfLastUpdate']);?> >2019</option>
														<option value="2020" <?php check_yearDateOfLastUpdate('2020',$_session['option_yearDateOfLastUpdate']);?> >2020</option>
							<option value="2021" <?php check_yearDateOfLastUpdate('2021',$_session['option_yearDateOfLastUpdate']);?> >2021</option>
							<option value="2022" <?php check_yearDateOfLastUpdate('2022',$_session['option_yearDateOfLastUpdate']);?> >2022</option>
						</select>
					</div>
							
					<div>
						<label for="monthDateOfLastUpdate">Miesiąc</label>
						<select name="monthDateOfLastUpdate" id="monthDateOfLastUpdate">
							<option value="1" <?php check_monthDateOfLastUpdate('1',$_session['option_monthDateOfLastUpdate']);?> >styczeń</option>
							<option value="2" <?php check_monthDateOfLastUpdate('2',$_session['option_monthDateOfLastUpdate']);?> >Luty</option>
							<option value="3" <?php check_monthDateOfLastUpdate('3',$_session['option_monthDateOfLastUpdate']);?> >marzec</option>
							<option value="4" <?php check_monthDateOfLastUpdate('4',$_session['option_monthDateOfLastUpdate']);?> >kwiecień</option>
							<option value="5" <?php check_monthDateOfLastUpdate('5',$_session['option_monthDateOfLastUpdate']);?> >maj</option>
							<option value="6" <?php check_monthDateOfLastUpdate('6',$_session['option_monthDateOfLastUpdate']);?> >czerwiec</option>
							<option value="7" <?php check_monthDateOfLastUpdate('7',$_session['option_monthDateOfLastUpdate']);?> >lipiec</option>
							<option value="8" <?php check_monthDateOfLastUpdate('8',$_session['option_monthDateOfLastUpdate']);?> >sierpień</option>
							<option value="9" <?php check_monthDateOfLastUpdate('9',$_session['option_monthDateOfLastUpdate']);?> >wrzesień</option>
							<option value="10" <?php check_monthDateOfLastUpdate('10',$_session['option_monthDateOfLastUpdate']);?> >październik</option>
							<option value="11" <?php check_monthDateOfLastUpdate('11',$_session['option_monthDateOfLastUpdate']);?> >listopad</option>
							<option value="12" <?php check_monthDateOfLastUpdate('12',$_session['option_monthDateOfLastUpdate']);?> >grudzień</option>
						</select>
					</div>
						
					<div>
						<label for="dayDateOfLastUpdate">Dzień</label>
						<select name="dayDateOfLastUpdate" id="dayDateOfLastUpdate">
							<option value="1" <?php check_dayDateOfLastUpdate('1',$_session['option_dayDateOfLastUpdate']);?> >01</option>
							<option value="2" <?php check_dayDateOfLastUpdate('2',$_session['option_dayDateOfLastUpdate']);?> >02</option>
							<option value="3" <?php check_dayDateOfLastUpdate('3',$_session['option_dayDateOfLastUpdate']);?> >03</option>
							<option value="4" <?php check_dayDateOfLastUpdate('4',$_session['option_dayDateOfLastUpdate']);?> >04</option>
							<option value="5" <?php check_dayDateOfLastUpdate('5',$_session['option_dayDateOfLastUpdate']);?> >05</option>
							<option value="6" <?php check_dayDateOfLastUpdate('6',$_session['option_dayDateOfLastUpdate']);?> >06</option>
							<option value="7" <?php check_dayDateOfLastUpdate('7',$_session['option_dayDateOfLastUpdate']);?> >07</option>
							<option value="8" <?php check_dayDateOfLastUpdate('8',$_session['option_dayDateOfLastUpdate']);?> >08 </option>
							<option value="9" <?php check_dayDateOfLastUpdate('9',$_session['option_dayDateOfLastUpdate']);?> >09</option>
														<option value="10" <?php check_dayDateOfLastUpdate('10',$_session['option_dayDateOfLastUpdate']);?> >10</option>
							<option value="11" <?php check_dayDateOfLastUpdate('11',$_session['option_dayDateOfLastUpdate']);?> >11</option>
							<option value="12" <?php check_dayDateOfLastUpdate('12',$_session['option_dayDateOfLastUpdate']);?> >12</option>
							<option value="13" <?php check_dayDateOfLastUpdate('13',$_session['option_dayDateOfLastUpdate']);?> >13</option>
							<option value="14" <?php check_dayDateOfLastUpdate('14',$_session['option_dayDateOfLastUpdate']);?> >14</option>
							<option value="15" <?php check_dayDateOfLastUpdate('15',$_session['option_dayDateOfLastUpdate']);?> >15</option>
							<option value="16" <?php check_dayDateOfLastUpdate('16',$_session['option_dayDateOfLastUpdate']);?> >16</option>
							<option value="17" <?php check_dayDateOfLastUpdate('17',$_session['option_dayDateOfLastUpdate']);?> >17</option>
							<option value="18" <?php check_dayDateOfLastUpdate('18',$_session['option_dayDateOfLastUpdate']);?> >18</option>
							<option value="19" <?php check_dayDateOfLastUpdate('19',$_session['option_dayDateOfLastUpdate']);?> >19</option>
														<option value="20" <?php check_dayDateOfLastUpdate('20',$_session['option_dayDateOfLastUpdate']);?> >20</option>
							<option value="21" <?php check_dayDateOfLastUpdate('21',$_session['option_dayDateOfLastUpdate']);?> >21</option>
							<option value="22" <?php check_dayDateOfLastUpdate('22',$_session['option_dayDateOfLastUpdate']);?> >22</option>
							<option value="23" <?php check_dayDateOfLastUpdate('23',$_session['option_dayDateOfLastUpdate']);?> >23</option>
							<option value="24" <?php check_dayDateOfLastUpdate('24',$_session['option_dayDateOfLastUpdate']);?> >24</option>
							<option value="25" <?php check_dayDateOfLastUpdate('25',$_session['option_dayDateOfLastUpdate']);?> >25</option>
							<option value="26" <?php check_dayDateOfLastUpdate('26',$_session['option_dayDateOfLastUpdate']);?> >26</option>
							<option value="27" <?php check_dayDateOfLastUpdate('27',$_session['option_dayDateOfLastUpdate']);?> >27</option>
							<option value="28" <?php check_dayDateOfLastUpdate('28',$_session['option_dayDateOfLastUpdate']);?> >28</option>
							<option value="29" <?php check_dayDateOfLastUpdate('29',$_session['option_dayDateOfLastUpdate']);?> >29</option>
														<option value="30" <?php check_dayDateOfLastUpdate('30',$_session['option_dayDateOfLastUpdate']);?> >30</option>
							<option value="31" <?php check_dayDateOfLastUpdate('31',$_session['option_dayDateOfLastUpdate']);?> >31</option>
						</select>
					</div>
							
					<div>
						<?php
							if (isset($_SESSION['update_data']))
							{
								echo '<div class="error">'.$_SESSION['update_data'].'</div>';
								unset($_SESSION['update_data']);
							}
						?>
					</div>
				</fieldset>
				
				<!-- Status -->
				<fieldset>
					<legend>Oświadczenie o zgodności z ustawą</legend>
					<div>
						<label for="selectStatus">Status zgodności</label>
						<select name="selectStatus" id="selectStatus">
							<option value="Zgodna" <?php check_selected('Zgodna',$_session['option_selectStatus']);?> >Zgodna</option>
							<option value="Częściowo zgodna" <?php check_selected('Częściowo zgodna',$_session['option_selectStatus']);?> >Częściowo zgodna</option>
							<option value="Niezgodna" <?php check_selected('Niezgodna',$_session['option_selectStatus']);?> >Niezgodna</option>
						</select>
					</div>
					
					<div id="addStatusInput" class="status-is-hidden">
						<label for="contentNotAccessibleStatus">Treść niedostępna</label>
						<input type="text" id="contentNotAccessibleStatus" value="<?php
							if (isset($_SESSION['fr_contentNotAccessibleStatus']))
							{
								echo $_SESSION['fr_contentNotAccessibleStatus'];
								unset($_SESSION['fr_contentNotAccessibleStatus']);
							}
						?>" name="contentNotAccessibleStatus" />
									
						<?php
							if (isset($_SESSION['e_contentNotAccessibleStatus']))
							{
								echo '<div class="error">'.$_SESSION['e_contentNotAccessibleStatus'].'</div>';
								unset($_SESSION['e_contentNotAccessibleStatus']);
							}
						?>
									
						<label for="offStatus">Wyłączenia</label>
						<input type="text" id="offStatus" value="<?php
							if (isset($_SESSION['fr_offStatus']))
							{
								echo $_SESSION['fr_offStatus'];
								unset($_SESSION['fr_offStatus']);
							}
						?>"name="offStatus" />
									
						<?php
							if (isset($_SESSION['e_offStatus']))
							{
								echo '<div class="error">'.$_SESSION['e_offStatus'].'</div>';
								unset($_SESSION['e_offStatus']);
							}
						?>
									
						<label for="linkStatus">Link</label>
						<input type="url" id="linkStatus" value="<?php
							if (isset($_SESSION['fr_linkStatus']))
							{
								echo $_SESSION['fr_linkStatus'];
								unset($_SESSION['fr_linkStatus']);
							}
						?>" name="linkStatus" /></div>
									
						<?php
							if (isset($_SESSION['e_linkStatus']))
							{
								echo '<div class="error">'.$_SESSION['e_linkStatus'].'</div>';
								unset($_SESSION['e_linkStatus']);
							}
						?>		
									
					</div>
				</fieldset>

				<!-- Date make declaration -->
				<fieldset>
					<legend>Data sporządzenia deklaracji</legend>
					<div>
							
						<div>
							<label for="yearDateOfMade">Rok</label>
							<select name="yearDateOfMade" id="yearDateOfMade">
								<option value="1980" <?php check_yearDateOfMade('1980',$_session['option_yearDateOfPublication']);?> >1980</option>
								<option value="1981" <?php check_yearDateOfMade('1981',$_session['option_yearDateOfPublication']);?> >1981</option>
								<option value="1982" <?php check_yearDateOfMade('1982',$_session['option_yearDateOfPublication']);?> >1982</option>
								<option value="1983" <?php check_yearDateOfMade('1983',$_session['option_yearDateOfPublication']);?> >1983</option>
								<option value="1984" <?php check_yearDateOfMade('1984',$_session['option_yearDateOfPublication']);?> >1984</option>
								<option value="1985" <?php check_yearDateOfMade('1985',$_session['option_yearDateOfPublication']);?> >1985</option>
								<option value="1986" <?php check_yearDateOfMade('1986',$_session['option_yearDateOfPublication']);?> >1986</option>
								<option value="1987" <?php check_yearDateOfMade('1987',$_session['option_yearDateOfPublication']);?> >1987</option>
								<option value="1988" <?php check_yearDateOfMade('1988',$_session['option_yearDateOfPublication']);?> >1988</option>
								<option value="1989" <?php check_yearDateOfMade('1989',$_session['option_yearDateOfPublication']);?> >1989</option>
																
								<option value="1990" <?php check_yearDateOfMade('1990',$_session['option_yearDateOfPublication']);?> >1990</option>
								<option value="1991" <?php check_yearDateOfMade('1991',$_session['option_yearDateOfPublication']);?> >1991</option>
								<option value="1992" <?php check_yearDateOfMade('1992',$_session['option_yearDateOfPublication']);?> >1992</option>
								<option value="1993" <?php check_yearDateOfMade('1993',$_session['option_yearDateOfPublication']);?> >1993</option>
								<option value="1994" <?php check_yearDateOfMade('1994',$_session['option_yearDateOfPublication']);?> >1994</option>
								<option value="1995" <?php check_yearDateOfMade('1995',$_session['option_yearDateOfPublication']);?> >1995</option>
								<option value="1996" <?php check_yearDateOfMade('1996',$_session['option_yearDateOfPublication']);?> >1996</option>
								<option value="1997" <?php check_yearDateOfMade('1997',$_session['option_yearDateOfPublication']);?> >1997</option>
								<option value="1998" <?php check_yearDateOfMade('1998',$_session['option_yearDateOfPublication']);?> >1998</option>
								<option value="1999" <?php check_yearDateOfMade('1999',$_session['option_yearDateOfPublication']);?> >1999</option>
																
								<option value="2000" <?php check_yearDateOfMade('2000',$_session['option_yearDateOfPublication']);?> >2000</option>
								<option value="2001" <?php check_yearDateOfMade('2001',$_session['option_yearDateOfPublication']);?>  >2001</option>
								<option value="2002" <?php check_yearDateOfMade('2002',$_session['option_yearDateOfPublication']);?>  >2002</option>
								<option value="2003" <?php check_yearDateOfMade('2003',$_session['option_yearDateOfPublication']);?>  >2003</option>
								<option value="2004" <?php check_yearDateOfMade('2004',$_session['option_yearDateOfPublication']);?>  >2004</option>
								<option value="2005" <?php check_yearDateOfMade('2005',$_session['option_yearDateOfPublication']);?>  >2005</option>
								<option value="2006" <?php check_yearDateOfMade('2006',$_session['option_yearDateOfPublication']);?>  >2006</option>
								<option value="2007" <?php check_yearDateOfMade('2007',$_session['option_yearDateOfPublication']);?>  >2007</option>
								<option value="2008" <?php check_yearDateOfMade('2008',$_session['option_yearDateOfPublication']);?>  >2008</option>	
								<option value="2009" <?php check_yearDateOfMade('2009',$_session['option_yearDateOfPublication']);?>  >2009</option>
						
								<option value="2010" <?php check_yearDateOfMade('2010',$_session['option_yearDateOfPublication']);?>  >2010</option>
								<option value="2011" <?php check_yearDateOfMade('2011',$_session['option_yearDateOfPublication']);?>  >2011</option>
								<option value="2012" <?php check_yearDateOfMade('2012',$_session['option_yearDateOfPublication']);?>  >2012</option>
								<option value="2013" <?php check_yearDateOfMade('2013',$_session['option_yearDateOfPublication']);?>  >2013</option>
								<option value="2014" <?php check_yearDateOfMade('2014',$_session['option_yearDateOfPublication']);?>  >2014</option>
								<option value="2015" <?php check_yearDateOfMade('2015',$_session['option_yearDateOfPublication']);?>  >2015</option>
								<option value="2016" <?php check_yearDateOfMade('2016',$_session['option_yearDateOfPublication']);?>  >2016</option>
								<option value="2017" <?php check_yearDateOfMade('2017',$_session['option_yearDateOfPublication']);?>  >2017</option>
								<option value="2018" <?php check_yearDateOfMade('2018',$_session['option_yearDateOfPublication']);?>  >2018</option>
								<option value="2019" <?php check_yearDateOfMade('2019',$_session['option_yearDateOfPublication']);?>  >2019</option>
																
								<option value="2020" <?php check_yearDateOfMade('2020',$_session['option_yearDateOfPublication']);?>  >2020</option>
								<option value="2021" <?php check_yearDateOfMade('2021',$_session['option_yearDateOfPublication']);?>  >2021</option>
								<option value="2022" <?php check_yearDateOfMade('2022',$_session['option_yearDateOfPublication']);?>  >2022</option>
							</select>
						</div>
								
						<div>
							<label for="monthDateOfMade">Miesiąc</label>
							<select name="monthDateOfMade" id="monthDateOfMade">
								<option value="1" <?php check_monthDateOfMade('1',$_session['option_monthDateOfPublication']);?> >styczeń</option>
								<option value="2" <?php check_monthDateOfMade('2',$_session['option_monthDateOfPublication']);?> >Luty</option>
								<option value="3" <?php check_monthDateOfMade('3',$_session['option_monthDateOfPublication']);?> >marzec</option>
								<option value="4" <?php check_monthDateOfMade('4',$_session['option_monthDateOfPublication']);?> >kwiecień</option>
								<option value="5" <?php check_monthDateOfMade('5',$_session['option_monthDateOfPublication']);?> >maj</option>
								<option value="6" <?php check_monthDateOfMade('6',$_session['option_monthDateOfPublication']);?> >czerwiec</option>
								<option value="7" <?php check_monthDateOfMade('7',$_session['option_monthDateOfPublication']);?> >lipiec</option>
								<option value="8" <?php check_monthDateOfMade('8',$_session['option_monthDateOfPublication']);?> >sierpień</option>
								<option value="9" <?php check_monthDateOfMade('9',$_session['option_monthDateOfPublication']);?> >wrzesień</option>
								<option value="10" <?php check_monthDateOfMade('10',$_session['option_monthDateOfPublication']);?> >październik</option>
								<option value="11" <?php check_monthDateOfMade('11',$_session['option_monthDateOfPublication']);?> >listopad</option>
								<option value="12" <?php check_monthDateOfMade('12',$_session['option_monthDateOfPublication']);?> >grudzień</option>
							</select>
						</div>
								
						<div>
							<label for="dayDateOfMade">Dzień</label>
							<select name="dayDateOfMade" id="dayDateOfMade">
								<option value="1" <?php check_dayDateOfMade('1',$_session['option_dayDateOfPublication']);?> >01</option>
								<option value="2" <?php check_dayDateOfMade('2',$_session['option_dayDateOfPublication']);?> >02</option>
								<option value="3" <?php check_dayDateOfMade('3',$_session['option_dayDateOfPublication']);?> >03</option>
								<option value="4" <?php check_dayDateOfMade('4',$_session['option_dayDateOfPublication']);?> >04</option>
								<option value="5" <?php check_dayDateOfMade('5',$_session['option_dayDateOfPublication']);?> >05</option>
								<option value="6" <?php check_dayDateOfMade('6',$_session['option_dayDateOfPublication']);?> >06</option>
								<option value="7" <?php check_dayDateOfMade('7',$_session['option_dayDateOfPublication']);?> >07</option>
								<option value="8" <?php check_dayDateOfMade('8',$_session['option_dayDateOfPublication']);?> >08</option>
								<option value="9" <?php check_dayDateOfMade('9',$_session['option_dayDateOfPublication']);?> >09</option>
								
								<option value="10" <?php check_dayDateOfMade('10',$_session['option_dayDateOfPublication']);?> >10</option>
								<option value="11" <?php check_dayDateOfMade('11',$_session['option_dayDateOfPublication']);?> >11</option>
								<option value="12" <?php check_dayDateOfMade('12',$_session['option_dayDateOfPublication']);?> >12</option>
								<option value="13" <?php check_dayDateOfMade('13',$_session['option_dayDateOfPublication']);?> >13</option>
								<option value="14" <?php check_dayDateOfMade('14',$_session['option_dayDateOfPublication']);?> >14</option>
								<option value="15" <?php check_dayDateOfMade('15',$_session['option_dayDateOfPublication']);?> >15</option>
								<option value="16" <?php check_dayDateOfMade('16',$_session['option_dayDateOfPublication']);?> >16</option>
								<option value="17" <?php check_dayDateOfMade('17',$_session['option_dayDateOfPublication']);?> >17</option>
								<option value="18" <?php check_dayDateOfMade('18',$_session['option_dayDateOfPublication']);?> >18</option>
								<option value="19" <?php check_dayDateOfMade('19',$_session['option_dayDateOfPublication']);?> >19</option>
						
								<option value="20" <?php check_dayDateOfMade('20',$_session['option_dayDateOfPublication']);?> >20</option>
								<option value="21" <?php check_dayDateOfMade('21',$_session['option_dayDateOfPublication']);?> >21</option>
								<option value="22" <?php check_dayDateOfMade('22',$_session['option_dayDateOfPublication']);?> >22</option>
								<option value="23" <?php check_dayDateOfMade('23',$_session['option_dayDateOfPublication']);?> >23</option>
								<option value="24" <?php check_dayDateOfMade('24',$_session['option_dayDateOfPublication']);?> >24</option>
								<option value="25" <?php check_dayDateOfMade('25',$_session['option_dayDateOfPublication']);?> >25</option>
								<option value="26" <?php check_dayDateOfMade('26',$_session['option_dayDateOfPublication']);?> >26</option>
								<option value="27" <?php check_dayDateOfMade('27',$_session['option_dayDateOfPublication']);?> >27</option>
								<option value="28" <?php check_dayDateOfMade('28',$_session['option_dayDateOfPublication']);?> >28</option>
								<option value="29" <?php check_dayDateOfMade('29',$_session['option_dayDateOfPublication']);?> >29</option>
																
								<option value="30" <?php check_dayDateOfMade('30',$_session['option_dayDateOfPublication']);?> >30</option>
								<option value="31" <?php check_dayDateOfMade('31',$_session['option_dayDateOfPublication']);?> >31</option>
							</select>
						</div>
						<div>
							<?php
								if (isset($_SESSION['publication_data']))
								{
									echo '<div class="error">'.$_SESSION['publication_data'].'</div>';
									unset($_SESSION['publication_data']);
								}
							?>
						</div>
					</div>
				</fieldset>

				<!-- Declaration -->
				<fieldset>
					<legend>Przygotowanie deklaracji</legend>
					<div>
						<div>
							<label for="declaration">Deklaracje sporządzona została na podstawie</label>
						</div>
						<select id="declaration" name="declaration">
							<option value="Samooceny przeprowadzonej przez podmiot publiczny" 
								<?php
									check_declaration('Samooceny przeprowadzonej przez podmiot publiczny',$_session['option_declaration']);
								?>
								>Samooceny przeprowadzonej przez podmiot publiczny
							</option>
							
							<option value="Badania przeprowadzonego przez podmiot zewnętrzny" 
								<?php
									check_declaration('Badania przeprowadzonego przez podmiot zewnętrzny',$_session['option_declaration']);
								?>
								>Badania przeprowadzonego przez podmiot zewnętrzny
							</option>
						</select>
					</div>
					
					<div id="addDeclarationInput" class="declaration-is-hidden">
						<div>
							<label for="nameExtermalEntity">Nazwa podmiotu zewnętrznego</label>
							<div>
								<input type="text" id="nameExtermalEntity" value="<?php
									if (isset($_SESSION['fr_nameExtermalEntity']))
									{
										echo $_SESSION['fr_nameExtermalEntity'];
										unset($_SESSION['fr_nameExtermalEntity']);
									}
								?>"  name="nameExtermalEntity" />
									
								<?php
									if (isset($_SESSION['e_nameExtermalEntity']))
									{
										echo '<div class="error">'.$_SESSION['e_nameExtermalEntity'].'</div>';
										unset($_SESSION['e_nameExtermalEntity']);
									}
								?>
							</div>	
						</div>
					</div>
				</fieldset>
				
				<!-- Arch access -->
				<fieldset>
					<legend>Dostępność architektoniczna</legend>
					<div>
						<label for="archaccess">Dostępność architektoniczna</label>
						<div>
							<textarea id="archaccess" name="archaccess"><?php
								if (isset($_SESSION['fr_archaccess']))
								{
									echo $_SESSION['fr_archaccess'];
									unset($_SESSION['fr_archaccess']);
								}
							?></textarea>
									
							<?php
								if (isset($_SESSION['e_archaccess']))
								{
									echo '<div class="error">'.$_SESSION['e_archaccess'].'</div>';
									unset($_SESSION['e_archaccess']);
								}
							?>
						</div>
					</div>
				</fieldset>
				
				<!-- Mobile application -->
				<fieldset>
					<legend>Aplikacja mobilna</legend>
					<div>
						<label for="mobApp">Aplikacja mobilna</label>
						<select id="mobApp" name="mobApp">
							<option value="Nie" <?php check_mobileApp('Nie',$_session['option_mobApp']);?> >Nie</option>
							<option value="Tak" <?php check_mobileApp('Tak',$_session['option_mobApp']);?> >Tak</option>
						</select>
					</div>
					
					<div id="addMobileAppInput" class="mobileApp-is-hidden">
						<div>
							<label for="describeMobileApp">Opis</label>
							<input type="text" id="describeMobileApp" value="<?php
								if (isset($_SESSION['fr_describeMobileApp']))
								{
									echo $_SESSION['fr_describeMobileApp'];
									unset($_SESSION['fr_describeMobileApp']);
								}
							?>" name="describeMobileApp" />
									
							<?php
								if (isset($_SESSION['e_describeMobileApp']))
								{
									echo '<div class="error">'.$_SESSION['e_describeMobileApp'].'</div>';
									unset($_SESSION['e_describeMobileApp']);
								}
							?>
									
						</div>
						
						<div>
							<label for="linkMobileApp">Link</label>
							<input type="url" id="linkMobileApp" value="<?php
								if (isset($_SESSION['fr_linkMobileApp']))
								{
									echo $_SESSION['fr_linkMobileApp'];
									unset($_SESSION['fr_linkMobileApp']);
								}
							?>" name="linkMobileApp" /></div>
									
							<?php
								if (isset($_SESSION['e_linkMobileApp']))
								{
									echo '<div class="error">'.$_SESSION['e_linkMobileApp'].'</div>';
									unset($_SESSION['e_linkMobileApp']);
								}
							?>			
						</div>
				</fieldset>
				
				<!-- Additional information -->
				<fieldset>
					<legend>Informacje dodatkowe</legend>
					<div>
						<label for="addInformation">Informacje dodatkowe</label>
						<div>
							<textarea id="addInformation" name="addInformation"><?php
								if (isset($_SESSION['fr_addInformation']))
								{
									echo $_SESSION['fr_addInformation'];
									unset($_SESSION['fr_addInformation']);
								}
							?></textarea>
									
							<?php
								if (isset($_SESSION['e_addInformation']))
								{
									echo '<div class="error">'.$_SESSION['e_addInformation'].'</div>';
									unset($_SESSION['e_addInformation']);
								}
							?>
						</div>
					</div>
				</fieldset>
			
				<!-- Submit button -->
				<input type="submit" value="Generuj"/>	

			</form>
		</div>
	</body>
	
	<!-- Validators script-->
	<script type="text/javascript" src="js/valid.js"></script>
	
	<!-- status select list script-->
	<script type="text/javascript" src="js/status.js"></script>
	
	<!-- declaration script -->
	<script type="text/javascript" src="js/declaration.js"></script>
	
	<!-- Mobile app script -->
	<script type="text/javascript" src="js/mobileApp.js"></script>
</html>