<?php

function generateValues($starting, $first, $times, $modifier = 2){
	$aux = null;
	for ($i = 0; $i<$times; $i++){
		if ($i != 0){
			if ($i != 1){
                            $aux[$i] = $aux[$i-1]*$modifier;
                        }
			else $aux[$i] = $first;
		}
		else $aux[$i] = $starting;
	}
	return $aux;
}

return [
    'siege' => 0,
    'fort' => 0,
    'unitprod' => 0,
    'gold' => 300,
    'unit_freq' => 12,
    'income_freq' => 30,
    'atk_percent' => 0.25,
    'def_percent' => 0.28,
    'units' => 30,
    'race_changes' => 2,
    'deposit_rate' => 0.8,
    'deposit_interval' => 500,
    'tech_siege' => array("None", "Sticks", "Spears", "Chariots", "War Galleys", "Battering Rams", "Siege Towers","Triremes","Ballistae", "Greek Fire", "Trebuchets", "Catapults", "Cannons", "Big Bertha", "Rockets", "ATG Missiles", "Nukes"),
    'tech_fort' => array("None", "Palisade", "Stone Walls", "Battlements", "Bastion", "Towers", "Moat", "Stronghold", "Citadel", "Trenches", "Fortress", "Bunker", "Shelter", "AEGIS System", "Force Field"),
    'value_siege' => generateValues(0,100,count('tech_siege')),
    'value_fort' => generateValues(0,100,count('tech_fort')),
    'tech_replication' => generateValues(2,4,14),
    'value_repli' => generateValues(0,40,count('tech_replication'),3),
    'world_bank' => generateValues(0,100,10),
    'max_siege' => count('tech_siege')-1,
    'max_fort' => count('tech_fort')-1,
    'max_repli' => count('tech_replication')-1,
    'bonus_rojos' => "25% Attack Strength",
    'bonus_verdes' => "25% Defense Strength",
    'bonus_azules' => "20% Extra Income",
    'bonus_naranjas' => "20% Cheaper Upgrades",
    'racestyle' => "",
    'site_name' => "Color Nations",
    'untrained_atk' => 4,
    'untrained_def' => 4,
    'untrained_income' => 4,
    'berserker_atk' => 9,
    'berserker_def' => 1,
    'berserker_income' => 4,
    'paladin_atk' => 3,
    'paladin_def' => 7,
    'paladin_income' => 4,
    'berserker_cost' => 50,
    'paladin_cost' => 50,
    'untrain_cost' => 10,
    'string_oro' => "Treasure",
    'string_moneda' => 'gold',
    'string_units' => "Army",
    'string_fort' => "Fortification",
    'string_siege' => "Siege",
    'string_unitprod' => "Unit Replication",
    'string_attack' => "Attack Strength",
    'string_defense' => "Defense Strength",
    'string_income' => "Income",
    'string_race0' => 'reds',
    'string_race1' => 'greens',
    'string_race2' => 'blues',
    'string_race3' => 'oranges',
    'injured_atk' => 0,
    'injured_def' => 0,
    'injured_cost' => 100,
    'injured_income' => 0,
    'merchant_atk' => 0,
    'merchant_def' => 0,
    'merchant_income' => 10,
    'merchant_cost' => 100,
    'season' => 1,
    'season_length' => 90,
];

