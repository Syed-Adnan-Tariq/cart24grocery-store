
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}


// var quantity1=1;
// var count = document.getElementById("quantity");
// function plus() {
//     quantity1++;
//     count.value=quantity1;
// }
// function minus() {
//     if(quantity1 > 1){
//         quantity1--;
//         count.value=quantity1;
//     }
//
// }
