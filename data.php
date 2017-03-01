<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

 <!-- database.php -->
 <!-- Querying a database and displaying the results. -->
 <html xmlns = "http://www.w3.org/1999/xhtml">
      <head>
           <title>Search Results</title>
      <style type = "text/css">
           body { font-family: arial, sans-serif;
                background-color: #FFFFFF }
                table { background-color: #ADD8E6 }
           td { padding-top: 2px;
                padding-bottom: 2px;
                padding-left: 4px;
                padding-right: 4px;
                border-width: 1px;
                border-style: inset }
       </style>
 </head>
 <body>
      <?php
           extract( $_POST );

           // build SELECT query
           $query = "SELECT " . $Location . " FROM locations";


          // Connect to MySQL
          $con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
          if (!$con) {
	       echo "mysqli_error($con)";
               die('Could not connect: ' . mysqli_error($con));
          }

          // query Products database
          if ( !( $result = mysqli_query( $con, $query) ) )
          {
               print( "Could not execute query! <br />" );
               die( mysqli_error() . "</body></html>" );
          }// end if

          mysqli_close( $con );
     ?><!-- end PHP script -->
          <h3>Added Following Volunteers</h3>
         
           <table>
           <?php
           $checkBox = implode(',', $_POST['Days']);
           foreach ($_POST['Days'] as $checkbox){
               echo $checkbox . ' ';
          }
           // fetch each record in result set
           for ( $counter = 0; $row = mysqli_fetch_row( $result );
                $counter++ )
           {
               // build table to display results
               print( "<tr>" );

               foreach ( $row as $key => $value )
                    print( "<td>$value</td>" );

               print( "</tr>" );
          } // end for
     ?><!-- end PHP script -->
</table>
</body>
</html>
