<!DOCTYPE html>
<html>
<head>
	<title>The reformed calendar</title>
	<style type="text/css">
body, html {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
}

.wrapper {
    width:90%;
    text-align:center;
    position: absolute;
    top: 2rem;
    left: 0;
    right: 0;
    margin: auto;

    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;

    /*bottom: 0;*/
    /*display: grid;*/
    /*grid-gap: 3rem;*/
    /*grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));*/
}

table {
  padding: 1rem 2rem;
}

.today {
  background: #afffff;
}

.tooltip {
  display: none;
  background: black;
  color: white;
}
.tooltip.active {
  display: inline-block;
}

	</style>
  <script src="/js/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
	</div>

  <span class="tooltip"><b>Gregorian: </b><span class="tooltip-date">Aug 29, 2020</span></span>  
  <script type="text/javascript">
    $('.wrapper').on('click', 'td', function(a,b,c) {console.log($(this).attr('attr-doy'))})

    function isLeapYear(year = new Date().getFullYear()) {
      return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
    }

    function DOYToDate(doy, year = new Date().getFullYear() ) {
      // doy -= 1;
      var dayCount = isLeapYear(year) ? [0, 31, 60, 91, 121, 152, 182, 213, 244, 274, 305, 335] 
                                      : [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];

      for(month = 11; month >= 0 && dayCount[month] > doy; month--) {}
      doy -= dayCount[month]
      d = new Date();
      d.setMonth(month);
      d.setDate(doy);
      return d;
    } 

    Date.prototype.isLeapYear = function() {
      var year = this.getFullYear();
      return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
    };

    // Get Day of Year
    Date.prototype.getDOY = function() {
      var dayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
      var mn = this.getMonth();
      var dn = this.getDate();
      var dayOfYear = dayCount[mn] + dn;
      if(mn > 1 && this.isLeapYear()) dayOfYear++;
      return dayOfYear;
    };







    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var weekDays = ['Mon', 'Tue', 'Wed', 'Fri', 'Sat', 'Sun'];


    var doy = 1;
    var cal = '';
    for(mi = 0; mi < months.length; mi++) {
      cal += `
      <table>
        <thead>
          <tr><th colspan="6">${months[mi]}</th></tr>
          <tr>`;
      for(wi = 0; wi < weekDays.length; wi++) {
        cal += `
            <th>${weekDays[wi]}</th>`;
      }
      cal += `
          </tr>
        </thead>
        <tbody>`;

      for(wi = 0; wi < 5; wi++) {
        cal += `
          <tr>`;

        for(di = 0; di < weekDays.length; di++) {
          cal += `
            <td attr-doy="${doy++}">${wi*weekDays.length+di+1}</td>
          `;
        }

        cal += `
          </tr>`;
      }

      cal += `
        </tbody>`;
    }
    cal += `
      </table>`;
    cal += `
      <table>
        <thead>
          <tr>
            <th colspan="6">New-Years week</th>
          </tr>
          <tr>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Fri</th>
            <th>Sat</th>
            ${isLeapYear() ? '<th>Sun</th>' : ''}
          </tr>  
        </thead>
        <tbody>
          <tr>
            <td attr-doy="${doy++}">01</td>
            <td attr-doy="${doy++}">02</td>
            <td attr-doy="${doy++}">03</td>
            <td attr-doy="${doy++}">04</td>
            <td attr-doy="${doy++}">05</td>
            ${isLeapYear() ? `<td attr-doy="${doy++}">06</td>` : ''}
          </tr>
        </tbody>
      </table>`;
    $('.wrapper').append(cal);

    var today = new Date();

    $(`td[attr-doy=${today.getDOY()}]`).addClass('today');
    $('.wrapper').on('mouseover', 'td', function() {
      var doy = $(this).attr('attr-doy');
      var date = DOYToDate(doy);
      $('.tooltip-date').html(`${date.toDateString()}`)
      console.log(date);
      $('.tooltip').addClass('active');

    })
    $('.wrapper').on('mouseleave', 'td', function() {
      $('.tooltip').removeClass('active');
    })




  </script>
</body>
</html>