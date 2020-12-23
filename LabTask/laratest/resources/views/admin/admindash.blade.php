<body>

    <div>
        <h1>Welcome AdminDash!</h1>
        <a href="/addemployee">Create New Employee</a> |
        <a href="/employee-list">View Employee List</a> |
        <form action="../logout" method="POST">
        @csrf
        <input type="submit" name="submit" value="Logout" >
        </form>
        <br>
    </div>
</body>

</html>