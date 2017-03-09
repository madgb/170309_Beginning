#170309

---
###1. Reviewing Markdown


* Some Rules

```
- #, ##, ###, ####, #####, ######
- *, **
- >
- ---

```


___

###2. Controlling HTML by Javascript

* DOM - Basic

```
- Document Object model
- Try in Chrome
- document.children[n]
- document.parentNode
- Searching Elements by approaching Node
    
```
* DOM - Get Specific Elements

```
-getElementById
-innerHTML
-innerText

	ex) var a = document.getElementById("madgb");
		a.innerText = "<i>New words</i>" ;
		a.style.color = "blue" ;
		
-a.src = undefined ( no origin, not like img )
-a.getAttribute("src"); = OK
-a.setAttribute("src", "URL"); = can set specific "src" attribute

```
* DOM - Get Many Elements

```
-getElementsBy~
-ClassName, TagName, Name
-Can get the value of "input" tag by "value"

```
```
ex) 
HTML: <input name="author">
window: |---|
Javascript: 
	var a = document.getElementsByName("author");
	a = <input name="author">
	a.value = ---;
	a.value = "New Value";
	
window': |New Value|

```
* Get Elements by CSS Selector

```
-querySelector
-querySelectorAll(n, n1, n2)

```
```
ex)

HTML: <p id="songwriter"></p>
Javascript:
	var a = document.querySelector("#songwriter");
	a = <p id="songwriter"></p>

```
* Add, and Delete Elements

```
-document.createElement
-appendChild
-insertBefore
-cloneNode
-removeChild

```

```
ex)
	var hr = document.createElement("hr");
	document.body.appendChild(hr);
	document.body.insertBefore(hr, document.body.children[3]);
	
	hr2 = hr.cloneNode();
	document.body.insertBefore(hr2, document.body.children[6]);
	
	document.body.removeChild( hr );
	document.body.removeChild( document.body.children[3]);

```