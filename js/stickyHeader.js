window.addEventListener("scroll", function() {
    let navHeader = document.getElementById("navHeader");
    let lblBars = document.getElementById("lblBars");
    let btnSearch = document.getElementById("btnSearch");
    let aBag = document.getElementById("aBag");
    let cur = document.getElementById("cur");
    // let aCompte = document.getElementById("aCompte");
    
    if(window.pageYOffset > 0){
        navHeader.classList.add("is-sticky");
        lblBars.classList.add("is-sticky2");
        btnSearch.classList.add("is-sticky2");
        aBag.classList.add("is-sticky2")
        cur.classList.add("is-sticky2");
        // aCompte.classList.add("is-sticky2");
    } 
    else{
        navHeader.classList.remove("is-sticky");
        lblBars.classList.remove("is-sticky2");
        btnSearch.classList.remove("is-sticky2");
        aBag.classList.remove("is-sticky2");
        cur.classList.remove("is-sticky2");
        // aCompte.classList.remove("is-sticky2");
    }
});
    