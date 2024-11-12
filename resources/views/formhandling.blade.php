<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
     <!-- @if($errors->any())
     @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
     @endforeach
     @endif -->
     <form action="formhandling" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br />
            <span>@error('email'){{$message}} @enderror</span>
        </div>
        <div>
            <h5>Skills</h5>
            <input type="checkbox" name="skill[]" value="php" id="Php">
            <label for="Php">Php</label>
            <input type="checkbox" name="skill[]" value="python" id="Python">
            <label for="Python">Python</label>
            <input type="checkbox" name="skill[]" value="java" id="Java">
            <label for="Java">Java</label>
            <input type="checkbox" name="skill[]" value="c" id="C">
            <label for="C">C</label>
            <br />
            <span>@error('skill'){{$message}} @enderror</span>
        </div>
        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male" id="Male">
            <label for="Male">Male</label>
            <input type="radio" name="gender" value="female" id="feMale">
            <label for="feMale">feMale</label>
            <br />
            <span>@error('gender'){{$message}} @enderror</span>
        </div>
        <div>
            <h5>City</h5>
            <select name="city">
                <option value=""></option>
                <option value="Bhavnagar">Bhavnagar</option>
                <option value="Surat">Surat</option>
                <option value="Ahemdabad">Ahemdabad</option>
                <option value="Rajkot">Rajkot</option>
            </select>
            <br />
            <span>@error('city'){{$message}} @enderror</span>
        </div>
        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="100" value="{{old('age')}}">
        </div>
        <br />
        <span>@error('age'){{$message}} @enderror</span>
        <button>Add new user</button>
     </form>
</div>

<style type="css">
    .alert .alert-danger{
        margin-bottom: 10px;
        padding: 10px;
        background-color: red;
        color: white;
        text-align: center;
    }
</style>
