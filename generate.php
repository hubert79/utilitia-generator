
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
	<textarea>
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
			
			$deklaracja = '<h1 id="a11y-deklaracja">Deklaracja dostępności</h1>'.'<h2>Informacje ogólne</2>'.
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
			'</ul>'.
			'<h2>Status pod względem zgodności z ustawą</h2> '.
			'<p>Strona internetowa jest <strong id="a11y-status">'.
			$selectStatus.'</strong>  z ustawą o dostępności cyfrowej stron internetowych i aplikacji 
			mobilnych podmiotów publicznych z powodu niezgodności lub wyłączeń wymienionych poniżej. Zapewnienie dostępności niosłoby za sobą nadmierne obciążenia dla podmiotu 
			publicznego. </p> '
			;
			
			
			echo $deklaracja;
		?>
	</textarea>
	<?php
		echo $deklaracja;
		echo $selectStatus;
			echo $declaration;
			echo $archaccess;
			echo $mobApp;
			echo date(Y-m-d);
	?>
</body>
</html>