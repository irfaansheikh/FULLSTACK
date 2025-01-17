import React, { useState, useEffect } from 'react'; 
import ProductList from '../components/ProductList'; 
const HomePage = () => { 
 const [products, setProducts] = useState([]); 
 // Mock data 
 useEffect(() => { 
 const mockProducts = [ 
 { 
 id: 1, 
 name: 'Product 1', 
 price: 100, 
 image: 'hƩps://via.placeholder.com/200', 
 }, 
 { 
 id: 2, 
 name: 'Product 2', 
 price: 150, 
 image: 'hƩps://via.placeholder.com/200', 
 }, 
 { 
 id: 3, 
 name: 'Product 3', 
 price: 200, 
 image: 'hƩps://via.placeholder.com/200', 
 }, 
 ]; 
 setProducts(mockProducts); 
 }, []); 
 return ( 
 <div> 
 <h1 style={{ textAlign: 'center' }}>Welcome to My E-commerce</h1> 
 <ProductList products={products} /> 
 </div> 
 ); 
}; 
export default HomePage;