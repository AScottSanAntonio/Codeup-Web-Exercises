<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/site.css">
        <h1>User Login</h1>
    </head>
    <body>
        <form method="POST">
    <div>
        <label for="username">Username</label>
        <input id="username" name="username" type="text"
        placeholder="Please enter yo' info.">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password" type="password"
        placeholder="Please enter yo' OTHER info.">
    </div>
    <div>
        <label for"submit">SEND THE STUFF</label>
        <input type="submit" value="DO IT">
    </div>
    <h1>Compose An Email</h1>
    <div>
        <label for="To">To</label>
        <input id="To" name="To" type="text">
    </div>
    <div>
        <label for"From">From</label>
        <input id="From" name="From" type="text">
    </div>
    <div>
        <label for="Subject">Subject</label>
        <textarea id="From" name="From" rows="1" cols="50"> </textarea>
    </div>
    <div>
        <label for="Body">Body</label>
        <textarea id="Body" name="Body" rows="5" cols="100"> </textarea>
    </div>
    <div>
        <input type="checkbox" id="Save" name="save_draft">
        <label for="Save">Save a draft of this email?</label>
    </div>
    <div>
        <h1>Multiple Choice Test</h1>
        <div>
            How many main characters is Bran responsible for the death of on the last episode of Game of Thrones?
        </div>
        <label>
            <input type="radio" name="q1" value="Only one"> 
            Only one..
        </label>
        <label>
            <input type="radio" name="q1" value="Only two..">
            Only two..
        </label>
        <label>
            <input type="radio" name="q1" value="Only three..">
            Only three..
        </label>
        <label>
            <input type="radio" name="q1" value="Wow.. He got his traveling companion, his dog, a magic tree elf, and his personal tree wizard tutor killed, what was he thinking..?">
            Wow.. He got his traveling companion, his dog, a magic tree elf, and his personal tree wizard tutor killed, what was he thinking..?
        <div>
        </div>
        </label>
        <label for="swords">Select your weapon of choice: </label>
             <select id="Sword" name="Sword">
                <option value="1">Frostmourne</option>
                <option value="2">Excalibur</option>
                <option value="3">Lightsaber</option>
            </select>
    <div>
        <button type="submit">Send</button>
</form>
    </body>
</html>