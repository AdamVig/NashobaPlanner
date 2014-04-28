<?php

require "../graham.php";
$yearSchedule = genYear();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Print &middot; Nashoba Planner</title>
    <link rel="stylesheet" href="../res/css/clndr.css">
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
          <script type="text/template" class="template">
            <div class="text-center">
              <span class="title"><%= month %> <%= year %></span>
            </div>
            <br>
            <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
              <thead>
                <tr class="header-days">
                  <% for (var i = 0; i < daysOfTheWeek.length; i++) { %>
                  <td class="header-day"><%= daysOfTheWeek[i] %></td>
                  <% } %>
                </tr>
              </thead>
              <tbody>
                <% for (var i = 0; i < numberOfRows; i++){ %>
                <tr>
                  <% for (var j = 0; j < 7; j++){ %>
                    <% var d = j + i * 7; %>
                  <% if (days[d].events[0]) { %>
                    <% if (days[d].events[0].title.length > 2) { %>
                      <% days[d].classes += " holiday"; %>
                    <% } %>
                  <% } %>
                  <td class="<%= days[d].classes %>">
                    <div class="day-contents">
                      <%= days[d].day %>
                      <div class="event-title">
                        <% if (days[d].events[0]) { %>
                          <% if (days[d].events[0].title.length > 2) { %>
                            <textarea><%= days[d].events[0]['title'] %></textarea>
                          <% } else { %>
                            <input type="text" maxlength="2" value="<%= days[d].events[0]['title'] %>">
                          <% } %>
                        <% } %>
                      </div>
                    </div>
                  </td>
                  <% } %>
                </tr>
                <% } %>
              </tbody>
            </table>
          </script>
          <div id="calendar8" class="calendar print-calendar"></div>
          <div id="calendar9" class="calendar print-calendar"></div>
          <div id="calendar10" class="calendar print-calendar"></div>
          <div id="calendar11" class="calendar print-calendar"></div>
          <div id="calendar0" class="calendar print-calendar"></div>
          <div id="calendar1" class="calendar print-calendar"></div>
          <div id="calendar2" class="calendar print-calendar"></div>
          <div id="calendar3" class="calendar print-calendar"></div>
          <div id="calendar4" class="calendar print-calendar"></div>
          <div id="calendar5" class="calendar print-calendar"></div>
        </div>
      </div>
      <footer class="container">
        <?php include '../res/html/footer.html'; ?>
      </footer>
      <script src="../res/js/underscore-min.js"></script>
      <script src="../res/js/moment-2.5.1.js"></script>
      <script src="../res/js/json2.js"></script>
      <script src="../res/js/clndr.js"></script>
      <script src="./print.js"></script>
      <script>
        var events = <?php echo json_encode($yearSchedule); ?>;
        for (var month = 0; month <= 11; month++) {
          if ($('#calendar' + month).is('*')) { //Month target exists
            clndr = $('#calendar' + month).clndr({
              template: $('.template').html(), //Get template from HTML
              events: events, //Get events from given array
            });
            if (Date.now().getMonth() > 6) {
              clndr.previousYear();
            } else {
              clndr.nextYear();
            }
            clndr.setMonth(month);
          }
        }
      </script>
    </div>
  </body>
</html>