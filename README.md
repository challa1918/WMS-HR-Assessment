# WMS-HR-Assessment
**Task 1:**
$quarter = [ ['start' => '12-01', 'ends' => '02-28'],
        ['start' => '03-01', 'ends' => '05-31'], 
        ['start' => '06-01', 'ends' => '08-31'], 
        ['start' => '09-01', 'ends' => '11-31']]; 
Every month belongs to one quarter. Kindly develop the function to find out which given month belongs to which quarter.

Solution Description:
I gave two solutions for this problem one for static input of quarters and the other is for dynamic input of quarters which are specified in get_Quarter_Static.php and get_Quarter_Dynamic.php respectively.
Task1.php file accepts the input and sends it another file to get the solution.

**Task 2:**
  echo "<a href='comment-delete?id=1' class='red-text'>Delete</a>";
  Kindly include an onclick confirmation alert in the above button.
  
 Solution Description:
 This task can be completed by using confirm() dialog box.
 
** Task 3:**
 Write an SQL query to find out the given string/ keywords match in the content column in the
post table and sort the highly matched content column in the top order. Ex: If the given
string is “SBI Loan”. The matches could be SBI Loan, SBI, Loan, in the relevance order.

Solution Description:
The main concept which is used to solve this task is FULLTEXT search which is implemented using MATCH() and Against() operators.
There are a total of three filles in the solution each of them does following tasks:
1.Task3.php - Takes pattern as input from the user.
2.connect.php - Used to connect to database.
3.query.php - This file evaluates the given input and displays the result.
