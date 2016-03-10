<?php
/**
 * A class with function that will shuffle a deck of cards.
 * 
 */
class Deck
{
    // Builds a deck of cards which return array
	 
	public static function cards()
	{
		$values = array( 'A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
		$suits  = array('&hearts;', '&spades;', '&diams;', '&clubs;');
		
		$cards = array();
				
		foreach ($suits as $suit) {
			foreach ($values as $value) {
				$cards[] = $value . $suit;
			}
		}
			
		return $cards;
	}
	
	// Shuffles an array of cards. return array
	 
	public static function shufflecards(array $cards)
	{
		$total_cards = count($cards);
		
		foreach ($cards as $index => $card) {
			// Pick a random second card.
			$card2_index = mt_rand(1, $total_cards) - 1;
			$card2 = $cards[$card2_index];
			
			// Swap the positions of the two cards.
			$cards[$index] = $card2;
			$cards[$card2_index] = $card;
		}
		
		return $cards;
		
	}
}

// Accessing cards() function of Deck Class and store in cards variable.

$cards = Deck::cards();
$chunks = array_chunk($cards, 13);
echo 'Example of Deck of cards BEFORE shuffle:<br/><br/>';
	
		foreach ($chunks as $chunk) {
			echo implode(' ',$chunk). '<br/>';
			}
echo '<br/><br/>';

// Accessing shufflecards() function of Deck Class and store in shuffle variable.

$shuffle = Deck::shufflecards($cards);
$chunks = array_chunk($shuffle, 13);
echo 'Example of Deck of cards AFTER shuffle:<br/><br/>';
	
		foreach ($chunks as $chunk) {
			echo implode(' ',$chunk). '<br/>';
			}

?>