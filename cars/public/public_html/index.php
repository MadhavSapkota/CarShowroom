<!-- This is the code for mercedes_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
      require '../db/connect.php';
      require '../functions/loadTemplate.php';
      require '../model/databasetable.php';

      if(isset($_GET['page']))
      {
        $page = $_GET['page'];
      }
      else{
        $page = 'home';
      }
      require '../controller/'.$page.'.php';
      $templateVars =
        [
           'title'=> $title,
           'content'=>$content
        ];

      $html = loadTemplate('../view/layout.php', $templateVars);
      echo $html;
 ?>