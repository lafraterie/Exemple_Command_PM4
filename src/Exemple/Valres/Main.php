<?php

namespace Exemple\Valres;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {       // Quand le serveur est lancé
        $this->getLogger()->info("Plugin Exemple est lancé !");
        self::$instance = $this;

        $this->getServer()->getCommandMap()->register("ping", new ping());  // Enregistrer la commande dans la liste.
    }
}