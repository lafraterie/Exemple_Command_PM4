<?php

namespace Exemple\Valres;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;


//Classé ta commande :
class test extends Command{ 

    public function __construct() //L12 à L15 : Construire la commande.
    {
        parent::__construct("test","Description de commande","/test",["t"]); //Info sur la commande (nom, description, usage, aliases)
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) //Quand le joueur ($sender) effectue la commande
    {
        if ($sender instanceof Player){
            if ($sender->hasPermission("test.cmd") || Server::getInstance()->isOp($sender->getName())) { //Vérifie si il a la perm et/ou est OP
                // Code a effectuer si tout est réunis :
                return $sender->sendMessage("Cool ! Un commande de test !");
            }
        }
    }
}
