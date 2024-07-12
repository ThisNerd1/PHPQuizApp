<?php
include("navbar.php");
?>

<h3>Choose your type of quiz!</h3>

  <form action="../FrontEnd/Quiz.php" method="post">
        <label for="difficulty">Difficulty:</label>
        <select id="difficulty" name="difficulty">
            <option value="" disabled selected>Select an option</option>
            <option value="1">Easy</option>
            <option value="2">Medium</option>
            <option value="3">Hard</option>
            <option value="4">Very Hard</option>
        </select>
        
        <br/>
      <br/>

        <div id="secondSelectionContainer">
            <label for="timer">Time:</label>
            <select id="timer" name="timer">
                <option value="" disabled selected>Select an option</option>
                <option value="60">1 Minute</option>
                <option value="300">5 Minutes</option>
                <option value="420">7 Minutes</option>
                <option value="600">10 Minutes</option>
            </select>
        </div>
      <br/>

      <div id="thirdSelectionContainer">
      <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="" disabled selected>Select an option</option>
            <option value="food">Food</option>
            <option value="sports">Sports</option>
            <option value="geography">Geography</option>
            <option value="mythology">Mythology</option>
        </select>
        </div>
      <br/>
      <div id="fourthSelectionContainer">
      <label for="amount">Amount of Questions:</label>
        <select id="amount" name="amount">
            <option value="" disabled selected>Select an option</option>
            <option value="5">5</option>
            <option value="7">7</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
          </div>
        <br/>
        <input type="submit" value="Submit">
    </form>

<?php
include_once("footer.php")
?>
