var array = [];
var i = 0;

function create(text)
{
    var list = document.getElementById("ft_list");
    var newitem = document.createElement("div");
    newitem.setAttribute("class", "newelem");
    newitem.setAttribute("onclick", "remove(this)");
    newitem.setAttribute("index", i);
    var textnode = document.createTextNode(text);
    newitem.appendChild(textnode);
    list.insertBefore(newitem, list.childNodes[0]);
    array[i++] = encodeURIComponent(text);
}

function addto()
{
  var input;

  input = prompt("new TO DO : ");
  if (input)
    create(input);
  document.cookie = JSON.stringify(array);
	location.reload();
}

function remove(obj)
{
  var conf = confirm("you want to remove that TO DO ?");

  if (conf == true)
  {
    var ind = obj.getAttribute("index");
    array.splice(ind, 1);
    obj.parentNode.removeChild(obj);
    document.cookie = JSON.stringify(array);
	location.reload();
  }
}

function refresh()
{
  if (document.cookie)
  {
    var x = document.cookie;
    var test = JSON.parse(x);
    for (elem in test)
        create(decodeURIComponent(test[elem]));
  }
}

var boton = document.getElementById("submit");
window.onload = refresh;
boton.onclick = addto;