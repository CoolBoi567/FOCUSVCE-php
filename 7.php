<!--/*
	Author : Prashant Shahi
	CSE-5th Sem
	ihahstnahsarp@gmail.com
*/-->
<?php
	for($i=1;$i<=8;$i++) {
		for($j=1;$j<=5;$j++) {
			if($i==1 and ($j==1 or $j==5))
				echo '&nbsp &nbsp';
			else if($i==1)
				echo '*&nbsp';
			else if($i==4 and $j==5)
				echo '&nbsp &nbsp';
			else if($i==4)
				echo '*&nbsp';
			else if($j==1 or $j==5)
				echo '*';
			else
				echo '&nbsp &nbsp';
		}
		echo '<br/>';
	}	
?>
<!--/*

	      * * * * * *		*	          * * 
	      *         *	       * *	        *     *
	      *         *	      *   *	       *       *
	      * * * * * *	     *     *	      * * * * * *
	      *         *	    * * * * *	      *         *
	      *         *	   *	     *	      *         *
	      *         *	  *	      *	      *         *
*/-->
