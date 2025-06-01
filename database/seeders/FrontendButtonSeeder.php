<?php

namespace Database\Seeders;

use App\Models\FrontendButton;
use App\Models\FrontendContent;
use Illuminate\Database\Seeder;

class FrontendButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frontendContent = FrontendContent::first(); 

        if ($frontendContent) {
            $buttonsData = [
                ['label' => 'HTML', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/HTML'],
                ['label' => 'CSS', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/CSS'],
                ['label' => 'JavaScript', 'link' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript'],
                ['label' => 'Git & GitHub', 'link' => 'https://learngitbranching.js.org/'],
                ['label' => 'NPM (Node Package Manager)', 'link' => 'https://docs.npmjs.com/'],
                ['label' => 'VS Code (Code Editor)', 'link' => 'https://code.visualstudio.com/'],
                ['label' => 'Browser DevTools', 'link' => 'https://developer.chrome.com/docs/devtools/'],
                ['label' => 'Live Server / Preview Tool', 'link' => 'https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer'],
            ];

            foreach ($buttonsData as $button) {
                FrontendButton::create([
                    'frontend_content_id' => $frontendContent->id,
                    'label' => $button['label'],
                    'link' => $button['link'],
                ]);
            }
        }
    }
}