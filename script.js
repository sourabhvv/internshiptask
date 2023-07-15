 function logout() {
            // Send an AJAX request to a PHP script to destroy the session
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'logout.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Redirect to the login page or any other desired page
                        window.location.href = 'login.php';
                    } else {
                        // Display an error message if the logout request fails
                        alert('Failed to logout. Please try again.');
                    }
                }
            };
            xhr.send();
        }
