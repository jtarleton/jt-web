<?php 




/** hyed between the computer and a user.
 *
 *   This is the completion of the top-down
 *   design from RockPaperScis1.java
 *
 * @author Grant William Braught
 * @author Dickinson College
 * @version 2/9/2000
 *
class RockPaperScissors 
{

    public static main (String[] args) {
		$userScore = 0; //int
		$compScore = 0; //int
		$userMove, $compMove; //strings
		$winner = null; //int

		echo ("ROCK - PAPER - SCISSORS");
		echo ("This game plays 10 rounds.");
		
		// Loop once for each round of the game.
		for ($rnd=1; $rnd<=10; $rnd++) {
		    
		    // Get the moves for this round.
		    $userMove = getUserMove();
		    $compMove = getComputerMove();
		    echo ("Computer's move: " . $compMove);

		    // Determine the winner of this round.
		    winner = determineRoundWinner(compMove, userMove);

		    // Print a message and add one to the score of the winner.
		    if (winner == 1) {
			System.out.println(compMove . " beats " . 
					   userMove . 
					   " the computer wins this round.");
			compScore++;
		    }
		    else if (winner == -1) {
			System.out.println(userMove . " beats " . 
					   compMove . 
					   " the user wins this round.");
			userScore++;
		    }
		    else {
			System.out.println(userMove . " ties " . 
					   compMove . 
					   " nobody wins this round.");
		    }
		    
		    echo ("Score: User=$userScore Computer=$compScore");
		    echo PHP_EOL;
		}
		
		// The ten rounds are over...
		// Print out the winner of the game.
		self::displayGameWinner($userScore, $compScore);
    }

    **
     * Read in a move from the user.  Valid
     * responses are Rock, Paper or Scissors.
     * Prompt until a valid move is entered.
     *
     * @return The user's move as one of: 
     *         Rock, Paper, Scissors
     *
    static String getUserMove() {
	String userMove = "club";
	
	// Loop while the user has not entered a valid
	// move.  NOTE: The ==, != operators do not work
	// on String objects.  However, the String
	// object provides an equals method that returns
	// true if the String is equal to the argument.
	while ($userMove!="ROCK" &&
	       $userMove!="PAPER" &&
	       $userMove!="SCISSORS") {

	    echo ("Enter your move [ROCK, PAPER, SCISSORS]: ");

	    // Read the user's move and convert it to 
	    // uppercase to make the comparision easier.
	    userMove = Console.in.readLine();
	    userMove = userMove.toUpperCase();
	}

	return userMove;
    }

    ** 
     * Pick the computer's move at random.
     * 
     * @return The computer's move as one of:
     *         Rock, Paper, Scissors
     *
    public static function getComputerMove() {
		$compMoveInt; // int
		$compMove; //string

		// Generate a random move for the 
		// computer.
		$compMoveInt = self::randomInt(1,3);

		// Convert the random integer into a 
		// string that represents the computer's
		// move.
		if ($compMoveInt == 1) {
		    $compMove = "ROCK";
		}
		else if (compMoveInt == 2) {
		    $compMove = "PAPER";
		}
		else {
		    $compMove = "SCISSORS";
		}

		return $compMove;
    }

    **
     * Generate a random integer in the range [lowEnd...highEnd].
     *
     * @param lowEnd the low end of the range of possible numbers.
     * @param highEnd the high end of the range of possible numbers.
     * @return a random integer in [lowEnd...highEnd]
     *
    public static function randomInt($lowEnd, $highEnd) {
    	$theNum = null; //int

        // Pick a random double in the range [0...highEnd-lowEnd+1)
        // then truncate it to an integer and shift it up by lowEnd.
        $theNum = ( rand() * ($highEnd - $lowEnd + 1) ) + $lowEnd;

        return (int)$theNum;
    }

    **
     * Compare the user's move to the computer's
     * move to determine the winner of this round.
     *
     * @param userMove the user's move.
     * @param compMove the computer's move.
     * @return  1 if the computer wins.
     *          0 if it is a tie.
     *         -1 if the user wins.
     *
    public static function determineRoundWinner(String userMove,
				    String compMove) 
    {
		$winner = null; //int

		// Check for ties.
		if (compMove.equals(userMove)) {
		    $winner = 0;
		}
		
		// if it is not a tie check for all the ways the
		// computer can win.
		// Rock smashes scissors...
		else if ($compMove==("ROCK") && 
			 $userMove==("SCISSORS")) {
		    $winner = 1;
		}
		// Paper covers rock...
		else if ($compMove==("PAPER") &&
			 $userMove==("ROCK")) {
		    $winner = 1;
		}
		// Scissors cut paper...
		else if ($compMove==("SCISSORS") &&
			 $userMove==("PAPER")) {
		    $winner = 1;
		}
		// Its not a tie and the computer did not
		// win so the user must have won!
		else {
		    $winner = -1;
		}

		return $winner;
    }

   **
     * Display a message showing the score of the game
     * and declaring the winner.
     *
     * @param userScore the user's score for the 10 rounds.
     * @param compScore the computer's score for the 10 rounds.
     *
    public static function displayGameWinner($userScore, $compScore) {

		echo("\n\nFinal Score:");
		echo("       User=" + userScore + 
				   "   Computer=" + compScore);
		echo PHP_EOL;

		if (userScore > compScore) {
		    echo("The user wins!");
		}
		else if (compScore > userScore) {
		    echo("The computer wins!");
		}
		else {
		    echo("Its a tie, nobody wins.");
		}
    }
} 

*/
