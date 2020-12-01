<style>
    input[type=text], input[type=password] {
    width: 100%;
    margin: 8px 0;
    padding: 12px 20px;
    display: inline-block;
    border: 2px solid green;
    box-sizing: border-box;
    }
    .container {
        padding: 25px;
        background-color: lightblue;
    }
    Body {
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink;
    }
</style>


<form action="/registration" method="post">
    @csrf
    <div class="container">
        <h1>Register Here</h1>
        <p>Please fill in the details to create an account with us.</p>
        <hr>
        <label for="firstname"><b>Enter First name</b></label>
        <input type="text" placeholder="Enter Name" name="name">
        <br>
        <br>
        <label for="Surname"><b>Enter Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="surname">
        <br>
        <br>
        <label for="email"><b>Enter Email</b></label>
        <input type="email" placeholder="Enter Email" name="email">
        <br>
        <br>
        <label for="pwd"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password">
        <hr>

        <button type="submit" ><strong>Register</strong></button>
    </div>

</form>
