<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessibility Statement Generator – Utilitia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <a href="http://utilitia.pl">
            <img src="http://utilitia.pl/wp-content/uploads/2020/07/utilitia-logo-2.png" alt="Utilitia">
        </a>
    </header>
 
    <main id="content">
        <h1>Accessibility Statement</h1>
        
        <p>
            Below, in the text field is the HTML code of the Accessibility Statement with the data entered in the form. The code should be copied and added to the website of the entity whose data was entered in the form. Below the field with the HTML code, you can preview how the Accessibility Statement will be presented in the web browser. To add the code, copy it from the text field and paste in the appropriate place on the website.
        </p>
        
        <?php
            $entityName = $_SESSION['s_entityName'];
            $serviceName = $_SESSION['s_serviceName'];
            $entityURLAdress = $_SESSION['s_entityURLAdress'];
                
            $yearDateOfPublication = $_SESSION['s_yearDateOfPublication'];
            if($_SESSION['s_monthDateOfPublication'] < 10){
                $monthDateOfPublication = '0'.$_SESSION['s_monthDateOfPublication'];
            } else {
                $monthDateOfPublication = $_SESSION['s_monthDateOfPublication'];
            }
            /*$monthDateOfPublication = $_SESSION['s_monthDateOfPublication'];*/
            if($_SESSION['s_dayDateOfPublication'] < 10){
                $dayDateOfPublication = '0'.$_SESSION['s_dayDateOfPublication'];
            } else {
                $dayDateOfPublication = $_SESSION['s_dayDateOfPublication'];
            }
            /*$dayDateOfPublication = $_SESSION['s_dayDateOfPublication'];*/
                
            $yearDateOfLastUpdate = $_SESSION['s_yearDateOfLastUpdate'];
            if($_SESSION['s_monthDateOfLastUpdate'] < 10){
                $monthDateOfLastUpdate = '0'.$_SESSION['s_monthDateOfLastUpdate'];
            } else {
                $monthDateOfLastUpdate = $_SESSION['s_monthDateOfLastUpdate'];
            }
            /*$monthDateOfLastUpdate = $_SESSION['s_monthDateOfLastUpdate'];*/
            if($_SESSION['s_dayDateOfLastUpdate'] < 10){
                $dayDateOfLastUpdate = '0'.$_SESSION['s_dayDateOfLastUpdate'];
            } else {
                $dayDateOfLastUpdate = $_SESSION['s_dayDateOfLastUpdate'];
            }
    
            /*$dayDateOfLastUpdate = $_SESSION['s_dayDateOfLastUpdate'];*/
            if($_SESSION['s_selectStatus'] === 'zgodna'){
                $selectStatus = "compliant";
            } else if($_SESSION['s_selectStatus'] === 'niezgodna'){
                $selectStatus = "not compliant";
            } else {
                $selectStatus = "partially compliant";
            }
            // = $_SESSION['s_selectStatus'];
            $contentNotAccessibleStatus = $_SESSION['s_contentNotAccessibleStatus'];
            $offStatus = $_SESSION['s_offStatus'];

            /*$dayDateOfPublication = $_SESSION['s_dayDateOfPublication'];*/
    
            $yearReview = $_SESSION['s_yearReview'];
            if($_SESSION['s_monthReview'] < 10){
                $monthReview = ''.$_SESSION['s_monthReview'];
            } else {
                $monthReview = $_SESSION['s_monthReview'];
            }
            
            if($_SESSION['s_dayReview'] < 10){
                $dayReview = ''.$_SESSION['s_dayReview'];
            } else {
                $dayReview = $_SESSION['s_dayReview'];
            }
            
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
            
            $generalInfo = '<h1 id="a11y-deklaracja">Accessibility Statement</h1>'.'<h2>General information</h2>'.'<p id="a11y-wstep"><span id="a11y-podmiot">'.$entityName.'</span> is committed to making its website(s) accessible, in accordance with the Act of April 4, 2019 on  digital accessibility of websites and mobile applications of public bodies. The accessibility statement applies to the website '.'<a id="a11y-url" href="'.$entityURLAdress.'">'.$serviceName.'</a>.'.'</p>'.'<ul>'.'<li>Date of website publication: '.'<time id="a11y-data-publikacja" datetime="'.$yearDateOfPublication.'-'.$monthDateOfPublication.'-'.$dayDateOfPublication.'">'.$yearDateOfPublication.'-'.$monthDateOfPublication.'-'.$dayDateOfPublication.'</time></li>'.'<li>Date of last major update: <time id="a11y-data-aktualizacja" datetime="'.$yearDateOfLastUpdate.'-'.$monthDateOfLastUpdate.'-'.$dayDateOfLastUpdate.'">'.$yearDateOfLastUpdate.'-'.$monthDateOfLastUpdate.'-'.$dayDateOfLastUpdate.'</time></li>'.'</ul>';
            
            if($selectStatus === "compliant"){
                $statusInfo = '<h2>Compliance status</h2>'.'<p id="a11y-status">This website is '.$selectStatus.' with the Act of April 4, 2019 on  digital accessibility of websites and mobile applications of public sector bodies.</p>';
            } else if($selectStatus !== 'compliant' && $offStatus !== "") {
                $statusInfo = '<h2>Compliance status</h2>'.'<p id="a11y-status">This website is <strong>'.$selectStatus.'</strong> with the Act of April 4, 2019 on  digital accessibility of websites and mobile applications of public sector bodies due to the following non-compliances or exclusions:.</p>'.'<h3>Non-accessible content</h3>'.'<p id="a11y-tresci-niedostepne">'.$contentNotAccessibleStatus.'</p>'.'<h3>Content exempt from accessibility</h3><div id="a11y-wylaczenia">'.
                
                $offStatus
                
                .'</div>';
            
            } else if($selectStatus !== 'compliant' && $offStatus === "") {
                $statusInfo = '<h2>Compliance status</h2>'.'<p id="a11y-status">This website is <strong>'.$selectStatus.'</strong> with the Act of April 4, 2019 on  digital accessibility of websites and mobile applications of public sector bodies due to the following non-compliances:.</p>'.'<h3>Non-accessible content</h3>'.'<p id="a11y-tresci-niedostepne">'.$contentNotAccessibleStatus.'</p>';
            }
            
            if($declaration === "samooceny przeprowadzonej przez podmiot publiczny"){
                $preInfo = '<h3>Preparation of this accessibility statement</h3>'.'<ul>'.'<li>This statement was prepared on: <time id="a11y-data-sporzadzenie" datetime="'.$yearDateOfMade.'-'.$monthDateOfMade.'-'.$dayDateOfMade.'">'.$yearDateOfMade.'-'.$monthDateOfMade.'-'.$dayDateOfMade.'</time></li>'.'<li>Data ostatniego przeglądu deklaracji: <time id="a11y-data-przeglad" datetime="'.$yearReview.'-'.$monthReview.'-'.$dayReview.'">'.$yearReview.'-'.$monthReview.'-'.$dayReview.'</time></li>'.'</ul>'.'<p id="a11y-wykonawca-badania">The accessibility Statement was created on the basis of a self-assessment carried out by the public sector body '.$declaration.'.</p>';
            
            } else {                
                $preInfo = '<h3>Preparation of this accessibility statement</h3>'.'<ul>'.'<li>This statement was prepared on: <time id="a11y-data-sporzadzenie" datetime="'.$yearDateOfMade.'-'.$monthDateOfMade.'-'.$dayDateOfMade.'">'.$yearDateOfMade.'-'.$monthDateOfMade.'-'.$dayDateOfMade.'</time></li>'.'<li>Data ostatniego przeglądu deklaracji: <time id="a11y-data-przeglad" datetime="'.$yearReview.'-'.$monthReview.'-'.$dayReview.'">'.$yearReview.'-'.$monthReview.'-'.$dayReview.'</time></li>'.'</ul>'.'<p id="a11y-wykonawca-badania">The accessibility Statement was created on the basis of a study conducted by an external entity.</p>'.'<h3>External entity name</h3>'.'<p id="a11y-audytor-zewnetrzny">'.$nameExtermalEntity.'</p>';
            }
            
            $KontaktInfo = '<h2 id="a11y-kontakt">Feedback and contact information</h2><p>Provide the contact information of the person responsible for accessibility and for processing requests <span id="a11y-osoba">'.$contactName.'</span>, email: <span id="a11y-email">'.$contactEmail.'</span>, phone number: <span id="a11y-telefon">'.$contactTelephon.'</span>.</p><p id="a11y-procedura">Everyone has the right:</p><ul><li>submit a comments on the digital accessibility of the website or its element,</li><li>submit a request to ensure the digital accessibility of a website or its element,</li><li>request that non-accessible information be made accessible in alternative form.</li></ul><p>The request must include:</p><ul><li>contact details of the reporting person,</li><li>indication of the website or its element which the request relates,</li><li>indication of a convenient form of providing information, if the request concerns disclosure of inaccessible information in an alternative form.</li></ul><p>Consideration of the notification should take place immediately, at the latest within 7 days. If it is not possible to provide accessibility or an alternative form within this period, it will take place no later than 2 months from the date of notification.</p>';
                
            $prawoInfo = '<h3>Complaints and appeals</h3><p>If the public sector body refuses to comply with the request to provide accessibility or an alternative method of access to information, the person submitting the request may submit a complaint regarding the provision of digital accessibility of a website, mobile application or their elements. After exhausting the above-mentioned procedure, is possibility to submit an application to the <a href="https://www.rpo.gov.pl/content/jak-zglosic-sie-do-rzecznika-praw-obywatelskich">Ombudsman</a>.</p><h2 id="a11y-architektura">Architectural accessibility</h2>'.'<p id="a11y-opis-architektury">'.$archaccess.'</p>';
        
        if($addInformation === ""){
            $Add = "";
        } else {
            $Add = '<h2 id="a11y-informacje-dodatkowe">Additional information</h2>'.'<p id="a11y-tresc-informacji-dodatkowych">'.$addInformation.'</p>';
        }
            
        if($mobApp === "Tak"){
            $amInfo = '<h2 id="a11y-aplikacja">Mobile app</h2>'.'<a id="url-aplikacja" href="'.$linkMobileApp.'">'.$describeMobileApp.'</a>';
        } else {
                $amInfo = "";
            }
    
                
        ?>
        <textarea readonly id="declarationTxt" cols="70" rows="20"><?php
                
                $deklaracja = $generalInfo.$statusInfo.
                $preInfo.$KontaktInfo.$prawoInfo.$amInfo.$Add;
                
                
                echo $deklaracja;
            ?>
        </textarea>
        <button id="copyBtn">Copy to clipboard</button>
        <?php
            echo $deklaracja;

                
    
        ?>
    </main>
    <script>
        function copyDeclaration() {
            const declarationTxt = document.getElementById('declarationTxt')
            declarationTxt.focus();
            declarationTxt.select();
            document.execCommand('copy');
        }
        document.getElementById('copyBtn').addEventListener('click', copyDeclaration)
    </script>
</body>
</html>

