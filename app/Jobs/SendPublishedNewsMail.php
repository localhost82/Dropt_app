<?php

namespace App\Jobs;

use App\Mail\NewsPublished;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendPublishedNewsMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $news;

    /**
     * Create a new job instance.
     */
    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $subscribers = Subscriber::all();
        try {
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)
                    ->send(new NewsPublished($this->news));
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
