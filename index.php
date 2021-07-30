<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>ToDoList</title>
</head>
<body>
   
  <div class="contaner">
    <!-- background Image -->
    <div class="backimg"></div>

    <!-- To Do List -->
    <div class="todolist">
      
      <div id="myDIV" class="header">
        <p id="dateinfo">
          <?php
            $d = date("d");
            $day = date("l");
            echo $d ." , ". $day;
          ?>
        </p>
        <h2 style="margin:5px">My To Do List
        </h2>
        <input type="text" id="myInput" placeholder="Things to do Today...">
        <span onclick="newElement()" class="addBtn">Add</span>
      </div>
        
      <ul id="myUL">
        <!-- <li>Add List</li> -->
        <!-- <li class="checked">Pay bills</li>
        <li>Meet George</li>
        <li>Buy eggs</li>
        <li>Read a book</li>
        <li>Organize office</li> -->
      </ul>
          
    </div>

    <!-- footer -->
    <footer>
      <p> &copy; <?php  $year = date("Y"); echo $year; ?> | Made with ❤️ By <a href="http://aboutayush.c1.biz/" target="blank"> Ayush Kumar</a></p>
    </footer>
    
  </div>
      

  <!-- script area -->
  <script>
    // Create a "close" button and append it to each list item
    var myNodelist = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
      var span = document.createElement("SPAN");
      var txt = document.createTextNode("\u00D7");
      span.className = "close";
      span.appendChild(txt);
      myNodelist[i].appendChild(span);
    }
      
    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
      }
    }
    
    // Add a "checked" symbol when clicking on a list item
    var list = document.querySelector('ul');
    list.addEventListener('click', function(ev) {
      if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('checked');
      }
    }, false);
    
    // Create a new list item when clicking on the "Add" button
    function newElement() {
      var li = document.createElement("li");
      var inputValue = document.getElementById("myInput").value;
      var t = document.createTextNode(inputValue);
      li.appendChild(t);
      if (inputValue === '') {
        alert("You must write something!");
      } else {
        document.getElementById("myUL").appendChild(li);
      }
      document.getElementById("myInput").value = "";
    
      var span = document.createElement("SPAN");
      var txt = document.createTextNode("\u00D7");
      span.className = "close";
      span.appendChild(txt);
      li.appendChild(span);
    
      for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
          var div = this.parentElement;
          div.style.display = "none";
        }
      }
    }
  
  </script>
  
  <!-- refresh page alert  -->
  <script type="text/javascript">
    window.onbeforeunload = function () {
      return 'Are you really want to perform the action?';
    }
  </script>

</body>
</html>