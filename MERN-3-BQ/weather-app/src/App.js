import React, { useState, useEffect} from 'react';
import axios from 'axios';

const App = () => {
  const [temprature, setTemprature] = useState(null);
  const [humidity, setHumidity] = useState(null);
  const [sea_level, setSeaLevel] = useState(null);
  const [tempmin, setTempMin] = useState(null);
  const [tempmax, setTempMax] = useState(null);

  const [ error, setError] = useState(null);
  
  useEffect(() => {
    const fetchWeather = async () => {
      try {
        const apiKey = "236becae49a1c0080a598c5fd17d8d4b";
        const city = "Lahore";
        const country = "PK";
        const url =`https://api.openweathermap.org/data/2.5/weather?q=${city},${country}&appid=${apiKey}&units=metric`;

        const response = await axios.get(url);
        setTemprature(response.data.main.temp);
        setHumidity(response.data.main.humidity);
        setSeaLevel(response.data.main.sea_level);
        setTempMin(response.data.main.temp_min);
        setTempMax(response.data.main.temp_max);
        
        }
        catch (err) {
          setError("Failed to fetch weather data");
          console.error(err);
        }
      };
      fetchWeather();  
}, []);

return (
  <>
  <div style={{ fontFamily: "Arial", textAlign: "center", marginTop: "50px"  }}>
  <h1>Weather in Lahore, Pakistan</h1>
  {error ? (
    <p style={{ color: "red" }}>{error}</p>
  ) : temprature !== null ? (
    <p> The Current Humidity is <strong>{temprature}</strong></p>

  ) : (
    <p>Loading...</p>
  )}
  </div>

    </>
  );
};

export default App;
