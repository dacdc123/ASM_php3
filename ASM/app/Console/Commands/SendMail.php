<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $data = ['name' => Auth::user()->name];

       Mail::send('mail', $data, function ($message){
            $message->to('Dacdcph39472@fpt.edu',  'Đỗ Cao Đắc')
                ->subject('Đăng ký thành công Mail');
       });
    }
}
