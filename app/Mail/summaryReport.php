<?php

namespace App\Mail;

use App\ExpenseReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class summaryReport extends Mailable
{
    use Queueable, SerializesModels;
    private $expenseReport;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ExpenseReport $Report)
    {
        $this->expenseReport=$Report;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adminplat@admin.com')
                    ->view('email.expenseReport',[
                "report"=>$this->expenseReport,
        ]);
    }
}
