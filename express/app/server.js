const express = require('express');
const app = express();
const HOST = '0.0.0.0';
const PORT = 80;

app.get('/', (request, response) => {
	response.send('Hello World 2!')
});

app.listen(PORT, HOST);
console.log('Running on http://${HOST}:${PORT}');