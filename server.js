import express from 'express';
import mysql from 'mysql2';
import cors from 'cors';
import path from 'path';
import { fileURLToPath } from 'url';
const port = 3000;
const app = express();
app.use(express.json());
app.use(cors());
import axios from 'axios';
import { config } from '../kriti/backend/Private/config.js';
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const connection = mysql.createConnection(config);
//app.use(express.static(path.join(__dirname+'/admin')));
const frontpath = __dirname
app.use(express.static(frontpath))


app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
connection.connect((err) => {
    if (err) {
        console.error('Error connecting: ' + err.stack);
        return;
    }

    console.log("connected with database");
})
app.get('/', (req, res) => {
    res.sendFile(path.join(frontpath, 'index.html'));
});

app.get('/api/events', async (req, res) => {
    const query = 'SELECT * FROM Events';
    connection.query(query, (err, results) => {
        if (err) {
            console.error('Error querying data: ' + err.stack);
            res.status(500).send({ status: 500, message: 'Failed to retrieve data' });
            return;
        }
        res.status(200).json({ status: 200, message: 'Event retrieved successfully', results });
    });
});
app.post('/api/join-event', async (req, res) => {
    const data = {
        eventName: req.body.eventName,
        name: req.body.yourName,
        email: req.body.yourEmail,
        designation: req.body.yourDesignation,
        number: req.body.yourNumber
    };
    console.log(1);
    console.log(data);
    const query = `INSERT INTO eventJoiners (eventName, name, email,designation,number) VALUES (?, ?,?,?,?)`;
    connection.query(query, [data.eventName, data.name, data.email, data.designation, data.number], (err, results) => {
        if (err) {
            console.error('Error inserting data: ' + err.stack);
            res.status(500).send({ status: 500, message: 'Failed to insert data' });
            return;
        }
        res.status(200).send({ status: 200, message: 'Event added successfully', results });
    });
})
app.get('/api/eventJoiner', async (req, res) => {
    const query = 'SELECT * FROM eventJoiners';
    connection.query(query, (err, results) => {
        if (err) {
            console.error('Error querying data: ' + err.stack);
            res.status(500).send({ status: 500, message: 'Failed to retrieve data' });
            return;
        }
        res.status(200).json({ status: 200, message: 'Data retrieved successfully', results });
    });
});