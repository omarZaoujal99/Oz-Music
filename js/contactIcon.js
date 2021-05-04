const btnChat = document.getElementById("btnChat");
const createChat = document.getElementById("createChat");
const emptyDivChat = document.getElementById("emptyDivChat");
const cancelbtn = document.getElementById("cancelbtn");

// to show contact form
btnChat.addEventListener("click",()=>{
    emptyDivChat.style.display ="flex";
})

// to cancel
cancelbtn.addEventListener("click",()=>{
    emptyDivChat.style.display ="none";
})