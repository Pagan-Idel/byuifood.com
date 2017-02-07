import java.util.Random;
import java.util.Scanner;

public class TicTacToe {

	// Name-constants to represent the seeds and cell contents
	public static final int EMPTY = 0;
	public static final int CROSS = 1;
	public static final int NOUGHT = 2;

	// Name-constants to represent the various states of the game
	public static final int PLAYING = 0;
	public static final int DRAW = 1;
	public static final int CROSS_WON = 2;
	public static final int NOUGHT_WON = 3;

	// The game board and the game status
	public static final int ROWS = 3, COLS = 3; // number of rows and columns
	public static int[][] board = new int[ROWS][COLS]; // game board in 2D array
	// containing (EMPTY,
	// CROSS, NOUGHT)
	public static int currentState; // the current state of the game
	// (PLAYING, DRAW, CROSS_WON, NOUGHT_WON)
	public static int currentPlayer; // the current player (CROSS or NOUGHT)
	public static int startingPlayer;
	public static int currntRow, currentCol; // current seed's row and column

	public static Scanner in = new Scanner(System.in); // the input Scanner

	/** The entry main method (the program starts here) */
	public static void main(String[] args) {
		// Initialize the game-board and current status

		int choice = 0;

		do {
			int level = levelSelect();

			initGame();
			// Play the game once
			Random ran = new Random();
			startingPlayer = ran.nextInt(2) + 1;

			if (level == 1){
				do {
					playerMoveEasy(currentPlayer); // update currentRow and currentCol
					updateGame(currentPlayer, currntRow, currentCol); // update
					// currentState
					printBoard();
					// Print message if game-over
					if (currentState == CROSS_WON) {
						System.out.println("'X' won!!");
					} else if (currentState == NOUGHT_WON) {
						System.out.println("'O' won!!");
					} else if (currentState == DRAW) {
						System.out.println("It's a Draw!!");
					}
					// Switch player
					currentPlayer = (currentPlayer == CROSS) ? NOUGHT : CROSS;
				} while (currentState == PLAYING); // repeat if not game-over
			}else if (level == 2){
				do {
					playerMoveMedium(currentPlayer); // update currentRow and currentCol
					updateGame(currentPlayer, currntRow, currentCol); // update
					// currentState
					printBoard();
					// Print message if game-over
					if (currentState == CROSS_WON) {
						System.out.println("'X' won! Bye!");
					} else if (currentState == NOUGHT_WON) {
						System.out.println("'O' won! Bye!");
					} else if (currentState == DRAW) {
						System.out.println("It's a Draw! Bye!");
					}
					// Switch player
					currentPlayer = (currentPlayer == CROSS) ? NOUGHT : CROSS;
				} while (currentState == PLAYING); // repeat if not game-over

			} else if (level == 3){
				do {
					startingPlayer = 1;
					playerMoveHard(currentPlayer); // update currentRow and currentCol
					updateGame(currentPlayer, currntRow, currentCol); // update
					// currentState
					printBoard();
					// Print message if game-over
					if (currentState == CROSS_WON) {
						System.out.println("'X' won! Bye!");
					} else if (currentState == NOUGHT_WON) {
						System.out.println("'O' won! Bye!");
					} else if (currentState == DRAW) {
						System.out.println("It's a Draw! Bye!");
					}
					// Switch player
					currentPlayer = (currentPlayer == CROSS) ? NOUGHT : CROSS;
				} while (currentState == PLAYING); // repeat if not game-over
			}else if (level == 4 || choice == 2){
				quit();
			}
			System.out.println("Do you want to play again? Enter 1 for yes or 2 for no!");
			choice = in.nextInt();
		}while(choice == 1);
	}

