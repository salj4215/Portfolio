<?php

require ('header.phtml');

if (isset($_GET['page']) && $_GET['page'] == 'aboutme')
    require ('aboutme.phtml');
else
    require ('home.phtml');

require ('footer.phtml');

?>

