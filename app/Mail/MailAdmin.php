<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class MailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
       return $this->from('admin@admin.com', 'Tworeports')
            ->subject($request->input('subject'))
            ->markdown('mails.ex')
            ->with([
                'name' => $request->input('desc'),
                'link' => 'https://tworeport.com',
            ])
            ->view('mails.ex');

     }
}
