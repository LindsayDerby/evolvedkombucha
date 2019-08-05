<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'evolvedkombucha.com' // Put you mail domain here
	,
	'Evolved Kombucha' // Put your site name / form name here
	,
	'lindsay.graybill@gmail.com' // Where will the form notification be sent?
	,
	'noreply@evolvedkombucha.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
