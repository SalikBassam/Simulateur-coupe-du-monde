let test = document.querySelectorAll("input")
let btn = document.querySelector(".btn")
let clear = document.querySelector(".btnClear")
let td = document.querySelector(".test")

for (let i = 0; i < test.length; i++) {
    
test[i].onkeyup = function() {
    if(test[0].value === "" || test[1].value === "" || test[2].value === "" || test[3].value === "" || test[4].value === ""|| test[5].value === ""|| test[6].value === ""|| test[7].value === "" || test[8].value === "" || test[9].value === "" || test[10].value === "" || test[11].value === ""){
        btn.style.display="none";
    }else{
        btn.style.display="block";
    }
}
}
          


for (let i = 0; i < test.length; i++) {
    if (td.textContent === "") {
        test[i].style.display=""
    }else{
        test[i].style.display="none"
    }
}

