<?

/*
  попытался оформить как в заданиии.
  выдает ошибку.
  работающий ответ тут:
  https://github.com/mafia8/j5k/blob/master/01_02_2.php
  но там много чего не так, как в задании.
*/
namespace Pikabu93\Misc;

use Core\Lib\{Test87 as helper};

class JobSeeker {
  use helper {test as public __tostring;}
}

namespace Core\Lib {
  trait Test87 {
    private function test() {
      return static::class;
    }
  }
}

assert((string)new JobSeeker() === JobSeeker::class);
