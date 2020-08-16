// What is DOM? 
// How to access DOM using javascript?
// What is SVG? SVG stands for Scalable Vector Graphics.


function getData(){
    var firstName = document.getElementById("fname").value;  // Jaspreet Singh
    var lastName = document.getElementById("lname").value;  // Kalsi
    var age = document.getElementById("age").value; // 27
    document.getElementById("displayData").innerHTML = "First Name: " + firstName + "<br> Last Name: " + lastName + "<br> Age: " + age;
}

function showSVGCircle(){
    document.getElementById("showSVG").innerHTML = '<svg width="800" height="800"><circle cx="70" cy="70" r="60" stroke="green" stroke-width="4" fill="yellow" /></svg>'; 
}