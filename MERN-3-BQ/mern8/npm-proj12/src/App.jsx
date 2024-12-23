// import { useState } from 'react'
// import reactLogo from './assets/react.svg'
// import viteLogo from '/vite.svg'
// import './App.css'

import { BrowserRouter, Route, Router, Routes } from "react-router-dom"
import Home from "./Pages/Home"
import About from "./Pages/About"
import Contact from "./Pages/Contact"

import Layout from "./Components/Layouts/Layout"
// import { AppBar, Toolbar, Typography, Card, CardContent, CardMedia, Button, Grid, Container, Box, } from "@mui/material";
import * as Mui from '@material-ui/core';

function App() {

  return (
    <>
      <BrowserRouter>
      <Router>
        <Layout>
          <Routes>
            <Route path='/' element={<Home />} />
            <Route path='/about' element={<About />} />
            <Route path='/contact' element={<Contact />} />
          </Routes>
        </Layout>
      </Router>
      </BrowserRouter>
    </>
  )
}

export default App
