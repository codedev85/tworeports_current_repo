

let caseTextOriginal = document.querySelectorAll(".case__main_paragraph")
let caseText = document.querySelectorAll(".case__main_paragraph")

let initialText = [];

for (let i = 0; i < caseTextOriginal.length; i++) {
    initialText.push(caseTextOriginal[i].textContent);
    console.log(initialText[i]);
}
// console.log(caseText);

let screenRespValues = [1010, 930, 685]


window.addEventListener("resize", function(){
    
    textResize();

})




textResize();



function textResize() {
    if (window.screen.availWidth > screenRespValues[0]) {
        for (let n = 0; n < caseText.length; n++) {
            caseText[n].textContent = initialText[n];
        }
    }
    else if ((window.screen.availWidth <= screenRespValues[0]) && (window.screen.availWidth > screenRespValues[1])) {
        for (let i = 0; i < caseText.length; i++) {
            let newText = initialText[i];
            caseText[i].textContent = newText.trim().substring(0, 250) + "...";
        }
    }
    else if ((window.screen.availWidth <= screenRespValues[1]) && (window.screen.availWidth > 685)) {
        for (let x = 0; x < caseText.length; x++) {
            let newText = initialText[x];
            caseText[x].textContent = newText.trim().substring(0, 180) + "...";
        }
    }
    else if (window.screen.availWidth <= screenRespValues[2]) {
        for (let i = 0; i < caseText.length; i++) {
            let newText = initialText[i];
            caseText[i].textContent = newText.trim().substring(0, 120) + "...";
        }
    }
}
// 1. on resize
// 2. find screen
// 3. if screen width equals any set value
// 4. loop thru all text 
// 5. grab the text and trim and reduce characters
// 6. return back to html 



