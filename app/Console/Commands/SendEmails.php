<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';


    /**
     * 创建新的命令实例
     *
     * @param  DripEmailer  $drip
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$this->drip = $drip;
    }

    /**
     * 执行控制台命令
     *
     * @return mixed
     */
    public function handle()
    {echo 111;exit();
        echo '<pre>';print_r($this->argument('email'));exit();
        $this->drip->send(User::find($this->argument('user')));
    }
}
