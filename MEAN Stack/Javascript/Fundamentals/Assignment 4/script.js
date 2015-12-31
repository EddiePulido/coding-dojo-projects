var words = ["fun", "exciting", "about not giving up", "being helpful", "being open", "what I learned at CodingDojo!"],
el = document.getElementById('magic'),
word_counter = 0,
character_counter = 0;

function updateText(){

  if (words[word_counter][character_counter] != " ") {
    el.innerHTML = el.innerHTML + words[word_counter][character_counter];
    character_counter++;
  }else{
    character_counter++;
    el.innerHTML = el.innerHTML + "&nbsp;";
  }

  if(character_counter == words[word_counter].length + 1){
    word_counter++; 	//choose a different word
    character_counter = 0;	//start over with the first character of the word
    el.innerHTML = '';  //set the html to be blank
    //if we're displaying the last word, go back to the first word
    if(word_counter == words.length){
      word_counter = 0;
    }
  }

}

setInterval(updateText,300);
