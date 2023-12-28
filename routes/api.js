// import studentcontroller
const StudentController = require('../controllers/StudentController');

// import express js
const express = require('express');

// membuat object router
const router = express.Router();

// membuat route student
router.get('/students', StudentController.index);
router.post('/students', StudentController.store);
router.put('/students/:id', StudentController.update);
router.delete('/students/:id', StudentController.destroy);

// export router
module.exports = router;