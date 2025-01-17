import React from 'react'; 
const ProductCard = ({ product }) => { 
 return ( 
 <div style={styles.card}> 
 <img src={product.image} alt={product.name} style={styles.image} /> 
 <h3>{product.name}</h3> 
 <p>${product.price}</p> 
 </div> 
 ); 
}; 
const styles = { 
 card: { 
 border: '1px solid #ccc', 
 borderRadius: '8px', 
 padding: '16px', 
 textAlign: 'center', 
 margin: '16px', 
 width: '200px', 
 }, 
 image: { 
 width: '100%', 
 height: '150px', 
 objectFit: 'cover', 
 }, 
}; 
export default ProductCard;