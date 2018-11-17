<?php
    ob_start();
?>
<h1>My Page</h1>
<p>This is the header</p>
<?php    
    $redirect_page = 'https://www.joinmuraliworld.com';
    $redirect = false;
    if($redirect){
        header('Location:'.$redirect_page);
    }

    // ob_end_clean();//nothing will print
    ob_end_flush();//content of the page will print
?>