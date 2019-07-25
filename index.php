<?php

require ('header.phtml');

if (isset($_GET['page']) && $_GET['page'] == 'aboutme')
    require ('aboutme.phtml');
elseif (isset($_GET['page']) && $_GET['page'] == 'projects')
    require ('Projects.phtml');
else
    require ('home.phtml');

require ('footer.phtml');

?>

