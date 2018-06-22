<?php

namespace JavaPluginFX;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{
	
	public function onEnable() {
		$this->getServer()->getLogger()->info(Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::RED . "aktiviert");

    }
    
		public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool { 
			
			switch($cmd->getName() ) {
				case "gms";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]"  . Color::GREEN . " Dein Spielmodus wurde zu" . Color::RED . " Kreative" . Color::GREEN . "geändert");
				$sender->setGamemode (0);
				return true;
				
				case  "gmc";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::GREEN . " Dein Spielmodus wurde zu" . Color::RED . " Survival" . Color::GREEN . "geändert");
				$sender->setGamemode (1);
				return true;
				
				case  "gmt";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::GREEN . " Dein Spielmodus wurde zu" . Color::RED . " Spectator" . Color::GREEN . "geändert");
				$sender->setGamemode (3);
				return true;
				
    }
    
  }    
  
}    