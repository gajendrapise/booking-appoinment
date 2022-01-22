<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.time {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.time li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.time li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .time li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .time li {width: 12.5%;}
  .time li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .time li {width: 12.2%;}
}
</style>
</head>
<body>
<ul class="weekdays">
  <li><h3>Mo</h3></li>
  <li><h3>Tu</h6></li>
  <li><h3>We</h6></li>
  <li><h3>Th</h6></li>
  <li><h3>Fr</h6></li>
  <li><h3>Sa</h6></li>
  <li><h3>Su</h6></li>
  <li>11 NOV 2019</li>
  <li>12 NOV 2019</li>
  <li>13 NOV 2019</li>
  <li>14 NOV 2019</li>
  <li>15 NOV 2019</li>
  <li>16 NOV 2019</li>
  <li>17 NOV 2019</li>
</ul>

<ul class="time">  
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>9:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>10:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
<li>11:00 AM</li>
</ul>
</body>
</html>
