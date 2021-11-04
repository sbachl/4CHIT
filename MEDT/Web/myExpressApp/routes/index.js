var express = require('express');
var router = express.Router();

var Stunde=[
  {
  Fach: 'Englisch',
  UBeginn:1130,
  UEnde:1220,
  },
  {
  Fach: 'SEW',
  UBeginn:1050,
  UEnde:1130,
  },
]

router.get('/', function(req, res, next) {
  if(req.query.delete){
    Stunde.splice(req.query.delete, 1)
  }
  res.render('index', {title: 'Stundenplan', Stundenplan: Stunde });
});

router.post('/', function(req, res, next) {
  var neueStunde = {
  Fach:req.body.fach,
  UBeginn:req.body.ubeginn,
  UEnde:req.body.uende,
  }
  Stunde.push(neueStunde)
  res.render('index', {title: 'Stundenplan', Stundenplan: Stunde });
});


module.exports = router;
