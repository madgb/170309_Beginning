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

```
var cube = function (x) {
    if (typeof(x) !== 'number') return "put number please";
    return x * x * x;
};

// Once you uncomment the type check in line 2,
// the cube() function should return 0.
cube("test");
```

*variation in function
```
var w = 15;

var volume = function (w, l, h) {
    return w * l * h;
};

volume(2, 3, 4);
console.log(w);
```

```
function getMaxnum(n1, n2){
  if (n1 < n2) {
      return n2;
  }
  else {
    return n1;
  }
}
// Function call with two arguments
alert(getMaxnum(10,11));
```

*problem for today
```
function doubleMax(x, y) {
  // add the correct function call after the '+' operator

  return 2 * getMaxnum(n1, n2) ;
};

// call me for help!
function getMaxnum(n1, n2) {
    if (n1 < n2) {
      return n2;
    }
    else {
      return n1; 
    }
};

doubleMax(2,3);
```
>fix it