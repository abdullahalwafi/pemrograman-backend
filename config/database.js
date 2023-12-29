// import mysql
const mysql = require('mysql');

// IMPORT dotenv
require('dotenv').config();

const {
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE
} = process.env;

// membuat koneksi database
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USERNAME,
    password: DB_PASSWORD,
    database: DB_DATABASE
});

db.connect((err) => {
    if (err) {
        console.log("Database connected");
        return;
    } else {
        console.log("Database connection failed");
        return;
    }
});

module.exports = db;
