<?php
namespace App\Console\Commands;

use App\Mail\BirthdayEmail;
use App\Models\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBirthdayEmails extends Command
{
    protected $signature   = 'crm:send-birthday-emails';
    protected $description = 'Send birthday emails to clients whose birthday is today';

    public function handle(): void
    {
        $clients = Client::all()->filter(fn($c) => $c->hasBirthdayToday());

        if ($clients->isEmpty()) {
            $this->info('No birthdays today.');
            return;
        }

        foreach ($clients as $client) {
            Mail::to($client->email)->send(new BirthdayEmail($client));
            $this->info("Email sent to: {$client->name}");
        }
    }
}