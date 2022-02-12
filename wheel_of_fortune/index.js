const fs = require('fs')

fs.readFile("T-shirt.txt", function(err, buf) {
  console.log(buf.toString());
});