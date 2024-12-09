const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

//Middleware to parse JSON bodies
app.use(bodyParser.json());


let users = [
    {id : 1, name : 'John Doe', email : 'john@abc.com'}
    {id : 2, name : 'John Doe', email : 'jane@abc.com'}

]

app.post('/users', (req, res) => {
    const { name, email = req.params.userId;
    res.send(`User ID: ${userId}`);
  });


// Basic route
app.get('/', (req, res) => {
  res.send('Home Page');
});

// About route
app.get('/about', (req, res) => {
  res.send('About Page');
});

// Contact route
app.get('/contact', (req, res) => {
  res.send('Contact Page');
});

// Dynamic route with a parameter
app.get('/users/:userId', (req, res) => {
    const userId = req.params.userId;
    res.send(`User ID: ${userId}`);
  });

 // Handling different HTTP methods
app.route('/book')
.get((req, res) => {
  res.send('Get a book');
})
.post((req, res) => {
  res.send('Add a book');
})
.put((req, res) => {
  res.send('Update the book');
})
.delete((req, res) => {
  res.send('Delete the book');
});


app.listen(port, () => {
  console.log(`App listening at http://localhost:${port}`);
});





// const express = require('express');
// const app = express();
// const port = 3000;

// // Basic route
// app.get('/', (req, res) => {
//   res.send('Home Page');
// });

// // About route
// app.get('/about', (req, res) => {
//   res.send('About Page');
// });

// // Contact route
// app.get('/contact', (req, res) => {
//   res.send('Contact Page');
// });

// // Dynamic route with a parameter
// app.get('/users/:userId', (req, res) => {
//     const userId = req.params.userId;
//     res.send(`User ID: ${userId}`);
//   });

//  // Handling different HTTP methods
// app.route('/book')
// .get((req, res) => {
//   res.send('Get a book');
// })
// .post((req, res) => {
//   res.send('Add a book');
// })
// .put((req, res) => {
//   res.send('Update the book');
// })
// .delete((req, res) => {
//   res.send('Delete the book');
// });


// app.listen(port, () => {
//   console.log(`App listening at http://localhost:${port}`);
// });

