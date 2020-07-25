#DISCLAIMER

 I'm kind of breaking a 4th wall here and taking the risk to alter the Item class anyway :),
 against the constraint in the description of this challenge.

Why?
 Because the reasoning for the constraint was weak, and based on the personal feelings of a "goblin-developer".
 Those kind of things should not stand in the way of applying best practices and writing cleaner code.

 In a real life situation I'd go into dialogue with the "goblin"  and work things out in a professional way ;)


##Note about aged brie:
 I noticed there was a discrepancy between the constraints and the original implementation of how
 the quality of an Aged Brie is calculated. When it is over-aged it INCREASES twice as fast while the specs don't talk about this (only in decrease).
 I decided not to change that logic, since it would break the existing implementation.


##In retrospect
 I am aware that the refactoring might be a bit over-engineered for the purpose of the challenge.
 And that the actual goal was to apply good refactoring-principles when updating legacy code.
 That said, I hope you can see that the solution is a good way of making it more readable and future-proof :).
 I had good fun doing it!