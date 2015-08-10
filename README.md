## Authors: Ian McKenney, Mike Chastain

## TitleCase app using PHPunit


## Spec

1. If given a single word, it should capitalize the word and return it.

Input: topology  
Output:  Topology

2. If given a multiple word string it should capitalize every word in that string.

Input: the product topology is useful
Output: The Product Topology Is Useful

3. If given a string, it will capitalize all words except words the user designates for it not to.

Input: the product topology is a topology
Output: The Product Topology Is a Topology

4. If given a string it will only capitalize  the first word IF that word is designated by the user.

Input: from sea to shining sea
Output: From Sea to Shining Sea

5. if given a string it will not error if given a non-letter character

Input: 45 ways to hit a baseball
Output: 45 Ways to Hit a Baseball

6. if given a completely uppercase string it will correctly capitalize the string.

Input: AHHH WE'RE YELLING
Output: Ahhh We're Yelling

7. if given a string of mixed case characters it will correctly capitalize the string.

Input: wHo tYpES LIke THIs?
Output: Who Types Like This?

8. If given a string of unique case entries, it will correctly capitalize the string.

Input: My last name is mckenney
Output: My Last Name is McKenney
