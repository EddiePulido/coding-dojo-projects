//Question 1
var items = [3,5,'Dojo', 'rocks', 'Michael', 'Sensei'];

for (var i = 0; i < items.length; i++) {
  console.log(items[i]);
}

//Question 2
items.push(100);

//Question 3
items.push([1,2,3,4,5]);
console.log(items);

//Question 4
var sum = 0;

for (var i = 1; i <= 500; i++) {
  sum += i;
}

console.log(sum);

//Question 5
var items = [1, 5, 90, 25, -3, 0];
var min = items[0];

for (var i = 1; i < items.length; i++) {
  if (min > items[i]) {
    min = items[i];
  }
}

console.log(min);

//Question 6
var items = [1, 5, 90, 25, -3, 0];
var sum = 0;

for (var i = 0; i < items.length; i++) {
  sum += items[i];
}

var average = sum / items.length;
console.log(average);
