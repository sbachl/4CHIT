var http = require('http');
var fs = require('fs');

var schuelerList;

fs.readFile("schuelerList.json", function(err, data){

    if(err){
        console.log("FEHLER");
        throw err;
    }else{
        schuelerList = JSON.parse(data);
    }
    schuelerList = JSON.parse(data);
})

http.createServer(function(req, res){
    schuelerList.push({
        "name": "Simon",
        "alter": 18,
        "kontostand": 102002029949240404,
        "eigenbereechtigt": true,
        "tel": "12334"
        })

        fs.writeFile("schuelerList.json", JSON.stringify(schuelerList),function(err){
        if(err) throw err;
        console.log("GESPEICHERT");
        })

        res.writeHead(200, {'Contenten-Type': 'text/plain'})
        res.end(JSON.stringify(schuelerList, null , 2));
}).listen(8080);