import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import {student} from './student.jsx'
import student1 from './student.jsx'
import App from './App.jsx'
import './index.css'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <App />
    <student />
    <student1 />
  </StrictMode>,
)
