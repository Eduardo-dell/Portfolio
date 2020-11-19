const http = require("http")


http.createServer((req,res) => {
  res.end("<h1>home </h1>")
}).listen(5000, () => console.log("server is running.."))