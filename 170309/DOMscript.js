//let's change the title

var songPackage = document.getElementById("songPackage");
var title = songPackage.children[0];

title.innerText = "NewName by Javascript"


//let's set alt attribute

document.querySelector(".songwriter").setAttribute("alt","description");

//let's give the name and number

var giveName = document.getElementsByName("myName");
var giveNumber = document.getElementsByName("myPhone");

giveName.value = "newName";
giveNumber.value = "01044001559";

//let's make Elements

var hr = document.createElement("hr");
var hr2 = hr.cloneNode();
var hr3 = hr.cloneNode();

document.body.appendChild(hr);

songPackage.insertBefore(hr2, songPackage.children[1]);
songPackage.appendChild(hr3);

//let's Delete Elements

document.body.removeChild( hr );
songPackage.removeChild(songPackage.children[4]); 