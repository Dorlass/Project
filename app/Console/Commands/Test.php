<?php

namespace App\Console\Commands;

use App\Models\TodoItem;
use Illuminate\Console\Command;

class Test extends Command
{
    protected $signature = 'harry:hallowereld';

    protected $description = 'Dit commando zegt iets tegen je';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $todoItems = TodoItem::all();

        foreach($todoItems as $todoItem) {
                $this->line('<fg=black;bg=cyan>' . $todoItem->delete() . '</>');
        }

        $this->line('<fg=black;bg=red>FOUTMELDING</>');

        return 0;
    }
}
