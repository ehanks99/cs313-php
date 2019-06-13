var myModule = require('./myModule.js');

myModule(process.argv[2], process.argv[3], callback);

function callback(err, data)
{
    if (err)
        console.log(err);
    else
    {
        for (var i = 0; i < data.length; i++)
        {
            console.log(data[i]);
        }
    }
}

/* // Other way to do this if myModule.js was instead called solution_filter.js
   // and the code in there was changed to accomodate that (that code
   // is commented out in the myModule.js file)

var filterFn = require('./solution_filter.js')
    var dir = process.argv[2]
    var filterStr = process.argv[3]

    filterFn(dir, filterStr, function (err, list) {
      if (err) {
        return console.error('There was an error:', err)
      }

      list.forEach(function (file) {
        console.log(file)
      })
    })
    */