var express = require('express');
const { get } = require('../app');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Jogo Da Veia', click:'X'} );
});

module.exports = router;
