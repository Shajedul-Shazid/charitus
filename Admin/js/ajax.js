function Delete(id) {
    var txt;
    var r = confirm("Are You Sure Want to Delete?");
    if (r == true) {
        var MyID=id;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mytable").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("POST", "phpAction/delete.php?id="+MyID, true);
        xhttp.send();
    } else {
    }
}