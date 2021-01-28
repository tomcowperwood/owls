function r1Off(){
    document.getElementById("r-1").style.display="none";
} 
function r2Off(){
    document.getElementById("r-2").style.display="none";
} 
function r3Off(){
    document.getElementById("r-3").style.display="none";
} 
function r4Off(){
    document.getElementById("r-4").style.display="none";
} 
function r1234Off(){
    r1Off(); r2Off(); r3Off(); r4Off();
    document.getElementById("r-1-b").style.display="none";
    document.getElementById("r-2-b").style.display="none";
    document.getElementById("r-3-b").style.display="none";
    document.getElementById("r-4-b").style.display="none";
    
    document.getElementById("tur1-b").style.display="block";
    document.getElementById("tur2-b").style.display="block";    
    document.getElementById("idmanor-r").style.justifyContent="space-around";
}
function t1Off(){
    document.getElementById("tur").style.display="none";
}
function t2Off(){
    document.getElementById("tur2").style.display="none";
}
function finOff(){
    document.getElementById("fin").style.display="none";
}
function sportOff(){
    document.getElementById("sport").style.display="none";
}
function autoOff(){
    document.getElementById("auto").style.display="none";
}
// function tur1Off(){
//     document.getElementById("tur").style.display="none";
// } 
// function tur2Off(){
//     document.getElementById("tur2").style.display="none";
// } 
// function finOff(){
//     document.getElementById("fin").style.display="none";
// } 
// function sportOff(){
//     document.getElementById("sport").style.display="none";
// } 
// function autoOff(){
//     document.getElementById("auto").style.display="none";
// } 

//     function tur1BOff(){
//         document.getElementById("tur1-b").style.display="none";
//     } 
//     function tur2BOff(){
//         document.getElementById("tur2-b").style.display="none";
//     } 


function r1On(){
    document.getElementById("r-1").style.display="block";
} 
function r2On(){
    document.getElementById("r-2").style.display="block";
} 
function r3On(){
    document.getElementById("r-3").style.display="block";
} 
function r4On(){
    document.getElementById("r-4").style.display="block";
} 

function r1234On(){
    r1On(); 
    // r2On(); r3On(); r4On();
    document.getElementById("r-1-b").style.display="block";
    document.getElementById("r-2-b").style.display="block";
    document.getElementById("r-3-b").style.display="block";
    document.getElementById("r-4-b").style.display="block";
    
    document.getElementById("tur1-b").style.display="none";
    document.getElementById("tur2-b").style.display="none";   
    document.getElementById("idmanor-r").style.justifyContent="space-between";
}
function tursbOff(){
    document.getElementById("tur1-b").style.display="none";
    document.getElementById("tur2-b").style.display="none";
}
function tursbOn(){
    document.getElementById("tur1-b").style.display="block";
    document.getElementById("tur2-b").style.display="block";
}

function t1On(){
    document.getElementById("tur").style.display="block";
}
function t2On(){
    document.getElementById("tur2").style.display="block";
}
function finOn(){
    document.getElementById("fin").style.display="block";
}
function sportOn(){
    document.getElementById("sport").style.display="block";
}
function autoOn(){
    document.getElementById("auto").style.display="block";
}
// function tur1On(){
//     document.getElementById("tur").style.display="block";
// } 
// function tur2On(){
//     document.getElementById("tur2").style.display="block";
// } 
// function finOn(){
//     document.getElementById("fin").style.display="block";
// } 
// function sportOn(){
//     document.getElementById("sport").style.display="block";
// } 
// function autoOn(){
//     document.getElementById("auto").style.display="block";
// } 

//     function tur1BOn(){
//         document.getElementById("tur1-b").style.display="block";
//     } 
//     function tur2BOn(){
//         document.getElementById("tur2-b").style.display="block";
//     } 

function show1 () {
    r1On();
    r2Off();
    r3Off();
    r4Off();

}
function show2 () {
    r1Off();
    r2On();
    r3Off();
    r4Off();

}
function show3 () {
    r1Off();
    r2Off();
    r3On();
    r4Off();
  
}
function show4 () {
    r1Off();
    r2Off();
    r3Off();
        r4On();

}

function showT1(){
    r1234Off();
    t1On();
    t2Off();
}
function showT2(){
    r1234Off();
    t1Off();
    t2On();
}



// function showTurB2 () {
//     r1Off();
//     r2Off();
//     r3Off();
//     r4Off();
//     tur1Off();
//     tur2Off();
//     finOff();
//     sportOff();
//     autoOff();
//     tur1BOff();
//     tur2BOff();
// }

var rb = document.getElementById("rus-b");
var tb = document.getElementById("tur-b");
var fb = document.getElementById("fin-b");
var sb = document.getElementById("sport-b");
var ab = document.getElementById("auto-b");

var r1b = document.getElementById("r-1-b");
var r2b = document.getElementById("r-2-b");
var r3b = document.getElementById("r-3-b");
var r4b = document.getElementById("r-4-b");

var tur1b = document.getElementById("tur1-b");
var tur2b = document.getElementById("tur2-b");

// var tur1b = document.getElementById("tur");
// var tur2b = document.getElementById("tur2");
// var finb = document.getElementById("fin");
// var sportb = document.getElementById("sport");
// var autob = document.getElementById("auto");

function showRus(){
    r1234On(); t1Off(); t2Off(); finOff(); sportOff(); autoOff();
}
function showTur(){
    r1234Off(); t1On(); t2Off(); finOff(); sportOff(); autoOff();
}
function showFin(){
    r1234Off(); t1Off(); t2Off(); finOn(); sportOff(); autoOff(); tursbOff();
}
function showSport(){
    r1234Off(); t1Off(); t2Off(); finOff(); sportOn(); autoOff(); tursbOff();
}
function showAuto(){
    r1234Off(); t1Off(); t2Off(); finOff(); sportOff(); autoOn(); tursbOff();
}

rb.addEventListener("click", showRus);
tb.addEventListener("click", showTur);
fb.addEventListener("click", showFin);
sb.addEventListener("click", showSport);
ab.addEventListener("click", showAuto);

r1b.addEventListener("click", show1);
r2b.addEventListener("click", show2);
r3b.addEventListener("click", show3);
r4b.addEventListener("click", show4);

tur1b.addEventListener("click", showT1);
tur2b.addEventListener("click", showT2);
// tur1b.addEventListener("click", showTur1);
// tur2b.addEventListener("click", showTur2);
// finb.addEventListener("click", showFin);
// sportb.addEventListener("click", showSport);
// autob.addEventListener("click", showAuto);

// -----------------------------------------

