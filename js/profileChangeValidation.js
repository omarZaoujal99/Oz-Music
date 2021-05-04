// inputs
const un = document.getElementById("un");
const em = document.getElementById("em");
const pa = document.getElementById("pa");
const na = document.getElementById("na");
const ad = document.getElementById("ad");
const pn = document.getElementById("pn");
const saveChanges = document.getElementById("saveChanges");

// regexes
const regexUN = /[A-Za-z0-9 ]{3,20}/gm;
const regexEM = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/gm;
const regexPA = /[A-Za-z0-9 ]{8,20}/gm;
const regexNA = /[A-Za-z ]{3,20}/gm;
const regexAD = /[A-Za-z0-9_,. ]{10,100}/gm;
const regexPN = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

// events
// username
saveChanges.addEventListener("click",(e)=>{
    const un1 = un.value.trim();
    if(un1.match(regexUN)){
        un.style.color = "green";
        un.style.borderRight = "5px solid green";
    }
    else{
        un.style.color = "red";
        un.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})
// email
saveChanges.addEventListener("click",(e)=>{
    const em1 = em.value.trim();
    if(em1.match(regexEM)){
        em.style.color = "green";
        em.style.borderRight = "5px solid green";
    }
    else{
        em.style.color = "red";
        em.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})
// password
saveChanges.addEventListener("click",(e)=>{
    const pa1 = pa.value.trim();
    if(pa1.match(regexPA)){
        pa.style.color = "green";
        pa.style.borderRight = "5px solid green";
    }
    else{
        pa.style.color = "red";
        pa.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})
// nationality
saveChanges.addEventListener("click",(e)=>{
    const na1 = na.value.trim();
    if(na1.match(regexNA)){
        na.style.color = "green";
        na.style.borderRight = "5px solid green";
    }
    else{
        na.style.color = "red";
        na.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})
// adress
saveChanges.addEventListener("click",(e)=>{
    const ad1 = ad.value.trim();
    if(ad1.match(regexAD)){
        ad.style.color = "green";
        ad.style.borderRight = "5px solid green";
    }
    else{
        ad.style.color = "red";
        ad.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})
// username
saveChanges.addEventListener("click",(e)=>{
    const pn1 = pn.value.trim();
    if(pn1.match(regexPN)){
        pn.style.color = "green";
        pn.style.borderRight = "5px solid green";
    }
    else{
        pn.style.color = "red";
        pn.style.borderRight = "5px solid red";
        e.preventDefault();
    }
})


