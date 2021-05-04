const btnDropDownMenu = document.getElementById("btnDropDownMenu");
const myDropdown = document.getElementById("myDropdown");

// on mouse over 
btnDropDownMenu.addEventListener("mouseover",()=>{
    myDropdown.style.display = "block";
})
btnDropDownMenu.addEventListener("mouseleave",()=>{
    myDropdown.style.display = "none";
    myDropdown.addEventListener("mouseover",()=>{
        myDropdown.style.display = "block";
    })
    myDropdown.addEventListener("mouseleave",()=>{
        myDropdown.style.display = "none";
    })
})