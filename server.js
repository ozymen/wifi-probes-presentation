var connect = require('connect');
var serveStatic = require('serve-static');
connect().use(serveStatic(__dirname + '/static/')).listen(80, function(){
    console.log('Server running on http://wifiprobes.bitsofgroningen.nl:80/ ...');
});
