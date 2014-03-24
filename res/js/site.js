$(document).ready( function() {

  // here's some magic to make sure the dates are happening this month.
  var thisMonth = moment().format('YYYY-MM');

  var eventsArray = [
    { date: thisMonth + '-01', title: 'A1' },
    { date: thisMonth + '-20', title: 'B2' }
  ];

  clndr = $('.calendar').clndr({
    template: $('#template-calendar').html(),
    events: eventsArray,
    showAdjacentMonths: true,
    adjacentDaysChangeMonth: true
  });

  // bind month navigation to the left and right arrow keys
  $(document).keydown( function(e) {
    if(e.keyCode == 37) {
      // left arrow
      clndr.back();
    }
    if(e.keyCode == 39) {
      // right arrow
      clndr.forward();
    }
  });

});