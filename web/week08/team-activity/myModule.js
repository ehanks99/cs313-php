module.exports = function (dir, ext, callback) 
{ 
    var fs = require('fs');
    var matchingFiles = [];

    fs.readdir(dir, function grabMatchingExt(error, data)
    {
        if (error)
            callback(error);
        else
        {
            for (var i = 0; i < data.length; i++)
            {
                if (data[i].endsWith("." + ext))
                {
                    matchingFiles.push(data[i]);
                }
            }
            callback(null, matchingFiles);
        }
    });
};

/* // other way to do this
var fs = require('fs')
    var path = require('path')

    module.exports = function (dir, filterStr, callback) {
      fs.readdir(dir, function (err, list) {
        if (err) {
          return callback(err)
        }

        list = list.filter(function (file) {
          return path.extname(file) === '.' + filterStr
        })

        callback(null, list)
      })
    }
    */