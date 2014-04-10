<?php

require "../graham.php";
$yearSchedule = genYear();

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
          <div class="controls text-center">
            <button onclick="window.print();" class="btn btn-success btn-lg print">Print Schedule</button>
          </div>
          <script type="text/template" id="template">
            <% _.each(events, function(day) { %>
              <div class="day">
                <div class="day-title"><%= day.title %></div>
                <div class="day-date"><%= day.date %></div>
              </div>
              <br>
            <% }); %>
          </script>
          <div class="target"></div>
        </div>
      </div>
      <footer class="container">
        <?php include '../res/html/footer.html'; ?>
      </footer>
      <script src="../res/js/underscore-min.js"></script>
      <script src="../res/js/moment-2.5.1.js"></script>
      <script src="./print.js"></script>
      <script>
        var events = <?php echo json_encode($yearSchedule); ?>;
        var parsed = _.template($("#template").html(), {events:events});
        //$(".target").html(parsed);
        var testEvents = [
          {'title': 'A1', 'date':'2014-04-07'},
          {'title': 'B2', 'date':'2014-04-08'},
          {'title': 'C3', 'date':'2014-04-09'},
          {'title': 'D4', 'date':'2014-04-10'},
          {'title': 'E5', 'date':'2014-04-11'}
        ];
        $(".target").html(makeWeek(testEvents));
      </script>
    </div>
  </body>
</html>