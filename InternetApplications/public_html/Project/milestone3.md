<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Aaron Patel(ap966)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 7:46:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/ap966" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181335-350102e7-6d8c-4723-9de0-238e4b8b4968.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user can transfer between accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181418-bd1e2015-d450-4295-be31-40f769d6492d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dropdown values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181500-cf6c1ceb-66d1-4f52-87a8-a2d3f09efabb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing error message when transfer more amount than their balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181500-cf6c1ceb-66d1-4f52-87a8-a2d3f09efabb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cant transfer to same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181708-34c4ba47-d619-48a3-abfc-840b3f08466a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing can&#39;t transfer negative amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168181878-c68d23de-186f-4433-bb37-d8567d6bcbf7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing transaction history from db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168182273-0a428521-db79-46e9-b32d-ccd0b8fc7859.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing accounts table from db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>We get the user details from db using db prepare statement. I used<br>a transfer_balance and transfer_account function to perform the transactions and then update the<br>db. The accounts are fetched using a accoutn dest and account src function.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/63">https://github.com/AaronP05/IT202Spring/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ap966-prod.herokuapp.com/Project/transfer_accounts.php">https://ap966-prod.herokuapp.com/Project/transfer_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168182569-b5002224-05b6-4ad5-bc00-28b7e1513400.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction history page only shows one transaction<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168182569-b5002224-05b6-4ad5-bc00-28b7e1513400.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filters and pagination does not fully work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>I could not get the pagination to work<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/62">https://github.com/AaronP05/IT202Spring/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ap966-prod.herokuapp.com/Project/history.php?id=2">https://ap966-prod.herokuapp.com/Project/history.php?id=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168182848-2db374f9-5eab-4de5-9ef8-f7eeac64d050.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user profile with names<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/60">https://github.com/AaronP05/IT202Spring/pull/60</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ap966-prod.herokuapp.com/Project/profile.php">https://ap966-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168183048-671b1b46-608d-41a1-886b-1b074db99707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing external transfer page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168183269-8b90f601-0422-4046-8ba9-0be2d5788cb2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Try to transfer $7 to another user account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168183387-ad189519-35c9-4255-8e97-042d26169d88.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message when try to transfer more than account balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168183585-9bc6441e-0f21-4ae7-b11b-83e86fb39bf7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot transfer negative amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168183675-6ab03e2a-4d30-43d3-b99a-d7ec67289ac0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This feature is currently not working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168184081-f5313a13-9f41-46a7-9a9d-40b5ccabbae9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing making the transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>This feature does not fully work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>This process is similar to how we get the account details of the<br>same user. I could not fully get the transfer to different account feature<br>to work.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/AaronP05/IT202Spring/pull/64">https://github.com/AaronP05/IT202Spring/pull/64</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ap966-prod.herokuapp.com/Project/transfer_to_user.php">https://ap966-prod.herokuapp.com/Project/transfer_to_user.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168184388-12c6ba97-5d1e-4547-8047-d2b38244a9b1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Milestone 3 Proposal file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84828015/168184602-d406f7dc-7ce8-4fb2-9b5e-439845e5acb9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S22/it202-milestone-3-bank-project/grade/ap966" target="_blank">Grading</a></td></tr></table>