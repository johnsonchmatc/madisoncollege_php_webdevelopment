#Lab 4
###Due Date: 09/28/2015

##Directions:
1. Open a terminal location at your ```php_course_work``` folder 
  ![](https://dl.dropboxusercontent.com/s/wn8dg3eq099dno7/2015-09-02%20at%207.42%20AM.png?dl=0)
1. Checkout the master brach with git using the command: ```$ git checkout master```
1. Your terminal should have the following text ```workspace/php_course_work (master)```
  ![](https://dl.dropboxusercontent.com/s/pbafbzkizoq2981/2015-09-02%20at%207.51%20AM.png?dl=0)
1. Now make sure you have all the code from github on your local branch using 
  ```$ git fetch``` and then  ```$ git pull origin master```
    * If you get a screen that has a message about merging master into master
      and there are some keyboard shortcuts at the bottom IE "^x, ^o" it is an
      interactive commit message, press the control key and "o" to save the
      message, then control and "x" to exit.
1. Create a folder called ```lab_4``` in your ```php_course_work``` folder 
1. Create a branch called ```lab_4``` in your repository 
1. Follow Chapter 4 from the book and complete all of the test drives 
adding the code to your ```lab_4``` folder. Including any SQL into a lab4.sql file.
1. Add and commit the files along your way. 
    * Use ```$ git status``` to see what files need to be added or commited
    * If you have untracked files you want git to track use 
      ```$ git add <<<insert file name>>>```
    * If you have staged or unstaged files after running the ```$ git status``` 
      command you can commit them with 
      ```$ git commit -am "<<<insert your commit message here>>>"```
1. Remember to push frequently to github as a backup using the following command: 
  ```$ git push origin lab_4```


##Turn in instructions
* Go to the github ui for your respository, create a merge request for your 
```lab_4``` branch and ```master``` then assign it to the instructor (johnsonch) 
* Then go to blackboard and submit your github username and the number of the 
merge request, or show the mergre request to your instructor.
