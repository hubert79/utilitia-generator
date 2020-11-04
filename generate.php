
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
		$declaration = $_SESSION['s_declaration'];
		$archaccess = $_SESSION['s_archaccess'];
		$mobApp = $_SESSION['s_mobApp'];
		
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
		
		$statusInfo = '<h2>Status pod względem zgodności z ustawą</h2> '.
			'<p>Strona internetowa jest <strong id="a11y-status">'.
			$selectStatus.'</strong>  z ustawą o dostępności cyfrowej stron internetowych i aplikacji 
			mobilnych podmiotów publicznych z powodu niezgodności lub wyłączeń wymienionych poniżej. Zapewnienie dostępności niosłoby za sobą nadmierne obciążenia dla podmiotu 
			publicznego. </p> ';
			
		$preInfo = '<h3> Przygotowanie deklaracji w sprawie dostępności</h3>'.
			'<ul> '.
			'<li>Deklarację sporządzono dnia:  <time id="a11y-data-sporzadzenie" datetime="1990-01-01">1990-01-01</time></li>'. 
			'<li>Deklarację została ostatnio poddana przeglądowi i aktualizacji dnia:  <time id="a11y-data-deklaracja-przeglad" datetime="1990-01-01">1990-01-01</time></li>' .
			'</ul> '.
			'<p>Deklarację sporządzono na podstawie'.
			$declaration.
			'.</p> ';

		$KontaktInfo = '<h2 id="a11y-kontakt">Informacje zwrotne i dane kontaktowe</h2> 
			<p>Za rozpatrywanie uwag i wniosków odpowiada: <span id=”a11y-imię-osoby-kontaktowej”>imie<span><span id=”a11y-nazwisko-osoby-kontaktowej”> nazwisko</span>, e-mail: <span id=”a11y-email-osoby-kontaktowej”> email@osoby.kontaktowej </span>, telefon:<span id+”a11y-telefon-osoby-kontaktowej"> 123123123</span>.</p> 
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
			<h2 id="a11y-dostępność-architektoniczna">Dostępność architektoniczna</h2> 
			<p>dostepnosc architektoniczna</p> 
			<p>dostepnosc architektoniczna</p> 
			<p>dostepnosc architektoniczna</p> 
			<h2 id=”a11y-informacje-dodatkowe”>Informacje dodatkowe</h2> 
			<h3>Ułatwienia</h3> 
			<p>udogodnienia</p>  
			';	
			
	?>
	<textarea>
		<?php
			
			
			$deklaracja = $generalInfo.$statusInfo.
			$preInfo.$KontaktInfo.$prawoInfo;
			
			
			echo $deklaracja;
		?>
	</textarea>
	<?php
		echo $deklaracja;
		echo $selectStatus;
			echo $declaration;
			echo $archaccess;
			echo $mobApp;
			
	?>
</body>
</html>