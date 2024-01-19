const radio = document.getElementsByTagName("input");
const div = document.getElementsByClassName("button");
const button = document.getElementById("button");
function query(){
    div[0].style.display = "none";
    button.style.display = "block";
}
for (let i=0; i < radio.length; i++){
    radio[i].addEventListener('input', query)
}