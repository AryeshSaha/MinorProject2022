let i = 0;
let target = document.getElementById("typewriter");
let text = target.innerHTML;
target.innerHTML = ' ';
let speed = 100; //speed duration of effect in millisec

typeWrite(); //to call function
function typeWrite() {
    if (i < text.length) {
        target.innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWrite, speed);
    }
}

// Date      
var tomorrow = new Date();
document.getElementById("spanDate").innerHTML =tomorrow.getFullYear();