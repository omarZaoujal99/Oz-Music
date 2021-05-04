const addPro = document.getElementById("addPro");
const ClosePro = document.getElementById("ClosePro");
const divAddPro = document.getElementById("divAddPro");
const btnSubAddColor2 = document.getElementById("btnSubAddColor2");
const divAddingColor = document.getElementById("divAddingColor");
const btnCloseAddColor = document.getElementById("btnCloseAddColor");

// displaying and hidding the add product div
addPro.addEventListener("click",()=>{
    divAddPro.style.display = "inline-block";
})
ClosePro.addEventListener('click',()=>{
    divAddPro.style.display = "none";
})

// getting attribute data-id
window.onload = function() {
    let showClick = document.querySelectorAll(".showClick");
  
    for (let i = 0; i < showClick.length; i++) {
      showClick[i].addEventListener("click",(e)=>{
        e.preventDefault();
        let productId = showClick[i].dataset.id;
        const inpProductId = document.getElementById("proId");
        inpProductId.value = productId;

        // displaying the add color div
        divAddingColor.style.display = "inline-block";
      })
    }
}

// hidding add color div while clicking in the close btn
btnCloseAddColor.addEventListener("click",()=>{
  divAddingColor.style.display = "none";
})