# Project Name: Simple Bank
#Youtube Link: https://www.youtube.com/watch?v=CJujkNPn7oc
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: [https://github.com/AaronP05/IT202Spring/tree/prod/public_html/Project](https://github.com/AaronP05/IT202Spring/tree/prod/public_html/Project)
## Project Board Link: [https://github.com/AaronP05/IT202Spring/projects/1](https://github.com/AaronP05/IT202Spring/projects/1)
## Website Link: https://ap966-prod.heroku.app.com/Project
## Your Name: Aaron Patel

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION --> 
 
 
### Proposal Checklist and Evidence

- Milestone 1
    - [x] \(03/25/2022) User will be able to register a new account
         - [Milestone 1] (https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/register.php] (https://ap966-prod.herokuapp.com/Project/register.php)
    - [x] \(03/25/2022) User will be able to login to their account (given they enter the correct credentials)
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/login.php] (https://ap966-prod.herokuapp.com/Project/login.php)
    - [x] \(03/25/2022) User will be able to logout
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md)
         - [https://ap966-prod.herokuapp.com/Project/logout.php] (https://ap966-prod.herokuapp.com/Project/register.php)
    - [x] \(03/29/2022) Basic security rules implemented
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/profile.php] (https://ap966-prod.herokuapp.com/Project/profile.php)
    - [x] \(04/04/2022) Basic Roles implemented
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md)
         - [https://ap966-prod.herokuapp.com/Project/admin/create_role.php] (https://ap966-prod.herokuapp.com/Project/admin/create_role.php)
    - [x] \(04/04/2022) Site should have basic styles/theme applied; everything should be styled
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/home.php] (https://ap966-prod.herokuapp.com/Project/home.php)
         - [https://ap966-prod.herokuapp.com/Project/styles.css] (https://ap966-prod.herokuapp.com/Project/styles.css)
    - [x] \(03/29/2022) Any output messages/errors should be “user friendly”
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/logout.php] (https://ap966-prod.herokuapp.com/Project/logout.php)
    - [x] \(03/29/2022) User will be able to see their profile
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/profile.php] (https://ap966-prod.herokuapp.com/Project/profile.php)
    - [x] \(03/29/2022) User will be able to edit their profile
         - [Milestone 1](https://github.com/AaronP05/IT202Spring/blob/NewMilestone/public_html/Project/milestone1.md) 
         - [https://ap966-prod.herokuapp.com/Project/profile.php] (https://ap966-prod.herokuapp.com/Project/profile.php)




- Milestone 2
     - [x] \(4/17/2022) Create the Accounts table (id, account_number [unique, always 12 characters], user_id, balance (default 0), account_type, created, modified)
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/006_create_accouts_table.sql](https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/006_create_accouts_table.sql)
     - [x] \(4/17/2022) Project setup steps
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/008_insert_system_user.sql](https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/008_insert_system_user.sql)
     - [x] \(4/17/2022) Create the Transactions table
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/009_create_transaction_table.sql](https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/009_create_transaction_table.sql)
     - [x] ] \(4/17/2022) Dashboard page
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://ap966-prod.herokuapp.com/Project/dashboard.php](https://ap966-prod.herokuapp.com/Project/dashboard.php)
     - [x] \(4/18/2022) User will be able to create a checking account
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://ap966-prod.herokuapp.com/Project/create_account.php](https://ap966-prod.herokuapp.com/Project/create_account.php)
     - [x] \(4/18/2022) User will be able to list their accounts
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://ap966-prod.herokuapp.com/Project/list_accounts.php](https://ap966-prod.herokuapp.com/Project/list_accounts.php)
     - [x] \(4/19/2022) User will be able to click an account for more information (a.k.a Transaction History page)
          -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
          -  [https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/009_create_transaction_table.sql](https://github.com/AaronP05/IT202Spring/blob/prod/public_html/Project/sql/009_create_transaction_table.sql)
     - [x] \(4/20/2022) User will be able to deposit/withdraw from their account(s)
           -  [Milestone 2](https://github.com/AaronP05/IT202Spring/blob/Milestone2/public_html/Project/milestone2.md)
           -  [https://ap966-prod.herokuapp.com/Project/withdraw.php](https://ap966-prod.herokuapp.com/Project/withdraw.php)
           -  [https://ap966-prod.herokuapp.com/Project/deposit.php](https://ap966-prod.herokuapp.com/Project/deposit.php)


- Milestone 3
     - [x] \(5/10/2022) User will be able to transfer between their accounts
          -  [Milestone 3](https://github.com/AaronP05/IT202Spring/blob/Milestone3/public_html/Project/milestone3.md)
          -  [https://ap966-prod.herokuapp.com/Project/transfer_accounts.php](https://ap966-prod.herokuapp.com/Project/transfer_accounts.php)
     - [x] \(4/29/2022) Transaction History page
          -  [Milestone 3](https://github.com/AaronP05/IT202Spring/blob/Milestone3/public_html/Project/milestone3.md)
          -  [https://ap966-prod.herokuapp.com/Project/history.php](https://ap966-prod.herokuapp.com/Project/history.php)
     - [x] \(4/29/2022) User’s profile page should record/show First and Last name
          -  [Milestone 3](https://github.com/AaronP05/IT202Spring/blob/Milestone3/public_html/Project/milestone3.md)
          -  [https://ap966-prod.herokuapp.com/Project/profile.php](https://ap966-prod.herokuapp.com/Project/profile.php)
     - [x] \(5/10/2022) User will be able to transfer funds to another user’s account
          -  [Milestone 3](https://github.com/AaronP05/IT202Spring/blob/Milestone3/public_html/Project/milestone3.md)
          -  [https://ap966-prod.herokuapp.com/Project/transfer_to_user.php](https://ap966-prod.herokuapp.com/Project/transfer_to_user.php)


- Milestone 4
     - [x] \(5/10/2022) User can set their profile to be public or private (will need another column in Users table)
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
          -  [https://ap966-prod.herokuapp.com/Project/profile.php](https://ap966-prod.herokuapp.com/Project/profile.php)
     - [x] \(5/11/2022) User will be able open a savings account
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
          -  [https://ap966-prod.herokuapp.com/Project/savings_account.php](https://ap966-prod.herokuapp.com/Project/savings_account.php)
     - [x] \(5/11/2022) User will be able to take out a loan
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
          -  [https://ap966-prod.herokuapp.com/Project/loan.php](https://ap966-prod.herokuapp.com/Project/loan.php)
     - [x] \(5/11/2022) Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
          -  [https://ap966-prod.herokuapp.com/Project/loan_account.php](https://ap966-prod.herokuapp.com/Project/loan_account.php)
     - [ ] \(5/11/2022) User will be able to close an account
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
     - [ ] \(5/11/2022) Admin role (leave this section for last)
          -  [Milestone 4](https://github.com/AaronP05/IT202Spring/blob/Milestone4/public_html/Project/milestone4.md)
  - 
  - 
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board