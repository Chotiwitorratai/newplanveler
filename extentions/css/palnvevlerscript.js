var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-300px";
    }

    prevScrollpos = currentScrollPos;
}

function openNav(event) {
    event.stopPropagation();
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementsByTagName('body')[0].style.background = "grey";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsByTagName('body')[0].style.background = "white";
}

var counter = 0;
var count = 0;

function moreFields() {                                              
    counter++;
    var newFields = document.getElementById('edit-trip').cloneNode(true);
    newFields.id = 'writeroot';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i = 0; i < newField.length; i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counter;
    }
    var insertHere = document.getElementById('writeroot');
    insertHere.parentNode.appendChild(newFields);
}


function moreDays() {
    counter++;
    var newFields = document.getElementById('dayinput').cloneNode(true);
    newFields.id = 'writeroot';
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i = 0; i < newField.length; i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counter;
    }
    var insertHere = document.getElementById('writeroot');
    insertHere.parentNode.appendChild(newFields);
    count++;
    let days = document.createElement('dt');
    days.innerHTML = count;
    dayadd.appendChild(days);

}


function removeHere() {
    this.parentNode.parentNode.removeChild(this.parentNode);
}
$("button#removebtn").click(function() {
    $("dt").remove();

});



var addButtons = document.querySelectorAll('.add button');

function addText() {
    var self = this;
    var weekParent = self.parentNode.parentNode;
    var textarea = self.parentNode.querySelector('textarea');
    var value = textarea.value;
    var item = document.createElement("dt");
    var text = document.createTextNode(value);
    item.appendChild(text)
    weekParent.appendChild(item);
}

function removeText() {
    var weekParent = this.parentNode.parentNode;
    var item = weekParent.querySelector("p");
    weekParent.removeChild(item);
}

for (i = 0; i < addButtons.length; i++) {
    var self = addButtons[i];
    self.addEventListener("click", addText);
}

function HandleBrowseClick(hidden_input_image)
{
    var fileinputElement = document.getElementById(hidden_input_image);
    fileinputElement.click();
} 

function iconadd () {
    var icons = document.getElementById('travel_type').value;
    document.getElementById('myImage').src = icons;
}

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}
