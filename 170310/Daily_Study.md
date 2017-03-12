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

---

###3. EventHandler on JS

* HTML


```
<form 
	method="GET" action="b.html" id="form1"
	onsubmit="console.log('from tag'); return false;">

 Name: <input type="text" name="id">
 Massage: <input type="text" name="msg">
 
</form>

```
* script

```
 var t = documen.getElementById("form1");
 t.onsubmit = function a(){
 	console.log("from property");
 	return false;
 }
 function b(){
 	console.log("from addEventListener");
 	return false;
 }
 
  function c(){
 	console.log("from addEventListener-2");
 	return false;
 }
 
 t.addEventListener("submit", b);
 t.addEventListener("submit", c);
 
 //t.removeEventListener("submit", b);

```

