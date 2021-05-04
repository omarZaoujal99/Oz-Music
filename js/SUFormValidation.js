// username
const un = document.getElementById("un");
// email
const em = document.getElementById("em");
// password 
const pa = document.getElementById("pa");
// password confirmation
const pa2 = document.getElementById("pa2");
// nationality
const na = document.getElementById("na");
// adress
const ad = document.getElementById("ad");
// phoneNumber
const pn = document.getElementById("pn");
// SubmitButton
const btnSubSU = document.getElementById("btnSubSU");

// regexes
const regexUN = /[A-Za-z0-9 ]{3,20}/gm;
const regexEM = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/gm;
const regexPA = /[A-Za-z0-9 ]{8,20}/gm;
const regexNA = /[A-Za-z ]{3,20}/gm;
const regexAD = /[A-Za-z0-9_,. ]{10,100}/gm;
const regexPN = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

// username validation
    btnSubSU.addEventListener("click",(e)=>{
        // username icons right or false
        const noUN = document.getElementById("noUN");
        const yesUN = document.getElementById("yesUN");
        // error area
        const lblErrsSUUN = document.getElementById("lblErrsSUUN");

        const un1 = un.value.trim();
        // if it match
        if(un1.match(regexUN)){
            un.style.borderColor = "green";
            yesUN.style.display = "inline";
            noUN.style.display = "none";
            lblErrsSUUN.style.display = "none";
        }
        // if id doesn't match
        else{
            un.style.borderColor = "red";
            noUN.style.display = "inline";
            yesUN.style.display = "none";
            lblErrsSUUN.style.display = "inline";
            lblErrsSUUN.innerHTML = "Username length must be between 3 and 20 letters&numbers";
            e.preventDefault();
        }
    })

// email validation
    btnSubSU.addEventListener("click",(e)=>{
        // email ico...
        const noEM = document.getElementById("noEM");
        const yesEM = document.getElementById("yesEM");
        // error area
        const lblErrsSUEM = document.getElementById("lblErrsSUEM");

        const em1 = em.value.trim();
        // if it match
        if(em1.match(regexEM)){
            em.style.borderColor = "green";
            yesEM.style.display = "inline";
            noEM.style.display = "none";
            lblErrsSUEM.style.display = "none"; 
        }
        // if id doesn't match
        else{
            em.style.borderColor = "red";
            noEM.style.display = "inline";
            yesEM.style.display = "none";
            lblErrsSUEM.style.display = "inline";
            lblErrsSUEM.innerHTML = "Please write the correct email!";
            e.preventDefault();
        }
    })

// password validation
    btnSubSU.addEventListener("click",(e)=>{
        // password ico...
        const noPA = document.getElementById("noPA");
        const yesPA = document.getElementById("yesPA");
        // error area
        const lblErrsSUPA = document.getElementById("lblErrsSUPA");

        const pa1 = pa.value.trim();
        // if it match
        if(pa1.match(regexPA)){
            pa.style.borderColor = "green";
            yesPA.style.display = "inline";
            noPA.style.display = "none";
            lblErrsSUPA.style.display = "none";
        }
        // if id doesn't match
        else{
            pa.style.borderColor = "red";
            noPA.style.display = "inline";
            yesPA.style.display = "none";
            lblErrsSUPA.style.display = "inline";
            lblErrsSUPA.innerHTML = "Password should content capital&small letters and numbers";
            e.preventDefault();
        }
    })

// password confirmation validation
    btnSubSU.addEventListener("click",(e)=>{
        // password confirmation ico...
        const noPA2 = document.getElementById("noPA2");
        const yesPA2 = document.getElementById("yesPA2");
        // error area
        const lblErrsSUPA2 = document.getElementById("lblErrsSUPA2");

        const pa22 = pa2.value.trim();
        // if it match
        if(pa22.match(regexPA)){
            // if it match the first password
            if(pa.value != pa2.value){
                pa2.style.borderColor = "red";
                noPA2.style.display = "inline";
                yesPA2.style.display = "none";
                lblErrsSUPA2.display = "inline";
                lblErrsSUPA2.style.innerHTML = "Confirmation password incorrect";
                e.preventDefault();
            }
            else{
                pa2.style.borderColor = "green";
                yesPA2.style.display = "inline";
                noPA2.style.display = "none";
                lblErrsSUPA2.style.display = "none";
            }
        }
        // if id doesn't match
        else{
            pa2.style.borderColor = "red";
            noPA2.style.display = "inline";
            yesPA2.style.display = "none";
            lblErrsSUPA2.style.display = "inline";
            lblErrsSUPA2.innerHTML = "Confirmation password incorrect";
            e.preventDefault();
        }
    })
    
// nationality validation
    btnSubSU.addEventListener("click",(e)=>{
        // nationality ico..
        const noNA = document.getElementById("noNA");
        const yesNA = document.getElementById("yesNA");
        // error area
        const lblErrsSUNA = document.getElementById("lblErrsSUNA");

        const na1 = na.value.trim();
        // if it match
        if(na1.match(regexNA)){
            na.style.borderColor = "green";
            yesNA.style.display = "inline";
            noNA.style.display = "none";
            lblErrsSUNA.style.display = "none";
        }
        // if id doesn't match
        else{
            na.style.borderColor = "red";
            noNA.style.display = "inline";
            yesNA.style.display = "none";
            lblErrsSUNA.style.display = "inline";
            lblErrsSUNA.innerHTML = "Please write the correct nationality";
            e.preventDefault();
        }
    })

// adress validation
    btnSubSU.addEventListener("click",(e)=>{
        // adress ico...
        const noAD = document.getElementById("noAD");
        const yesAD = document.getElementById("yesAD");
        // error area
        const lblErrsSUAD = document.getElementById("lblErrsSUAD");

        const ad1 = ad.value.trim();
        // if it match
        if(ad1.match(regexAD)){
            ad.style.borderColor = "green";
            yesAD.style.display = "inline";
            noAD.style.display = "none";
            lblErrsSUAD.style.display = "none";
        }
        // if id doesn't match
        else{
            ad.style.borderColor = "red";
            noAD.style.display = "inline";
            yesAD.style.display = "none";
            lblErrsSUAD.style.display = "inline";
            lblErrsSUAD.innerHTML = "Adress length should be between 10&100 letters and numbers";
            e.preventDefault();
        }
    })

// phoneNumber validation
    btnSubSU.addEventListener("click",(e)=>{
        // phoneNumber ico...
        const noPN = document.getElementById("noPN");
        const yesPN = document.getElementById("yesPN");
        // error area
        const lblErrsSUPN = document.getElementById("lblErrsSUPN");

        const pn1 = pn.value.trim();
        // if it match
        if(pn1.match(regexPN)){
            pn.style.borderColor = "green";
            yesPN.style.display = "inline";
            noPN.style.display = "none";
            lblErrsSUPN.style.display = "none";
        }
        // if id doesn't match
        else{
            pn.style.borderColor = "red";
            noPN.style.display = "inline";
            yesPN.style.display = "none";
            lblErrsSUPN.style.display = "inline";
            lblErrsSUPN.innerHTML = "Start by your country key (+...) then your number phone";
            e.preventDefault();
        }
    })
