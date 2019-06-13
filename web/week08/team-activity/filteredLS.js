var fs = require('fs');
var matchingFiles = undefined;

fs.readdir(process.argv[2], grabMatchingExt);
    
function grabMatchingExt(error, files)
{
    for (var i = 0; i < files.length; i++)
    {
        if (files[i].endsWith("." + process.argv[3]))
        {
           console.log(files[i]);
        }
    }
}

/* // other way to do this
var fs = require('fs')
    var path = require('path')

    var folder = process.argv[2]
    var ext = '.' + process.argv[3]

    fs.readdir(folder, function (err, files) {
      if (err) return console.error(err)
      files.forEach(function (file) {
        if (path.extname(file) === ext) {
          console.log(file)
        }
      })
    })
    */