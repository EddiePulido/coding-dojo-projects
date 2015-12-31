function personConstructor(Name1){
  return {
    name : Name1,
    distance_travelled : 0,
    say_name : function(){
      alert(name);
    },
    say_something : function(phrase){
      alert(name + " says '" + phrase + "'" );
    },
    walk : function(){
      alert(name + " is walking");
      distance_travelled += 3;
    },
    run : function(){
      alert(name + " is running");
      distance_travelled += 10;
    },
    crawl : function(){
      alert(name + " is crawling");
      distance_travelled += 1;
    }
  };
}

function ninjaConstructor(Name){
  return {
    name : Name,
    cohort : 'september',
    belt_level : 'yellow-belt',
    levelUp : function(){
      if (belt_level == "yellow-belt") {
        belt_level = 'red-belt';
      }else {
        belt_level = 'black-belt';
      }
    }
  };
}
