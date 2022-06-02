
<!DOCTYPE html>

<html>
<head>
    <title>Fun with JavaScript</title>

    <style>
        h1 {
            color: red;
        }
        #container {
            font-size: larger;
        }
        form > div {
            margin-bottom: 1em;
        }
        #ghost, #cartoon {
            display: inline;
        }
        #graduation input {
            float: left;
        }
    </style>

    <script type="text/javascript">
        function checkNameYear()
        {

        } // checkNameYear()
    </script>

</head>
<body>
<div id="container">
    <h1>Validation practice</h1>
    <form name="easyform" method="post" action="http://httpbin.org/post" onSubmit="return checkNameYear()">
        <input type="hidden" name="_recipient" value="guest1@cs.wellesley.edu">

        <div>
            <label for="yourname">Please enter your name</label>
            <input type="text" name="yourname" id="yourname">
        </div>

        <div>
            <label for="birthyear">Please enter your birth year</label>
            <input type="text" name="birthyear" id="birthyear">
        </div>

        <div>
            Going to be a ghost for halloween?
            <div id="ghost">
                <label for="yes">Yes</label>
                <input type="checkbox" name="ghost" value="yes" id="yes">

                <label for="no">No</label>
                <input type="checkbox" name="ghost" value="no" id="no">

                <label for="secret">It's a secret</label>
                <input type="checkbox" name="ghost" value="Secret" id="secret">
            </div>
        </div>

        <div>
            You will graduate from Wellesley Class of:
            <div id="graduation">
                <label for="graduation2008">2008</label>
                <input type="radio" name="graduation" value="2008" id="graduation2008"><br>

                <label for="graduation2009">2009</label>
                <input type="radio" name="graduation" value="2009" id="graduation2009"><br>

                <label for="graduation2010">2010</label>
                <input type="radio" name="graduation" value="2010" id="graduation2010"><br>

                <label for="graduation2011">2011</label>
                <input type="radio" name="graduation" value="20011" id="graduation2011"><br>
            </div>
        </div>

        <div>
            Tell me your favorite cartoon character:
            <div id="cartoon">
                <select name="cartoon">
                    <option>select one</option>
                    <option>Bugs Bunny</option>
                    <option>Mickey Mouse</option>
                    <option>Yosemite Sam</option>
                    <option>Betty Boop</option>
                </select>
            </div>
        </div>

        <input type="submit" value="Click Here to Submit">
        <input type="reset">
    </form>
</div>
</body>
</html>
