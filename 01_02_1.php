<?

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
