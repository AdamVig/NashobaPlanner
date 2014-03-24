<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Schedule &middot; Nashoba Planner</title>
    <?php include '../res/html/head.html'; ?>
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
              <div class="calendar">
                <script type="text/template" id="template-calendar">
                  <div class="clndr-controls">
                    <div class="clndr-control-button">
                      <span class="clndr-previous-button">previous</span>
                    </div>
                    <div class="month"><%= month %> <%= year %></div>
                    <div class="clndr-control-button rightalign">
                      <span class="clndr-next-button">next</span>
                    </div>
                  </div>
                  <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                      <tr class="header-days">
                        <% for (var i = 0; i < daysOfTheWeek.length; i++) { %>
                        <td class="header-day"><%= daysOfTheWeek[i] %></td>
                        <% } %>
                      </tr>
                    </thead>
                    <tbody>
                      <% for(var i = 0; i < numberOfRows; i++){ %>
                      <tr>
                        <% for(var j = 0; j < 7; j++){ %>
                          <% var d = j + i * 7; %>
                        <td class="<%= days[d].classes %>">
                          <div class="day-contents">
                            <%= days[d].day %>
                            <% _.each(eventsThisMonth, function(event) { %>
                              <% dayDate = moment(days[d]).format('YYYY-MM-DD'); %>
                              <% if (event.date == dayDate && days[d].classes.indexOf('adjacent-month') == -1) { %>
                                <div class="event-title"><%= event.title %></div>
                              <% } %>
                            <% }); %>
                          </div>
                        </td>
                        <% } %>
                      </tr>
                      <% } %>
                    </tbody>
                  </table>
                </script>
                </div>
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