const express = require('express');

const router = require('./routes/api.js');

const app = express();

app.use(router);

app.listen(3000, () => {
    console.log("server running on port 3000");
});
