const btnSearch = document.getElementById("btnSearch");
const bCloseSearch = document.getElementById("bCloseSearch");
const divSearch = document.getElementById("divSearch");

// on click event
btnSearch.addEventListener("click",()=>{
    divSearch.style.display = "flex";
})
bCloseSearch.addEventListener("click",()=>{
    divSearch.style.display = "none";
})