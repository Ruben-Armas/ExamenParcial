/* COMPLETE THIS WITH JS AND AJAX*/
function quote_event (){
	var sentence = document.getElementById("minimalist_input").value;
	 console.log('IN');
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("suggestions").value = this.responseText;
        }
    };
    xmlhttp.open("GET", "main.php?sentence=" + sentence, true);
    xmlhttp.send();
    console.log('fIN');
}