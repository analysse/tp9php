//function to load a file from the URL "fromFile" into the object identified by "whereTo"
function loadFileInto(recipeID, listName, whereTo) {

  // creating a new XMLHttpRequest object
  ajax = new XMLHttpRequest();

  //define the fromFile variable with the passed recipe name and list 
  fromFile = "recipes.php?recipeID=" + recipeID + "&recipeList=" + listName;

  console.log("From URL: " + fromFile);

  // defines the GET/POST method, source, and async value of the AJAX object
  ajax.open("GET", fromFile, true);

  // provides code to do something in response to the AJAX request
  ajax.onreadystatechange = function() {

    if ((this.readyState == 4) && (this.status == 200)) {

      console.log("AJAX response: " + this.responseText);

      if (this.responseText != 0) {
        responseArray = JSON.parse(this.responseText);

        responseHTML = "";
        for (x = 0; x < responseArray.length; x++) {
          responseHTML += "<li>" + responseArray[x] + "</li>";
        }

        document.querySelector(whereTo).innerHTML = responseHTML;

      } else {
        console.log("Error: no recipe or list found. ");
      }
      //document.querySelector(whereTo).innerHTML = this.responseText;
    } else if ((this.readyState == 4) && (this.status != 200)) {
      console.log("Error: " + this.responseText);
    }

  } // end ajax.onreadystatechange function

  // initiate request and wait for response
  ajax.send();

}

//new recipe object
function Recipe(recipeName, contributorName, imageURL, recipeID) {

  this.recipeName = recipeName;
  this.contributor = contributorName;
  this.imageURL = imageURL;
  this.id = recipeID;

  this.displayRecipe = function() {

    layoutTitle = document.querySelectorAll("#titleBanner h1");
    layoutTitle[0].innerHTML = this.recipeName;

    layoutContributor = document.querySelectorAll("#titleBanner h4");
    layoutContributor[0].innerHTML = "Contributed by " + this.contributor;

    document.getElementById("titleBanner").style.backgroundImage = "url(" + this.imageURL + ")";

    loadFileInto(this.id, "ingredients", "#ingredients ul");
    loadFileInto(this.id, "equipment", "#equipment ul");
    loadFileInto(this.id, "directions", "#directions ol");

  }
}

FluffyFrenchToast = new Recipe(
  "Fluffy French Toast",
  "Analysse Palomares",
  "https://images.unsplash.com/photo-1639108094328-2b94a49b1c2e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80",
  "fluffyFrenchToast"
);

IcedMatchaLatte = new Recipe(
  "Iced Matcha Latte",
  "Nova Shtrikman",
  "https://images.unsplash.com/photo-1631308491952-040f80133535?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bWF0Y2hhJTIwbGF0dGV8ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60",
  "icedMatcha"
);

RosemaryBread = new Recipe(
  "Super Easy Rosemary Bread",
  "Morgan Coffroth",
  "https://images.unsplash.com/photo-1621265040752-58815f16ca6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1931&q=80.jpg",
  "rosemaryBread"
);



//window.onload = function() {
/*document.querySelector("#firstRecipe").onclick = function(){
  FluffyFrenchToast.displayRecipe();
}
  
document.querySelector("#secondRecipe").onclick = function(){
  IcedMatchaLatte.displayRecipe();
}
  
document.querySelector("#thirdRecipe").onclick = function(){
  RosemaryBread.displayRecipe();
} */
//} // end window.onload