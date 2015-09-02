#Lab 2
###Due Date: 09/14/2015

**Please read all lab directions before starting**

##Directions:
* Open a terminal location at your ```php_course_work``` folder ![](https://dl.dropboxusercontent.com/s/wn8dg3eq099dno7/2015-09-02%20at%207.42%20AM.png?dl=0)
* Checkout the master brach with git using the command: ```$ git checkout master```
* Your terminal should have the following text ```workspace/php_course_work (master)```
  ![](https://dl.dropboxusercontent.com/s/pbafbzkizoq2981/2015-09-02%20at%207.51%20AM.png?dl=0)
  
* Create a branch called ```lab_2``` in your repository using the command ```$ git checkout -b lab_2```
* Create a folder called ```lab_2``` in your ```php_course_work``` folder 
* Follow Chapters 1 and 2 from the book and complete all of the test drives adding the code to your ```lab_2``` folder.
* Add and commit the files along your way, at least after completeting each test drive using the following sequece of commands:
* Verify you have changes with ```$ git status``` you should see something like the following:

```
On branch lab_2
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        lab_2/

nothing added to commit but untracked files present (use "git add" to track)
```
  * As the message says use ```$ git add <file>``` where file is the folder or files listed under the "Untracked files:" heading.
  * Verify you have changes with ```$ git status``` you should see something like the following:

```
On branch lab_2
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   lab_2/report.html
```

* Lastly commit your changes (take a snapshot of your code) using the following command: ```$ git commit -m "finished test drive on page XX"```

* Remember to push frequently to github as a backup using the command  ```$ git push origin lab_2```

##Notes
* Create a file called ```lab2.sql``` and add all of the SQL statements you create for
  chapter 2 to that file.
* If you would like to use PHP My Admin with Cloud9 installation directions are here:
  [https://docs.c9.io/docs/setting-up-phpmyadmin](https://docs.c9.io/docs/setting-up-phpmyadmin)

##Turn in instructions
* Go to the github ui for your repository, create a merge request for your 
```lab_2``` branch and ```master``` then assign it to the instructor (johnsonch) 
* Then go to blackboard and submit your github username and the number of the 
merge request, or show the mergre request to your instructor.