	public static int levelSelect(){
		int level;
		System.out.println("Welcome to Tic Tac Toe, please select the dificulty level:\n"
				+ "1. Easy\n"
				+ "2. Medium\n"
				+ "3. Hard\n"
				+ "4. Quit\n");
		level = in.nextInt(); 
		return level;

	}
	/** Initialize the game-board contents and the current states */
	public static void initGame() {


		for (int row = 0; row < ROWS; ++row) {
			for (int col = 0; col < COLS; ++col) {
				board[row][col] = EMPTY; // all cells empty
			}
		}
		currentState = PLAYING; // ready to play
		currentPlayer = CROSS; // cross plays first
	}

	/**
	 * Player with the "theSeed" makes one move, with input validation. Update
	 * global variables "currentRow" and "currentCol".
	 */
	public static void playerMoveEasy(int theSeed) {
		boolean validInput = false;  // for input validation

		if (startingPlayer == 1) {
			do {
				if (theSeed == CROSS) {
					System.out.print("User enter your move (row[1-3] column[1-3]): 1easy");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}

				} else {
					System.out.print("Computer's turn (press enter) 2easy");
					int result[] = easy();
					int row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		} else if (startingPlayer == 2){
			do {
				if (theSeed == CROSS) {
					System.out.print("Computer's turn (press enter) 3easy\n");
					int result[] = easy();

					int row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					}

				} else {
					System.out.print("User enter your move (row[1-3] column[1-3]): 4easy");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;

						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		}


	}
	public static void playerMoveMedium(int theSeed) {
		boolean validInput = false;  // for input validation



		if (startingPlayer == 1) {
			do {
				if (theSeed == CROSS) {
					System.out.print("User enter your move (row[1-3] column[1-3]): 1medium");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;

					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content

						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}

				} else {
					System.out.print("Computer's turn (press enter) 2medium \n");

					int result[] = medium();

					int  row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					System.out.println("omputer played [row,col]: " + row + "," + col + "\n");
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		} else if (startingPlayer == 2){
			do {
				if (theSeed == CROSS) {
					System.out.print("Computer's turn (press enter) 3medium\n");
					int result[] = medium();
					int row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					System.out.println("Computer played [row,col]: " + row + "," + col + "\n");
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					}

				} else {
					System.out.print("User enter your move (row[1-3] column[1-3]): 4medium \n");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content);
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		}


	}
	public static void playerMoveHard(int theSeed) {
		boolean validInput = false;  // for input validation



		if (startingPlayer == 1) {
			do {
				if (theSeed == CROSS) {
					System.out.print("User enter your move (row[1-3] column[1-3]): 1hard \n");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;

					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}

				} else {
					System.out.print("Computer's turn (press enter) 2hard\n");
					int result[] = hard();
					int row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					System.out.println("Computer played [row,col]: " + row + "," + col + "\n");
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;
						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		} else if (startingPlayer == 2){
			do {
				if (theSeed == CROSS) {
					System.out.print("Computer's turn (press enter) 3hard\n");
					int result[] = hard();

					int row = result[0] - 1;  // array index starts at 0 instead of 1
					int col = result[1] - 1;
					System.out.println("Computer played [row,col]: " + row + "," + col + "\n");
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;

						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					}

				} else {
					System.out.print("User enter your move (row[1-3] column[1-3]): 4hard\n");
					int row = in.nextInt() - 1;  // array index starts at 0 instead of 1
					int col = in.nextInt() - 1;
					if (row >= 0 && row < ROWS && col >= 0 && col < COLS && board[row][col] == EMPTY) {
						currntRow = row;
						currentCol = col;

						board[currntRow][currentCol] = theSeed;  // update game-board content
						validInput = true;  // input okay, exit loop
					} else {
						System.out.println("Invalid move, try again...");
					}
				}

			} while (!validInput);  // repeat until input is valid
		}


	}
	/**
	 * Update the "currentState" after the player with "theSeed" has placed on
	 * (currentRow, currentCol).
	 */
	public static void updateGame(int theSeed, int currentRow, int currentCol) {
		if (hasWon(theSeed, currentRow, currentCol)) { // check if winning move
			currentState = (theSeed == CROSS) ? CROSS_WON : NOUGHT_WON;
		} else if (isDraw()) { // check for draw
			currentState = DRAW;
		}
		// Otherwise, no change to currentState (still PLAYING).
	}

	/** Return true if it is a draw (no more empty cell) */
	// TODO: Shall declare draw if no player can "possibly" win
	public static boolean isDraw() {
		for (int row = 0; row < ROWS; ++row) {
			for (int col = 0; col < COLS; ++col) {
				if (board[row][col] == EMPTY) {
					return false; // an empty cell found, not draw, exit
				}
			}
		}
		return true; // no empty cell, it's a draw
	}

	/**
	 * Return true if the player with "theSeed" has won after placing at
	 * (currentRow, currentCol)
	 */
	public static boolean hasWon(int theSeed, int currentRow, int currentCol) {
		return (board[currentRow][0] == theSeed // 3-in-the-row
				&& board[currentRow][1] == theSeed
				&& board[currentRow][2] == theSeed
				|| board[0][currentCol] == theSeed // 3-in-the-column
				&& board[1][currentCol] == theSeed
				&& board[2][currentCol] == theSeed
				|| currentRow == currentCol // 3-in-the-diagonal
				&& board[0][0] == theSeed
				&& board[1][1] == theSeed
				&& board[2][2] == theSeed || currentRow + currentCol == 2 // 3-in-the-opposite-diagonal
				&& board[0][2] == theSeed
				&& board[1][1] == theSeed
				&& board[2][0] == theSeed);
	}

	/** Print the game board */
	public static void printBoard() {
		for (int row = 0; row < ROWS; ++row) {
			for (int col = 0; col < COLS; ++col) {
				printCell(board[row][col]); // print each of the cells
				if (col != COLS - 1) {
					System.out.print("|"); // print vertical partition
				}
			}
			System.out.println();
			if (row != ROWS - 1) {
				System.out.println("-----------"); // print horizontal partition
			}
		}
		System.out.println();
	}

	/** Print a cell with the specified "content" */
	public static void printCell(int content) {
		switch (content) {
		case EMPTY:
			System.out.print("   ");
			break;
		case NOUGHT:
			System.out.print(" O ");
			break;
		case CROSS:
			System.out.print(" X ");
			break;
		}
	}
	public static void quit(){
		System.out.println("Thanks for playing! Bye!");
		System.exit(1);
	}

	public static int[] easy(){
		int row;
		int col;

		Random ran = new Random();
		row = ran.nextInt(3) + 1;
		col = ran.nextInt(3) + 1;

		return new int[]{row,col};

	}
	public static int[] medium(){
		System.out.println("StartingPlayer is " + startingPlayer + "!!!!!!!!!!!!");
		if (startingPlayer == 2){
			// winning if row = 1 - 3 and col = 3
			if((board[0][2] == EMPTY) && ((board[0][0] == CROSS && board[0][1] == CROSS) || (board[1][2] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[2][0] == CROSS))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == CROSS && board[1][1] == CROSS) || (board[0][2] == CROSS && board[2][2] == CROSS))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == CROSS && board[2][1] == CROSS) || (board[0][2] == CROSS && board[1][2] == CROSS) || (board[1][1] == CROSS && board[0][0] == CROSS))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == CROSS && board[2][2] == CROSS) || (board[0][2] == CROSS && board[2][0] == CROSS) || (board[1][0] == CROSS && board[1][2] == CROSS) || (board[0][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[0][1] == CROSS))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][2] == CROSS)|| (board[1][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == CROSS && board[1][2] == CROSS) || (board[0][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == CROSS && board[2][2] == CROSS) || (board[1][0] == CROSS && board[0][0] == CROSS) || (board[1][1] == CROSS && board[0][2] == CROSS))){
				return new int[]{3,1};
			}else if((board[0][2] == EMPTY) && ((board[0][0] == NOUGHT && board[0][1] == NOUGHT) || (board[1][2] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][0] == NOUGHT))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == NOUGHT && board[1][1] == NOUGHT) || (board[0][2] == NOUGHT && board[2][2] == NOUGHT))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == NOUGHT && board[2][1] == NOUGHT) || (board[0][2] == NOUGHT && board[1][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][0] == NOUGHT))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == NOUGHT && board[2][2] == NOUGHT) || (board[0][2] == NOUGHT && board[2][0] == NOUGHT) || (board[1][0] == NOUGHT && board[1][2] == NOUGHT) || (board[0][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][1] == NOUGHT))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][2] == NOUGHT)|| (board[1][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == NOUGHT && board[1][2] == NOUGHT) || (board[0][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == NOUGHT && board[2][2] == NOUGHT) || (board[1][0] == NOUGHT && board[0][0] == NOUGHT) || (board[1][1] == NOUGHT && board[0][2] == NOUGHT))){
				return new int[]{3,1};
				// winning if row = 1 and col = 1-3
			}
		}else if (startingPlayer == 1){
			// winning if row = 1 - 3 and col = 3
			if((board[0][2] == EMPTY) && ((board[0][0] == NOUGHT && board[0][1] == NOUGHT) || (board[1][2] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][0] == NOUGHT))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == NOUGHT && board[1][1] == NOUGHT) || (board[0][2] == NOUGHT && board[2][2] == NOUGHT))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == NOUGHT && board[2][1] == NOUGHT) || (board[0][2] == NOUGHT && board[1][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][0] == NOUGHT))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == NOUGHT && board[2][2] == NOUGHT) || (board[0][2] == NOUGHT && board[2][0] == NOUGHT) || (board[1][0] == NOUGHT && board[1][2] == NOUGHT) || (board[0][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][1] == NOUGHT))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][2] == NOUGHT)|| (board[1][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == NOUGHT && board[1][2] == NOUGHT) || (board[0][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == NOUGHT && board[2][2] == NOUGHT) || (board[1][0] == NOUGHT && board[0][0] == NOUGHT) || (board[1][1] == NOUGHT && board[0][2] == NOUGHT))){
				return new int[]{3,1};
				// winning if row = 1 and col = 1-3
			} else if((board[0][2] == EMPTY) && ((board[0][0] == CROSS && board[0][1] == CROSS) || (board[1][2] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[2][0] == CROSS))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == CROSS && board[1][1] == CROSS) || (board[0][2] == CROSS && board[2][2] == CROSS))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == CROSS && board[2][1] == CROSS) || (board[0][2] == CROSS && board[1][2] == CROSS) || (board[1][1] == CROSS && board[0][0] == CROSS))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == CROSS && board[2][2] == CROSS) || (board[0][2] == CROSS && board[2][0] == CROSS) || (board[1][0] == CROSS && board[1][2] == CROSS) || (board[0][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[0][1] == CROSS))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][2] == CROSS)|| (board[1][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == CROSS && board[1][2] == CROSS) || (board[0][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == CROSS && board[2][2] == CROSS) || (board[1][0] == CROSS && board[0][0] == CROSS) || (board[1][1] == CROSS && board[0][2] == CROSS))){
				return new int[]{3,1};
				// winning if row = 1 and col = 1-3
			}
		}
		int row;
		int col;

		Random ran = new Random();
		row = ran.nextInt(3) + 1;
		col = ran.nextInt(3) + 1;
		System.out.println("random");
		return new int[]{row,col};		

	}
	public static int[] hard(){
		
		// WE NEED IDEL'S CASE HERE SIMILAR TO AMBERS BUT COMPUTER STARTING

		System.out.println("StartingPlayer is " + startingPlayer + "!!!!!!!!!!!!");
		if (startingPlayer == 2){
			
			// winning if row = 1 - 3 and col = 3
						if(board[1][1] == EMPTY){		
							return new int[]{2,2};
						}else if ((!(board[1][1] == EMPTY)) && board[0][0] == EMPTY && board[0][1] == EMPTY && board[0][2] == EMPTY && board[1][0] == EMPTY && board[1][2] == EMPTY && board[2][0] == EMPTY && board[2][1] == EMPTY && board[2][2] == EMPTY){ 
							int row;
							int col;
							do{
								Random ran = new Random();
								row = ran.nextInt(3) + 1;
								col = ran.nextInt(3) + 1;
							}while ((row == 2 && col == 2) || (row == 2) || (col == 2));
							return new int[]{row,col};
						}else if(((board[1][1] == NOUGHT) && (board[0][2] == NOUGHT) && (board[2][0] == CROSS) 
								&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
								&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY)) 
								|| ((board[0][0] == NOUGHT) && (board[1][1] == NOUGHT) && (board[2][2] == CROSS) 
										&& (board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) 
										&& (board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))  
								|| ((board[1][1] == NOUGHT) && (board[2][2] == NOUGHT) && (board[0][0] == CROSS) && 
										(board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) && 
										(board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY)) || 
								((board[2][0] == NOUGHT) && (board[1][1] == NOUGHT) && (board[0][2] == CROSS)
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY)
										&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY))){
							int row;
							int col;
							do{

								Random ran = new Random();
								row = ran.nextInt(3) + 1;
								col = ran.nextInt(3) + 1;
							}while ((row == 2 && col == 2) || (row == 2) || (col == 2));
							return new int[]{row,col};
						}else if(((board[0][0] == NOUGHT) && (board[2][2] == NOUGHT) && (board[1][1] == CROSS) 
								&& (board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) 
								&& (board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY)) 
								|| ((board[0][2] == NOUGHT) && (board[2][0] == NOUGHT) && (board[1][1] == CROSS)
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
										&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY))){

							
							Random ran = new Random();
							int pick = ran.nextInt(4) + 1;
							if (pick == 1){
								return new int[]{1,2};
							}else if (pick == 2){
								return new int[]{2,1};
							}else if (pick == 3){
								return new int[]{2,3};
							}else if (pick == 4){
								return new int[]{3,2};
							}
							
							
							// amber's case
							
							
						}else if (((board[0][1] == NOUGHT) && (board[2][0] == NOUGHT) && (board[1][1] == CROSS) 
								&& (board[0][0] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
								&& (board[1][2] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{1,3};
							
						}else if (((board[0][1] == NOUGHT) && (board[2][2] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][0] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
										&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))){
							
							return new int[]{1,1};
							
						}else if(((board[0][0] == NOUGHT) && (board[1][2] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][1] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
										&& (board[2][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{3,3};
							
						}else if (((board[1][2] == NOUGHT) && (board[2][0] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[0][2] == EMPTY) 
										&& (board[1][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{1,3};
							
						}else if (((board[0][0] == NOUGHT) && (board[2][1] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][1] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
										&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{3,3};
							
						}else if (((board[0][2] == NOUGHT) && (board[2][1] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
										&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{3,1};
							
						}else if (((board[0][2] == NOUGHT) && (board[1][0] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][2] == EMPTY) 
										&& (board[2][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
							
							return new int[]{3,1};
							
						}else if (((board[1][0] == NOUGHT) && (board[2][2] == NOUGHT) && (board[1][1] == CROSS) 
										&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[0][2] == EMPTY) 
										&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))){
							
							return new int[]{1,1};
							
				
							
							

			// W,B,R
						}else if((board[0][2] == EMPTY) && ((board[0][0] == CROSS && board[0][1] == CROSS) || (board[1][2] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[2][0] == CROSS))){		
							return new int[]{1,3};
						}else if ((board[1][2] == EMPTY) && ((board[1][0] == CROSS && board[1][1] == CROSS) || (board[0][2] == CROSS && board[2][2] == CROSS))) { 
							return new int[]{2,3};
						}else if ((board[2][2] == EMPTY) && ((board[2][0] == CROSS && board[2][1] == CROSS) || (board[0][2] == CROSS && board[1][2] == CROSS) || (board[1][1] == CROSS && board[0][0] == CROSS))){
							return new int[]{3,3};
							// winning if row = 1 - 3 and col = 2
						}else if ((board[0][1] == EMPTY) && ((board[0][0] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][1] == CROSS))){
							return new int[]{1,2};
						}else if ((board[1][1] == EMPTY) && ((board[0][0] == CROSS && board[2][2] == CROSS) || (board[0][2] == CROSS && board[2][0] == CROSS) || (board[1][0] == CROSS && board[1][2] == CROSS) || (board[0][1] == CROSS && board[2][1] == CROSS))){
							return new int[]{2,2};
						}else if ((board[2][1] == EMPTY) && ((board[2][0] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[0][1] == CROSS))){
							return new int[]{3,2};
							// winning if row = 1 - 3 and col = 1
						}else if ((board[0][0] == EMPTY) && ((board[0][1] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][2] == CROSS)|| (board[1][0] == CROSS && board[2][0] == CROSS))){
							return new int[]{1,1};
						}else if ((board[1][0] == EMPTY) && ((board[1][1] == CROSS && board[1][2] == CROSS) || (board[0][0] == CROSS && board[2][0] == CROSS))){
							return new int[]{2,1};
						}else if ((board[2][0] == EMPTY) && ((board[2][1] == CROSS && board[2][2] == CROSS) || (board[1][0] == CROSS && board[0][0] == CROSS) || (board[1][1] == CROSS && board[0][2] == CROSS))){
							return new int[]{3,1};
							// winning if row = 1 and col = 1-3
						} else if((board[0][2] == EMPTY) && ((board[0][0] == NOUGHT && board[0][1] == NOUGHT) || (board[1][2] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][0] == NOUGHT))){		
							return new int[]{1,3};
						}else if ((board[1][2] == EMPTY) && ((board[1][0] == NOUGHT && board[1][1] == NOUGHT) || (board[0][2] == NOUGHT && board[2][2] == NOUGHT))) { 
							return new int[]{2,3};
						}else if ((board[2][2] == EMPTY) && ((board[2][0] == NOUGHT && board[2][1] == NOUGHT) || (board[0][2] == NOUGHT && board[1][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][0] == NOUGHT))){
							return new int[]{3,3};
							// winning if row = 1 - 3 and col = 2
						}else if ((board[0][1] == EMPTY) && ((board[0][0] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][1] == NOUGHT))){
							return new int[]{1,2};
						}else if ((board[1][1] == EMPTY) && ((board[0][0] == NOUGHT && board[2][2] == NOUGHT) || (board[0][2] == NOUGHT && board[2][0] == NOUGHT) || (board[1][0] == NOUGHT && board[1][2] == NOUGHT) || (board[0][1] == NOUGHT && board[2][1] == NOUGHT))){
							return new int[]{2,2};
						}else if ((board[2][1] == EMPTY) && ((board[2][0] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][1] == NOUGHT))){
							return new int[]{3,2};
							// winning if row = 1 - 3 and col = 1
						}else if ((board[0][0] == EMPTY) && ((board[0][1] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][2] == NOUGHT)|| (board[1][0] == NOUGHT && board[2][0] == NOUGHT))){
							return new int[]{1,1};
						}else if ((board[1][0] == EMPTY) && ((board[1][1] == NOUGHT && board[1][2] == NOUGHT) || (board[0][0] == NOUGHT && board[2][0] == NOUGHT))){
							return new int[]{2,1};
						}else if ((board[2][0] == EMPTY) && ((board[2][1] == NOUGHT && board[2][2] == NOUGHT) || (board[1][0] == NOUGHT && board[0][0] == NOUGHT) || (board[1][1] == NOUGHT && board[0][2] == CROSS))){
							return new int[]{3,1};
							// winning if row = 1 and col = 1-3
						}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

		}else if (startingPlayer == 1){
			// winning if row = 1 - 3 and col = 3
			if(board[1][1] == EMPTY){		
				return new int[]{2,2};
			}else if ((!(board[1][1] == EMPTY)) && board[0][0] == EMPTY && board[0][1] == EMPTY && board[0][2] == EMPTY && board[1][0] == EMPTY && board[1][2] == EMPTY && board[2][0] == EMPTY && board[2][1] == EMPTY && board[2][2] == EMPTY){ 
				int row;
				int col;
				do{
					Random ran = new Random();
					row = ran.nextInt(3) + 1;
					col = ran.nextInt(3) + 1;
				}while ((row == 2 && col == 2) || (row == 2) || (col == 2));
				return new int[]{row,col};
			}else if(((board[1][1] == CROSS) && (board[0][2] == CROSS) && (board[2][0] == NOUGHT) 
					&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
					&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY)) 
					|| ((board[0][0] == CROSS) && (board[1][1] == CROSS) && (board[2][2] == NOUGHT) 
							&& (board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) 
							&& (board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))  
					|| ((board[1][1] == CROSS) && (board[2][2] == CROSS) && (board[0][0] == NOUGHT) && 
							(board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) && 
							(board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY)) || 
					((board[2][0] == CROSS) && (board[1][1] == CROSS) && (board[0][2] == NOUGHT)
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY)
							&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY))){
				int row;
				int col;
				do{

					Random ran = new Random();
					row = ran.nextInt(3) + 1;
					col = ran.nextInt(3) + 1;
				}while ((row == 2 && col == 2) || (row == 2) || (col == 2));
				return new int[]{row,col};
			}else if(((board[0][0] == CROSS) && (board[2][2] == CROSS) && (board[1][1] == NOUGHT) 
					&& (board[0][2] == EMPTY) && (board[1][2] == EMPTY) && (board[0][1] == EMPTY) 
					&& (board[1][0] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY)) 
					|| ((board[0][2] == CROSS) && (board[2][0] == CROSS) && (board[1][1] == NOUGHT)
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
							&& (board[1][2] == EMPTY) && (board[2][2] == EMPTY) && (board[2][1] == EMPTY))){

			
				Random ran = new Random();
				int pick = ran.nextInt(4) + 1;
				if (pick == 1){
					return new int[]{1,2};
				}else if (pick == 2){
					return new int[]{2,1};
				}else if (pick == 3){
					return new int[]{2,3};
				}else if (pick == 4){
					return new int[]{3,2};
				}
				
				
				// amber's case
				
				
			}else if (((board[0][1] == CROSS) && (board[2][0] == CROSS) && (board[1][1] == NOUGHT) 
					&& (board[0][0] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
					&& (board[1][2] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{1,3};
				
			}else if (((board[0][1] == CROSS) && (board[2][2] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][0] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
							&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))){
				
				return new int[]{1,1};
				
			}else if(((board[0][0] == CROSS) && (board[1][2] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][1] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
							&& (board[2][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{3,3};
				
			}else if (((board[1][2] == CROSS) && (board[2][0] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[0][2] == EMPTY) 
							&& (board[1][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{1,3};
				
			}else if (((board[0][0] == CROSS) && (board[2][1] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][1] == EMPTY) && (board[0][2] == EMPTY) && (board[1][0] == EMPTY) 
							&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{3,3};
				
			}else if (((board[0][2] == CROSS) && (board[2][1] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][0] == EMPTY) 
							&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{3,1};
				
			}else if (((board[0][2] == CROSS) && (board[1][0] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[1][2] == EMPTY) 
							&& (board[2][0] == EMPTY) && (board[2][1] == EMPTY) && (board[2][2] == EMPTY))){
				
				return new int[]{3,1};
				
			}else if (((board[1][0] == CROSS) && (board[2][2] == CROSS) && (board[1][1] == NOUGHT) 
							&& (board[0][0] == EMPTY) && (board[0][1] == EMPTY) && (board[0][2] == EMPTY) 
							&& (board[1][2] == EMPTY) && (board[2][0] == EMPTY) && (board[2][1] == EMPTY))){
				
				return new int[]{1,1};
				
	
				
				

// W,B,R
			}else if((board[0][2] == EMPTY) && ((board[0][0] == NOUGHT && board[0][1] == NOUGHT) || (board[1][2] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][0] == NOUGHT))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == NOUGHT && board[1][1] == NOUGHT) || (board[0][2] == NOUGHT && board[2][2] == NOUGHT))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == NOUGHT && board[2][1] == NOUGHT) || (board[0][2] == NOUGHT && board[1][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][0] == NOUGHT))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == NOUGHT && board[2][2] == NOUGHT) || (board[0][2] == NOUGHT && board[2][0] == NOUGHT) || (board[1][0] == NOUGHT && board[1][2] == NOUGHT) || (board[0][1] == NOUGHT && board[2][1] == NOUGHT))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == NOUGHT && board[2][2] == NOUGHT) || (board[1][1] == NOUGHT && board[0][1] == NOUGHT))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == NOUGHT && board[0][2] == NOUGHT) || (board[1][1] == NOUGHT && board[2][2] == NOUGHT)|| (board[1][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == NOUGHT && board[1][2] == NOUGHT) || (board[0][0] == NOUGHT && board[2][0] == NOUGHT))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == NOUGHT && board[2][2] == NOUGHT) || (board[1][0] == NOUGHT && board[0][0] == NOUGHT) || (board[1][1] == NOUGHT && board[0][2] == NOUGHT))){
				return new int[]{3,1};
				// winning if row = 1 and col = 1-3
			} else if((board[0][2] == EMPTY) && ((board[0][0] == CROSS && board[0][1] == CROSS) || (board[1][2] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[2][0] == CROSS))){		
				return new int[]{1,3};
			}else if ((board[1][2] == EMPTY) && ((board[1][0] == CROSS && board[1][1] == CROSS) || (board[0][2] == CROSS && board[2][2] == CROSS))) { 
				return new int[]{2,3};
			}else if ((board[2][2] == EMPTY) && ((board[2][0] == CROSS && board[2][1] == CROSS) || (board[0][2] == CROSS && board[1][2] == CROSS) || (board[1][1] == CROSS && board[0][0] == CROSS))){
				return new int[]{3,3};
				// winning if row = 1 - 3 and col = 2
			}else if ((board[0][1] == EMPTY) && ((board[0][0] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{1,2};
			}else if ((board[1][1] == EMPTY) && ((board[0][0] == CROSS && board[2][2] == CROSS) || (board[0][2] == CROSS && board[2][0] == CROSS) || (board[1][0] == CROSS && board[1][2] == CROSS) || (board[0][1] == CROSS && board[2][1] == CROSS))){
				return new int[]{2,2};
			}else if ((board[2][1] == EMPTY) && ((board[2][0] == CROSS && board[2][2] == CROSS) || (board[1][1] == CROSS && board[0][1] == CROSS))){
				return new int[]{3,2};
				// winning if row = 1 - 3 and col = 1
			}else if ((board[0][0] == EMPTY) && ((board[0][1] == CROSS && board[0][2] == CROSS) || (board[1][1] == CROSS && board[2][2] == CROSS)|| (board[1][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{1,1};
			}else if ((board[1][0] == EMPTY) && ((board[1][1] == CROSS && board[1][2] == CROSS) || (board[0][0] == CROSS && board[2][0] == CROSS))){
				return new int[]{2,1};
			}else if ((board[2][0] == EMPTY) && ((board[2][1] == CROSS && board[2][2] == CROSS) || (board[1][0] == CROSS && board[0][0] == CROSS) || (board[1][1] == CROSS && board[0][2] == CROSS))){
				return new int[]{3,1};
				// winning if row = 1 and col = 1-3
			}
		}

		int row;
		int col;

		Random ran = new Random();
		row = ran.nextInt(3) + 1;
		col = ran.nextInt(3) + 1;
		System.out.println("random");
		return new int[]{row,col};	
	}


}
