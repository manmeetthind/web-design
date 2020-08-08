// SYNTAX of an array:
// var <NAME> = new Array(<item1>, <item2>, ......, <item 3>)


// Defination of an array:
// Array is collection of data having same datatype.
// datatype: Number, String.


// Exercise 1: Create a Number array having numbers from 1 to 5.
//             Name of an array should be 'number'
var number = new Array(1, 2, 3, 4, 5);


// Exercise 2: Create a String array having apple, mango, pine-apple, orange, bannana
//             Name of an array should be 'fruits'
var fruits = new Array('apple', 'mango', 'pine-apple', 'orange', 'bannana'); // Ok
var fruits = new Array("apple", "mango", "pine-apple", "orange", "bannana"); // Ok
// var fruits = new Array(apple, mango, pine-apple, orange, bannana); // bad

// NOTE: In an array, indexes starts from ZERO.

// Exercise 3: How to use console.log
console.log(fruits);

// Exercise 4: How indexes works in array:
console.log("fruits[0] = ", fruits[0]);  // apple
console.log("fruits[3] = ", fruits[3]);  // orange

// Exercise 4: How to check the size of an array.
// <NAME OF AN ARRAY>.length


// Exercise 5: Create an string array having name as car.
//            * At index 0: Maruti
//            * At index 1: Dodge
//            * At index 2: Toyota
//            * At index 3: BMW
//            * At index 4: Honda
//            * Calculate the length of an array.
//            * console.log its length.
var car = new Array("Maruti", "Dodge", "Toyota", "BMW", "Honda");
console.log("Length of car :", car.length);


// Exercise 6: Insert 'tata' car company inside car array.
//            * console.log the updated array. 
car.push('tata')
console.log("Updated car array:", car);


// Exercise 7:  Create an empty array of type string having a name 'mobileCompanies'.
//            * At index 0: Samsung
//            * At index 1: Apple
//            * At index 2: Google
//            * At index 3: Motorola
//            * At index 4: LG
//            * Calculate the length of an array.
//            * console.log its length.  
//            * Add Asus & Sony to mobileCompanies array.
//            * console.log the mobileCompanies array.
//            * Remove Sony from the array.
//            * console.log the mobileCompanies array.
var mobileCompanies = new Array('Samsung', 'Apple', 'Google', 'Motorola', 'LG');
console.log("Length of mobileCompanies array:", mobileCompanies.length);
mobileCompanies.push('Asus');
mobileCompanies.push('Sony');
console.log('mobileCompanies array:', mobileCompanies);
mobileCompanies.pop();
console.log("mobileCompanies :", mobileCompanies);

// THINGS LEARNED SO FAR!!!!!
// How to create an array 
// How indexes works in array
// How to insert new things in an array.
// How to use console.log
// How to remove last element from array

// HOMEWORK 1: Create an empty array of type string having a name 'LaptopCompanies'.
//            * At index 0: Samsung
//            * At index 1: Apple
//            * At index 2: Google
//            * At index 3: Lenovo
//            * At index 4: LG
//            * Calculate the length of an array.
//            * console.log its length.  
//            * Add Dell & Sony to LaptopCompanies array.
//            * console.log the LaptopCompanies array.
//            * Remove Google from the array.
//            * console.log the LaptopCompanies array.

// ************ HOMEWORK 1 code begins here ************


// ************ HOMEWORK 1 ends begins here ************

// How to create an object in js.
// SYNTAX:
// var <NAME> = {<KEY1>: <value>', <KEY2>: <value>', .....};


// EXERCISE 8: Create an obj having name fruits
//             |-----------------------|
//             |     KEY      |  VALUE |
//             |  apple       |    2   |
//             |  mango       |    5   |
//             |  pine-apple  |    2   |
//             |  orange      |    3   |
//             |-----------------------|
//  console.log the fruit object.
var fruits = {
    'apple': 2, 
    'mango': 3,
    'pine-apple': 2,
    'orange': 3
}
console.log("Fruits object :", fruits);

// Exercise 9: Access the number of mangoes inside the fruits object & console.log it.
console.log("No. of mangoes:", fruits['mango']);


// Exercise 10: Delete pineapple from fruits object.
delete fruits['pine-apple'];
console.log("Fruits object: ", fruits);


// THINGS LEARNED SO FAR!!!!!
// How to create an array 
// How indexes works in array
// How to insert new things in an array.
// How to use console.log
// How to remove last element from array
// How to create an object
// How to access any key from an object
// How to remove key-value pair from an object.

// HOMEWORK 2: Create an obj having name mobileCompanies
//             |-----------------------|
//             |     KEY      |  VALUE |
//             |  apple       |    2   |
//             |  samsung     |    5   |
//             |  motorola    |    2   |
//             |  google      |    3   |
//             |-----------------------|
//  * console.log the mobileCompanies object.
//  * console.log  no. of motorola mobiles.
//  * remove apple key.
//  * console.log the mobileCompanies object.

// ************ HOMEWORK 2 code begins here ************


// ************ HOMEWORK 2 ends begins here ************