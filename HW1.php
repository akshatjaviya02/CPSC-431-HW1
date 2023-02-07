<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Interest Survey Form</title>
</head>
<body>
    <h1 style="text-align:center">Student Interest Survey Form</h1>
    <form action="HW1.php" method="post">
        <p style="text-align:center">
            <label> Enter your name: <input name="firstname" required /></label>
        </p>
        <p style="text-align:center">
            <label> Enter your department: <input name="department" required /></label>
        </p>
        <p style="text-align:center">
            <label> 
                Tell us a little about yourself: 
                <textarea name="yourself"> </textarea>
        </label>
        </p>
        <p style="text-align:center">
            Do you exercise at home?
            <label> <input type="radio" name="exercise" value="yes" required /> Yes </label>
            <label> <input type="radio" name="exercise" value="no" required /> No </label>
        </p>
        <p style="text-align:center">
            How do you like to read about your favorite topics? <br><br>
            <label> <input type="checkbox" name="favorite" value="books" /> books </label>
            <label> <input type="checkbox" name="favorite" value="online" /> Online resources </label>
            <label> <input type="checkbox" name="favorite" value="phone" /> Phone apps </label>
            <label> <input type="checkbox" name="favorite" value="newspaper" /> Newspaper </label>
        </p>
        <p style="text-align:center">
            <label> 
                what genre of movies do you like?
                <select name="genre">
                    <option value="None"></option>
                    <option value="comedy">comedy</option>
                    <option value="romance">romance</option>
                    <option value="thriller">thriller</option>
                    <option value="horror">horror</option>
                    <option value="biopic">biopic</option>
                </select>
            </label>
        </p>
        <p style="text-align:center">
            <button type="submit" > Submit</button>
        </p>        
    </form>
</body>
</html>