<?php
   $tra = $_GET["tra"];
   $pic = $_GET["pic"];
   $alc = $_GET["alc"];

   $ppic = $pic/$tra*100; // Percentual da picanha
   $palc = $alc/$tra*100; // ""   ""     " alcatra

   $pstotal = $pic+$alc; // Total do peso do traseiro

   $petotal = $ppic+$palc; // Total do percentual traseiro

   if($tra == $pstotal && $petotal==100) {
       echo 'Pesagem e Percentual corretos';
     }
         elseif ($pstotal != $tra) {
	       echo 'Pesagem incorreta';
	   }

	    elseif ($petotal != 100) {
	      echo 'Percentual incorreto';
	    }
