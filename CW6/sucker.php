<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <title>Buy Your Way to a Better Education!</title>
        <link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
    <?php

if(isset($_POST['name']) && isset($_POST['section']) && isset($_POST['credit_card']) && isset($_POST['card'])) {
    if($_POST['name'] == '' && $_POST['section'] == '' && $_POST['credit_card'] == '' && $_POST['card'] == '') {
        $name = $_POST['name'];
        $section = $_POST['section'];
        $credit_card = $_POST['credit_card'];
        $card = $_POST['card'];

        $file = fopen('sucker.html', 'a');
        $text = $name.';'.$section.';'.$credit_card.';'.$card."\n";
        fwrite($file, $text);
        fclose($file);

        $filecontents = file_get_contents('sucker.html');

        if(strlen($credit_card) == 16) {
            if(($card=='Mastercard' && $credit_card[0] == 5) || ($card=='Visa') && $credit_card[0] == 4 ) {
        }

        ?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?=$name?></dd>

			<dt>Section</dt>
			<dd><?=$section?></dd>

			<dt>Credit Card</dt>
			<dd><?=$credit_card?> (<?=$card?>)</dd>
        </dl>
        <p>Here are all the suckers who have submitted here:</p>
				<pre>
					<?=$filecontents?>
				</pre>

			<?php
				}

				else {
					print "<h1>Sorry</h1>";
					print "You didn't pride a valid credit card number. Click <a href='buyagrade.html'>here</a> to go back.";
				}
			}
			else {
				print "<h1>Sorry</h1>";
				print "You must fill out all the fields. Click <a href='buyagrade.html'>here</a> to go back.";
			}
        }
        ?>
	</body>
</html>