
<?php

if($_POST) {

    $errors = [];

    if(empty($_POST['user_name'])) {
        $errors['user_name1']= 'User name required';

    }
    if(empty($_POST['user_firstname'])) {
        $errors['user_firstname1'] = 'User first name required';

    }
    if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors['user_email1'] = 'User email required';
    }
    if(empty($_POST['user_phone'])) {
        $errors['user_phone1'] = 'User phone required';
    }
    if(empty($_POST['user_message'])) {
        $errors['user_message1'] = 'Please write a message';
    }
    if(empty($_POST['choose'])) {
        $errors['option-select'] = 'Please choose options';
    }

    if(count($errors) === 0) {
        echo "Merci " . $_POST['user_name'] . " " . $_POST['user_firstname'] . "de nous avoir contacté à propos de "
            . $_POST['option-select'] .

            " un de nos conseiller vous contactera soit à l’adresse" . $_POST['user_email'] . "ou par téléphone au "
            . $_POST['user_phone'] . "dans les plus brefs délais pour traiter votre demande :" . $_POST['user_message'];
        }

       echo implode(' | ', $errors);
    }
