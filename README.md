# AD320_Assignment4
Git Exercise for AD320

For this assignment, please complete the following tasks:
- Clone this repository to your local machine with
- - `git clone https://github.com/BobMcHenry/AD320_Assignment4_THURS`
- Create a new branch from master, use your name as the branchname
- - `git checkout -b <firstname-lastname>`
- Create a new file called `<firstName-lastName>.php`
- In your new file, use the data from `testData.php`(Do not copy the data into your file, use a require method to include the file and call the method get2dArray()) and create a foreach loop that prints out the contents of the 2d array. 
- - Each inner array should be printed inside it's own div element. 
- - The Key for the inner array value should be printed as an H3 heading element.
- - The individual values inside the inner arrays should be printed as an unordered list `<ul>`).
- For example:
><div><h3>Key</h3><ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></div> 

- Once completed, push your branch
`git push --set-upstream origin <your-branch-name>`

- In github, create a pull request with master as the base branch and your branch as the compare branch. 
  
From there, I will review the code and merge the branch into master. 
NOTE: I will delete your branch after I merge to master. So if you want to make any other changes after merge, you'll need to make a new branch. 
