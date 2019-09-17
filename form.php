<!doctype html>
<html lang="en">
  <head>
          <? include "head.php" ?>
          <link href="style.css" rel="stylesheet">
  </head>
  <body>
   <!-- NAVIGATION -->
   <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="index.php">The Expences of University Students</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="form.php">Take the survey</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="about.php">About us</a>
  </li>
</ul> 


    <div class = "container mt-5">
        <div class = "row">
          
        <div class = "col-lg-12 col-12"> 
<h1 class="section-heading mb-4 ">Enter your details here and add to the visulization</h1>
<h2 class="mt-1">How do you spend your money?</h2>

</div>

            <div class = "col-lg-4 col-12"> 
            
            

<!-- Form -->
<form>
<div class="form-group">
    <label for="inputName">Name</label>
    <input type="name" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="inputNumber">Age</label>
    <input type="number1" class="form-control" id="inputNumber" placeholder="Enter age">
    <small id="emailHelp" class="form-text">We'll never share your info with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="inputSchool">Name of University</label>
    <input type="name" class="form-control" id="inputSchool" placeholder="Enter university">
  </div>

  </form></div>

  <div class = "col-lg-4 col-12"> 
  <form>

 
  <small id="emailHelp" class="form-text">Rent: Rank the priority of this expence</small>

  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Groceries: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Clothing: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Books: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Vacation: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  </form></div>

<div class = "col-lg-4 col-12"> 
<form>


  <small id="emailHelp" class="form-text">Transit: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Coffee: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Workshops: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

  <small id="emailHelp" class="form-text">Savings: Rank the priority of this expence</small>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Highest</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Mid</label>
    <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1">
    <label class="form-check-label ml-4" for="exampleCheck1">Lowest</label>
  </div>

</form>




            </div>
           
        </div>
        <a href = "end.php" type="submit" class="btn btn-primary btn-sm btn-block mt-3">Submit</a>
    </div>

  </body>
</html>



