const url = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/today";

    st = document.getElementById('saint_of_the_day');
    sn =  document.getElementById('liturgical_season_calendar');

fetch(url)
  .then(response => response.json())
  .then(function(data) {
    
    sn.innerHTML = data.date + "" + data.celebrations[0].title + ', ';
    
    console.log(data);
  })
  .catch(function(error) {
    console.log(error);
  });