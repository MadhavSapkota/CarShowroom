<!-- This is the code for index.php  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
      require '../model/connect.php';
      require '../functions/loadTemplate.php';
      require '../class/databasetable.php';

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