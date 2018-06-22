<?php

namespace JavaPluginFX;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{
	
	public function onEnable() {
		$this->getServer()->getLogger()->info(Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::RED . "aktiviert");

    }
    
		public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool { 
			
			switch($cmd->getName() ) {
				case "gmc";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]"  . Color::YELLOW . " Dein Spielmodus ist nun" . Color::RED . " Kreative.");
				$sender->setGamemode (1);
				return true;
				
				case  "gms";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::YELLOW . " Dein Spielmodus ist nun" . Color::RED . " Survival.");
				$sender->setGamemode (0);
				return true;
				
				case  "gmt";
				$sender->sendMessage (Color::GRAY . "[" . Color::GREEN . "Gamemode" . Color::GRAY . "]" . Color::YELLOW . " Dein Spielmodus ist nun" . Color::RED . " Spectator.");
				$sender->setGamemode (3);
				return true;
				
    }
    
  }    
  
}    