import React from 'react'

const controls = ({increase, decrease}) => {
  return (
    <div>
    <button onClick = {increase}> increse</button>
    <button onClick = {decrease}> decrease</button></div>
  )
}

export default controls