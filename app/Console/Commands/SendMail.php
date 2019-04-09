<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to send email to the next presenter';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::find(13);

            Mail::raw("You're the tommorow's Sun Bear, prease prepare for your presentation:)", function($message) use ($user)
            {
                $message->from('shinonome81@gmail.com');
                $message->to($user->email)->subject('Morinig Sharing Notification');
            });  
  
    $this->info('Morning Sharing Notification has been send successfully');
    }
}
