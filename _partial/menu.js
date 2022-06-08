let menu =()=> {
    let x = document.getElementById("classicNav");
     if (x.className === "classic" ) {
        x.className += " mobile";
    } else {
        x.className = "classic";
    }
}
let mybutton = document.getElementById("topBTN");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = ()=> {scrollFunction()};

let scrollFunction =()=> {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
let topFunction=()=> {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}