## Try catch exercise

You do not need webpack or NPM for this exercise. Just a basic Javascript/HTML project. Styling is not important.

**A)** 

Create an application such that:

- A user can input an API URL in an input field
- The application will take the text-input from the user and call a fetch command using the URL provided by the user
- Using fetch().catch():
  - If the user has input a valid API, the application will display the data from the API on the HTML page
    - Some valid apis to test: https://apipheny.io/free-api/
  - If the user has input an **invalid** API, the application will display an error message on the HTML page that is **user-friendly** meaning non-technical and instruct the user on what to do next.

**(Advanced optional)**

- If the user has input an invalid API, the application will display: It seems that your API is invalid, so here is a random fact about cats:
  - The application will fetch a random fact about a cat from the following API: https://catfact.ninja/fact



## Firebase auth

Styling is not important.

- Add Authentication to your Firebase console & enable E-mail/Passowrd authentication.
- Create a script such that a user can:
  - Register as a new user with e-mail and password
  - Login with an e-mail and password
- Using .catch()
  - If the user already exists display an alert with the message "User Already Exists"
  - If the password is not valid