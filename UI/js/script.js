let url_today = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/today";
let url_tmrrw = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/tomorrow";

const urls = [url_today, url_tmrrw];

    let st = document.getElementById('saint_of_the_day');
    let sn1 =  document.getElementById('liturgical_calendar_today');
    let sn2 =  document.getElementById('liturgical_calendar_tomorrow');
    let dt = document.getElementById('liturgical-date');
    let c = document.getElementById('liturgical-celebration');
    let lc = document.getElementById('liturgical-color');

Promise.all(urls.map(url =>
    fetch(url_today),
    fetch(url_tmrrw)
  .then(response => response.json())
  .then(data => {
    
    dt.innerHTML = data.date;
    c.innerHTML = data.celebrations[0].title + ', ';
    lc.innerHTML = data.celebrations[0].colour;

    sn1.style.backgroundColor, sn2.style.backgroundColor = data.celebrations[0].colour;
    data.celebrations[0].colour == 'white' ? sn1.style.color == 'black': sn1.style.color == 'white'; 
    data.celebrations[0].colour == 'white' ? sn2.style.color == 'black': sn2.style.color == 'white'; 
    
  })
))
  .catch(function(error) {
    console.log(error);
  });

 const newsApiKey = 'd1f07837eb494291bbbb2f973ff0fa76';
 const newsApiUrl = "http://newsapi.org/v2/everything?domains=catholicnewsagency.com&q=english&apiKey="+ newsApiKey;

  nf = document.getElementById('newsFeeds');
  
  fetch(newsApiUrl)
    .then(response => response.json())
    .then(function(data){

      data.articles
        .filter((news, i) => (i < 5))
        .map((news) => {

        let image = document.createElement("img");
        image.setAttribute("src", news.urlToImage); 
        image.style.maxHeight = "50px";
        image.setAttribute("class", "pt-2");

        let anchor = document.createElement("a");
        anchor.setAttribute("href", news.url);
        anchor.setAttribute("target", "_blank");
        anchor.style.display = "flex";
        anchor.setAttribute("class", "m-2");
        nf.appendChild(anchor);

        let nl = document.createElement("li");
        nl.style.listStyleType = "none";
        nl.setAttribute("class", "p-2");
        nl.style.fontSize = "0.7em";
          anchor.appendChild(image);
          anchor.appendChild(nl);
  
        nl.innerHTML = news.title;
      })   

      //   moreNews = document.createElement("a");
      // moreNews.setAttribute("href", news.url);
      // moreNews.setAttribute("target", "_blank");
      // nf.appendChild(moreNews);

      // moreNews.innerHTML = "See More >>";
      
    })
    .catch(function(error) {
      console.log(error);
    });





//     // fetch('https://jsonplaceholder.typicode.com/posts')
// 	.then(function (response) {
// 		return response.json();
// 	}).then(function (data) {


//  		console.log(data);

//  		// Cache the data to a variable
//  		posts = data;

//  		// Make another API call and pass it into the stream
//  		return fetch('https://jsonplaceholder.typicode.com/users');

// 	}).then(function (response) {
// 		// Get a JSON object from the response
// 		return response.json();
// 	}).then(function (data) {

// 		// Log the data to the console
// 		console.log(data);

// 		// Cache the data to a variable
// 		users = data;

// 		// Now that you have both APIs back, you can do something with the data

// 	}).catch(function (error) {
// 		// if there's an error, log it
// 		console.log(error);
// 	});

// As you can see, though, this is long and kind of awkward. It also means that you need to wait for one API responses to complete before the next can begin, which is a big inefficient.
// Let’s look at a better way.

// Calling multiple APIs at once #
// With the Promise.all() method, we can pass in an array of promises. When all of them have resolved (or one fails), it will run our callback functions.

// In this case, we would pass in an array of our fetch calls.

// Promise.all([
// 	fetch('https://jsonplaceholder.typicode.com/posts'),
// 	fetch('https://jsonplaceholder.typicode.com/users')
// ]);



// OR

// // store urls to fetch in an array
// const urls = [
//   'https://dog.ceo/api/breeds/list',
//   'https://dog.ceo/api/breeds/image/random'
// ];

// // use map() to perform a fetch and handle the response for each url
// Promise.all(urls.map(url =>
//   fetch(url)
//     .then(checkStatus)                 
//     .then(parseJSON)
//     .catch(logError)
// ))
// .then(data => {
//   // do something with the data
// })