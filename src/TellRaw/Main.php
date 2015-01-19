<?php

namespace TellRaw;

/*
 * 
 * 
 * 
 */

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\scheduler\PluginTask;
use pocketmine\event\player\PlayerJoinEvent;


class Main extends PluginBase implements Listener {
		
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			$player = $args->getPlayer()->getName();
			if(strtolower($command->getName('raw'))) {
				// CREATE
				if(empty($args)) {
					$sender->sendMessage("----------Commands For Tell Raw----------\n/raw tell - Sends a raw message to a player.\n------------------------------------------");
				}
					if($args[0] == "tell") {
						$sent = $this->getServer()->getPlayerExact($args[1]);
						if($invited->isOnline() == true) {
						$message = $array["message"];
						$sender-> sendMessage("------------------------------------------\n" $message "\nWas successfully sent to $sent\nYour name is not shown Unless you've entered\nYour name in the Message!\n------------------------------------------");
						$args[1]->sendMessage("$message");
							return true;
						}
						if(!$args[1] instanceof Player) {
							$sender->sendMessage("$invited is not online.");
							return true;
						} else {
							$sender->sendMessage("Player not online!");
						}
					}
}
