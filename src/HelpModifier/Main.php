<?php

  namespace HelpModifier;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\utils\Config;
  use pocketmine\event\player\PlayerCommandPreProcessEvent;

  class Main extends PluginBase implements Listener {

    public function dataPath() {

      return $this->getDataFolder();

    }

    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

      @mkdir($this->dataPath());

      $this->cfg = new Config($this->dataPath() . "config.yml", Config::YAML, array("page_1" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_2" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_3" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_4" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_5" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_6" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_7" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_8" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_9". => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_10" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8=> "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message")));

    }

    public function sendHelp(PlayerCommandPreProcessEvent $event) {

      $command = explode(" ", strtolower($event->getMessage()));

      $player = $event->getPlayer();

      if($command[0] === "/help") {

        $event->setCancelled();

        if($command[1] === "1") {

          $page_one_messages = $this->cfg->get("page_1");

          $player->sendMessage($page_one_messages["message_1"]);