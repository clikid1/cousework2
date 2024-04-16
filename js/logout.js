document.getElementById('logoutButton').addEventListener('click', function() {
    fetch('logout.php', {
        method: 'POST',
    })
    .then(response => {
        if (response.ok) {
            window.location.href = 'login.html'; // Redirect to login page after logout
        } else {
            console.error('Logout failed');
        }
    })
    .catch(error => console.error('Error logging out:', error));
});