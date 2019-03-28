<?php
session_start();
if(empty($_SESSION['email']))
{
header('Location: ./index.php'); /* Redirect browser */
exit();
}
else{
  $uname = $_SESSION['email'];
}
?>
<?php
    require_once('./head.php');
?>
  <div class="container" style="padding-top: 12%;">
  <div class="panel panel-primary">
            <div class="panel-body">
             <div id="loading" style='display:none'><img src="images/loading.gif" /></div>
            <div class="row">
                <h2 class="text-center">Search List</h2>
            </div>
  <div class="row">
  <table id="history" class="display cell-border" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Search Value</th>
            </tr>
          </thead>
    </table>
        </div>
        </div>
  </div>
</div>

</body>

<?php
    include('./footer.php');
?>
