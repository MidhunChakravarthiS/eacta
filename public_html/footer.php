<?php 
// $DbConnReplica = MysqlDBConnectReplica(1);

?> 


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/datatables.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#history').DataTable({
        "ajax": "histProcess.php",
         "pageLength": 10,
         language: {
            sLoadingRecords : '<span style="width:100%;"><img src="images/loading.gif"></span>'
        },
        "columns": [
            { "data": "date" },
            { "data": "time" },
            { "data": "searchVal" }
        ],
        dom: 'lBfrtip'
    });      
} );
  </script>  
