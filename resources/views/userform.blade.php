<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
     <form action="adduser" method="post">
        @csrf
        <div>
            <input type="text" placeholder="enter username" name="username">
        </div>
        <div>
            <input type="text" placeholder="enter email" name="email">
        </div>
        <div>
            <input type="text" placeholder="enter city" name="city">
        </div>
        <div>
            <button>Add new user</button>
        </div>
     </form>
</div>
