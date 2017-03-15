#170314
---

### Javascript Study_ with "viking"_02

```
function shuffleArray(array) {

  // We loop through the array from the length down to 1
  for (let i = array.length; i > 0; i--) {

    // Here we are storing a random number between 0 and i.
    const randomIndex = Math.floor(Math.random() * i);

    // We swap the value at the current index with
    // the value at the random index.
    [array[i - 1], array[randomIndex]] = [array[randomIndex], array[i - 1]];
  }

}
```

```
- That Means..

0. i = 0 or 1 or 2 or 3
1. the randomIndex produces 0 or 1 or 2 or 3
>>Since: Math.random() produces 0< "any number" <1
>>Since: Math.floor(1.92) = 2
2. when the new i born, the very shuffle start
>>Since the code below switch places between two
```