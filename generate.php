
<?php
	session_start ();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>order</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Wersja podstawowa</h1>
	<?php
		$entityName = $_SESSION['s_entityName'];
		$serviceName = $_SESSION['s_serviceName'];
		$entityURLAdress = $_SESSION['s_entityURLAdress'];
			
		$yearDateOfPublication = $_SESSION['s_yearDateOfPublication'];
		$monthDateOfPublication = $_SESSION['s_monthDateOfPublication'];
		$dayDateOfPublication = $_SESSION['s_dayDateOfPublication'];
			
		$yearDateOfLastUpdate = $_SESSION['s_yearDateOfLastUpdate'];
		$monthDateOfLastUpdate = $_SESSION['s_monthDateOfLastUpdate'];
		$dayDateOfLastUpdate = $_SESSION['s_dayDateOfLastUpdate'];
			
		$selectStatus = $_SESSION['s_selectStatus'];
		$contentNotAccessibleStatus = $_SESSION['s_contentNotAccessibleStatus'];
		$offStatus = $_SESSION['s_offStatus'];
		$linkStatus = $_SESSION['s_linkStatus'];
		
		$declaration = $_SESSION['s_declaration'];
		$nameExtermalEntity = $_SESSION['s_nameExtermalEntity'];
		$yearDateOfMade = $_SESSION['s_yearDateOfMade'];
		$monthDateOfMade = $_SESSION['s_monthDateOfMade'];
		$dayDateOfMade = $_SESSION['s_dayDateOfMade'];
		
		$contactName = $_SESSION['s_contactName'];
		$contactEmail = $_SESSION['s_contactEmail'];
		$contactTelephon = $_SESSION['s_contactTelephon'];
		
		$archaccess = $_SESSION['s_archaccess'];
		$addInformation = $_SESSION['s_addInformation'];
		
		$mobApp = $_SESSION['s_mobApp'];
		$describeMobileApp = $_SESSION['s_describeMobileApp'];
		$linkMobileApp = $_SESSION['s_linkMobileApp'];
		
		$generalInfo = '<h1 id="a11y-deklaracja">Deklaracja dostępności</h1>'.'<h2>Informacje ogólne</2>'.
			'<p id="a11y-informacje_ogolne"><span id="a11y-podmiot">'.$entityName.'</span> zobowiązuje się zapewnić dostępność swojej strony internetowej zgodnie z przepisami ustawy z dnia 4 kwietnia 2019 r. o dostępności cyfrowej stron internetowych i aplikacji mobilnych podmiotów publicznych. Oświadczenie w sprawie dostępności ma zastosowanie do strony internetowej '.
			'<a id="a11y-url" href="'.$entityURLAdress.'">'.$serviceName.'</a>.</p>'.
			'<ul>'.
			'<li>Data publikacji strony internetowej:'. 
			'<time id="a11y-data-publikacja" datetime="'.
			$yearDateOfPublication.'-'.$monthDateOfPublication.'-'.$dayDateOfPublication.'">'.
			$yearDateOfPublication.'-'.$monthDateOfPublication.'-'.$dayDateOfPublication.'</time></li>'.
			'<li>Data ostatniej istotnej aktualizacji: <time id="a11y-data-aktualizacja" datetime="'.
			$yearDateOfLastUpdate.'-'.
			$monthDateOfLastUpdate.'-'.
			$dayDateOfLastUpdate
			.'">'.
			$yearDateOfLastUpdate.'-'.
			$monthDateOfLastUpdate.'-'.
			$dayDateOfLastUpdate.'</time></li>'.
			'</ul>';
		
		if($selectStatus === "Zgodna"){
			$statusInfo = '<h2>Status pod względem zgodności z ustawą</h2> '.
			'<p>Strona internetowa jest <strong id="a11y-status">'.
			$selectStatus.'</strong>  z ustawą o dostępności cyfrowej stron internetowych i aplikacji 
			mobilnych podmiotów publicznych z powodu niezgodności lub wyłączeń wymienionych poniżej. Zapewnienie dostępności niosłoby za sobą nadmierne obciążenia dla podmiotu 
			publicznego. </p> ';
		} else {
			$statusInfo = '<h2>Status pod względem zgodności z ustawą</h2> '.
			'<p>Strona internetowa jest <strong id="a11y-status">'.
			$selectStatus.'</strong>  z ustawą o dostępności cyfrowej stron internetowych i aplikacji 
			mobilnych podmiotów publicznych z powodu niezgodności lub wyłączeń wymienionych poniżej. Zapewnienie dostępności niosłoby za sobą nadmierne obciążenia dla podmiotu 
			publicznego. </p> '.
			'<h3>Treść niedostępna</h3>'.
			'<p>'.$contentNotAccessibleStatus.'</p>'.
			'<h3>wyłączenia</h3>'.
			'<p>'.$offStatus.'</p>'.
			'<h3>link</h3>'.
			'<p>'.$linkStatus.'</p>';
		}
		
		if($declaration === "Samooceny przeprowadzonej przez podmiot publiczny"){
			$preInfo = '<h3> Przygotowanie deklaracji w sprawie dostępności</h3>'.
			'<ul> '.
			'<li>Deklarację sporządzono dnia:  <time id="a11y-data-sporzadzenie" datetime="'.
			$yearDateOfMade.'-'.
			$monthDateOfMade.'-'.
			$dayDateOfMade.'">'.
			$yearDateOfMade.'-'.
			$monthDateOfMade.'-'.
			$dayDateOfMade.'</time></li>'. 
			'</ul> '.
			'<p>Deklarację sporządzono na podstawie '.
			$declaration.
			'.</p> ';
		} else {
			$preInfo = '<h3> Przygotowanie deklaracji w sprawie dostępności</h3>'.
			'<ul> '.
			'<li>Deklarację sporządzono dnia:  <time id="a11y-data-sporzadzenie" datetime="'.
			$yearDateOfMade.'-'.
			$monthDateOfMade.'-'.
			$dayDateOfMade.'">'.
			$yearDateOfMade.'-'.
			$monthDateOfMade.'-'.
			$dayDateOfMade.'</time></li>'. 
			'</ul> '.
			'<p>Deklarację sporządzono na podstawie'.
			$declaration.
			'.</p> '.
			'<h3>Nazwa podmiotu zewnętrznego</h3>'.
			'<p>'.$nameExtermalEntity.'</p>'
			;
		}
		

		$KontaktInfo = '<h2 id="a11y-kontakt">Informacje zwrotne i dane kontaktowe</h2> 
			<p>Za rozpatrywanie uwag i wniosków odpowiada: <span id=”a11y-imię-i-nazwisko-osoby-kontaktowej”>'.$contactName.'<span>,
			 e-mail: <span id=”a11y-email-osoby-kontaktowej”>'.$contactEmail.'</span>, 
			 telefon:<span id+”a11y-telefon-osoby-kontaktowej">'.$contactTelephon.'</span>.</p> 
			<p id="a11y-procedura">Każdy ma prawo:</p> 
			<ul> 
			<li>zgłosić uwagi dotyczące dostępności cyfrowej strony lub jej elementu,</li> 
			<li>zgłosić żądanie zapewnienia dostępności cyfrowej strony lub jej elementu,</li> 
			<li>wnioskować o udostępnienie niedostępnej informacji w innej alternatywnej formie.</li> 
			</ul> 
			<p>Żądanie musi zawierać:</p> 
			<ul> 
			<li>dane kontaktowe osoby zgłaszającej,</li> 
			<li>wskazanie strony lub elementu strony, której dotyczy żądanie,</li> 
			<li>wskazanie dogodnej formy udostępnienia informacji, jeśli żądanie dotyczy udostępnienia w formie alternatywnej informacji niedostępnej.</li> 
			</ul> 
			<p> Rozpatrzenie zgłoszenia powinno nastąpić niezwłocznie, najpóźniej w ciągu 7 dni. Jeśli w tym terminie zapewnienie dostępności albo zapewnienie dostępu w alternatywnej formie nie jest możliwe, nastąpi najdalej w ciągu 2 miesięcy od daty zgłoszenia. </p>';
			
		$prawoInfo = '<h3>Skargi i odwołania</h3> 
			<p> W przypadku, gdy podmiot publiczny odmówi realizacji żądania zapewnienia dostępności lub alternatywnego sposobu dostępu do informacji, wnoszący żądanie możne złożyć skargę w sprawie zapewniana dostępności cyfrowej strony internetowej, aplikacji mobilnej lub elementu strony internetowej, lub aplikacji mobilnej. Po wyczerpaniu wskazanej wyżej procedury można także złożyć wniosek do <a href=”www.rpo”> Rzecznika Praw Obywatelskich</a>.</p>  
			<h2 id="a11y-dostępność-architektoniczna">Dostępność architektoniczna</h2>'. 
			'<p>'.$archaccess.'</p>'.
			'<h2 id=”a11y-informacje-dodatkowe”>Informacje dodatkowe</h2>' .
			'<p>'.$addInformation.'</p>'
			;	
		
		if($mobApp === "Tak"){
			$amInfo = '<h2 id="a11y-aplikacja-mobilna">Aplikacja mobilna</h2>'.
			'<a href="'.$linkMobileApp.'">'.$describeMobileApp.'</a>';
		} else {
			$amInfo = "";
		}

			
	?>
	<textarea>
		<?php
			
			
			$deklaracja = $generalInfo.$statusInfo.
			$preInfo.$KontaktInfo.$amInfo.$prawoInfo;
			
			
			echo $deklaracja;
		?>
	</textarea>
	<?php
		echo $deklaracja;
		
			

	?>
</body>
</html>