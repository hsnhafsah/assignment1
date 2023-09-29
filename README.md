# User Registration and Viewer Web Application

This web application enables users to register and view user data. It consists of two primary workflows: user registration and user data viewing.

## Workflow Explanation

### Registration Process

1. **User Registration Form (form.php)**:

   - Users access the registration form by navigating to `signUp.php`.
   - The form collects the following information:
     - Full Name
     - Email Address
     - Password
     - Password Confirmation
     - Gender (selected from a dropdown)
   - Users complete the form and submit their information.

2. **Form Validation**:

   - The application validates user input:
     - It verifies the correct email address format.
     - It ensures that the password and password confirmation match.

3. **Insertion into Database**:

   - If the user's input passes validation, the information is securely inserted into the database.
   - Passwords are hashed using PHP's `password_hash` function for security.

### Viewing Registered Users

1. **View Users Page (viewusers.php)**:

   - Registered users can view all users by visiting `viewUsers.php`.
   - The page displays a table containing the following user details:
     - User ID
     - Name
     - Email
     - Gender

2. **Database Query (UserViewer Class)**:

   - The application establishes a database connection and retrieves user data from the `info` table.
   - It uses the `PDO` extension to execute a SQL query for fetching user information.

3. **Table Rendering**:

   - User data is presented in tabular format on the web page.
   - Bootstrap styling is applied for a polished and responsive design.
   - Alternating row colors enhance readability.

## Usage

1. **User Registration**:

   - To register, navigate to `signUp.php`.
   - Complete the registration form with accurate details.
   - Ensure that the email address is correctly formatted and passwords match.
   - Submit the form to create a new user account.

2. **View Registered Users**:

   - Registered users can view all users by visiting `viewUsers.php`.
   - The table on this page displays user information retrieved from the database.
   # User Registration and Viewer Web Application


## Error Messages

In this web application, error messages are used to provide valuable feedback to both users and developers. They help in identifying and addressing issues during the registration process. Below are the key error messages and their purposes:

1. **Email Already Exists**:
   - **Purpose**: If a user attempts to register with an email address that is already in use, the message "Email already exists." is displayed.
   - **Use**: This message informs users that the provided email address is already registered, prompting them to use a different one.

2. **Username Already Exists**:
   - **Purpose**: If a user tries to register with a username that is already taken, the message "Username already exists." is shown.
   - **Use**: This message indicates that the chosen username is not available, and users should select a unique username.

3. **Passwords Do Not Match**:
   - **Purpose**: If the entered password and password confirmation do not match, the message "Passwords do not match." is presented.
   - **Use**: This message ensures that users are aware of the mismatched passwords and prompts them to re-enter their password correctly.

4. **Invalid Email Address Format**:
   - **Purpose**: When an improperly formatted email address is provided, the message "Invalid email address format." is displayed.
   - **Use**: This message helps users recognize the need for a valid email format (e.g., example@example.com).

5. **Registration Failed (Database Error)**:
   - **Purpose**: If an unexpected database error occurs during registration, the message "Registration failed. Database error: [error message]" is shown.
   - **Use**: This message informs users that there was a technical issue with the registration process and provides developers with insights into database-related problems.

6. **Registration Failed (General Error)**:
   - **Purpose**: When registration fails due to non-database-related issues, the message "Registration failed. An error occurred." is presented.
   - **Use**: This message indicates a generic registration failure, and developers can further investigate the cause of the error based on the context.

7. **Redirect Message**:
   - **Purpose**: After displaying an error message, users are informed that they will be automatically redirected to the registration page.
   - **Use**: This ensures a smooth user experience, and users can click a link to navigate back to the registration page if needed.

These error messages play a crucial role in user feedback, ensuring that users understand any issues they encounter during registration and that developers can troubleshoot and resolve issues effectively.


## Database Configuration

   - The application requires a database connection to store and retrieve user data.
   - Configure database credentials in the appropriate file or environment variables.
   - Create a database table named `info` with appropriate columns to match the registration form fields.

## Technologies Used

   - PHP
   - MySQL or another compatible database
   - PDO (PHP Data Objects)
   - Bootstrap for styling

## Credits

   - This web application was developed by Netiah Hafsah Siti.

