#170314
---

### Javascript Study_ with "viking"

* practice1
```
var myArray = ["a", "b", "c"];

for (var i = 0; i < myArray.length; i++) {
    console.log("i is " + i);
    console.log("and myArray[i] is " + myArray[i]);
};

myArray.forEach(function(element) {
    console.log("forEach loop outputs " + element);
});
```

* result
```
 i is 0
 and myArray[i] is a
 i is 1
 and myArray[i] is b
 i is 2
 and myArray[i] is c
 forEach loop outputs a
 forEach loop outputs b
 forEach loop outputs c
```
