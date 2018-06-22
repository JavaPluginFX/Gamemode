<?php

namespace JavaPluginFX;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{
	
	public function onEnable() {
		$this->getServer()->getLogger()->info(TF::GRAY . "[" . TF::GREEN . "Gamemode" . TF::GRAY . "]" . TF::RED . "aktiviert");

    }
    
		public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool { 
			
			switch($cmd->getName() ) {
				case "gms";
$sender->sendMessage (TF::GRAY . "[" . TF::GREEN . "Gamemode" . TF::GRAY . "]"  . TF::GREEN . " Dein Spielmodus wurde zu" . TF::RED . " Survival" . TF::GREEN . " ge�ndert");
$sender->setGamemode (0);
				return true;
				
				case  "gmc";
 $sender->sendMessage (TF::GRAY . "[" . TF::GREEN . "Gamemode" . TF::GRAY . "]" . TF::GREEN . " Dein Spielmodus wurde zu" . TF::RED . " Kreative" . TF::GREEN . " ge�ndert");
 $sender->setGamemode (1);
		        return true;
				
				case  "gmt";
$sender->sendMessage (TF::GRAY . "[" . TF::GREEN . "Gamemode" . TF::GRAY . "]" . TF::GREEN . " Dein Spielmodus wurde zu" . TF::RED . " Spectator" . TF::GREEN . " ge�ndert");
$sender->setGamemode (3);
				return true;
				
    }
    
  }    
  
}    