var _ = {
  map: function(array, callback) {
    var new_array = [];
    for (var i = 0; i < array.length; i++) {
      new_array.push(callback(array[i]));
    }
    return new_array;
  },
  reduce: function(array, callback, memo) {
    var memo = memo;
    for (var i = 0; i < array.length; i++) {
      var num = callback(memo, array[i]);
      memo = num;
    }
    return memo;
  },
  find: function(array, callback) {
    for (var i = 0; i < array.length; i++) {
      var check = callback(array[i]);
      if (check === true) {
        return array[i];
      }
    }
  },
  filter: function(array, callback) {
    var new_array = [];
    for (var i = 0; i < array.length; i++) {
      var check = callback(array[i]);
      if (check === true) {
        new_array.push(array[i]);
      }
    }
    return new_array;
  },
  reject: function(array, callback) {
    var new_array = [];
    for (var i = 0; i < array.length; i++) {
      var check = callback(array[i]);
      if (check !== true) {
        new_array.push(array[i]);
      }
    }
    return new_array;
  }
}

var map_test = _.map([1, 2, 3], function(num){ return num * 3; });
console.log(map_test);

var reduce_test = _.reduce([1, 2, 3], function(memo, num){ return memo + num; }, 0);
console.log(reduce_test);

var find_test = _.find([1, 2, 3, 4, 5, 6], function(num){ return num % 2 == 0; });
console.log(find_test);

var filter_test = _.filter([1, 2, 3, 4, 5, 6], function(num){ return num % 2 == 0; });
console.log(filter_test);

var reject_test = _.reject([1, 2, 3, 4, 5, 6], function(num){ return num % 2 == 0; });
console.log(reject_test);
