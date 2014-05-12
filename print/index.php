<?php

require "../graham.php";
require "../res/php/mPDF/mpdf.php";
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
              <li><a href="../">Home</a></li>
              <li><a href="../schedule">Schedule</a></li>
              <li class="active"><a href="#">Print</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div id="content">
        <div class="container">
          <!-- Print Button -->
          <div class="controls text-center">
            <button id="print" class="btn btn-success btn-lg print">Print Schedule</button>
          </div>
          <!-- Shared Template for calendar -->
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
          <!-- Targets for calendars for each month -->
          <div id="calendars">
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
      </div>
      <footer class="container">
        <?php include '../res/html/footer.html'; ?>
      </footer>
      <script src="../res/js/underscore-min.js"></script>
      <script src="../res/js/moment-2.5.1.js"></script>
      <script src="../res/js/json2.js"></script>
      <script src="../res/js/clndr.js"></script>
      <script>
        var events = <?php echo json_encode($yearSchedule); ?>; //Events for the year
        var date = new Date();

        for (var month = 0; month <= 11; month++) {

          if ($('#calendar' + month).is('*')) { //Month target div exists

            //Render calendar
            clndr = $('#calendar' + month).clndr({
              template: $('.template').html(), //Get template from HTML
              events: events, //Get events from given array
            });
            
            //Date is after June & calendar month is Sept-Dec
            if (date.getMonth() > 6 && month > 7) {
              clndr.nextYear();
            } else if (date.getMonth() < 6 && month > 7) {
              clndr.previousYear();
            }

            clndr.setMonth(month);
          }
        }

        var html = $('#calendars').html();

        $('#print').click(function() {
          $.post (
            "./print.php",
            html, //Data in POST
            function(data, textStatus, jqXHR) {
              console.log(data);
            }
          );
        });
      </script>
    </div>
  </body>
</html>