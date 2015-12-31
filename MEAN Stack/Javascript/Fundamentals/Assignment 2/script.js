// Problem 1
console.log(first_variable);
var first_variable = "Yipee I was first!";
function firstFunc() {
first_variable = "Not anymore!!!";
console.log(first_variable)
}
console.log(first_variable);
// Problem 2
var food = "Chicken";
function eat() {
food = "half-chicken";
console.log(food);
var food = "gone";       // NOTE: I'M TRYING TO TRICK YOU HERE!!!!
}
eat();
console.log(food);
// Problem 3
var new = "NEW!";
function lastFunc() {
new = "old";
}
console.log(new);

//---------------------------------------------------------------------

// Problem 1
var first_variable;
console.log(first_variable);
first_variable = "Yipee I was first!";
function firstFunc() {
first_variable = "Not anymore!!!";
console.log(first_variable)
}
console.log(first_variable);
// Problem 2
var food;
food = "Chicken";
function eat() {
var food;
food = "half-chicken";
console.log(food);
food = "gone";       // NOTE: I'M TRYING TO TRICK YOU HERE!!!!
}
eat();
console.log(food);
// Problem 3
var new;
new = "NEW!";
function lastFunc() {
new = "old";
}
console.log(new);

//-----------------------------------------------------------------

undefined
Yipee I was first!
half-chicken
Chicken
NEW!
