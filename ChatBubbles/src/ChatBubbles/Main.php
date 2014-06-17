<?php

namespace ChatBubbles;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
//use pocketmine\event\player\PlayerChatEvent; ??
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("[ChatBubbles] ChatBubbles Loaded!");
    }
    
    public function onChat(PlayerChatEvent $event){
        //TODO Get message, cancel send, and change tag temporarily
    }
    
    public function onDisable(){
        $this->getLogger()->info("[ChatBubbles] ChatBubbles Unloaded!");
    }

}

?>
