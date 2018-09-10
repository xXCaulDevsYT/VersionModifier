<?php

  namespace VersionModifier;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\utils\Config;
  use pocketmine\event\player\PlayerCommandPreprocessEvent;

  class Main extends PluginBase implements Listener {

    public function dataPath() {

      return $this->getDataFolder();

    }

    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

      @mkdir($this->dataPath());

      $this->cfg = new Config($this->dataPath() . "config.yml", Config::YAML, array("page_1" => array("message_1" => "This Server is running EmeraldPickle [xXCaulDevsYTv1] minecraft versions 1.5.0 - 6.6.6 Motherfuckers suck on this dick!")));

    }

    public function sendHelp(PlayerCommandPreprocessEvent $event) {

      $command = explode(" ", strtolower($event->getMessage()));

      $player = $event->getPlayer();

      if($command[0] === "/version") {

          $page_one_messages = $this->cfg->get("page_1");

          $player->sendMessage($page_one_messages["message_1"]);

          $event->setCancelled();

        }

      }

     }
