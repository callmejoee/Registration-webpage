# Registration Web Page Project
This project is a registration web page designed for the IS333 Web based information systems course at the Faculty of Computers and Artificial Intelligence, Cairo University, for the Spring 2024 semester. The registration web page allows users to register by entering their personal details, including full name, username, birthdate, phone number, address, password, confirm password, user image, and email address.

## Project Features:
* Client-side validations for all fields (mandatory fields, correct email and birthdate formats, password complexity).
* Server-side validation to check if the username is already registered.
* Ability to upload a user image, with the image stored on the server.
* Integration with a third-party MDBI API to display a list of actors born on the same day as the user's birthdate.
## Project Structure:
The project consists of six PHP pages providing different functionalities:

* Header.php: Includes the header design.
* Footer.php: Includes the footer design.
* Index.php: Main page that includes the header and footer.
* DB_Ops.php: Contains database functions for connection, insertion, and selection.
* Upload.php: Handles the processing of uploaded images.
* API_Ops.php (or API_Ops.js): Includes code to connect to the MDBI API.
