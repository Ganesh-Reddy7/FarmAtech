let searchInp=document.querySelector('.weather_search');

let city = document.querySelector('.weather_city');
let day = document.querySelector('.weather_day');
let humidity = document.querySelector('.weather_indicator--humudity>.value');
let wind = document.querySelector('.weather_indicator--wind>.value');
let pressure = document.querySelector('.weather_indicator--pressure>.value');
let image = document.querySelector('.weather_image');
let temperature = document.querySelector('.weather_temperature>.value');
let forecastBlock = document.querySelector('.weather_forecast')
let suggestions = document.querySelector('#suggestions');




let weatherAPIKey='f0a3b1b645ff7deeb0918613db34d54e';
let weatherBaseEndPoint='https://api.openweathermap.org/data/2.5/weather?units=metric&appid=' + weatherAPIKey;
let forecastBaseEndPoint = 'https://api.openweathermap.org/data/2.5/forecast?units=metric&appid=' + weatherAPIKey;
let cityBaseEndPoint = 'https://api.teleport.org/api/cities/?search='; 

let weatherImages = [
    {
        url: 'images/clear_sun_icon.png',
        ids: [800]
    },
    {
        url: 'images/broken_sun_icon.png',
        ids: [803,804]
    },
    {
        url: 'images/cloudy.png',
        ids: [801]
    },
    {
        url: 'images/mist.png',
        ids: [701,711,721,731,741,751,761,762,771,781]
    },
    {
        url: 'images/rain.png',
        ids: [500,501,502,503,504]
    },
    {
        url: 'images/scattered_clouds.png',
        ids: [802]
    },
    {
        url: 'images/shower_rain.png',
        ids: [520,521,522,531,300,301,302,310,311,312,313,314,321]
    },
    {
        url: 'images/snow.png',
        ids: [511,600,601,602,611,612,613,615,616,620,621,622]
    },
    {
        url: 'images/thunderstorm.png',
        ids: [200,201,202,210,211,212,221,230,231,232]
    }
]

let getWeatherByCityName=async (cityString) => {
    let city;
    if(cityString.includes(',')){
        city = cityString.substring(0,cityString.indexOf(',')) + cityString.substring(cityString.lastIndexOf(','));
    }else{
        city = cityString;
    }
    let endpoint= weatherBaseEndPoint +'&q=' + city;
    let response=await fetch(endpoint);
    if(response.status !== 200){
        alert('City not found!');
        return;
    }
    let weather =await response.json();

    return weather;
}

let getForecastByCityId = async (id) => {
    let endPoint = forecastBaseEndPoint + '&id=' + id;
    let result = await fetch(endPoint);
    let forecast = await result.json();
    let forecastList = forecast.list;
    let daily = [];

    forecastList.forEach(day => {
        let date = new Date(day.dt_txt.replace(' ', 'T'));
        let hours = date.getHours();
        if(hours === 12){
            daily.push(day);
        }
    })
    return daily;


}

let weatherForCity = async  (city) => {
    let weather = await getWeatherByCityName(city);
    if(!weather){
        return;
    }
    let cityID = weather.ID;
    updateCurrentWeather(weather);
    let forecast = await getForecastByCityId(cityID);
    //updateForecast(forecast);
}

let init = () => {
    weatherForCity('Ongole').then(() => document.getElementById("dashboard").style.filter = 'blur(0)');
}
init();

searchInp.addEventListener('keydown', async (e) => {
    if(e.keycode === 13) {
        weatherForCity(searchInp.value);
    }
})
searchInp.addEventListener('keydown', async (e) => {
    if(e.keyCode === 13){
        let weather = await getWeatherByCityName(searchInp.value);
        if(!weather){
            return;
        }
        updateCurrentWeather(weather);
        let cityID = weather.id;
        updateCurrentWeather(weather);
        let forecast = await getForecastByCityId(cityID);
        //updateForecast(forecast);
    }
})

searchInp.addEventListener('input' ,async () => {
    let endPoint =  cityBaseEndPoint + searchInp.value
    let result = await (await fetch(endPoint)).json();
    suggestions.innerHTML = '';
    let cities = result._embedded['city:search-results'];
    let length = cities.length > 5 ? 5 : cities.length;
    for(let i = 0 ; i < length; i++){
        let option = document.createElement('option');
        option.value = cities[i].matching_full_name;
        suggestions.appendChild(option);
    }
    console.log(result);
})

let updateCurrentWeather = (data) =>{
    console.log(data);
    city.textContent = data.name + ', ' + data.sys.country;
    day.textContent= dayOfWeek();
    humidity.textContent = data.main.humidity;
    pressure.textContent = data.main.pressure
    let windDirection;
    let deg = data.wind.deg;
    if(deg > 45 && deg<=135){
        windDirection = 'East';

    }
    else if(deg > 135 && deg<=225){
        windDirection = 'South';
    }
    else if(deg > 225 && deg <=315){
        windDirection = 'West';

    }
    else{
        windDirection = 'North';
    }
    wind.textContent = windDirection + ', ' +data.wind.speed;
    temperature.textContent = data.main.temp> 0 ? '+' + Math.round(data.main.temp) : Math.round(data.main.temp); 
}

let dayOfWeek = () => {
     return new Date().toLocaleDateString('en-EN', {'weekday': 'long'});

}

/*let updateForecast = (data) => {
    image.
}*/