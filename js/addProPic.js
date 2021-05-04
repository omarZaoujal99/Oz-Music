const divBtnsPro = document.getElementById("divBtnsPro");
const divAddPic = document.getElementById("divAddPic");
const btnChangePicPro = document.getElementById("btnChangePicPro");
const btnCloseChange = document.getElementById("btnCloseChange");

btnChangePicPro.addEventListener("click",()=>{
    divBtnsPro.style.bottom = "0";
    divAddPic.style.left = "0";
})
btnCloseChange.addEventListener("click",()=>{
    divBtnsPro.style.bottom = "140px";
    divAddPic.style.left = "-300%";
})

