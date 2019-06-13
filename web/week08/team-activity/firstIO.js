var fs = require('fs');

var str = (fs.readFileSync(process.argv[2])).toString();
var lines = str.split("\n");

console.log(lines.length - 1);