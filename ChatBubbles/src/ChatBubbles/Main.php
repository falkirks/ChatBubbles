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
        $player = $event->getPlayer();
        $message = $event->getMessage();
        
        //TODO Get rid of players username, temporarily replace name tag with message
    }
    
    public function onDisable(){
        $this->getLogger()->info("[ChatBubbles] ChatBubbles Unloaded!");
    }

}

?>
