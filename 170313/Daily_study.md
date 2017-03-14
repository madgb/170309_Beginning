#170313
---

###Ajax+JSON

* JSON

```
[
	{"id": "firstElement", "msg": "message1"},
	{"id": "SecondElement", "msg": "message2"},
	{"id": "ThirdElement", "msg": "message3"},
	{"id": "FourthElement", "msg": "message4"},
]

```


* Javascript

```
var data = JSON.parse(this.response);
for( var i in data ){
	var t = document.getElementById("template").cloneNode(true);
	t.removeAttribute("id");
	t.children[0].innerText = data[i].id;
	t.children[1].innerText = data[i].msg;
	document.body.appendChild(t);
}

```
* the Meaning of the JS code

```
The "data" came from JSON data file, parsed by "JSON.parse"
The "for" code counts the number of datas in the array.
The "t" clone the structure of 'p' tag for DATA
The "removeAttribute" removes the ID to prevent confusion.
The "innerText" fill inside the span.
The "appendChild" let go the dataSet in HTML

```


* result --> HTML

```
<p>
	<span class="id">firstElement </span> : <span class="word"> message1 </span>
</p>
<p>
	<span class="id">SecondElement </span> : <span class="word"> message2 </span>
</p>
<p>
	<span class="id">ThirdElement </span> : <span class="word"> message3 </span>
</p>
<p>
	<span class="id">FourthElement </span> : <span class="word"> message4xx </span>
</p>
```