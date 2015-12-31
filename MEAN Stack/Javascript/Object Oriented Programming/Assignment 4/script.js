// Deck Class
function Deck(){
  this.deck = [
    {suite : 'hearts', value : "ace"}, {suite : 'hearts', value : "2"}, {suite : 'hearts', value : "3"}, {suite : 'hearts', value : "4"}, {suite : 'hearts', value : "5"}, {suite : 'hearts', value : "6"}, {suite : 'hearts', value : "7"}, {suite : 'hearts', value : "8"}, {suite : 'hearts', value : "9"}, {suite : 'hearts', value : "10"}, {suite : 'hearts', value : "jack"}, {suite : 'hearts', value : "queen"}, {suite : 'hearts', value : "king"},
    {suite : 'diamonds', value : "ace"}, {suite : 'diamonds', value : "2"}, {suite : 'diamonds', value : "3"}, {suite : 'diamonds', value : "4"}, {suite : 'diamonds', value : "5"}, {suite : 'diamonds', value : "6"}, {suite : 'diamonds', value : "7"}, {suite : 'diamonds', value : "8"}, {suite : 'diamonds', value : "9"}, {suite : 'diamonds', value : "10"}, {suite : 'diamonds', value : "jack"}, {suite : 'diamonds', value : "queen"}, {suite : 'diamonds', value : "king"},
    {suite : 'clubs', value : "ace"}, {suite : 'clubs', value : "2"}, {suite : 'clubs', value : "3"}, {suite : 'clubs', value : "4"}, {suite : 'clubs', value : "5"}, {suite : 'clubs', value : "6"}, {suite : 'clubs', value : "7"}, {suite : 'clubs', value : "8"}, {suite : 'clubs', value : "9"}, {suite : 'clubs', value : "10"}, {suite : 'clubs', value : "jack"}, {suite : 'clubs', value : "queen"}, {suite : 'clubs', value : "king"},
    {suite : 'spades', value : "ace"}, {suite : 'spades', value : "2"}, {suite : 'spades', value : "3"}, {suite : 'spades', value : "4"}, {suite : 'spades', value : "5"}, {suite : 'spades', value : "6"}, {suite : 'spades', value : "7"}, {suite : 'spades', value : "8"}, {suite : 'spades', value : "9"}, {suite : 'spades', value : "10"}, {suite : 'spades', value : "jack"}, {suite : 'spades', value : "queen"}, {suite : 'spades', value : "king"}
  ];

}

Deck.prototype.shuffle = function(){
  var deck = this.deck;
  for(var j, x, i = deck.length; i; j = Math.floor(Math.random() * i), x = deck[--i], deck[i] = deck[j], deck[j] = x);
  this.deck = deck;
}

Deck.prototype.reset = function(){
  this.deck = [
    {suite : 'hearts', value : "ace"}, {suite : 'hearts', value : "2"}, {suite : 'hearts', value : "3"}, {suite : 'hearts', value : "4"}, {suite : 'hearts', value : "5"}, {suite : 'hearts', value : "6"}, {suite : 'hearts', value : "7"}, {suite : 'hearts', value : "8"}, {suite : 'hearts', value : "9"}, {suite : 'hearts', value : "10"}, {suite : 'hearts', value : "jack"}, {suite : 'hearts', value : "queen"}, {suite : 'hearts', value : "king"},
    {suite : 'diamonds', value : "ace"}, {suite : 'diamonds', value : "2"}, {suite : 'diamonds', value : "3"}, {suite : 'diamonds', value : "4"}, {suite : 'diamonds', value : "5"}, {suite : 'diamonds', value : "6"}, {suite : 'diamonds', value : "7"}, {suite : 'diamonds', value : "8"}, {suite : 'diamonds', value : "9"}, {suite : 'diamonds', value : "10"}, {suite : 'diamonds', value : "jack"}, {suite : 'diamonds', value : "queen"}, {suite : 'diamonds', value : "king"},
    {suite : 'clubs', value : "ace"}, {suite : 'clubs', value : "2"}, {suite : 'clubs', value : "3"}, {suite : 'clubs', value : "4"}, {suite : 'clubs', value : "5"}, {suite : 'clubs', value : "6"}, {suite : 'clubs', value : "7"}, {suite : 'clubs', value : "8"}, {suite : 'clubs', value : "9"}, {suite : 'clubs', value : "10"}, {suite : 'clubs', value : "jack"}, {suite : 'clubs', value : "queen"}, {suite : 'clubs', value : "king"},
    {suite : 'spades', value : "ace"}, {suite : 'spades', value : "2"}, {suite : 'spades', value : "3"}, {suite : 'spades', value : "4"}, {suite : 'spades', value : "5"}, {suite : 'spades', value : "6"}, {suite : 'spades', value : "7"}, {suite : 'spades', value : "8"}, {suite : 'spades', value : "9"}, {suite : 'spades', value : "10"}, {suite : 'spades', value : "jack"}, {suite : 'spades', value : "queen"}, {suite : 'spades', value : "king"}
  ];
}

Deck.prototype.deal = function(){
  var index = Math.floor(Math.random() * 52);
  var card = this.deck[index];
  delete this.deck[index];
  return card;
}

// Player Class
function Player(name){
  this.name = name;
  this.hand  = [];
}

Player.prototype.deal = function(deck){
  this.hand.push(deck.deal());
}

Player.prototype.discard = function(card){
  delete this.hand[card];
}
