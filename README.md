
# text-analysis-app
A full OOP mini-app for analysing strings and .txt files, created with Slim framework.

This is a text-analysis micro-app

**Observations**:
The code is written in PHP 5.3. The unit tests have been written for PHPUnit. It has been built using the Slim framework on the PHP Storm IDE, running Composer and autoloader.

**To install the application:**
1) clone or download github repository
2) run on local host:8080 using the command php -S localhost:8080
3) best viewed in Chrome
4) type string or url
5) view results
6) run unit tests with PhpUnit

**Assumptions in word boundaries:**
1) A word boundary is defined as a space or a full stop.
2) Sandard punctuation is be excluded from the word length count.
3) For simplicty, the forward slash was kept to count the full date format as one word.  

**Next steps:**

This is the MVP version, a quick proof of concept. 
With a bit more time, I would:
1) Refactor the code to PHP 7 and thoroughly type hint. 
2) Add full Doc Blocks
3) I did 3 unit tests, on class FindWordsAction, by way of illustration. With more time I would increase test coverage and write failure, malform and integration tests.
4) Refine the word find function to escape hyphens and count dates as whole words, eg: \d{1,4} times 3
5) Error handling
6) Add validation and sanitisation (probably through middleware) for files downloaded and protect against injection.
7) Media query to make it responsive
8) Add a bit of JavaScript magic to the design.
9) Browser stack test it to make it fully cross-browser supported
10) Add service workers for cache control, and maybe full PWA
