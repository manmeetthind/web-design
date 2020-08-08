// Exercise 1: Normal way of writting a program
// const number = Number(prompt("Enter an Integer:"));
// if(number == 1) alert("One");   // if number is 1 
// else if(number == 2) alert("Two");  // if number is 2 
// else if(number == 3) alert("Three");
// else if(number == 4) alert("Four");
// else if(number == 5) alert("Five");
// else if(number == 6) alert("Six");
// else if(number == 7) alert("Seven");
// else if(number == 8) alert("Eight");
// else if(number == 9) alert("Nine");
// else if(number == 10) alert("Ten");
// else alert("Number is out of range.");


// Syntax of a function
// function <NAME>{
//     <statement 1>;
//     <statement 2>;
//          .
//          .
//          .
//          .
//          .
//     <statement N>;
// }

// Exercise 2: Create a function which performs the following logic:
// * Take number from user in Integer
// * Convert this number to text.
// * print the text to the user.
// Eg: 2 Two
// Eg: 3 Three
// Eg: 10 Ten

// function convertNumberToText(number){
//     if(number == 1) alert("One");   // if number is 1 
//     else if(number == 2) alert("Two");  // if number is 2 
//     else if(number == 3) alert("Three");
//     else if(number == 4) alert("Four");
//     else if(number == 5) alert("Five");
//     else if(number == 6) alert("Six");
//     else if(number == 7) alert("Seven");
//     else if(number == 8) alert("Eight");
//     else if(number == 9) alert("Nine");
//     else if(number == 10) alert("Ten");
//     else alert("Number is out of range.");
// }

// const number = Number(prompt("Enter an Integer:"));
// convertNumberToText(number);


// Syntax of a while loop.
// while(<CONDITION>){
//     <statement 1>;
//     <statement 2>;
//          .
//          .
//          .
//          .
//          .
//     <statement N>;
// }

// Exercise 3: 
// Write a program to take a  number from a user. // 2
// Print a table of that number. 
// 2 x 1 = 2
// 2 x 2 = 4
// 2 x 3 = 6
//   .
//   .
// 2 x 10 = 20
const number = Number(prompt("Enter a number:")); // 5
var i = 1;
while(i <= 10){  // 2 <= 10
    alert(number + " x " + i + " = " + number * i); // 5 x 2 = 10
    i = i + 1; // i = 2 + 1 => i = 3;
}

// Exercise 4: 
// Write a program to take a number from a user. // 2
// Call a function which performs the mulplication.
// Print a table of that number. 
// 2 x 1 = 2
// 2 x 2 = 4
// 2 x 3 = 6
//   .
//   .
// 2 x 10 = 20
function calculateTable(number){
    var i = 1;
    while(i <= 10){ 
        alert(number + " x " + i + " = " + number * i); 
        i = i + 1;
    }
}

const number = Number(prompt("Enter a number:")); // 5
calculateTable(number);
