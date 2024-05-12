<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        /* styles.css */

            .form-group {
                margin-bottom: 20px;
                margin-left: 50px;
                margin-right: 50px;
                
            }

            label {
                font-weight: bold;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .form-control:focus {
                border-color: #007bff;
                outline: 0;
            }

            .btn {
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin: 0px 50px;
            }

            table, th, td {
                border: 1px solid;
                margin:auto;
                padding:10px;
            }


            .btn:hover {
                background-color: #0056b3;
            }

            .error-message{
                color:red;
            }

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="form-group" style="font-size:30px;text-decoration: underline;"><b><center>User Form</center></b></div>
    <div class="container">
        
    <form method="POST" action="/submit-form" id='userForm' enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <span class="error-message" id="nameError"></span> <!-- Error message element for email field -->

        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <span class="error-message" id="emailError"></span> <!-- Error message element for email field -->

        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
            <span class="error-message" id="phoneError"></span> <!-- Error message element for email field -->

        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description"  required name="description"  rows="3"></textarea>
            <span class="error-message" id="descriptionError"></span> <!-- Error message element for email field -->

        </div>

        <div class="form-group">
            <label for="role_id">Role</label>
            <select class="form-control" id="role_id" name="role_id" required>
            <option value=''> Please Select Role </option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
            </select>
            <span class="error-message" id="role_idError"></span> <!-- Error message element for email field -->

        </div>

        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" class="form-control-file" id="profile_image" name="profile_image" required>
            <span class="error-message" id="profile_imageError"></span> <!-- Error message element for email field -->

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>   
<div style="padding:30px;">
            
        <table id="usersTable" style="width: 100%;margin-top: 50px;padding:20px;">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Description</th>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody>
                <!-- User data will be dynamically added here -->
            </tbody>
        </table>

        </div>
    </body>
</html>


<script>
document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    var errror = 0;
    var name = document.querySelector('input[name="name"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var phone = document.querySelector('input[name="phone"]').value;
    var role_id = document.querySelector('select[name="role_id"]').value;
    var description = document.querySelector('textarea[name="description"]').value;
    var profileImage = document.querySelector('input[name="profile_image"]').value;
    var phonePattern = /^[0-9]{10}$/;

    if (name.trim() == '') {
        //alert('Please enter a name.');
        var nameError = document.getElementById('nameError');
        nameError.textContent = 'Please enter a name.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        var nameError = document.getElementById('nameError');
        nameError.textContent = ''; // Clear error message if name is not empty

    }

    if (email.trim() == '') {
        //alert('Please enter a name.');
        var emailError = document.getElementById('emailError');
        emailError.textContent = 'Please enter an email.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        
        var emailError = document.getElementById('emailError');
        emailError.textContent = ''; // Clear error message if name is not empty

    }

    if (!isValidEmail(email)) {
        //alert('Please enter a name.');
        var emailError = document.getElementById('emailError');
        emailError.textContent = 'Please enter valid email.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        
        var emailError = document.getElementById('emailError');
        emailError.textContent = ''; // Clear error message if name is not empty

    }

    if (phone.trim() == '') {
        //alert('Please enter a name.');
        var phoneError = document.getElementById('phoneError');
        phoneError.textContent = 'Please enter phone.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        var phoneError = document.getElementById('phoneError');
        phoneError.textContent = ''; // Clear error message if name is not empty

    }

    // Check if phone number is valid
    if (!phonePattern.test(phone)) {
        //alert('Please enter a valid 10-digit phone number.');
        //$('#phone-error').text('Please enter a valid 10-digit phone number.'); // Show error message
        var phoneError = document.getElementById('phoneError');
        phoneError.textContent = 'Please enter valid 10 digit phone.'; // Show error message
        var error = 1;
        event.preventDefault();
    } else {
        var phoneError = document.getElementById('phoneError');
        phoneError.textContent = ''; // Clear error message if description is not empty
    }

    if (description.trim() == '') {
        var descriptionError = document.getElementById('descriptionError');
        descriptionError.textContent = 'Please enter a description.'; // Show error message
        var error = 1;
        event.preventDefault(); // Prevent form submission
    } else {
        var descriptionError = document.getElementById('descriptionError');
        descriptionError.textContent = ''; // Clear error message if description is not empty
    }
    

    if (role_id.trim() == '') {
        //alert('Please enter a name.');
        var role_idError = document.getElementById('role_idError');
        role_idError.textContent = 'Please select role id.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        var role_idError = document.getElementById('role_idError');
        role_idError.textContent = ''; // Clear error message if name is not empty

    }

    if (profileImage. trim() == '') {
        //alert('Please enter a name.');
        var profile_imageError = document.getElementById('profile_imageError');
        profile_imageError.textContent = 'Please select image.'; // Show error message
        var error = 1;
        event.preventDefault();
    }else{
        var profile_imageError = document.getElementById('profile_imageError');
        profile_imageError.textContent = ''; // Clear error message if name is not empty

    }

    if(error == 1){
        return false;
    }

    // if (profileImage.trim() == '') {
    //     //alert('Please select a profile image.');
    //     $('#profile_image-error').text('Please select a profile image.'); // Show error message
    //     event.preventDefault();
    // }
    

    var formData = new FormData(this); // Create FormData object to send form data
    
    
    // Send form data to server using AJAX
    fetch('/api/users', {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (!response.ok) {
            response.json().then(data => {
                if (Object.keys(data.errors).length > 0) {
                    for (const key in data.errors) {
                        const errorElement = document.querySelector(`[name='${key}'] + .error-message`);
                        if (errorElement) {
                            errorElement.textContent = data.errors[key];
                        }
                    }
                }
            })
            //throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        resetErrorMessages();          
        // On successful form submission, fetch updated user data and update the table
        fetchUsersAndUpdateTable();
    })
    .catch(error => {
        console.error('There was a problem with the form submission:');
    });
});

function resetErrorMessages() {
    // Select all elements with the class "error-message"
    const errorMessages = document.querySelectorAll('.error-message');

    // Loop through each error message element and clear its text content
    errorMessages.forEach(errorMessage => {
        errorMessage.textContent = ''; // Clear the error message text
    });
}


function fetchUsersAndUpdateTable() {
    const form = document.getElementById('userForm');

    // Reset the form to clear all input fields
    form.reset();
    fetch('/api/users')
    .then(response => response.json())
    .then(users => {
        // Clear existing table rows
        document.querySelector('#usersTable tbody').innerHTML = '';

        // Append new rows with updated user data
        var count = 0;
        users.forEach(user => {
            count++;
            var row = document.createElement('tr');
            row.innerHTML = `
                <td>${count}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.phone}</td>
                <td>${user.role.name}</td>
                <td>${user.description}</td>
                <td><img src="/${user.profile_image}" alt="Profile Image" style="max-width: 100px;max-height: 50px;"></td>
            `;
            document.querySelector('#usersTable tbody').appendChild(row);
        });
    })
    .catch(error => {
        console.error('There was a problem fetching user data:', error);
    });
}


function isValidEmail(email) {
    // Regular expression for email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

window.onload = function() {
    fetchUsersAndUpdateTable();
};

</script>