<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin Notification</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>
    
    <p>Welcome to our platform as a new admin! Your account has been successfully created.</p>
    
    <p>Here are your account details:</p>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Role: {{ $user->role_id }}</li> <!-- Display role name -->
        <li>Password: {{ $user->password }}</li> <!-- Display the password -->
        <!-- You can add more information here if needed -->
    </ul>
    
    <p>Thank you for joining us!</p>
    
    <p>Best regards,<br>
    Your Application Team</p>
</body>
</html>