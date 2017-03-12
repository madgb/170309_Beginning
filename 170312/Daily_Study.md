#170312
---

###AJAX - Request

>problem with cross-origin matter.

* readyState
```
req.readyState ==>
- 0
- req.open("GET", "URL");
- 1
- req.send();
- 4
```

* onreadystatechange
```
- Can track the state
- Use if , can make function of questioning the state of the server
- if the server is good, Im in
```

* JSON.stringify
```
var pi = 3.14;
var str = "string";

JSON.stringify(pi) = "3.14";
JSON.stringify(str) = ""string"";
JSON.parse("3.14") = 3.14;
JSON.parse("\"string\"") = "string"

var arr = ["string", 1357, null, undefined, function(a)]
ex) --
```