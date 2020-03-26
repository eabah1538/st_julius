const url = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/today";

    st = document.getElementById('saint_of_the_day');
    sn =  document.getElementById('liturgical_season_calendar');
    dt = document.getElementById('liturgical-date');
    c = document.getElementById('liturgical-celebration');
    lc = document.getElementById('liturgical-color');

fetch(url)
  .then(response => response.json())
  .then(function(data) {

    console.log(data.celebrations[0].title);
    
    dt.innerHTML = data.date;
    c.innerHTML = data.celebrations[0].title + ', ';
    lc.innerHTML = data.celebrations[0].colour;

    sn.style.backgroundColor = data.celebrations[0].colour;
    
    
  })
  .catch(function(error) {
    console.log(error);
  });