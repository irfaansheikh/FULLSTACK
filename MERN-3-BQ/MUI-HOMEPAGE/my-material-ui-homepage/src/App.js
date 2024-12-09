import React from 'react';
import HomePage from './HomePage';
import axios from "axios";

const client = axios.create({
  baseURL: "https://jsonplaceholder.typicode.com/posts" 
});

function App() {
  return (
    <div className="App">
      <HomePage />
    </div>
  );
}

export default App;

