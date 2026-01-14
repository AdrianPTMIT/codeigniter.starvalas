<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<?php if (!empty($error)): ?>
    <div style="color:red; font-weight: bold; font-size: 19px;"><?= esc($error) ?></div>
<?php endif; ?>

<?php if (!empty($msg)): ?>
    <div style="color:green;"><?= esc($msg) ?></div>
<?php endif; ?>

<form action="submitdata" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" class="form-control">
    <br> <br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" class="form-control">
    <br> <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" class="form-control" required>
    <br><br>
    <button type="submit" id="btn-click">SUBMIT</button>
    <br><br>
</form>


<!-- <a href="java&#xa;script:alert('haha')">click me</a> -->

<a href="loggedin" style="font-size: larger;">Refresh</a>

<!-- SQL Injection Testing -->
<!-- SELECT name, id FROM dataform WHERE name ='' or ''=''  -->
<!-- Update dataform set name = 'john wick' where id = 5; SELECT * FROM dataform WHERE name ='' or ''='' -->
<!-- SELECT * FROM dataform WHERE password = 117 OR 1=1; update dataform set password = 117 where id = 8; -->


<script>
    $(document).on("click", "#btn-click", function () {
        const name = $("#name").value;
        const age = $("#age").value;
        const password = $("#password").value;

        // Ensure the values are properly encoded to prevent XSS
        // name = encodeURIComponent(name);
        // age = encodeURIComponent(age);
        // password = encodeURIComponent(password);

        // Perform the AJAX request 

        $.ajax({
            url: "submitdata",
            type: "POST",
            data: {
                name: name,
                age: age,
                password: password
            },
            dataType: "JSON",
            success: function (response) {
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });


</script>

<?php
echo "<h1>Welcome to the logged-in page</h1>";
if (isset($users) && is_array($users)) {
    echo "<h2>Users:</h2>";
    echo "<ul>";
    foreach ($users as $user) {
        // $user = array_map('htmlspecialchars', $user); 
        echo "<li>" . ($user['name']) . " - Age: " . ($user['age']) . " , password : " . ($user['password'] ?? '') . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No users found.</p>";
}

?>


<!-- <script>
    $(function () {
        $(document).on("click", "#btn-click", function () {
            const token = localStorage.getItem('jwt_token');

            $.ajax({
                url: "restrictedpage",
                type: "POST",
                data: {
                    email: $("#name").val(),
                },
                headers: {
                    Authorization: token ? "Bearer " + token : "No Authorization"
                },
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });

</script> -->

<!-- <script>
    $(function () {
        $(document).on("click", "#btn-click", function () {
            const token = localStorage.getItem('jwt_token');

            $.ajax({
                url: "restrictedpage",
                type: "POST",
                data: {
                    email: "adrian@mail.com",
                },
                headers: {
                    Authorization: token ? "Bearer [token_redacted]" : "No Authorization"
                },
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                }


            });

        });
    });

</script>  -->