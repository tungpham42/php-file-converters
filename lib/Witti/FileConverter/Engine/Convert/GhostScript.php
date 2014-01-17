<?php
namespace Witti\FileConverter\Engine\Convert;

use Witti\FileConverter\Engine\EngineBase;
class GhostScript extends EngineBase {
  public function convertFile($source, $destination) {
    // One convert function is required to avoid recursion.
  }

  public function getHelpInstallation($os, $os_version) {
    return "This engine is a placeholder and is not yet ready for use.";
  }

  public function isAvailable() {
    return FALSE;
  }
}