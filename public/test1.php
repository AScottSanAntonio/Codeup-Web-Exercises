<?php  
$nouns = ['Druid','Rogue','Barbarian','Cleric','Ranger','Shaman','Wizard','Gunslinger','Necromancer','Summoner'];

$adjectives = ['Lawful Good','Lawful Neutral','Lawful Evil','True Good','True Neutral','True Evil','Chaotic Good','Chaotic Neutral','Chaotic Evil','Chaotic Stupid'];

$origin = ['Dwarf','Elf','Gnome','Human','Half-Orc','Catfolk','Drow','Changeling','Grippli','Aasimar'];

$backstory = ['Lived in a crime ridden town, eventually leading to "sword for hire" kind of work to protect themself as well as earn a living.','Earned a life on the high seas as a pirate in a foreign land.','Feral, hunted and gathered most of their life, until finding magic for the first time.','A ravaging horde of barbarians ransacked their home, forcing them to flee.','Killed a town guard at a young age, and has been paying for that debt ever since.','Lord of a small feif, over sees their home and lands with a few men and family.','Rebellion member, seeks to overthrow the monarchy because of encroaching armies.','On a mission from their secret order to find a powerful lost artifact.','Oringinally free, now has been enslaved and purchased as a gladiator for the various fighting pits around the nation.','Fell into a coma at a young age, eventually coming out of the coma with renewed purpose of unknown origin.','Woods-dwelling family slaughtered by gnolls, turning them on a path of vengance.','Previous advisor of the King, exiled from the land for crimes against the crown.','Worked on a mercantile vessel for most of their childhood, eventually becoming a prominent trade merchant.','Village taken over by corrupt spell casters and necromancers, cursed with unnending nightmares.','Scribe at the Royal Mage Academy.','Traveling sellsword looking for long lost partner.','Had a portion of their soul taken and held by a warlock.'];

$statpoints = ['18','17','16','15','14','13','12','11','10'];

	 
	$races = array_rand($origin, 1);
	$story = array_rand($backstory, 1); 
	$characters = array_rand($nouns, 1);
	$stat1 = array_rand($statpoints, 1);
	$stat2 = array_rand($statpoints, 1);
	$stat3 = array_rand($statpoints, 1);
	$stat4 = array_rand($statpoints, 1);
	$stat5 = array_rand($statpoints, 1);
	$stat6 = array_rand($statpoints, 1);
	$alignments = array_rand($adjectives, 1); 
?>

<!DOCTYPE html>
<html>
<head>
<style>
#space{
	height: 10px;
}
#races {
		font-size: 14px;
		text-align: center;
	}
	#display {
		width: 250px;
		height: 220px;
		border: 2px solid white;
		padding: 2px;
		margin: 2px;
		color: white;
		position: absolute;
		top: 130px;
		left: 140px;
	}
		#display2 {
		width: 250px;
		height: 220px;
		border: 2px solid white;
		padding: 2px;
		margin: 2px;
		color: white;
		position: absolute;
		top: 130px;
		left: 400px;
	}
	#align {
		text-align: center;
		font-size: 20px;
	}
	#char {
		text-align: center;
		font-size: 20px;
	}
	#backstory {
		text-align: center;

	}
	#background {
		background-image: url("css/img/tome3.jpg");
		width: 800px;
		height: 800px;
		background-repeat: no-repeat;
		background-size: 100%

	}
	#story {
		font-size: 14px;
		margin: 4px;
	}
	h1 {
		text-align: center;
	}
	#btnGen {
		font-size: 20px;
		position: absolute;
		top: 25px;
		left: 140px; 
	}
	

</style>
	<title>DnD Character Generator</title>
</head>
<body>
	<button id = "btnGen" onClick = "refreshPage()">Roll the dice</button>
	<h1>DnD Character Creation</h1>
		<div id = "background">
			<div id = "display">
				
				<p id = "align">You are a <?= $adjectives[$alignments]; ?> <?= $origin[$races]; ?> <?= $nouns[$characters]; ?>
					
				</p>
		
				<h2 id = "backstory">Backstory</h2>
				<p id = "story">
				<?= $backstory[$story]; ?>
				</p>
			</div>
		</div>
		<div id = "display2">
		<ul id = "statpage">
			<li>STR - ( <?= $statpoints[$stat1]; ?> ) </li>
			<div id = "space"></div>
			<li>DEX - ( <?= $statpoints[$stat2]; ?> ) </li>
			<div id = "space"></div>
			<li>CON - ( <?= $statpoints[$stat3]; ?> ) </li>
			<div id = "space"></div>
			<li>INT - ( <?= $statpoints[$stat4]; ?> ) </li>
			<div id = "space"></div>
			<li>WIS - ( <?= $statpoints[$stat5]; ?> ) </li>
			<div id = "space"></div>
			<li>CHA - ( <?= $statpoints[$stat6]; ?> ) </li>
			<div id = "space"></div>
		</ul>
		</div>


		<script>
			function refreshPage(){
    		window.location.reload();
			} 
		</script>


</body>
</html>