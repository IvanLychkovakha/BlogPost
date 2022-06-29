<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['title' => 'Food', 'description' => 'Food blogs come in several flavors. On the one hand, there’s the food critics, who go from one restaurant table to the next, tasting different dishes and narrating their experiences. On the other hand, there’s the cooking and baking enthusiasts. They document their recipes—from the ingredients they use to the steps they follow—and share them with their communities through articles, photos and videos.'],
            ['title' => 'Travel', 'description' => "Before planning a trip, we tend to do a lot of research on both Google and social media. Therefore, the demand for reading other people's travel reviews is high. If you’re a globetrotter, consider this type of outlet. You can start with an insider’s guide on places to explore near you, offering reasons to visit your very own hometown, region or country."],
            ['title' => 'Health and Fitness', 'description' => "The most common New Year's resolution is to exercise more and lose weight. Yet, less than 5% of adults participate in 30 minutes of physical activity each day. What about giving your readers an extra push of motivation? Blogging is a great way to share your insight on at-home workouts and eating best practices."],
            ['title' => 'Lifestyle', 'description' => "Lifestyle blogs are the new magazines. As we once flipped through pages, nowadays, we scroll for inspiration. Lifestyle bloggers create multimedia centered content around their daily lives. Therefore, these types of blogs often integrate vlogs (video blogs) to engage their audience and to show their expertise. These bloggers later tend to partner with brands as micro-influencers"],
            ['title' => 'Fashion', 'description' => "Like words, fashion is a way we express ourselves. No surprise, there are almost as many fashion blogs as there are fashionistas in this world. Some are about luxury, others about streetwear, and some others even specialize in recycled textile. They all offer outfit inspiration, trend updates and insider reviews. For example, Haily Allison Styles gives her readers handy ideas for seasonality looks and color guides."],
            ['title' => 'Photography', 'description' => "A good picture is worth (writing) a thousand blog posts. Okay, maybe not 1,000, but have no doubt, people want to hear the story behind your stunning photos. With your photography blog, you’re not only displaying your latest work, but you’re also attracting new customers to your services, workshops or art store."],
            ['title' => 'Personal', 'description' => "A personal blog allows you to bring out the storyteller within you by basing your content on real-life experiences and perspectives. When you create content, it might resemble a diary entry and will be written in the first person. You can choose to write about diverse topics or hone in on your interests. As you design your blog, make it personal and make sure it really represents you and your goals for the blog."],
            ['title' => 'DIY', 'description' => "Unsure if there’s a market for DIY crafters on the web? The success of Pinterest and Esty should reassure you otherwise. Do-It-Yourself creators use materials such as wood, metal, fabric and sewing to make unique items."],
        ]);
    }
}
