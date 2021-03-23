var loc = document.getElementById("location");
var temps = document.getElementById("temp-val");
var climate = document.getElementById("climate");

const searchInput = document.getElementById("search-input");
const searchButton = document.getElementById("search-button");

var no2g = document.getElementById("no2");
var so2g = document.getElementById("so2");
var nog = document.getElementById("no");
var cog = document.getElementById("co");
var o3g = document.getElementById("o3");

// for the searched location
searchButton.addEventListener("click", (e) => {
  e.preventDefault();
  getWeather(searchInput.value);
  searchInput.value = " ";
});

const getWeather = async (city) => {
  try {
    const res = await fetch(
      `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=0077dc0d1683b839541a3d8e0de2bb11`,
      { mode: "cors" }
    );

    const weatherData = await res.json();
    const { lat, lon } = weatherData.coord;
    const { name } = weatherData;
    const { temp, temp_min, temp_max, humidity } = weatherData.main;
    const { country } = weatherData.sys;
    const { id, main } = weatherData.weather[0];
    const { visibility } = weatherData;
    const { speed } = weatherData.wind;

    loc.textContent = name + " , " + country;
    temps.textContent = Math.round(temp - 273);
    climate.textContent = main;
    maxxx.textContent = Math.round(temp_max - 273);
    minnn.textContent = Math.round(temp_min - 273);
    wind.textContent = speed;
    humid.textContent = humidity;
    visible.textContent = visibility;
    console.log(weatherData);

    if (id === 800) {
      console.log(id);
      document.getElementById("container").style.background =
        "url('./icons/sun.png')";
    } else if (id < 900 && id > 800) {
      document.getElementById("container").style.background =
        "url('./icons/clouds.png')";
    } else if (id < 800 && id >= 700) {
      document.getElementById("container").style.background =
        "url('./icons/haze.png')";
    } else if (id < 700 && id >= 600) {
      document.getElementById("container").style.background =
        "url('./icons/snowflake.png')";
    } else if (id < 600 && id >= 500) {
      document.getElementById("container").style.background =
        "url('./icons/rainy.png')";
    } else if (id < 300 && id >= 200) {
      document.getElementById("container").style.background =
        "url('./icons/storm.png')";
    }

    fetch(
      `http://api.openweathermap.org/data/2.5/air_pollution?lat=${lat}&lon=${lon}&appid=0077dc0d1683b839541a3d8e0de2bb11`
    )
      .then((resp) => resp.json())
      .then((airp1) => {
        const { co, no, no2, o3, so2 } = airp1.list[0].components;

        // console.log(co, no, no2);
        o3g.textContent = o3;
        cog.textContent = co;
        so2g.textContent = so2;
        nog.textContent = no;
        no2g.textContent = no2;

        // console.log(airp);
      });
  } catch (error) {
    alert("city not found");
  }
};

// for the current location
window.addEventListener("load", () => {
  var lon, lat;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      lon = position.coords.longitude;
      lat = position.coords.latitude;
      const proxy = "http://cors-anywhere.herokuapp.com/";

      const api = `${proxy}api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=0077dc0d1683b839541a3d8e0de2bb11`;

      fetch(api)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          fetch(
            `http://api.openweathermap.org/data/2.5/air_pollution?lat=${lat}&lon=${lon}&appid=0077dc0d1683b839541a3d8e0de2bb11`
          )
            .then((res) => res.json())
            .then((airp) => {
              const { co, no, no2, o3, so2 } = airp.list[0].components;

              // console.log(co, no, no2);
              o3g.textContent = o3;
              cog.textContent = co;
              so2g.textContent = so2;
              nog.textContent = no;
              no2g.textContent = no2;

              console.log(airp);
            });

          const { name } = data;
          const { temp, temp_min, temp_max, humidity } = data.main;
          const { country } = data.sys;
          const { id, main, icon } = data.weather[0];
          const { visibility } = data;
          const { speed } = data.wind;

          loc.textContent = name + " , " + country;
          climate.textContent = main;
          temps.textContent = Math.round(temp - 273);
          maxxx.textContent = Math.round(temp_max - 273);
          minnn.textContent = Math.round(temp_min - 273);
          wind.textContent = speed;
          humid.textContent = humidity;
          visible.textContent = visibility;
          console.log(data);
          // var back = "http://openweathermap.org/img/w/" + icon + ".png";
          // console.log(back);
          // icon = 10d
          if (id == 800) {
            document.getElementById("container").style.background =
              "url('./icons/sun.png') ";
            // document.getElementById("container").style. = 0.7;
          } else if (id < 900 && id > 800) {
            document.getElementById("container").style.background =
              "url('./icons/clouds.png')";
          } else if (id < 800 && id >= 700) {
            document.getElementById("container").style.background =
              "url('./icons/haze.png')";
          } else if (id < 700 && id >= 600) {
            document.getElementById("container").style.background =
              "url('./icons/snowflake.png')";
          } else if (id < 600 && id >= 500) {
            document.getElementById("container").style.background =
              "url('./icons/rainy.png')";
          } else if (id < 300 && id >= 200) {
            document.getElementById("container").style.background =
              "url('./icons/storm.png')";
          }
        });
    });
  }
});
