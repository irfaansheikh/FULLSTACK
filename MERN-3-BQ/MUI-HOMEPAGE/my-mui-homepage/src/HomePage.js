import React from 'react';
import { AppBar, Toolbar, Typography, Button, Container, Grid, Card, CardContent, CardMedia, Box } from '@mui/material';
import { makeStyles } from '@mui/styles';
// Define a useStyles function to customize styling, then build each section step-by-step.

// Define styling classes for use in the component
const useStyles = makeStyles({
    hero: {
      backgroundColor: '#f5f5f5',
      padding: '50px 0',
      textAlign: 'center',
    },
    card: {
      maxWidth: 345,
    },
    footer: {
      padding: '20px 0',
      backgroundColor: '#3f51b5',
      color: 'white',
      textAlign: 'center',
    },
  });
  
  function HomePage() {
    const classes = useStyles();
  
    return (
      <>
        {/* Header */}
        <AppBar position="static">
          <Toolbar>
            <Typography variant="h6" style={{ flexGrow: 1 }}>
              My Website
            </Typography>
            <Button color="inherit">Home</Button>
            <Button color="inherit">About</Button>
            <Button color="inherit">Contact</Button>
          </Toolbar>
        </AppBar>


      {/* Hero Section */}
        <Box className={classes.hero}>
        <Container maxWidth="sm">
            <Typography variant="h3" gutterBottom>
            Welcome to My Website
            </Typography>
            <Typography variant="h6" paragraph>
            Discover our amazing features and services. We provide the best solutions for your needs.
            </Typography>
            <Button variant="contained" color="primary" size="large">
            Get Started
            </Button>
        </Container>
        </Box>
        {/* Featured Sections */}
        <Container maxWidth="md" style={{ marginTop: '40px' }}>
        <Grid container spacing={4}>
            <Grid item xs={12} sm={6} md={4}>
            <Card className={classes.card}>
                <CardMedia
                component="img"
                height="140"
                image="https://source.unsplash.com/random"
                alt="Random Image"
                />
                <CardContent>
                <Typography gutterBottom variant="h5" component="div">
                    Feature 1
                </Typography>
                <Typography variant="body2" color="text.secondary">
                    Description of the feature or service. Explain how this can benefit the user.
                </Typography>
                </CardContent>
            </Card>
            </Grid>
            <Grid item xs={12} sm={6} md={4}>
            <Card className={classes.card}>
                <CardMedia
                component="img"
                height="140"
                image="https://source.unsplash.com/random"
                alt="Random Image"
                />
                <CardContent>
                <Typography gutterBottom variant="h5" component="div">
                    Feature 2
                </Typography>
                <Typography variant="body2" color="text.secondary">
                    Description of the feature or service. Explain how this can benefit the user.
                </Typography>
                </CardContent>
            </Card>
            </Grid>
            <Grid item xs={12} sm={6} md={4}>
            <Card className={classes.card}>
                <CardMedia
                component="img"
                height="140"
                image="https://source.unsplash.com/random"
                alt="Random Image"
                />
                <CardContent>
                <Typography gutterBottom variant="h5" component="div">
                    Feature 3
                </Typography>
                <Typography variant="body2" color="text.secondary">
                    Description of the feature or service. Explain how this can benefit the user.
                </Typography>
                </CardContent>
            </Card>
            </Grid>
        </Grid>
        </Container>                                                    
        {/* Footer */}
        <Box className={classes.footer}>
        <Typography variant="body1">&copy; 2024 My Website. All rights reserved.</Typography>
        </Box>

        </>
        
    );
  }
  
  export default HomePage;
