const url = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/today";

    st = document.getElementById('saint_of_the_day');
    sn =  document.getElementById('liturgical_season_calendar');
    dt = document.getElementById('liturgical-date');
    c = document.getElementById('liturgical-celebration');
    lc = document.getElementById('liturgical-color');

fetch(url)
  .then(response => response.json())
  .then(function(data) {
    
    dt.innerHTML = data.date;
    c.innerHTML = data.celebrations[0].title + ', ';
    lc.innerHTML = data.celebrations[0].colour;

    sn.style.backgroundColor = data.celebrations[0].colour;
    data.celebrations[0].colour == 'white' ? sn.style.color = 'black' : sn.style.color = 'white'; 
    
  })
  .catch(function(error) {
    console.log(error);
  });

  const newsApiKey = 'd1f07837eb494291bbbb2f973ff0fa76';
  const newsApiUrl = "http://newsapi.org/v2/everything?domains=catholicnewsagency.com&q=english&apiKey="+newsApiKey;

  fetch(newsApiUrl)
    .then(response => response.json())
    .then(function(data){

      data.articles.map((news) => {
        nt.innerHTML = news.title;
      });

    // nt.innerHTML = data.articles[]title;
    // nt.innerHTML = data.


      console.log(data);


    }).catch(function(error){
      console.log(error);
    })