#Lab 1
###Due Date: 08/31/2015

##Directions:
* Sign up for Github.com
* Complete the tutorial at [https://try.github.io](https://try.github.io)
* Create a new a private Github repository called ```php_course_work``` using the Github.com user interface.
> If your account isn't education authorized  you can create a public repository to start.
* Add your instructor (johnsonch) as a contributor to your repository. 
> See [https://github.com/johnsonchmatc/madisoncollege_php_webdevelopment/blob/master/Units/week01/adding_a_private_git_repository.md](https://github.com/johnsonchmatc/madisoncollege_php_webdevelopment/blob/master/Units/week01/adding_a_private_git_repository.md) for more details
* Follow directions on github about setting up your repository
![](https://dl.dropboxusercontent.com/s/szty2q2ff390wo6/2015-09-02%20at%203.29%20PM.png?dl=0)
* Create a branch called ```lab_1``` in your repository using the command ```$ git checkout -b lab_1```
* Create a folder called ```lab_1``` in your ```php_course_work``` folder 
* In your development environment add a file called ```assignment.md``` inside of the ```lab_1``` directory.
* Answer the following questions in you ```assignment.md``` file
  * What is your Github.com username?
  * What development environment do you plan on using?
  * What is the instructor's policy on late assignments?
* Verify you have changes with ```$ git status``` you should see something like the following:

```
On branch lab_1
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        lab_1/

nothing added to commit but untracked files present (use "git add" to track)
```
  * As the message says use ```$ git add <file>``` where file is the folder or files listed under the "Untracked files:" heading.
  * Verify you have changes with ```$ git status``` you should see something like the following:

```
On branch lab_1
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   lab_1/assignment.md
```

* Lastly commit your changes (take a snapshot of your code) using the following command: ```$ git commit -m "finished lab 1"```

* After answer the questions, add the file to your git repository then commit and push the branch ```$ git push origin lab_1```


##Turn in instructions
* Go to the github ui for your respository, create a merge request for your 
```lab_1``` branch and ```master``` then assign it to the instructor (johnsonch) 
 Then go to blackboard and submit your github username and the number of the 
merge request, or show the mergre request to your instructor.
