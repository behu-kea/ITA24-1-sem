# The note-to-self app

Styling is not important. An unstyled document is fine.

Today we are building a simple note-to-self app. The requirements are as following:

**Authentication**

- A user can create a user by e-mail and password
- Errors are handled such that they are visible to the user and informs them of errors (on the HTML page or as an alert)



**When logged in**

- A user can see an overview of all notes to themselves.
- A user can add new notes to self which will be stored by Cloud Firestore with a reference to the users ID
- A user can log out by pressing a log-out button.



**Advanced (Optional)**

- Before logging in - all users are allowed to see how many notes to self have been made with the application
- Each user can see a count of how many notes they have made themselves
- Each user can see a count of how many letters are in their notes when logged in
- Each user can see the average of letters in their notes when logged in