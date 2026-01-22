<?php

namespace Database\Seeders;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question' => 'How do I pick a pickup time?',
                'answer' => 'For departures arrive 2–3 hours before take-off; for arrivals use your landing time — we include waiting.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Do you work 24/7?',
                'answer' => 'Yes — early mornings and late nights covered.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Do you charge for delays?',
                'answer' => 'No, we track flights and adjust.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Do you include waiting time for arrivals?',
                'answer' => 'Yes. We track your flight and include complimentary waiting after landing.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Are child seats available?',
                'answer' => 'Yes — request at booking (subject to availability) so we can prepare the correct seat.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'What areas do you cover?',
                'answer' => 'All of South Yorkshire for pickups, and any UK airport or destination for drop-offs.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Corporate accounts',
                'answer' => 'We welcome business accounts with consolidated billing and priority support.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Can I change or cancel?',
                'answer' => 'Yes — contact us as soon as possible. Changes are free; cancellation policy applies.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Meet & Greet',
                'answer' => 'Your driver can meet you in the terminal with a name board; add this in the notes.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Payment methods',
                'answer' => 'Card, Apple Pay/Google Pay, and Cash (cash requires a 10% deposit first).',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
            [
                'question' => 'Last-minute bookings',
                'answer' => 'Message us on WhatsApp for urgent requests — we’ll confirm availability fast.',
                'status' => ActiveInactiveStatus::ACTIVE->value,
                'created_at' => now(),
            ],
        ]);
    }
}
