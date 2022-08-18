<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Aaron Patel(ap966)</td></tr>
<tr><td> <em>Generated: </em> 4/5/2022 9:10:56 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/ap966" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161868392-adc4b96a-79e8-499a-898f-0e2a3dd3993d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing invalid username error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161868468-5cba7e01-fbb4-4740-8348-7ed79d351c3e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username taken error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161868590-cad33c9a-9123-4393-a545-6228b456c0ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing registration success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161868986-c47e86db-5c9f-48f5-ad04-3fb1968f82e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the newly registered user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/17">https://github.com/AaronP05/IT202Spring/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>You click on Register and then you input data into 4 different fields.<br>If the username/email is taken, it will show an error. If the passwords<br>are not the same, it will show an error. It also shows an<br>friendly error message when the password length is incorrect.<br>We use the isset and<br>sanitize functions to register the user.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161870799-8953ac10-2aaa-4f53-bf02-54bed1471fdb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing I am attempting to login with username<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161869710-1b88c2d7-e3ae-4d87-a1e0-3162d337c8a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that my password was wrong<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871080-b7bafd96-777e-415c-b504-735fe4ecb173.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing I was able to successfully login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/18">https://github.com/AaronP05/IT202Spring/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>You can login using your username/email. If the username or password is incorrect<br>it will show a friendly error message.<br>We use the hasError function and validate<br>username, password and email in the login form.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871340-be6e86a6-fb38-43a5-92b0-e33e71c4f2d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871518-2a66fd3e-59a2-4535-a2fe-708f58173c94.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing I&#39;m logged out and can&#39;t view the page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/18">https://github.com/AaronP05/IT202Spring/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Error message is shown when trying to access the profile page<br>This is simple,<br>it calls on functions.php and takes you back to the login page once<br>you click on logout.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871518-2a66fd3e-59a2-4535-a2fe-708f58173c94.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing I&#39;m logged out and can&#39;t view the page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871790-f295f054-4023-4f57-bcb6-c123a4a5e30c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Can&#39;t access admin page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871920-b7809ca6-302d-4845-b063-7a60fcbdea68.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing admin role exists<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161872077-608cd151-3e94-42a4-8cf9-34b3915ec240.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user has the admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/31">https://github.com/AaronP05/IT202Spring/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>We run the sql query inside the SQL folder to create a roles<br>table, which gives each individual a certain role.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>If you try changing the url on your browser, it kills the process<br>and takes you back to the login page. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161871790-f295f054-4023-4f57-bcb6-c123a4a5e30c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing basic styles, nav and color<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/33">https://github.com/AaronP05/IT202Spring/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Added a navigation bar and on the top. Basic background color and text<br>boxes were added to make the styling look better.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161872957-b1a51e5a-de3b-45c4-87dc-7f56c7d40392.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user does not exist through friendly error messages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/20">https://github.com/AaronP05/IT202Spring/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>The messages are displayed in a very small text with simple colors at<br>the top of the page right under the nav bar.<br>The main aim to<br>make them user friendly was by not using any exclamation marks or bold<br>letters.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161873134-bbb2dbec-5174-4136-9765-b41b66bbf77c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing data loaded for logged in user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/21">https://github.com/AaronP05/IT202Spring/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>Users are able to see their profile and make changes to it. They<br>have the ability to change the password and username. That is only possible<br>if the password/username meet all the requirements.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161873379-80cb63a4-4307-4e28-8ef0-3a5e023f73c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username aaron99 is already taken. Profile username reverts back to aaron<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161873708-ab085048-ccbd-4024-8b99-18faaa7c80cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful edit username<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161873562-dc4927b2-5948-41b6-a7ff-21c30f08a4ec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before edit username<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161874054-7a301304-05f1-4040-a7c9-49c25f6d74bc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After edit username.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/21">https://github.com/AaronP05/IT202Spring/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Once you click on profile, the user&#39;s details are fetched from the database<br>which allow you to change the username/password. There is also a parameter for<br>username and passwords which does not let you select a password under 8<br>characters long and does not let you choose a username that is already<br>taken.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161874181-937fe0ad-68c3-4dea-9230-b5e1cdcd41f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a sample of completed items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161874435-f96ba1b3-fa0a-4bc6-b3f6-ab0d1008670f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing project board with issues completed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/161874461-b1f8b20f-816b-41f5-807c-73b645441440.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing project board with all issues completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone1-deliverable/grade/ap966" target="_blank">Grading</a></td></tr></table>