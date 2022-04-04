<?php
    session_start ();

    //Session variable of list checker 
    $_session['option_selectStatus'] = 'zgodna';
    $_session['option_yearDateOfPublication'] = '1980';
    $_session['option_monthDateOfPublication'] = 'styczeń';
    $_session['option_dayDateOfPublication'] = '01';
    $_session['option_yearDateOfLastUpdate'] = '1980';
    $_session['option_monthDateOfLastUpdate'] = 'styczeń';
    $_session['option_dayDateOfLastUpdate'] = '01';
    $_session['option_yearDateOfMade'] = '1980';
    $_session['option_monthDateOfMade'] = 'styczeń';
    $_session['option_dayDateOfMade'] = '01';
    $_session['option_declaration'] = 'Samooceny przeprowadzonej przez podmiot publiczny';
    $_session['option_mobApp'] = 'Nie';
    $_session['option_yearReview'] = '1980';
    $_session['option_monthReview'] = 'styczeń';
    $_session['option_dayReview'] = '01';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['selectStatus']))
    {
        $_session['option_selectStatus'] = $_POST['selectStatus'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['declaration']))
    {
        $_session['option_declaration'] = $_POST['declaration'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mobApp']))
    {
        $_session['option_mobApp'] = $_POST['mobApp'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfPublication']))
    {
        $_session['option_yearDateOfPublication'] = $_POST['yearDateOfPublication'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfPublication']))
    {
        $_session['option_monthDateOfPublication'] = $_POST['monthDateOfPublication'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfPublication']))
    {
        $_session['option_dayDateOfPublication'] = $_POST['dayDateOfPublication'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfLastUpdate']))
    {
        $_session['option_yearDateOfLastUpdate'] = $_POST['yearDateOfLastUpdate'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfLastUpdate']))
    {
        $_session['option_monthDateOfLastUpdate'] = $_POST['monthDateOfLastUpdate'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfLastUpdate']))
    {
        $_session['option_dayDateOfLastUpdate'] = $_POST['dayDateOfLastUpdate'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearDateOfMade']))
    {
        $_session['option_yearDateOfMade'] = $_POST['yearDateOfMade'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthDateOfMade']))
    {
        $_session['option_monthDateOfMade'] = $_POST['monthDateOfMade'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayDateOfMade']))
    {
        $_session['option_dayDateOfMade'] = $_POST['dayDateOfMade'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['yearReview']))
    {
        $_session['option_yearReview'] = $_POST['yearReview'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['monthReview']))
    {
        $_session['option_monthReview'] = $_POST['monthReview'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dayReview']))
    {
        $_session['option_dayReview'] = $_POST['dayReview'];
    }

    function check_selected($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_selectStatus']);
        } else {echo '';}
    }

    function check_declaration($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_declaration']);
        } else {echo '';}
    }

    function check_mobileApp($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_mobApp']);
        } else {echo '';}
    }

    function check_yearDateOfPublication($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_yearDateOfPublication']);
        } else {echo '';}
    }

    function check_monthDateOfPublication($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_monthDateOfPublication']);
        } else {echo '';}
    }

    function check_dayDateOfPublication($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_dayDateOfPublication']);
        } else {echo '';}
    }

    function check_yearDateOfLastUpdate($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_session['option_yearDateOfLastUpdate']);
        } else {echo '';}
    }

    function check_monthDateOfLastUpdate($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_monthDateOfLastUpdate']);
        } else {echo '';}
    }

    function check_dayDateOfLastUpdate($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_ dayDateOfLastUpdate']);
        } else {echo '';}
    }

    function check_yearDateOfMade($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_yearDateOfMade']);
        } else {echo '';}
    }

    function check_monthDateOfMade($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_monthDateOfMade']);
        } else {echo '';}
    }

    function check_dayDateOfMade($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_dayDateOfMade']);
        } else {echo '';}
    }

    function check_yearReview($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_yearReview']);
        } else {echo '';}
    }

    function check_monthReview($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_monthReview']);
        } else {echo '';}
    }

    function check_dayReview($field_value, $option)
    {
        if($field_value === $option)
        {
            echo ' selected';
            unset($_SESSION['option_dayReview']);
        } else {echo '';}
    }


    // The functions extracts the entity name
    function extractEntityName($d){
        $flaga = "set";
        $arr = array();
        $awstep = ['a11y-wstep'];
        $extract = $d->getElementById($awstep[0])->nodeValue;
        $words = explode(" ", $extract);
        foreach($words as $w){
            if($w === "zobowiązuje" && $flaga === "set"){
                $flaga = "nie";
            } else if($flaga === "set" && $w !== 'zobowiązuje'){
                array_push($arr, $w);
                //array_push($arr, " ");
            }
        }
        $str = implode(" ", $arr);
        $str = ltrim($str);
        $str = rtrim($str);
        $_SESSION['fr_entityName'] = $str;
    }

    // The function extracts URL name
    function extractURLName($d){
        $aURLname = ['a11y-url'];
        $extract = $d->getElementById($aURLname[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_serviceName'] = $extract;
    }
    
    function extractContactName($d){
        $aContactName = ['a11y-osoba'];
        $extract = $d->getElementById($aContactName[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_contactName'] = $extract;
    }

    function extractEmailContact($d){
        $aEmailContact = ['a11y-email'];
        $extract = $d->getElementById($aEmailContact[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_contactEmail'] = $extract;
    }

    function extractTelephonContact($d){
        $aTelephonContact = ['a11y-telefon'];
        $extract = $d->getElementById($aTelephonContact[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_contactTelephon'] = $extract;
    }

    function extractArchAccess($d){
        $aArchAccess = ['a11y-opis-architektury'];
        $extract = $d->getElementById($aArchAccess[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_archaccess'] = $extract;
    }
    
    function extractNotAccessContent($d){
        $aNotAccessContent = ['a11y-tresci-niedostepne'];
        $extract = $d->getElementById($aNotAccessContent[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_contentNotAccessibleStatus'] = $extract;
    }

    function extractOff($d){
        $aOff = ['a11y-wylaczenia'];
        $extract = $d->getElementById($aOff[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_offStatus'] = $extract;
    }

    function extractExtremalEntityName($d){
        $aExtermalEntityName = ['a11y-audytor-zewnetrzny'];
        $extract = $d->getElementById($aExtermalEntityName[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_nameExtermalEntity'] = $extract;
    }

    function extractURL($d){
        $kodToLink = $d->saveHtml($node);
        //echo $kodToLink;
        $word = explode(" ", $kodToLink);
        $indexTab = 1;
        $s = "";
        foreach($word as $w){
            $indexTab += 1;
            if($w === 'id="a11y-url"'){
                $s = $word[$indexTab - 1];
            }
        }
        $s = ltrim($s);
        $s = rtrim($s);
        $s = strchr($s, '"');
        $s = substr($s, strpos($s,'"') + 1,
        strRpos($s, '"') - strpos($s, '"') - 1);
        $_SESSION['fr_entityURLAdress'] = $s;
    }

    function extractAddInformation($d){
        $aAddInformation = ['a11y-tresc-informacji-dodatkowych'];
        $extract = $d->getElementById($aAddInformation[0])->nodeValue;
        $extract = ltrim($extract);
        $extract = rtrim($extract);
        $_SESSION['fr_addInformation'] = $extract;
    }

    function extractMobileAppURL($d){
        $kodToLink = $d->saveHtml($node);
        //echo $kodToLink;
       $word = explode(" ", $kodToLink);
        $indexTab = 1;
        $s = "";
        foreach($word as $w){
            $indexTab += 1;
            if($w === 'id="url-aplikacja"'){
                $s = $word[$indexTab - 1];
            }
        }
        $s = ltrim($s);
        $s = rtrim($s);
        $s = strchr($s, '"');
        $s = substr($s, strpos($s,'"') + 1,
                    strRpos($s, '"') - strpos($s, '"') - 1);
        $_SESSION['fr_linkMobileApp'] = $s;
        
        $extractDescribe = $d->getElementById('url-aplikacja')->nodeValue;
       $_SESSION['fr_describeMobileApp'] = $extractDescribe;
        
    }

    $url = $_POST['url'];
        if ($url) {
            $aw = 'a11y-wstep';
            $ids = ['a11y-wstep', 'a11y-podmiot', 'a11y-url', 'a11y-data-publikacja', 'a11y-data-aktualizacja', 'a11y-status', 'a11y-ocena', 'a11y-kontakt', 'a11y-osoba', 'a11y-email', 'a11y-telefon', 'a11y-procedura', 'a11y-data-sporzadzenie', 'a11y-audytor', 'a11y-aplikacje', 'a11y-architektura'];
            $file = file_get_contents($url);
            $dom = new DOMDocument();
				libxml_use_internal_errors(true);
            $dom->loadHTML('<?xml encoding="UTF-8"?>' . $file);
            
            $statusFlag = "set";
            $statusArr = array();
            $aStatus = ['a11y-status'];
            $statusExtract = $dom->getElementById($aStatus[0])->nodeValue;
            
            $statusWords = explode(" ", $statusExtract);
            foreach($statusWords as $w){
            if($w === "z" && $statusFlag === "set"){
                $statusFlag = "nie";
            } else if($statusFlag === "set" && $w !== 'z'){
                        array_push($statusArr, $w);
                    }
            }
            unset($statusArr[0]);
            unset($statusArr[1]);
            unset($statusArr[2]);
            //array_splice
            $wolny = implode(" ", $statusArr);
            $_session['option_selectStatus'] = $wolny;
            
            $aDataPublication = ['a11y-data-publikacja'];
            $aDataPublicationExtract = $dom->getElementById($aDataPublication[0])->nodeValue;
            ltrim($aDataPublicationExtract);
            $dyop = substr($aDataPublicationExtract, 0, 4);
            
            $_session['option_yearDateOfPublication'] = $dyop;
            
            $dmop = substr($aDataPublicationExtract, 5, 2);
            if($dmop === '01'){ $_session['option_monthDateOfPublication'] = '1';}
            else if($dmop === '02'){ $_session['option_monthDateOfPublication'] = '2';}
            else if($dmop === '03'){ $_session['option_monthDateOfPublication'] = '3';}
            else if($dmop === '04'){ $_session['option_monthDateOfPublication'] = '4';}
            else if($dmop === '05'){ $_session['option_monthDateOfPublication'] = '5';}
            else if($dmop === '06'){ $_session['option_monthDateOfPublication'] = '6';}
            else if($dmop === '07'){ $_session['option_monthDateOfPublication'] = '7';}
            else if($dmop === '08'){ $_session['option_monthDateOfPublication'] = '8';}
            else if($dmop === '09'){ $_session['option_monthDateOfPublication'] = '9';}
            else { $_session['option_monthDateOfPublication'] = $dmop;}
            
            $ddop = substr($aDataPublicationExtract, 8, 2);
            if($ddop === '01'){ $_session['option_dayDateOfPublication'] = '1'; }
            else if($ddop === '02'){ $_session['option_dayDateOfPublication'] = '2'; }
            else if($ddop === '03'){ $_session['option_dayDateOfPublication'] = '3'; }
            else if($ddop === '04'){ $_session['option_dayDateOfPublication'] = '4'; }
            else if($ddop === '05'){ $_session['option_dayDateOfPublication'] = '5'; }
            else if($ddop === '06'){ $_session['option_dayDateOfPublication'] = '6'; }
            else if($ddop === '07'){ $_session['option_dayDateOfPublication'] = '7'; }
            else if($ddop === '08'){ $_session['option_dayDateOfPublication'] = '8'; }
            else if($ddop === '09'){ $_session['option_dayDateOfPublication'] = '9'; }
            else { $_session['option_dayDateOfPublication'] = $ddop; }
            
            $aDataLastUpdate = ['a11y-data-aktualizacja'];
            $aDataLastUpdateExtract = $dom->getElementById($aDataLastUpdate[0])->nodeValue;
            
            $dyolu = substr($aDataLastUpdateExtract, 0, 4);
            $_session['option_yearDateOfLastUpdate'] = $dyolu;
            
            $dmolu = substr($aDataLastUpdateExtract, 5, 2);
            if($dmolu === '01'){ $_session['option_monthDateOfLastUpdate'] = '1';}
            else if($dmolu === '02'){ $_session['option_monthDateOfLastUpdate'] = '2';}
            else if($dmolu === '03'){ $_session['option_monthDateOfLastUpdate'] = '3';}
            else if($dmolu === '04'){ $_session['option_monthDateOfLastUpdate'] = '4';}
            else if($dmolu === '05'){ $_session['option_monthDateOfLastUpdate'] = '5';}
            else if($dmolu === '06'){ $_session['option_monthDateOfLastUpdate'] = '6';}
            else if($dmolu === '07'){ $_session['option_monthDateOfLastUpdate'] = '7';}
            else if($dmolu === '08'){ $_session['option_monthDateOfLastUpdate'] = '8';}
            else if($dmolu === '09'){ $_session['option_monthDateOfLastUpdate'] = '9';}
            else { $_session['option_monthDateOfLastUpdate'] = $dmolu;}

            $ddolu = substr($aDataLastUpdateExtract, 8, 2);
            if($ddolu === '01'){ $_session['option_dayDateOfPublication'] = '1'; }
            else if($ddolu === '02'){ $_session['option_dayDateOfLastUpdate'] = '2'; }
            else if($ddolu === '03'){ $_session['option_dayDateOfLastUpdate'] = '3'; }
            else if($ddolu === '04'){ $_session['option_dayDateOfLastUpdate'] = '4'; }
            else if($ddolu === '05'){ $_session['option_dayDateOfLastUpdate'] = '5'; }
            else if($ddolu === '06'){ $_session['option_dayDateOfLastUpdate'] = '6'; }
            else if($ddolu === '07'){ $_session['option_dayDateOfLastUpdate'] = '7'; }
            else if($ddolu === '08'){ $_session['option_dayDateOfLastUpdate'] = '8'; }
            else if($ddolu === '09'){ $_session['option_dayDateOfLastUpdate'] = '9'; }
            else { $_session['option_dayDateOfLastUpdate'] = $ddolu; }
            
            $aDataMade  = ['a11y-data-sporzadzenie'];
            $aDataMadeExtract = $dom->getElementById($aDataMade[0])->nodeValue;
            
            $dym = substr($aDataMadeExtract, 0, 4);
            $_session['option_yearDateOfMade'] = $dym;
            
            $dmm = substr($aDataMadeExtract, 5, 2);
            if($dmm === '01'){ $_session['option_monthDateOfMade'] = '1';}
            else if($dmm === '02'){ $_session['option_monthDateOfMade'] = '2';}
            else if($dmm === '03'){ $_session['option_monthDateOfMade'] = '3';}
            else if($dmm === '04'){ $_session['option_monthDateOfMade'] = '4';}
            else if($dmm === '05'){ $_session['option_monthDateOfMade'] = '5';}
            else if($dmm === '06'){ $_session['option_monthDateOfMade'] = '6';}
            else if($dmm === '07'){ $_session['option_monthDateOfMade'] = '7';}
            else if($dmm === '08'){ $_session['option_monthDateOfMade'] = '8';}
            else if($dmm === '09'){ $_session['option_monthDateOfMade'] = '9';}
            else { $_session['option_monthDateOfMade'] = $dmm;}
            
            $ddm = substr($aDataMadeExtract, 8, 2);
            if($ddm === '01'){ $_session['option_dayDateOfMade'] = '1'; }
            else if($ddm === '02'){ $_session['option_dayDateOfMade'] = '2'; }
            else if($ddm === '03'){ $_session['option_dayDateOfMade'] = '3'; }
            else if($ddm === '04'){ $_session['option_dayDateOfMade'] = '4'; }
            else if($ddm === '05'){ $_session['option_dayDateOfMade'] = '5'; }
            else if($ddm === '06'){ $_session['option_dayDateOfMade'] = '6'; }
            else if($ddm === '07'){ $_session['option_dayDateOfMade'] = '7'; }
            else if($ddm === '08'){ $_session['option_dayDateOfMade'] = '8'; }
            else if($ddm === '09'){ $_session['option_dayDateOfMade'] = '9'; }
            else { $_session['option_dayDateOfMade'] = $ddm; }
           
            $todayDate=date("Y-m-d");
            
            $dyr = substr($todayDate, 0, 4);
            $_session['option_yearReview'] = $dyr;
            
            $dmr = substr($todayDate, 5, 2);
            if($dmr === '01'){ $_session['option_monthReview'] = '1';}
            else if($dmr === '02'){ $_session['option_monthReview'] = '2';}
            else if($dmr === '03'){ $_session['option_monthReview'] = '3';}
            else if($dmr === '04'){ $_session['option_monthReview'] = '4';}
            else if($dmr === '05'){ $_session['option_monthReview'] = '5';}
            else if($dmr === '06'){ $_session['option_monthReview'] = '6';}
            else if($dmr === '07'){ $_session['option_monthReview'] = '7';}
            else if($dmr === '08'){ $_session['option_monthReview'] = '8';}
            else if($dmr === '09'){ $_session['option_monthReview'] = '9';}
            else { $_session['option_monthReview'] = $dmr;}
            
            $ddr = substr($todayDate, 8, 2);
            if($ddr === '01'){ $_session['option_dayReview'] = '1'; }
            else if($ddr === '02'){ $_session['option_dayReview'] = '2'; }
            else if($ddr === '03'){ $_session['option_dayReview'] = '3'; }
            else if($ddr === '04'){ $_session['option_dayReview'] = '4'; }
            else if($ddr === '05'){ $_session['option_dayReview'] = '5'; }
            else if($ddr === '06'){ $_session['option_dayReview'] = '6'; }
            else if($ddr === '07'){ $_session['option_dayReview'] = '7'; }
            else if($ddr === '08'){ $_session['option_dayReview'] = '8'; }
            else if($ddr === '09'){ $_session['option_dayReview'] = '9'; }
            else { $_session['option_dayReview'] = $ddr; }
            
            extractEntityName($dom);
            extractURLName($dom);
            extractContactName($dom);
            extractEmailContact($dom);
            extractTelephonContact($dom);
            extractArchAccess($dom);
            extractNotAccessContent($dom);
            extractExtremalEntityName($dom);
            extractOff($dom);
            extractURL($dom);
            extractAddInformation($dom);
            extractMobileAppURL($dom);
            
            if(strlen($_SESSION['fr_describeMobileApp']) > 1 ||
               strlen($_SESSION['fr_linkMobileApp']) > 1){
                $_session['option_mobApp'] =  'tak';
            }
            
            if(strlen($_SESSION['fr_nameExtermalEntity']) > 1){
                $_session['option_declaration'] = "Badania przeprowadzonego przez podmiot zewnętrzny";
            }
        }

	if (isset($_POST['entityName']))
	{
		$valid_result = true;

		// Entity Name valid
		$entityName = $_POST['entityName'];
		$_SESSION['s_entityName'] = $entityName;

		if (strlen($entityName) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityName']="Musisz podać nazwę podmiotu!";
		}

		$_SESSION['fr_entityName'] = $entityName;

		//Service Name
		$serviceName = $_POST['serviceName'];
		$_SESSION['s_serviceName'] = $serviceName;

		if (strlen($serviceName) < 1)
		{
			$valid_result=false;
			$_SESSION['e_serviceName']="Pole jest wymagane!";
		}

		$_SESSION['fr_serviceName'] = $serviceName;

		// Entity Adress URL valid
		$entityURLAdress = $_POST['entityURLAdress'];
		$_SESSION['s_entityURLAdress'] = $entityURLAdress;

		if (strlen($entityURLAdress) < 1)
		{
			$valid_result=false;
			$_SESSION['e_entityURLAdress']="Pole jest wymagane!";
		}

		$_SESSION['fr_entityURLAdress'] = $entityURLAdress;

		// Data valid
        $dayDateOfPublication = $_POST['dayDateOfPublication'];
        $yearDateOfPublication = $_POST['yearDateOfPublication'];
        $_SESSION['s_yearDateOfPublication'] = $yearDateOfPublication;

		$monthDateOfPublication = $_POST['monthDateOfPublication'];
			/*if(monthDateOfPublication < 10){
				$_SESSION['s_monthDateOfPublication'] = '0'.$monthDateOfPublication;
			} else {*/
				$_SESSION['s_monthDateOfPublication'] = $monthDateOfPublication;
			/*}*/

		/*if(dayDateOfPublication < 10){
			$_SESSION['s_dayDateOfPublication'] = '0'.$dayDateOfPublication;
		} else {*/
			$_SESSION['s_dayDateOfPublication'] = $dayDateOfPublication;
		/*}*/

		$yearDateOfLastUpdate = $_POST['yearDateOfLastUpdate'];
		$_SESSION['s_yearDateOfLastUpdate'] = $yearDateOfLastUpdate;

		$monthDateOfLastUpdate = $_POST['monthDateOfLastUpdate'];
		/*if(monthDateOfLastUpdate < 10){
			$_SESSION['s_monthDateOfLastUpdate'] = '0'.$monthDateOfLastUpdate;
		} else {*/
			$_SESSION['s_monthDateOfLastUpdate'] = $monthDateOfLastUpdate;
		/*}*/

		$dayDateOfLastUpdate = $_POST['dayDateOfLastUpdate'];
		/*if(dayDateOfLastUpdate < 10){
			$_SESSION['s_dayDateOfLastUpdate'] = '0'.$dayDateOfLastUpdate;
		} else {*/
			$_SESSION['s_dayDateOfLastUpdate'] = $dayDateOfLastUpdate;
		/*}*/

		// Imposible data

		if($yearDateOfPublication > $yearDateOfLastUpdate)
		{
			$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty! Rok publikacji jest większy niż rok aktualizacji.";
		}
		else if ($yearDateOfPublication == $yearDateOfLastUpdate)
		{
			if($monthDateOfPublication > $monthDateOfLastUpdate)
			{
				$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty! Wybrany rok publikacji i rok aktualizacj są identyczne. Miesiąć publikacji jest większy niż miesiąc aktualizacji.";
			}
			else if($monthDateOfPublication == $monthDateOfLastUpdate)
			{
				if($dayDateOfPublication > $dayDateOfLastUpdate)
				{
					$_SESSION['e_imposible_data'] = "Wprowadzono nieprawidłowe daty! Wybrany rok i miesiąc publikacji oraz rok i miesiąc aktualizacj są identyczne. Dzień publikacji jest większy niż dzień aktualizacji.";
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

			$_SESSION['fr_offStatus'] = $offStatus;

			// Link Status valid
			//$linkStatus = $_POST['linkStatus'];
			//$_SESSION['s_linkStatus'] = $linkStatus;

			//$_SESSION['fr_linkStatus'] = $linkStatus;

		} else {
			$_SESSION['s_contentNotAccessibleStatus'] = "";
			$_SESSION['s_offStatus'] = "";
			//$_SESSION['s_linkStatus'] = "";
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
		if($monthDateOfMade < 10){
			$_SESSION['s_monthDateOfMade'] = '0'.$monthDateOfMade;
		}else {
			$_SESSION['s_monthDateOfMade'] = $monthDateOfMade;
		}

		$dayDateOfMade = $_POST['dayDateOfMade'];
		if($dayDateOfMade < 10){
			$_SESSION['s_dayDateOfMade'] = '0'.$dayDateOfMade;
		} else {
			$_SESSION['s_dayDateOfMade'] = $dayDateOfMade;
		}

        //Date review declaration
        $yearReview = $_POST['yearReview'];
        $_SESSION['s_yearReview'] = $yearReview;

        $monthReview = $_POST['monthReview'];
        if($monthReview < 10){
            $_SESSION['s_monthReview'] = '0'.$monthReview;
        }else {
            $_SESSION['s_monthReview'] = $monthReview;
        }

        $dayReview = $_POST['dayReview'];
        if($dayReview < 10){
            $_SESSION['s_dayReview'] = '0'.$dayReview;
        } else {
            $_SESSION['s_dayReview'] = $dayReview;
        }
        
		//Contact
		$contactName = $_POST['contactName'];
		$_SESSION['s_contactName'] = $contactName;

		$contactEmail = $_POST['contactEmail'];
		$_SESSION['s_contactEmail'] = $contactEmail;

		$contactTelephon = $_POST['contactTelephon'];
		$_SESSION['s_contactTelephon'] = $contactTelephon;

		// Arch access valid
		$archaccess = $_POST['archaccess'];
		$_SESSION['s_archaccess'] = $archaccess;

		if (strlen($archaccess) < 1)
		{
			$valid_result=false;
			$_SESSION['e_archaccess']="Wprowadź informacje dot. dostępności architektonicznej!";
		}

		$_SESSION['fr_archaccess'] = $archaccess;

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
		} else {
			$_SESSION['s_describeMobileApp'] = "";
			$_SESSION['s_linkMobileApp'] = "";
		}

		$_SESSION['fr_mobApp'] = $mobApp;

		// Additional information
		$addInformation = $_POST['addInformation'];
		$_SESSION['s_addInformation'] = $addInformation;

		/*if (strlen($addInformation) < 1)
		{
			$valid_result=false;
			$_SESSION['e_addInformation']="Wprowadź informacje dodatkowe!";
		}*/

		$_SESSION['fr_addInformation'] = $addInformation;

		if ($valid_result == true)
		{
			header('Location: engenerate.php');
		}

	}
?>

<!--*****************************************************************************************************-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Accessibility Statement Generato – Utilitia</title>
		<link rel="stylesheet" href="css/style.css">
		<meta name="description" content="Szybko i wygodnie przygotuj deklarację dostępności za pomocą naszego generatora online.">
		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://utilitia.pl/deklaracja/">
		<meta property="og:title" content="Generator deklaracji dostępności – Utilitia">
		<meta property="og:description" content="Szybko i wygodnie przygotuj deklarację dostępności za pomocą naszego generatora online.">
		<meta property="og:image" content="https://utilitia.pl/deklaracja/img/generator-cover.png">
	</head>
	<body>
	<header>
		<a href="https://utilitia.pl">
			<img src="https://utilitia.pl/wp-content/uploads/2020/07/utilitia-logo-2.png" alt="Utilitia">
		</a>
	</header>

		<main id="content">

			<h1>Accessibility Statement Generator</h1>

			<div id="qa" lang="pl">
				<details>
					<summary>Często zadawane pytania dotyczące deklaracji dostępności</summary>
					<details>
						<summary>Gdzie na stronie internetowej / aplikacji mobilnej należy umieścić deklarację dostępności? Czy wystarczy na BIP?</summary>
						<p>Deklarację dostępności należy umieścić na wszystkich stronach internetowych będących własnością danego podmiotu. Zatem deklaracja Dostępności powinna być umieszczona w BIP-ie i na stronie internetowej. Dobrą praktyką jest, aby była widoczna zaraz po wejściu na stronę główną serwisu. Ustawa mówi, iż deklaracja dostępności powinna być umieszczona na każdej z zarządzanych stron internetowych.</p>
					</details>
					<details>
						<summary>Czy jeśli klienci nas fizycznie nie odwiedzają, to deklaracja dostępności powinna zawierać deklarację dostępności architektonicznej?</summary>
						<p>Tak. Deklaracja dostępności służy nie tylko klientom, ale jest to informacja również dla osób ubiegających się o pracę, zatrudnionych, kontrahentów i innych odwiedzających budynek.</p>
					</details>
					<details>
						<summary>Czy opublikowanie deklaracji na stronie oznacza, że strona jest dostępna w 100%?</summary>
						<p>Nie. Deklaracja to informacja o dostępności lub niedostępności serwisu internetowego, aplikacji mobilnej, budynku bądź ich elementów, dla osób ze szczególnymi potrzebami. Deklaracja nie jest gwarantem dostępności.</p>
					</details>
					<details>
						<summary>Czy za brak deklaracji dostępności na stronie grożą sankcje finansowe? Jeśli tak to jakie?</summary>
						<p>Tak. Zgodnie z zapisami ustawy o dostępności cyfrowej stron internetowych i aplikacji mobilnych karze finansowej podlegają podmioty publiczne które:</p>
						<ul>
							<li>w sposób nieuzasadniony i uporczywy nie zapewniają dostępności cyfrowej strony internetowej lub aplikacji mobilnej</li>
							<li>nie sporządzają i nie publikują deklaracji dostępności lub nie zawierają w tej deklaracji elementów wskazanych w art.&nbsp;10, ust.&nbsp;3-5</li>
							<li>nie zapewniają dostępności strony internetowej BIP (art.&nbsp;8, ust.&nbsp;2, pkt.&nbsp;1) oraz elementów i funkcji strony internetowej i aplikacji mobilnych</li>
						</ul>
						<p>Wysokość kar kształtuje się następująco:</p>
						<ul>
							<li>brak deklaracji dostępności na stronie internetowej – do 5000&nbsp;zł</li>
							<li>brak zapewnienia dostępności strony internetowej lub aplikacji mobilnej – do 10000&nbsp;zł</li>
							<li>brak dostępności dla BIP bądź jego elementu – do 5000&nbsp;zł</li>
						</ul>
						<p>Należy tu zaznaczyć, że nie jest to kara jednorazowa. Może być ona nakładana na podmiot aż do skutku, czyli aż podmiot nie zapewni dostępności cyfrowej.</p>
					</details>
					<details>
						<summary>Czy deklaracja może być tylko w „pliku do pobrania” czy musi być w treści np. BIP?</summary>
						<p>Ustawa mówi, iż deklaracja dostępności powinna być sporządzona w sposób dostępny cyfrowo. Zaleca się, aby była umieszczona w treści zarówno na BIP, jak i na stronie internetowej podmiotu.</p>
					</details>
					<details>
						<summary>Czy deklaracja dostępności powinna zawierać wszystkie obszary dostępności czy tylko dostępność cyfrową stron www?</summary>
						<p>Deklaracja dostępności podmiotu publicznego powinna zawierać informacje o dostępności wszystkich obszarów tj. cyfrowej, architektonicznej i komunikacyjno‑informacyjnej.</p>
					</details>
					<details>
						<summary>Czyje dane kontaktowe umieszczać w deklaracji dostępności, w kontekście zgłaszania niedostępności cyfrowej - koordynatora/‑ki czy informatyka/‑czki?</summary>
						<p>W deklaracji dostępności zawsze należy umieścić dane teleadresowe koordynatora ds. dostępności. Jednak w przypadku dostępności cyfrowej, mogą to być dane kontaktowe do osoby, która w danej jednostce publicznej została wyznaczona do realizacji spraw w tym zakresie. Zatem może to być również informatyk.</p>
					</details>
					<details>
						<summary>Czy deklaracja dostępności umieszczona na BIP w zakładce „Dostępność” powinna być podpisana przez Burmistrza Miasta?</summary>
						<p>Deklaracja dostępności nie wymaga podpisu. Jest to wersja elektroniczna umieszczana na stronie internetowej i lub w aplikacji mobilnej.</p>
					</details>
					<details>
						<summary>Czy deklaracja dostępności powinna być przyjęta w formie jakiegoś aktu wewnętrznego urzędu typu zarządzenie?</summary>
						<p>Deklaracja dostępności ma postać elektroniczną. Ustawodawca nie przewiduje Deklaracji jako odrębnego wewnętrznego aktu czy zarządzenia.</p>
					</details>
					<details>
						<summary>Czy deklaracje dostępności należy aktualizować? Jeśli tak to jak często?</summary>
						<p>Deklarację należy aktualizować każdego roku do końca marca, lub po każdej większej przebudowie strony internetowej lub aplikacji mobilnej. Wszelkie zmiany dotyczące dostępności (architektonicznej bądź informacyjno-komunikacyjnej) należy na bieżąco aktualizować. Informacja o dacie ostatniej aktualizacji powinna znajdować się w deklaracji Dostępności. Za brak aktualizacji lub niekompletność deklaracji grozi kara nawet do 5000&nbsp;zł.</p>
					</details>
				</details>
			</div>
			<form name="eks" method="post">
                <fieldset>
                    <legend>Import data from an existing accessibility statement</legend>
                    <label for="url">Enter the URL address of accessibility statement</label>
                    <input type="url" name="url" id="url">
                    <input type="submit" value="Get data">
                </fieldset>
			</form>
			<form class="form" id="dod" method="post">

				<!-- General information -->
				<fieldset>

					<legend>The public sector body and website data:</legend>

					<!-- Entity name -->
					<div>
						<label for="entityName">Name of public sector body (required):</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_entityName']))
							{
								echo $_SESSION['fr_entityName'];
								unset($_SESSION['fr_entityName']);
							}
							?>" name="entityName" id="entityName"
							aria-describedby="entityNameError entityNameHelp"
							data-error="You must enter official Name of public sector body that publishes the Accessibility Statement:" />

							<div id="entityNameError" role="alert">
							<?php
								if (isset($_SESSION['e_entityName']))
								{
									echo '<span>Error</span>'.'<span>'.$_SESSION['e_entityName'].'</span>';
									unset($_SESSION['e_entityName']);
								}
							?>
							</div>

							<small id="entityNameHelp" aria-hidden="true">Enter official Name of public sector body that publishes the Accessibility Statement:</small>

					</div>

					<!-- Name URL -->
					<div>
						<label for="serviceName">Website name (required)</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_serviceName']))
							{
								echo $_SESSION['fr_serviceName'];
								unset($_SESSION['fr_serviceName']);
							}
							?>" name="serviceName" id="serviceName"
							aria-describedby="serviceNameError serviceNameHelp"
							data-error="You must enter official website name." 							/>

						<div id="serviceNameError" role="alert">
							<?php
								if (isset($_SESSION['e_serviceName']))
								{
									echo '<span>Błąd</span>'.'<span>'.$_SESSION['e_serviceName'].'</span>';
									unset($_SESSION['e_serviceName']);
								}
							?>
						</div>

						<small id="serviceNameHelp" aria-hidden="true" >Enter official website name.</small>

					</div>


					<!-- Adres URL -->
					<div>
						<label for="entityURLAdress">Public sector body's URL (required)</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_entityURLAdress']))
							{
								echo $_SESSION['fr_entityURLAdress'];
								unset($_SESSION['fr_entityURLAdress']);
							}
							?>" name="entityURLAdress" id="entityURLAdress"
							aria-describedby="entityURLAdressError entityURLAdresHelps"
							data-error="You must enter public sector body's URL."
							/>

						<div id="entityURLAdressError" role="alert">
							<?php
								if (isset($_SESSION['e_entityURLAdress']))
								{
									echo '<span>Error</span>'.'<span>'.$_SESSION['e_entityURLAdress'].'</span>';
									unset($_SESSION['e_entityURLAdress']);
								}
							?>
						</div>

						<small id="entityURLAdresHelps" aria-hidden="true" >Enter Public sector body's URL.</small>

					</div>
				</fieldset>

				<!-- Data of publication -->
				<fieldset>

					<legend>Date of website publication</legend>

					<div>

						<div>

							<?php
								if (isset($_SESSION['e_imposible_data']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['e_imposible_data'].'</div>';
									unset($_SESSION['e_imposible_data']);
								}
							?>

						</div>

						<div class="flex">
						<!-- Year publication -->
							<div>

								<label for="yearDateOfPublication">Year</label>

								<select name="yearDateOfPublication" id="yearDateOfPublication">

									<option value="2022" <?php check_yearDateOfPublication('2022',$_session['option_yearDateOfPublication']);?>  >2022</option>
									<option value="2021" <?php check_yearDateOfPublication('2021',$_session['option_yearDateOfPublication']);?>  >2021</option>

									<option value="2020" <?php check_yearDateOfPublication('2020',$_session['option_yearDateOfPublication']);?>  >2020</option>?
									<option value="2019" <?php check_yearDateOfPublication('2019',$_session['option_yearDateOfPublication']);?>  >2019</option>
									<option value="2018" <?php check_yearDateOfPublication('2018',$_session['option_yearDateOfPublication']);?>  >2018</option>
									<option value="2017" <?php check_yearDateOfPublication('2017',$_session['option_yearDateOfPublication']);?>  >2017</option>
									<option value="2016" <?php check_yearDateOfPublication('2016',$_session['option_yearDateOfPublication']);?>  >2016</option>
									<option value="2015" <?php check_yearDateOfPublication('2015',$_session['option_yearDateOfPublication']);?>  >2015</option>
									<option value="2014" <?php check_yearDateOfPublication('2014',$_session['option_yearDateOfPublication']);?>  >2014</option>
									<option value="2013" <?php check_yearDateOfPublication('2013',$_session['option_yearDateOfPublication']);?>  >2013</option>
									<option value="2012" <?php check_yearDateOfPublication('2012',$_session['option_yearDateOfPublication']);?>  >2012</option>
									<option value="2011" <?php check_yearDateOfPublication('2011',$_session['option_yearDateOfPublication']);?>  >2011</option>
									<option value="2010" <?php check_yearDateOfPublication('2010',$_session['option_yearDateOfPublication']);?>  >2010</option>

									<option value="2009" <?php check_yearDateOfPublication('2009',$_session['option_yearDateOfPublication']);?>  >2009</option>
									<option value="2008" <?php check_yearDateOfPublication('2008',$_session['option_yearDateOfPublication']);?>  >2008</option>
									<option value="2007" <?php check_yearDateOfPublication('2007',$_session['option_yearDateOfPublication']);?>  >2007</option>
									<option value="2006" <?php check_yearDateOfPublication('2006',$_session['option_yearDateOfPublication']);?>  >2006</option>
									<option value="2005" <?php check_yearDateOfPublication('2005',$_session['option_yearDateOfPublication']);?>  >2005</option>
									<option value="2004" <?php check_yearDateOfPublication('2004',$_session['option_yearDateOfPublication']);?>  >2004</option>
									<option value="2003" <?php check_yearDateOfPublication('2003',$_session['option_yearDateOfPublication']);?>  >2003</option>
									<option value="2002" <?php check_yearDateOfPublication('2002',$_session['option_yearDateOfPublication']);?>  >2002</option>
									<option value="2001" <?php check_yearDateOfPublication('2001',$_session['option_yearDateOfPublication']);?>  >2001</option>
									<option value="2000" <?php check_yearDateOfPublication('2000',$_session['option_yearDateOfPublication']);?> >2000</option>

									<option value="1999" <?php check_yearDateOfPublication('1999',$_session['option_yearDateOfPublication']);?> >1999</option>
									<option value="1998" <?php check_yearDateOfPublication('1998',$_session['option_yearDateOfPublication']);?> >1998</option>
									<option value="1997" <?php check_yearDateOfPublication('1997',$_session['option_yearDateOfPublication']);?> >1997</option>
									<option value="1996" <?php check_yearDateOfPublication('1996',$_session['option_yearDateOfPublication']);?> >1996</option>
									<option value="1995" <?php check_yearDateOfPublication('1995',$_session['option_yearDateOfPublication']);?> >1995</option>
									<option value="1994" <?php check_yearDateOfPublication('1994',$_session['option_yearDateOfPublication']);?> >1994</option>
									<option value="1993" <?php check_yearDateOfPublication('1993',$_session['option_yearDateOfPublication']);?> >1993</option>
									<option value="1992" <?php check_yearDateOfPublication('1992',$_session['option_yearDateOfPublication']);?> >1992</option>
									<option value="1991" <?php check_yearDateOfPublication('1991',$_session['option_yearDateOfPublication']);?> >1991</option>
									<option value="1990" <?php check_yearDateOfPublication('1990',$_session['option_yearDateOfPublication']);?> >1990</option>

								</select>

							</div>

							<!-- Month publication -->
							<div>

								<label for="monthDateOfPublication">Month</label>
								<select name="monthDateOfPublication" id="monthDateOfPublication">

									<option value="1" <?php check_monthDateOfPublication('1',$_session['option_monthDateOfPublication']);?> >January</option>
									<option value="2" <?php check_monthDateOfPublication('2',$_session['option_monthDateOfPublication']);?> >February</option>
									<option value="3" <?php check_monthDateOfPublication('3',$_session['option_monthDateOfPublication']);?> >March</option>
									<option value="4" <?php check_monthDateOfPublication('4',$_session['option_monthDateOfPublication']);?> >April</option>
									<option value="5" <?php check_monthDateOfPublication('5',$_session['option_monthDateOfPublication']);?> >May</option>
									<option value="6" <?php check_monthDateOfPublication('6',$_session['option_monthDateOfPublication']);?> >June</option>
									<option value="7" <?php check_monthDateOfPublication('7',$_session['option_monthDateOfPublication']);?> >July</option>
									<option value="8" <?php check_monthDateOfPublication('8',$_session['option_monthDateOfPublication']);?> >August</option>
									<option value="9" <?php check_monthDateOfPublication('9',$_session['option_monthDateOfPublication']);?> >September</option>
									<option value="10" <?php check_monthDateOfPublication('10',$_session['option_monthDateOfPublication']);?> >October</option>
									<option value="11" <?php check_monthDateOfPublication('11',$_session['option_monthDateOfPublication']);?> >November</option>
									<option value="12" <?php check_monthDateOfPublication('12',$_session['option_monthDateOfPublication']);?> >December</option>

								</select>

							</div>

							<!-- Day publication -->
							<div>

								<label for="dayDateOfPublication">Day</label>
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
						</div>

						<div>

							<?php
								if (isset($_SESSION['publication_data']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['publication_data'].'</div>';
									unset($_SESSION['publication_data']);
								}
							?>

						</div>

					</div>

				</fieldset>

				<!-- Data last update -->
				<fieldset>

					<legend>Date of last significant update</legend>

					<div>

						<div class="flex">
						<!-- Year of update -->
							<div>

								<label for="yearDateOfLastUpdate">Year</label>
								<select name="yearDateOfLastUpdate" id="yearDateOfLastUpdate">

									<option value="2022" <?php check_yearDateOfLastUpdate('2022',$_session['option_yearDateOfLastUpdate']);?> >2022</option>
									<option value="2021" <?php check_yearDateOfLastUpdate('2021',$_session['option_yearDateOfLastUpdate']);?> >2021</option>
									<option value="2020" <?php check_yearDateOfLastUpdate('2020',$_session['option_yearDateOfLastUpdate']);?> >2020</option>

									<option value="2019" <?php check_yearDateOfLastUpdate('2019',$_session['option_yearDateOfLastUpdate']);?> >2019</option>
									<option value="2018" <?php check_yearDateOfLastUpdate('2018',$_session['option_yearDateOfLastUpdate']);?> >2018</option>
									<option value="2017" <?php check_yearDateOfLastUpdate('2017',$_session['option_yearDateOfLastUpdate']);?> >2017</option>
									<option value="2016" <?php check_yearDateOfLastUpdate('2016',$_session['option_yearDateOfLastUpdate']);?> >2016</option>
									<option value="2015" <?php check_yearDateOfLastUpdate('2015',$_session['option_yearDateOfLastUpdate']);?> >2015</option>
									<option value="2014" <?php check_yearDateOfLastUpdate('2014',$_session['option_yearDateOfLastUpdate']);?> >2014</option>
									<option value="2013" <?php check_yearDateOfLastUpdate('2013',$_session['option_yearDateOfLastUpdate']);?> >2013</option>
									<option value="2012" <?php check_yearDateOfLastUpdate('2012',$_session['option_yearDateOfLastUpdate']);?> >2012</option>
									<option value="2011" <?php check_yearDateOfLastUpdate('2011',$_session['option_yearDateOfLastUpdate']);?> >2011</option>
									<option value="2010" <?php check_yearDateOfLastUpdate('2010',$_session['option_yearDateOfLastUpdate']);?> >2010</option>

									<option value="2009" <?php check_yearDateOfLastUpdate('2009',$_session['option_yearDateOfLastUpdate']);?> >2009</option>
									<option value="2008" <?php check_yearDateOfLastUpdate('2008',$_session['option_yearDateOfLastUpdate']);?> >2008</option>
									<option value="2007" <?php check_yearDateOfLastUpdate('2007',$_session['option_yearDateOfLastUpdate']);?> >2007</option>
									<option value="2006" <?php check_yearDateOfLastUpdate('2006',$_session['option_yearDateOfLastUpdate']);?> >2006</option>
									<option value="2005" <?php check_yearDateOfLastUpdate('2005',$_session['option_yearDateOfLastUpdate']);?> >2005</option>
									<option value="2004" <?php check_yearDateOfLastUpdate('2004',$_session['option_yearDateOfLastUpdate']);?> >2004</option>
									<option value="2003" <?php check_yearDateOfLastUpdate('2003',$_session['option_yearDateOfLastUpdate']);?> >2003</option>
									<option value="2002" <?php check_yearDateOfLastUpdate('2002',$_session['option_yearDateOfLastUpdate']);?> >2002</option>
									<option value="2001" <?php check_yearDateOfLastUpdate('2001',$_session['option_yearDateOfLastUpdate']);?> >2001</option>
									<option value="2000" <?php check_yearDateOfLastUpdate('2000',$_session['option_yearDateOfLastUpdate']);?> >2000</option>

									<option value="1999" <?php check_yearDateOfLastUpdate('1999',$_session['option_yearDateOfLastUpdate']);?> >1999</option>
									<option value="1998" <?php check_yearDateOfLastUpdate('1998',$_session['option_yearDateOfLastUpdate']);?> >1998</option>
									<option value="1997" <?php check_yearDateOfLastUpdate('1997',$_session['option_yearDateOfLastUpdate']);?> >1997</option>
									<option value="1996" <?php check_yearDateOfLastUpdate('1996',$_session['option_yearDateOfLastUpdate']);?> >1996</option>
									<option value="1995" <?php check_yearDateOfLastUpdate('1995',$_session['option_yearDateOfLastUpdate']);?> >1995</option>
									<option value="1994" <?php check_yearDateOfLastUpdate('1994',$_session['option_yearDateOfLastUpdate']);?> >1994</option>
									<option value="1993" <?php check_yearDateOfLastUpdate('1993',$_session['option_yearDateOfLastUpdate']);?> >1993</option>
									<option value="1992" <?php check_yearDateOfLastUpdate('1992',$_session['option_yearDateOfLastUpdate']);?> >1992</option>
									<option value="1991" <?php check_yearDateOfLastUpdate('1991',$_session['option_yearDateOfLastUpdate']);?> >1991</option>
									<option value="1990" <?php check_yearDateOfLastUpdate('1990',$_session['option_yearDateOfLastUpdate']);?> >1990</option>


								</select>

							</div>

							<!-- Month of update -->
							<div>

								<label for="monthDateOfLastUpdate">Month</label>
								<select name="monthDateOfLastUpdate" id="monthDateOfLastUpdate">

									<option value="1" <?php check_monthDateOfLastUpdate('1',$_session['option_monthDateOfLastUpdate']);?> >January</option>
									<option value="2" <?php check_monthDateOfLastUpdate('2',$_session['option_monthDateOfLastUpdate']);?> >February</option>
									<option value="3" <?php check_monthDateOfLastUpdate('3',$_session['option_monthDateOfLastUpdate']);?> >March</option>
									<option value="4" <?php check_monthDateOfLastUpdate('4',$_session['option_monthDateOfLastUpdate']);?> >April</option>
									<option value="5" <?php check_monthDateOfLastUpdate('5',$_session['option_monthDateOfLastUpdate']);?> >May</option>
									<option value="6" <?php check_monthDateOfLastUpdate('6',$_session['option_monthDateOfLastUpdate']);?> >June</option>
									<option value="7" <?php check_monthDateOfLastUpdate('7',$_session['option_monthDateOfLastUpdate']);?> >July</option>
									<option value="8" <?php check_monthDateOfLastUpdate('8',$_session['option_monthDateOfLastUpdate']);?> >August</option>
									<option value="9" <?php check_monthDateOfLastUpdate('9',$_session['option_monthDateOfLastUpdate']);?> >September</option>
									<option value="10" <?php check_monthDateOfLastUpdate('10',$_session['option_monthDateOfLastUpdate']);?> >October</option>
									<option value="11" <?php check_monthDateOfLastUpdate('11',$_session['option_monthDateOfLastUpdate']);?> >November</option>
									<option value="12" <?php check_monthDateOfLastUpdate('12',$_session['option_monthDateOfLastUpdate']);?> >December</option>

							</select>

							</div>

							<!-- Day of update -->
							<div>

								<label for="dayDateOfLastUpdate">Day</label>

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
						</div>

						<div>

							<?php
								if (isset($_SESSION['update_data']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['update_data'].'</div>';
									unset($_SESSION['update_data']);
							}
						?>

						</div>

					</div>

				</fieldset>

				<!-- Status -->
				<fieldset>

					<legend>Compliance Statement</legend>

					<div>

						<label for="selectStatus">Compliance status</label>
						<select name="selectStatus" id="selectStatus">

							<option value="zgodna" <?php check_selected('zgodna',$_session['option_selectStatus']);?> >Compliant</option>
							<option value="częściowo zgodna" <?php check_selected('częściowo zgodna',$_session['option_selectStatus']);?> >Partially compliant</option>
							<option value="niezgodna" <?php check_selected('niezgodna',$_session['option_selectStatus']);?> >Not compliant</option>

						</select>

					</div>

					<div id="addStatusInput" class="status-is-hidden">

						<div>
						<label for="contentNotAccessibleStatus">Non-accessible content (required)</label>
						<textarea id="contentNotAccessibleStatus" name="contentNotAccessibleStatus" cols="25" rows="4"
								aria-describedby="contentNotAccessibleStatusError contentNotAccessibleStatusHelp"
								data-error="You must enter non-accessible contents." ><?php
									if (isset($_SESSION['fr_contentNotAccessibleStatus']))
									{
										echo $_SESSION['fr_contentNotAccessibleStatus'];
										unset($_SESSION['fr_contentNotAccessibleStatus']);
									}
								?></textarea>

							<div id="contentNotAccessibleStatusError" role="alert">

								<?php
									if (isset($_SESSION['e_contentNotAccessibleStatus']))
									{
										echo '<div class="error" role="alert">'.$_SESSION['e_contentNotAccessibleStatus'].'</div>';
										unset($_SESSION['e_contentNotAccessibleStatus']);
									}
								?>

							</div>

							<small id="contentNotAccessibleStatusHelp" aria-hidden="true" >Enter non-accessible contents.</small>

						</div>

						<div>

							<label for="offStatus">Content exempt from accessibility</label>
							<textarea id="offStatus" name="offStatus" cols="25" rows="4"
								aria-describedby="offStatusHelp" ><?php
									if (isset($_SESSION['fr_offStatus']))
									{
										echo $_SESSION['fr_offStatus'];
										unset($_SESSION['fr_offStatus']);
									}
								?></textarea>

								<?php
									if (isset($_SESSION['e_offStatus']))
									{
										echo '<div class="error" role="alert">'.$_SESSION['e_offStatus'].'</div>';
										unset($_SESSION['e_offStatus']);
									}
								?>

							<small id="offStatusHelp" aria-hidden="true" >Enter the contents exempt from accessibility by act.</small>

						</div>

					</div>

				</fieldset>

				<!-- Date make declaration -->
				<fieldset>

					<legend>Date of preparation of the accessibility statement</legend>

					<div>

						<div class="flex">
							<!-- Year made -->
							<div>

								<label for="yearDateOfMade">Year</label>
								<select name="yearDateOfMade" id="yearDateOfMade">

									<option value="2022" <?php check_yearDateOfMade('2022',$_session['option_yearDateOfMade']);?>  >2022</option>
									<option value="2021" <?php check_yearDateOfMade('2021',$_session['option_yearDateOfMade']);?>  >2021</option>
									<option value="2020" <?php check_yearDateOfMade('2020',$_session['option_yearDateOfMade']);?>  >2020</option>

									<option value="2019" <?php check_yearDateOfMade('2019',$_session['option_yearDateOfMade']);?>  >2019</option>
									<option value="2018" <?php check_yearDateOfMade('2018',$_session['option_yearDateOfMade']);?>  >2018</option>
									<option value="2017" <?php check_yearDateOfMade('2017',$_session['option_yearDateOfMade']);?>  >2017</option>
									<option value="2016" <?php check_yearDateOfMade('2016',$_session['option_yearDateOfMade']);?>  >2016</option>
									<option value="2015" <?php check_yearDateOfMade('2015',$_session['option_yearDateOfMade']);?>  >2015</option>
									<option value="2014" <?php check_yearDateOfMade('2014',$_session['option_yearDateOfMade']);?>  >2014</option>
									<option value="2013" <?php check_yearDateOfMade('2013',$_session['option_yearDateOfMade']);?>  >2013</option>
									<option value="2012" <?php check_yearDateOfMade('2012',$_session['option_yearDateOfMade']);?>  >2012</option>
									<option value="2011" <?php check_yearDateOfMade('2011',$_session['option_yearDateOfMade']);?>  >2011</option>
									<option value="2010" <?php check_yearDateOfMade('2010',$_session['option_yearDateOfMade']);?>  >2010</option>

									<option value="2009" <?php check_yearDateOfMade('2009',$_session['option_yearDateOfMade']);?>  >2009</option>
									<option value="2008" <?php check_yearDateOfMade('2008',$_session['option_yearDateOfMade']);?>  >2008</option>
									<option value="2007" <?php check_yearDateOfMade('2007',$_session['option_yearDateOfMade']);?>  >2007</option>
									<option value="2006" <?php check_yearDateOfMade('2006',$_session['option_yearDateOfMade']);?>  >2006</option>
									<option value="2005" <?php check_yearDateOfMade('2005',$_session['option_yearDateOfMade']);?>  >2005</option>
									<option value="2004" <?php check_yearDateOfMade('2004',$_session['option_yearDateOfMade']);?>  >2004</option>
									<option value="2003" <?php check_yearDateOfMade('2003',$_session['option_yearDateOfMade']);?>  >2003</option>
									<option value="2002" <?php check_yearDateOfMade('2002',$_session['option_yearDateOfMade']);?>  >2002</option>
									<option value="2001" <?php check_yearDateOfMade('2001',$_session['option_yearDateOfMade']);?>  >2001</option>
									<option value="2000" <?php check_yearDateOfMade('2000',$_session['option_yearDateOfMade']);?> >2000</option>

									<option value="1999" <?php check_yearDateOfMade('1999',$_session['option_yearDateOfMade']);?> >1999</option>
									<option value="1998" <?php check_yearDateOfMade('1998',$_session['option_yearDateOfMade']);?> >1998</option>
									<option value="1997" <?php check_yearDateOfMade('1997',$_session['option_yearDateOfMade']);?> >1997</option>
									<option value="1996" <?php check_yearDateOfMade('1996',$_session['option_yearDateOfMade']);?> >1996</option>
									<option value="1995" <?php check_yearDateOfMade('1995',$_session['option_yearDateOfMade']);?> >1995</option>
									<option value="1994" <?php check_yearDateOfMade('1994',$_session['option_yearDateOfMade']);?> >1994</option>
									<option value="1993" <?php check_yearDateOfMade('1993',$_session['option_yearDateOfMade']);?> >1993</option>
									<option value="1992" <?php check_yearDateOfMade('1992',$_session['option_yearDateOfMade']);?> >1992</option>
									<option value="1991" <?php check_yearDateOfMade('1991',$_session['option_yearDateOfMade']);?> >1991</option>
									<option value="1990" <?php check_yearDateOfMade('1990',$_session['option_yearDateOfMade']);?> >1990</option>

								</select>

							</div>

							<!-- Month made -->
							<div>

								<label for="monthDateOfMade">Month</label>
								<select name="monthDateOfMade" id="monthDateOfMade">

									<option value="1" <?php check_monthDateOfMade('1',$_session['option_monthDateOfMade']);?> >January</option>
									<option value="2" <?php check_monthDateOfMade('2',$_session['option_monthDateOfMade']);?> >February</option>
									<option value="3" <?php check_monthDateOfMade('3',$_session['option_monthDateOfMade']);?> >March</option>
									<option value="4" <?php check_monthDateOfMade('4',$_session['option_monthDateOfMade']);?> >April</option>
									<option value="5" <?php check_monthDateOfMade('5',$_session['option_monthDateOfMade']);?> >May</option>
									<option value="6" <?php check_monthDateOfMade('6',$_session['option_monthDateOfMade']);?> >June</option>
									<option value="7" <?php check_monthDateOfMade('7',$_session['option_monthDateOfMade']);?> >July</option>
									<option value="8" <?php check_monthDateOfMade('8',$_session['option_monthDateOfMade']);?> >August</option>
									<option value="9" <?php check_monthDateOfMade('9',$_session['option_monthDateOfMade']);?> >September</option>
									<option value="10" <?php check_monthDateOfMade('10',$_session['option_monthDateOfMade']);?> >October</option>
									<option value="11" <?php check_monthDateOfMade('11',$_session['option_monthDateOfMade']);?> >November</option>
									<option value="12" <?php check_monthDateOfMade('12',$_session['option_monthDateOfMade']);?> >December</option>

								</select>

							</div>

							<!-- Day made -->
							<div>

								<label for="dayDateOfMade">Day</label>
								<select name="dayDateOfMade" id="dayDateOfMade">

									<option value="1" <?php check_dayDateOfMade('1',$_session['option_dayDateOfMade']);?> >01</option>
									<option value="2" <?php check_dayDateOfMade('2',$_session['option_dayDateOfMade']);?> >02</option>
									<option value="3" <?php check_dayDateOfMade('3',$_session['option_dayDateOfMade']);?> >03</option>
									<option value="4" <?php check_dayDateOfMade('4',$_session['option_dayDateOfMade']);?> >04</option>
									<option value="5" <?php check_dayDateOfMade('5',$_session['option_dayDateOfMade']);?> >05</option>
									<option value="6" <?php check_dayDateOfMade('6',$_session['option_dayDateOfMade']);?> >06</option>
									<option value="7" <?php check_dayDateOfMade('7',$_session['option_dayDateOfMade']);?> >07</option>
									<option value="8" <?php check_dayDateOfMade('8',$_session['option_dayDateOfMade']);?> >08</option>
									<option value="9" <?php check_dayDateOfMade('9',$_session['option_dayDateOfMade']);?> >09</option>

									<option value="10" <?php check_dayDateOfMade('10',$_session['option_dayDateOfMade']);?> >10</option>
									<option value="11" <?php check_dayDateOfMade('11',$_session['option_dayDateOfMade']);?> >11</option>
									<option value="12" <?php check_dayDateOfMade('12',$_session['option_dayDateOfMade']);?> >12</option>
									<option value="13" <?php check_dayDateOfMade('13',$_session['option_dayDateOfMade']);?> >13</option>
									<option value="14" <?php check_dayDateOfMade('14',$_session['option_dayDateOfMade']);?> >14</option>
									<option value="15" <?php check_dayDateOfMade('15',$_session['option_dayDateOfMade']);?> >15</option>
									<option value="16" <?php check_dayDateOfMade('16',$_session['option_dayDateOfMade']);?> >16</option>
									<option value="17" <?php check_dayDateOfMade('17',$_session['option_dayDateOfMade']);?> >17</option>
									<option value="18" <?php check_dayDateOfMade('18',$_session['option_dayDateOfMade']);?> >18</option>
									<option value="19" <?php check_dayDateOfMade('19',$_session['option_dayDateOfMade']);?> >19</option>

									<option value="20" <?php check_dayDateOfMade('20',$_session['option_dayDateOfMade']);?> >20</option>
									<option value="21" <?php check_dayDateOfMade('21',$_session['option_dayDateOfMade']);?> >21</option>
									<option value="22" <?php check_dayDateOfMade('22',$_session['option_dayDateOfMade']);?> >22</option>
									<option value="23" <?php check_dayDateOfMade('23',$_session['option_dayDateOfMade']);?> >23</option>
									<option value="24" <?php check_dayDateOfMade('24',$_session['option_dayDateOfMade']);?> >24</option>
									<option value="25" <?php check_dayDateOfMade('25',$_session['option_dayDateOfMade']);?> >25</option>
									<option value="26" <?php check_dayDateOfMade('26',$_session['option_dayDateOfMade']);?> >26</option>
									<option value="27" <?php check_dayDateOfMade('27',$_session['option_dayDateOfMade']);?> >27</option>
									<option value="28" <?php check_dayDateOfMade('28',$_session['option_dayDateOfMade']);?> >28</option>
									<option value="29" <?php check_dayDateOfMade('29',$_session['option_dayDateOfMade']);?> >29</option>

									<option value="30" <?php check_dayDateOfMade('30',$_session['option_dayDateOfMade']);?> >30</option>
									<option value="31" <?php check_dayDateOfMade('31',$_session['option_dayDateOfMade']);?> >31</option>

								</select>

							</div>
						</div>

						<div>

							<?php
							if (isset($_SESSION['publication_data']))
							{
								echo '<div class="error" role="alert">'.$_SESSION['publication_data'].'</div>';
								unset($_SESSION['publication_data']);
							}
						?>

						</div>

					</div>

				</fieldset>

                <!-- Date review declaration -->
                <fieldset>

                    <legend>Date of review of the accessibility statement</legend>

                    <div>

                        <div class="flex">
                            <!-- Year review -->
                            <div>

                                <label for="yearReview">Year</label>
                                <select name="yearReview" id="yearReview">

                                    <option value="2022" <?php check_yearReview('2022',$_session['option_yearReview']);?>  >2022</option>
                                    <option value="2021" <?php check_yearReview('2021',$_session['option_yearReview']);?>  >2021</option>
                                    <option value="2020" <?php check_yearReview('2020',$_session['option_yearReview']);?>  >2020</option>

                                    <option value="2019" <?php check_yearReview('2019',$_session['option_yearReview']);?>  >2019</option>
                                    <option value="2018" <?php check_yearReview('2018',$_session['option_yearReview']);?>  >2018</option>
                                    <option value="2017" <?php check_yearReview('2017',$_session['option_yearReview']);?>  >2017</option>
                                    <option value="2016" <?php check_yearReview('2016',$_session['option_yearReview']);?>  >2016</option>
                                    <option value="2015" <?php check_yearReview('2015',$_session['option_yearReview']);?>  >2015</option>
                                    <option value="2014" <?php check_yearReview('2014',$_session['option_yearReview']);?>  >2014</option>
                                    <option value="2013" <?php check_yearReview('2013',$_session['option_yearReview']);?>  >2013</option>
                                    <option value="2012" <?php check_yearReview('2012',$_session['option_yearReview']);?>  >2012</option>
                                    <option value="2011" <?php check_yearReview('2011',$_session['option_yearReview']);?>  >2011</option>
                                    <option value="2010" <?php check_yearReview('2010',$_session['option_yearReview']);?>  >2010</option>

                                    <option value="2009" <?php check_yearReview('2009',$_session['option_yearReview']);?>  >2009</option>
                                    <option value="2008" <?php check_yearReview('2008',$_session['option_yearReview']);?>  >2008</option>
                                    <option value="2007" <?php check_yearReview('2007',$_session['option_yearReview']);?>  >2007</option>
                                    <option value="2006" <?php check_yearReview('2006',$_session['option_yearReview']);?>  >2006</option>
                                    <option value="2005" <?php check_yearReview('2005',$_session['option_yearReview']);?>  >2005</option>
                                    <option value="2004" <?php check_yearReview('2004',$_session['option_yearReview']);?>  >2004</option>
                                    <option value="2003" <?php check_yearReview('2003',$_session['option_yearReview']);?>  >2003</option>
                                    <option value="2002" <?php check_yearReview('2002',$_session['option_yearReview']);?>  >2002</option>
                                    <option value="2001" <?php check_yearReview('2001',$_session['option_yearReview']);?>  >2001</option>
                                    <option value="2000" <?php check_yearReview('2000',$_session['option_yearReview']);?> >2000</option>

                                    <option value="1999" <?php check_yearReview('1999',$_session['option_yearReview']);?> >1999</option>
                                    <option value="1998" <?php check_yearReview('1998',$_session['option_yearReview']);?> >1998</option>
                                    <option value="1997" <?php check_yearReview('1997',$_session['option_yearReview']);?> >1997</option>
                                    <option value="1996" <?php check_yearReview('1996',$_session['option_yearReview']);?> >1996</option>
                                    <option value="1995" <?php check_yearReview('1995',$_session['option_yearReview']);?> >1995</option>
                                    <option value="1994" <?php check_yearReview('1994',$_session['option_yearReview']);?> >1994</option>
                                    <option value="1993" <?php check_yearReview('1993',$_session['option_yearReview']);?> >1993</option>
                                    <option value="1992" <?php check_yearReview('1992',$_session['option_yearReview']);?> >1992</option>
                                    <option value="1991" <?php check_yearReview('1991',$_session['option_yearReview']);?> >1991</option>
                                    <option value="1990" <?php check_yearReview('1990',$_session['option_yearReview']);?> >1990</option>

                                </select>

                            </div>

            <!-- Month review -->
            <div>

                <label for="monthReview">Month</label>
                <select name="monthReview" id="monthReview">

                    <option value="1" <?php check_monthReview('1',$_session['option_monthReview']);?> >January</option>
                    <option value="2" <?php check_monthReview('2',$_session['option_monthReview']);?> >February</option>
                    <option value="3" <?php check_monthReview('3',$_session['option_monthReview']);?> >March</option>
                    <option value="4" <?php check_monthReview('4',$_session['option_monthReview']);?> >April</option>
                    <option value="5" <?php check_monthReview('5',$_session['option_monthReview']);?> >May</option>
                    <option value="6" <?php check_monthReview('6',$_session['option_monthReview']);?> >June</option>
                    <option value="7" <?php check_monthReview('7',$_session['option_monthReview']);?> >July</option>
                    <option value="8" <?php check_monthReview('8',$_session['option_monthReview']);?> >August</option>
                    <option value="9" <?php check_monthReview('9',$_session['option_monthReview']);?> >September</option>
                    <option value="10" <?php check_monthDateOfMade('10',$_session['option_monthReview']);?> >October</option>
                    <option value="11" <?php check_monthReview('11',$_session['option_monthReview']);?> >November</option>
                    <option value="12" <?php check_monthReview('12',$_session['option_monthReview']);?> >December</option>

                </select>

            </div>

            <!-- Day review -->
            <div>

                <label for="dayReview">Day</label>
                <select name="dayReview" id="dayReview">

                    <option value="1" <?php check_dayReview('1',$_session['option_dayReview']);?> >01</option>
                    <option value="2" <?php check_dayReview('2',$_session['option_dayReview']);?> >02</option>
                    <option value="3" <?php check_dayReview('3',$_session['option_dayReview']);?> >03</option>
                    <option value="4" <?php check_dayReview('4',$_session['option_dayReview']);?> >04</option>
                    <option value="5" <?php check_dayReview('5',$_session['option_dayReview']);?> >05</option>
                    <option value="6" <?php check_dayReview('6',$_session['option_dayReview']);?> >06</option>
                    <option value="7" <?php check_dayReview('7',$_session['option_dayReview']);?> >07</option>
                    <option value="8" <?php check_dayReview('8',$_session['option_dayReview']);?> >08</option>
                    <option value="9" <?php check_dayReview('9',$_session['option_dayReview']);?> >09</option>

                    <option value="10" <?php check_dayReview('10',$_session['option_dayReview']);?> >10</option>
                    <option value="11" <?php check_dayReview('11',$_session['option_dayReview']);?> >11</option>
                    <option value="12" <?php check_dayReview('12',$_session['option_dayReview']);?> >12</option>
                    <option value="13" <?php check_dayReview('13',$_session['option_dayReview']);?> >13</option>
                    <option value="14" <?php check_dayReview('14',$_session['option_dayReview']);?> >14</option>
                    <option value="15" <?php check_dayReview('15',$_session['option_dayReview']);?> >15</option>
                    <option value="16" <?php check_dayReview('16',$_session['option_dayReview']);?> >16</option>
                    <option value="17" <?php check_dayReview('17',$_session['option_dayReview']);?> >17</option>
                    <option value="18" <?php check_dayReview('18',$_session['option_dayReview']);?> >18</option>
                    <option value="19" <?php check_dayReview('19',$_session['option_dayReview']);?> >19</option>

                    <option value="20" <?php check_dayReview('20',$_session['option_dayReview']);?> >20</option>
                    <option value="21" <?php check_dayReview('21',$_session['option_dayReview']);?> >21</option>
                    <option value="22" <?php check_dayReview('22',$_session['option_dayReview']);?> >22</option>
                    <option value="23" <?php check_dayReview('23',$_session['option_dayReview']);?> >23</option>
                    <option value="24" <?php check_dayReview('24',$_session['option_dayReview']);?> >24</option>
                    <option value="25" <?php check_dayReview('25',$_session['option_dayReview']);?> >25</option>
                    <option value="26" <?php check_dayReview('26',$_session['option_dayReview']);?> >26</option>
                    <option value="27" <?php check_dayReview('27',$_session['option_dayReview']);?> >27</option>
                    <option value="28" <?php check_dayReview('28',$_session['option_dayReview']);?> >28</option>
                    <option value="29" <?php check_dayReview('29',$_session['option_dayReview']);?> >29</option>

                    <option value="30" <?php check_dayReview('30',$_session['option_dayReview']);?> >30</option>
                    <option value="31" <?php check_dayReview('31',$_session['option_dayReview']);?> >31</option>

                </select>

            </div>
        </div>

        <div>

            <?php
            if (isset($_SESSION['review_data']))
            {
                echo '<div class="error" role="alert">'.$_SESSION['review_data'].'</div>';
                unset($_SESSION['review_data']);
            }
        ?>

        </div>

    </div>

</fieldset>


				<!-- Declaration -->
				<fieldset>

					<legend>Preparation of this accessibility statement</legend>

					<div>

						<label for="declaration">The Accessibility Statement was created on the basis of</label>
						<select id="declaration" name="declaration">

							<option value="samooceny przeprowadzonej przez podmiot publiczny"
								<?php
									check_declaration('samooceny przeprowadzonej przez podmiot publiczny',$_session['option_declaration']);
								?>
								>Self-assessment by a public sector body
							</option>

							<option value="badania przeprowadzonego przez podmiot zewnętrzny"
								<?php
									check_declaration('Badania przeprowadzonego przez podmiot zewnętrzny',$_session['option_declaration']);
								?>
								>Study by external entity
							</option>

						</select>

						<div id="addDeclarationInput" class="declaration-is-hidden">

							<label for="nameExtermalEntity">External entity name (required)</label>
							<input type="text" id="nameExtermalEntity" value="<?php
									if (isset($_SESSION['fr_nameExtermalEntity']))
									{
										echo $_SESSION['fr_nameExtermalEntity'];
										unset($_SESSION['fr_nameExtermalEntity']);
									}
								?>"  name="nameExtermalEntity"
								aria-describedby="nameExtermalEntityHelp"
								data-error="You must enter name of the entity assessment the website accessibility."/>

							<div id="declarationError" role="alert">
								<?php
									if (isset($_SESSION['e_nameExtermalEntity']))
									{
										echo '<div class="error" role="alert">'.$_SESSION['e_nameExtermalEntity'].'</div>';
										unset($_SESSION['e_nameExtermalEntity']);
									}
								?>
							</div>

						</div>

						<small id="nameExtermalEntityHelp" aria-hidden="true">Enter name of the entity assessment the website accessibility.</small>

					</div>

				</fieldset>

				<!--Personal date-->
				<fieldset>

					<legend>Contact details</legend>

					<div>

						<label for="contactName">Full name (required)</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_contactName']))
							{
								echo $_SESSION['fr_contactName'];
								unset($_SESSION['fr_contactName']);
							}
							?>" name="contactName" id="contactName"
							aria-describedby="contactNameHelp"
							data-error="You must enter full name" />

						<div id="contactNameError" role="alert">
							<?php
								if (isset($_SESSION['e_contactName']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['e_contactName'].'</div>';
										unset($_SESSION['e_contactName']);
								}
							?>
						</div>
						<small id="contactNameHelp" aria-hidden="true">Enter full name.</small>

					</div>

					<div>

						<label for="contactEmail">E-mail (required)</label>
						<input type="text" value="<?php
							if (isset($_SESSION['fr_contactEmail']))
							{
								echo $_SESSION['fr_contactEmail'];
								unset($_SESSION['fr_contactEmail']);
							}
							?>" name="contactEmail" id="contactEmail"
							aria-describedby="contactEmailHelp"
							data-error="You must enter e-mail address." />

						<div id="contactEmailError" role="alert">
							<?php
								if (isset($_SESSION['e_contactEmail']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['e_contactEmail'].'</div>';
									unset($_SESSION['e_contactEmail']);
								}
							?>
						</div>
						<small id="contactEmailHelp" aria-hidden="true">Enter e-mail address.</small>

					</div>

					<div>

						<label for="contactTelephon">Phone (required)</label>
						<input type="text" value="<?php
								if (isset($_SESSION['fr_contactTelephon']))
								{
									echo $_SESSION['fr_contactTelephon'];
									unset($_SESSION['fr_contactTelephon']);
								}
								?>" name="contactTelephon" id="contactTelephon"
								aria-describedby="contactTelephonHelp"
								data-error="You must enter phone number." />

							<div id="contactTelephonError" role="alert">
								<?php
									if (isset($_SESSION['e_contactTelephon']))
									{
										echo '<div class="error" role="alert">'.$_SESSION['e_contactTelephon'].'</div>';
										unset($_SESSION['e_contactTelephon']);
									}
								?>
							</div>
						<small id="contactTelephonHelp" aria-hidden="true">Enter phone number.</small>

					</div>


				</fieldset>

				<!-- Arch access -->
				<fieldset>

					<legend>Architectural accessibility</legend>

					<div>

						<label for="archaccess">Architectural accessibility (required)</label>
						<textarea id="archaccess" name="archaccess" cols="25" rows="4"
							aria-describedby="archaccessError archaccessHelp"
							data-error="You must describe the architectural accessibility."><?php
								if (isset($_SESSION['fr_archaccess']))
								{
									echo $_SESSION['fr_archaccess'];
									unset($_SESSION['fr_archaccess']);
								}
							?></textarea>

						<div id="archaccessError" role="alert">
							<?php
								if (isset($_SESSION['e_archaccess']))
								{
									echo '<span>Błąd</span>'.'<span>'.$_SESSION['e_archaccess'].'</span>';
									unset($_SESSION['e_archaccess']);
								}
							?>
						</div>

						<small id="archaccessHelp" aria-hidden="true">Describe the architectural accessibility</small>

					</div>

				</fieldset>

				<!-- Mobile application -->
				<fieldset>

					<legend>Mobile app</legend>

					<div>

						<label for="mobApp">Podmiot posiada aplikację mobilną.</label>
						<select id="mobApp" name="mobApp">

							<option value="Nie" <?php check_mobileApp('nie',$_session['option_mobApp']);?> >No</option>
							<option value="Tak" <?php check_mobileApp('tak',$_session['option_mobApp']);?> >Yes</option>

						</select>


						<div id="addMobileAppInput" class="mobileApp-is-hidden">

							<div>

								<label for="describeMobileApp">Mobile app name (required)</label>
								<input type="text" id="describeMobileApp" value="<?php
								if (isset($_SESSION['fr_describeMobileApp']))
								{
								echo $_SESSION['fr_describeMobileApp'];
								unset($_SESSION['fr_describeMobileApp']);
								}
								?>"name="describeMobileApp"
								aria-describedby="describeMobileAppHelp"
								data-error="P\Należy wpisać opis aplikacji mobilnej"/>
								<div id="describeMobileAppError" role="alert">
								<?php
								if (isset($_SESSION['e_describeMobileApp']))
								{
								echo '<div class="error" role="alert">'.$_SESSION['e_describeMobileApp'].'</div>';
								unset($_SESSION['e_describeMobileApp']);
								}
								?>
								</div>
								<small id="describeMobileAppHelp" aria-hidden="true">Enter description of mobile app</small>


							</div>


							<div>

								<label for="linkMobileApp">URL address (required)</label>
								<input type="text" id="linkMobileApp" value="<?php
									if (isset($_SESSION['fr_linkMobileApp']))
									{
										echo $_SESSION['fr_linkMobileApp'];
										unset($_SESSION['fr_linkMobileApp']);
									}
								?>" name="linkMobileApp"
								aria-describedby="linkMobileAppHelp"
								data-error="You must enter url address." />

							<div id="linkMobileAppError" role="alert">
								<?php
									if (isset($_SESSION['e_linkMobileApp']))
									{
										echo '<div class="error" role="alert">'.$_SESSION['e_linkMobileApp'].'</div>';
										unset($_SESSION['e_linkMobileApp']);
									}
								?>
							</div>

							<small id="linkMobileAppHelp" aria-hidden="true">Enter URL address.</small>

							</div>


						</div>

					</div>

				</fieldset>

				<!-- Additional information -->
				<fieldset>

					<legend>Additional information</legend>

					<div>

						<label for="addInformation">Additional information</label>
						<textarea id="addInformation" name="addInformation" cols="25" rows="4"
							arida-describedby="addInformationHelp"
							data-error="Enter additional information"><?php
								if (isset($_SESSION['fr_addInformation']))
								{
									echo $_SESSION['fr_addInformation'];
									unset($_SESSION['fr_addInformation']);
								}
							?></textarea>

							<?php
								if (isset($_SESSION['e_addInformation']))
								{
									echo '<div class="error" role="alert">'.$_SESSION['e_addInformation'].'</div>';
									unset($_SESSION['e_addInformation']);
								}
							?>

					</div>
					<small id="addInformationHelp" aria-hidden="true" >Enter additional information</small>

				</fieldset>

				<!-- Submit button -->
				<input type="submit" value="Generate"/>

			</form>
		</main>
	</body>

	<!-- Validators script-->
	<script type="text/javascript" src="js/envalid.js"></script>

	<!-- status select list script-->
	<script type="text/javascript" src="js/status.js"></script>

	<!-- declaration script -->
	<script type="text/javascript" src="js/declaration.js"></script>

	<!-- Mobile app script -->
	<script type="text/javascript" src="js/mobileApp.js"></script>
</html>
