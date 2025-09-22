const switchButton = document.getElementById("switch");

switchButton.addEventListener("change", (e)=>{
    if(e.target.checked){
        document.body.classList.add("dark");
    }else{
        document.body.classList.remove("dark");
    }
});