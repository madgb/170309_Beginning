#170330
---

### 
*parameters
```
var multiply = function (x, y) {
    return x * y;
};

multiply(2, 5);

var volume = function (w, l, a ) {
    return w * l * a ;
};

volume(2, 3, 4);
```

*appropriate
```
var cube = function(x) {
    return x * x * x;
};

// The cube function works fine with a number...
console.log(cube(5));

// ...but if it's called with a string, it returns NaN!
console.log(cube("test"));
```