<body>

    <div>
        <h1>Welcome Employee DashBoard!</h1>
        <a href="/addjob">Add job</a> |
        <a href="/job-list"> Job List</a> |
        <form action="../logout" method="POST">
        @csrf
        <input type="submit" name="submit" value="Logout" >
        </form>
        <br>
    </div>
</body>

</html>