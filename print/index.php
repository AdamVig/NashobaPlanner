<?php



?>
<!DOCTYPE html>
<html>
  <head>
    <title>Print &middot; Nashoba Planner</title>
    <?php include '../res/html/head.html'; ?>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Nashoba Planner</a>
          </div>
          <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Home</a></li>
              <li><a href="/schedule">Create schedule</a></li>
              <li class="active"><a href="/print">Print</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div id="content">
        <div class="container">
          <script type="text/template">
            
          </script>
        </div>
      </div>
      <footer class="container">
        <?php include '../res/html/footer.html'; ?>
      </footer>
      <script src="../res/js/underscore-min.js"></script>
      <script>
        $(document).ready( function() {
          var eventsArray = <?php echo json_encode($yearSchedule); ?>;
        });
      </script>
    </div>
  </body>
</html>