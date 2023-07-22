const generalBtn = document.getElementById("General");
const businessBtn = document.getElementById("business");
const sportsBtn = document.getElementById("sports");
const entertainmentBtn = document.getElementById("entertainment");
const technologyBtn = document.getElementById("technology");
const healthBtn = document.getElementById("health");
const scienceBtn = document.getElementById("science");
const searchBtn = document.getElementById("searchBtn");
const newsQuery = document.getElementById("newsQuery");

const newstype = document.getElementById("newstype");
const newsdetails = document.getElementById("newsdetails");


//Array 
var newsDataArr = [];


// apis
const API_KEY = "19563921d2324f86b36ed76a47fb0e78";
const HEADLINES_NEWS = "https://newsapi.org/v2/top-headlines?country=in&apiKey=";
const GENERAL_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=general&apiKey=";
const BUSINESS_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=";
const SPORTS_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=";
const ENTERTAINMENT_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=";
const TECHNOLOGY_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=";
const HEALTH_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=";
const SCIENCE_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=science&apiKey=";
const SEARCH_NEWS = "https://newsapi.org/v2/everything?q=";


window.onload = function() {
    newstype.innerHTML = "<h4>Headlines</h4>";
    fetchHeadlines();
}


generalBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>General News</h4>";
    fetchGeneralNews();

});
businessBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>Business News</h4>";
    fetchBusinessNews();
});
sportsBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>Sports News</h4>";
    fetchSportsNews();
});
entertainmentBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>EntertainmentNews</h4>";
    fetchEntertainmentNews();
});
technologyBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>Technology News</h4>";
    fetchTechnologyNews();
});
healthBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>Health News</h4>";
    fetchHealthNews();
});
scienceBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>Science News</h4>";
    fetchScienceNews();
});
searchBtn.addEventListener("click" , function(){
    newstype.innerHTML = "<h4>search : "+newsQuery.value+"</h4>";

    fetchQueryNews();
});

const fetchHeadlines = async () =>{
    const response = await fetch(HEADLINES_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchGeneralNews = async () =>{
    const response = await fetch(GENERAL_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}


const fetchBusinessNews = async () =>{
    const response = await fetch(BUSINESS_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchSportsNews = async () =>{
    const response = await fetch(SPORTS_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchEntertainmentNews = async () =>{
    const response = await fetch(ENTERTAINMENT_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchTechnologyNews = async () =>{
    const response = await fetch(TECHNOLOGY_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchHealthNews = async () =>{
    const response = await fetch(HEALTH_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchScienceNews = async () =>{
    const response = await fetch(SCIENCE_NEWS+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

const fetchQueryNews = async () =>{
    if(newsQuery.value == null){
        return;}
    const response = await fetch(SEARCH_NEWS+newsQuery.value+"&apiKey="+API_KEY);
    newsDataArr = [];
    if(response.status>=200 && response.status < 300){
        const myJson = await response.json();
        newsDataArr = myJson.articles;
    }else{
        console.log(response.status , response.statusText);
        newsdetails.innerHTML = "<h5>No Data Found</h5>";
        return;
    }

    displayNews();
}

function displayNews(){
    newsdetails.innerHTML = "";

    //if(newsDataArr.lenght == 0){
    //     newsdetails.innerHTML = "<h5>No Data Found</h5>";
    //    return;
    //}

    newsDataArr.forEach(news => {
        var date = news.publishedAt.split("T");

        var col=document.createElement('div');
        col.className = "col-sm-12 col-md-4 col-lg-3 p-2";
        var card = document.createElement('div');
        card.className = "p-2";
        
        var image = document.createElement('img');
        image.setAttribute("height", "matchparent");
        image.setAttribute("width", "100%");
        image.src = news.urlToImage;

        var cardBody = document.createElement('div');

        var newsHeading = document.createElement('h5');
        newsHeading.className = "card-title";
        newsHeading.innerHTML = news.title;

        var dateHeading = document.createElement('h6');
        dateHeading.className = "text-primary";
        dateHeading.innerHTML = date[0];

        var discription = document.createElement('p');
        discription.className = "text-muted";
        discription.innerHTML = news.description;

        var link = document.createElement('a');
        link.className = "btn btn-dark";
        link.setAttribute("target" , "_blank");
        link.href = news.url;
        link.innerHTML = "Read More";

        cardBody.appendChild(newsHeading);
        cardBody.appendChild(dateHeading);
        cardBody.appendChild(discription);
        cardBody.appendChild(link);
        card.appendChild(image);
        card.appendChild(cardBody);
       
        col.appendChild(card);

        newsdetails.appendChild(col);



    });
}