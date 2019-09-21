


var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);



// let tableValues = [
//     {
//         move: up,
//         date: "3&ndash;3&ndash;19",

//     }
// ];



let tabs = document.querySelectorAll(".rank__table_section .ranking__tab");
let tables = document.querySelectorAll(".rank__table_section .ranking__data");

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener("click", function(){

        // remove all table from view
        for (let m = 0; m < tables.length; m++) {
            tabs[m].classList.remove("ranking__tab--active");
            tables[m].classList.remove("tview");
        }

        tabs[i].classList.add("ranking__tab--active");
        tables[i].classList.add("tview");


    });
    
}
// 1. GRAB TABLES FROM HTML
// 2. GRAB BUTTONS FROM HTML
// 3. LOOP THRU ALL TABLES, THEN HIDE ALL AND SHOW ONLY FIRST
// 4. ADD CLICK EVENTS TO BUTTON 
// 5. INSIDE CLICK EVENT FUNCTION, 
// 6. ADD REMOVE CLASS THAT REVEALS ALL, 
// INORDER TO HIDE ALL, 
// THEN ADD CLASS TO CLICK BUTTON TABLE

// .rank__inner_tab_wrapper .table__wrapper


let tabTables = document.querySelectorAll(".rank__inner_tab_wrapper .table__wrapper");

let tabButtons = document.querySelectorAll(".ranking__tab--tab");

let inputSections = document.querySelectorAll(".rank__table_section__tab .ranking__filter_container");
 
console.log(inputSections)


for (let i = 0; i < tabTables.length; i++) {
    tabButtons[i].addEventListener("click", function(){
        for (let x = 0; x < tabTables.length; x++) {
            if(i == x){
                tabTables[x].classList.toggle("table__show");
                tabButtons[x].classList.add("ranking__tab--active");
                inputSections[x].classList.toggle("input_view");
            }else if(i != x) {
                tabButtons[x].classList.remove("ranking__tab--active");
                tabTables[x].classList.remove("table__show");
                inputSections[x].classList.remove("input_view");
                // break;
            }
            
        }
    })
}

