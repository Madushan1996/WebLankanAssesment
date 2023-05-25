<html>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
        <button type="submit">Submit</button>
    </form>

</html>
