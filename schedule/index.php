<?php



?>
<!DOCTYPE html>
<html>
  <head>
    <title>Schedule &middot; Nashoba Planner</title>
    <?php include '../res/html/head.html'; ?>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="../res/css/clndr.css">
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
              <li class="active"><a href="/schedule">Create schedule</a></li>
              <li><a href="/print">Print</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div id="content">
        <div class="container">
          <div class="cal1">
          </div>
          <script type="text/template" id="template-calendar">
            <div class="clndr-controls">
              <div class="clndr-previous-button">&lsaquo;</div>
              <div class="month"><%= month %></div>
              <div class="clndr-next-button">&rsaquo;</div>
            </div>
            <div class="clndr-grid">
              <div class="days-of-the-week">
                <% _.each(daysOfTheWeek, function(day) { %>
                  <div class="header-day"><%= day %></div>
                <% }); %>
                <div class="days">
                  <% _.each(days, function(day) { %>
                    <div class="<%= day.classes %>"><%= day.day %></div>
                  <% }); %>
                </div>
              </div>
            </div>
            <div class="clndr-today-button">Today</div>
          </script>
        </div>
      </div>
      <footer class="container">
        <?php include '../res/html/footer.html'; ?>
      </footer>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
      <script src="../res/js/json2.js"></script>
      <script src="../res/js/moment-2.5.1.js"></script>
      <script src="../res/js/clndr.js"></script>
      <script src="../res/js/site.js"></script>
    </div>
  </body>
</html>