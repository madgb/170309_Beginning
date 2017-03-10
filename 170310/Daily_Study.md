#170310
---
###1. callback function

```
- function callback(){
	console.log("callback function has called")};
	
- setTimeout( callback, 3000 );
- setInterval( callback, 5000 );
- clearInterval(2);
- clearTimeout(1);

```
>what does the 1, 2 means?

---

###2. Add EventHandler
```
- form: submit
- window: when the page loaded
- mouse: mouse
- key: keys 

```
```
- <div onclick="console.log('clicked');">text</div>
- <input onchange="console.log('changed');" onkeydown="console.log('typed');">

```

