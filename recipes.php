<?

// Recipe response PHP file for TP9-PHP

$recipes = array();

$recipes["fulffyFrenchToast"] = array();
$recipes["fluffyFrenchToast"]["ingredients"] = array();
$recipes["fluffyFrenchToast"]["equipment"] = array();
$recipes["fluffyFrenchToast"]["directions"] = array();

$recipes["fluffyFrenchToast"]["ingredients"][] = "1/4 cup all-purpose flower";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 cup milk";
$recipes["fluffyFrenchToast"]["ingredients"][] = "3 eggs";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 tablespoon white sugar";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 teaspoon vanilla extract";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1/2 teaspoon ground cinnamon";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 pinch salt";
$recipes["fluffyFrenchToast"]["ingredients"][] = "12 thick slices of bread";
$recipes["fluffyFrenchToast"]["ingredients"][] = "Oil";

$recipes["fluffyFrenchToast"]["equipment"][] = "Stove";
$recipes["fluffyFrenchToast"]["equipment"][] = "Measuring cups";
$recipes["fluffyFrenchToast"]["equipment"][] = "Large Mixing Bowl";
$recipes["fluffyFrenchToast"]["equipment"][] = "Whisk";
$recipes["fluffyFrenchToast"]["equipment"][] = "Griddle or Frying pan";

$recipes["fluffyFrenchToast"]["directions"][] = "Measure all-purpose flour and pour into large mixing bowl.";
$recipes["fluffyFrenchToast"]["directions"][] = "Slowly whisk in milk, eggs, sugar, vanilla extract, cinnamon, and salt until the consistancy is smooth.";
$recipes["fluffyFrenchToast"]["directions"][] = "Lightly oil a griddle or frying pan over medium heat.";
$recipes["fluffyFrenchToast"]["directions"][] = "Soak the bread slices into the milk mixture.";
$recipes["fluffyFrenchToast"]["directions"][] = "Cook the bread slices on the griddle or frying pan. Make sure each side of the bead is golden brown. Serve while still hot";


$recipes["icedMatcha"] = array();
$recipes["icedMatcha"]["ingredients"] = array();
$recipes["icedMatcha"]["equipment"] = array();
$recipes["icedMatcha"]["directions"] = array();

$recipes["icedMatcha"]["ingredients"][] = "2 Tablespoons of culinary grade green tea matcha powder";
$recipes["icedMatcha"]["ingredients"][] = "1/4 of a cup of water";
$recipes["icedMatcha"]["ingredients"][] = "1/2 cup of milk of vanilla flavored almond milk";
$recipes["icedMatcha"]["ingredients"][] = "1 tablespoon of sweet cream dairy-free sweatener";

$recipes["icedMatcha"]["equipment"][] = "One pint sized glass (for final product)";
$recipes["icedMatcha"]["equipment"][] = "One small sized glass (for mixing)";
$recipes["icedMatcha"]["equipment"][] = "One table-spoon measuring spoon";
$recipes["icedMatcha"]["equipment"][] = "One quarter-cup measuring spoon";
$recipes["icedMatcha"]["equipment"][] = "One half-cup measuring spoon";
$recipes["icedMatcha"]["equipment"][] = "Frother";
$recipes["icedMatcha"]["equipment"][] = "Straw to stir and drink";

$recipes["icedMatcha"]["directions"][] = "Begin by taking your small mixing glass and putting 2 tablespoons of matcha powder into it.";
$recipes["icedMatcha"]["directions"][] = "Next, add a quarter-cup of water into the cup.";
$recipes["icedMatcha"]["directions"][] = "User your frother to froth the matcha powder together with the water.";
$recipes["icedMatcha"]["directions"][] = "Once the matcha is fully dissolved into the water, fill your pint-sized glass with ice.";
$recipes["icedMatcha"]["directions"][] = "Pour the matcha mixture over the ice.";
$recipes["icedMatcha"]["directions"][] = "Add a half-cup of vanilla almond milk into the cup.";
$recipes["icedMatcha"]["directions"][] = "Add a table spoon of vanilla sweet cream sweetener into the cup.";
$recipes["icedMatcha"]["directions"][] = "Use the straw to stir the mixture, until the whole drink is a light green colour.";
$recipes["icedMatcha"]["directions"][] = "Take your first sip and enjoy";


$recipes["rosemaryBread"] = array();
$recipes["rosemaryBread"]["ingredients"] = array();
$recipes["rosemaryBread"]["equipment"] = array();
$recipes["rosemaryBread"]["directions"] = array();

$recipes["rosemaryBread"]["ingredients"][] = "½ cup unsalted butter";
$recipes["rosemaryBread"]["ingredients"][] = "1½ cups graham cracker crumbs";
$recipes["rosemaryBread"]["ingredients"][] = "1 cup semisweet chocolate chips";
$recipes["rosemaryBread"]["ingredients"][] = "1 cup butterscotch chips";
$recipes["rosemaryBread"]["ingredients"][] = "chopped nuts of the following:";
$recipes["rosemaryBread"]["ingredients"][] = "1 cup of walnuts, or";
$recipes["rosemaryBread"]["ingredients"][] = "1 cup of pecans, or";
$recipes["rosemaryBread"]["ingredients"][] = "1 cup of peanuts";
$recipes["rosemaryBread"]["ingredients"][] = "1 can sweetened condensed milk (14 ounce)";
$recipes["rosemaryBread"]["ingredients"][] = "1⅓ cups shredded coconut";

$recipes["rosemaryBread"]["equipment"][] = "One pint sized glass (for final product)";
$recipes["rosemaryBread"]["equipment"][] = "One small sized glass (for mixing)";
$recipes["rosemaryBread"]["equipment"][] = "One table-spoon measuring spoon";
$recipes["rosemaryBread"]["equipment"][] = "One quarter-cup measuring spoon";
$recipes["rosemaryBread"]["equipment"][] = "One half-cup measuring spoon";
$recipes["rosemaryBread"]["equipment"][] = "Frother";
$recipes["rosemaryBread"]["equipment"][] = "Straw to stir and drink";

$recipes["rosemaryBread"]["directions"][] = "Begin by taking your small mixing glass and putting 2 tablespoons of matcha powder into it.";
$recipes["rosemaryBread"]["directions"][] = "Next, add a quarter-cup of water into the cup.";
$recipes["rosemaryBread"]["directions"][] = "User your frother to froth the matcha powder together with the water.";
$recipes["rosemaryBread"]["directions"][] = "Once the matcha is fully dissolved into the water, fill your pint-sized glass with ice.";
$recipes["rosemaryBread"]["directions"][] = "Pour the matcha mixture over the ice.";
$recipes["rosemaryBread"]["directions"][] = "Add a half-cup of vanilla almond milk into the cup.";
$recipes["rosemaryBread"]["directions"][] = "Add a table spoon of vanilla sweet cream sweetener into the cup.";
$recipes["rosemaryBread"]["directions"][] = "Use the straw to stir the mixture, until the whole drink is a light green colour.";
$recipes["rosemaryBread"]["directions"][] = "Take your first sip and enjoy";



//step 5 and 6 in instructions

$requestedID = $_GET["recipeID"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_GET["recipeList"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

$requestedOutput = $recipes[$requestedID][$requestedList];

$requestedJSON = "0";

if($requestedOutput != null){
  $requestedJSON = json_encode($requestedOutput);
}

echo $requestedJSON; 

