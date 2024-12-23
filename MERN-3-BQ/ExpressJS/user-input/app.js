const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

// Serve the form with an attractive layout
app.get('/', (req, res) => {
  res.send(`
    <html>
      <head>
        <style>
          body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            margin: 0;
          }
          .container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          }
          input[type="text"], input[type="email"], input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
          }
          button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
          button:hover {
            background-color: #45a049;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h2>Welcome!</h2>
          <form action="/submit" method="POST">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" required>
            <button type="submit">Submit</button>
          </form>
        </div>
      </body>
    </html>
  `);
});

// Handle form submission
app.post('/submit', (req, res) => {
  const { name, email, age } = req.body;
  res.send(`
    <html>
      <body>
        <h1>Hello, ${name}!</h1>
        <p>Email: ${email}</p>
        <p>Age: ${age}</p>
      </body>
    </html>
  `);
});

app.listen(port, () => {
  console.log(`App listening at http://localhost:${port}`);
});
