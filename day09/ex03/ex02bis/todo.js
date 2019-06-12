var array = [];
var i = 0;

function create(text)
{
	var list = $('#ft_list');
	var newitem = $('<div>', { 'class': 'newelem' });
	newitem.click(remove);
	newitem.attr('index', i);
    var textnode = document.createTextNode(text);
    newitem.append(textnode);
	list.prepend(newitem);
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

function remove()
{
	var obj = $(this);
	var conf = confirm("you want to remove that TO DO ?");
	if (conf == true)
	{
		var ind = obj.attr("index");
		array.splice(ind, 1);
		obj.remove();
		document.cookie = JSON.stringify(array);
		location.reload();
	}
}

function refresh()
{
	if (document.cookie)
	{
		var test = JSON.parse(document.cookie);
		for (elem in test)
			create(decodeURIComponent(test[elem]));
	}
}
$(document).ready(refresh);
$("#submit").click(addto);