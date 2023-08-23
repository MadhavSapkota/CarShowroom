<!-- This is the code for loadtemplate  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
    function loadTemplate($fileName, $templateVars)
    {
          extract($templateVars);
          ob_start();
          require $fileName;
          $content = ob_get_clean();
          return $content;
    }
 ?>