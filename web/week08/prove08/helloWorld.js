var http = require('http');
var includedURL = require('url');

http.createServer(function (req, res) {
  let url = req.url;

  let consoleText = "";
  let webText = "";
  let scriptType = "text/html";
  let pageType = 200;

  if (url.localeCompare("/") == 0)
  {
     webText = "<h1>Hello World!</h1>";
     consoleText = "Hello World";
  }
  else if (url.localeCompare("/home") == 0)
  {
    webText = "<h1>Welcome to the Home Page</h1>";
    consoleText = "Welcome to the Home Page";
  }
  else if (url.localeCompare("/getData") == 0)
  {
    scriptType = "application/json";
    webText = '{"name":"Br. Thayne","class":"cs313"}';
    consoleText = "Teacher: Br. Thayne\nClass: cs313";
  }
  else if (url.includes("/add?"))
  {
    let q = includedURL.parse(req.url, true).query;
    let sum = parseInt(q.num1) + parseInt(q.num2);

    consoleText = q.num1 + " + " + q.num2 + " = " + sum; 
    webText = "<h2>" + consoleText + "</h2>";
  }
  else if (url.includes("/subtract?"))
  {
    let q = includedURL.parse(req.url, true).query;
    let sub = parseInt(q.num1) - parseInt(q.num2);

    consoleText = q.num1 + " - " + q.num2 + " = " + sub; 
    webText = "<h2>" + consoleText + "</h2>";
  }
  else if (url.includes("/multiply?"))
  {
    let q = includedURL.parse(req.url, true).query;
    let mul = parseInt(q.num1) * parseInt(q.num2);

    consoleText = q.num1 + " * " + q.num2 + " = " + mul; 
    webText = "<h2>" + consoleText + "</h2>";
  }
  else if (url.includes("/divide?"))
  {
    let q = includedURL.parse(req.url, true).query;
    let div = parseInt(q.num1) / parseInt(q.num2);

    consoleText = q.num1 + " / " + q.num2 + " = " + div; 
    webText = "<h2>" + consoleText + "</h2>";
  }
  else
  {
    pageType = 404;
    webText = "<h2>Page Not Found</h2>";
    consoleText = "Page Not Found";
  }

  res.writeHead(pageType, {"Content-Type": scriptType});
  res.write(webText);
  res.end();
  console.log(consoleText);
}).listen(8888); 