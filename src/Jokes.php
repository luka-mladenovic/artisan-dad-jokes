<?php

namespace DadJokes;

use Illuminate\Support\Collection;

class Jokes
{
    /**
     * Get a dad joke
     *
     * @return string
     */
    public function get()
    {
        return Collection::make([
            "A man walked into a bar. The other one ducked.",
            "Dad, can you put my shoes on? No, I don't think they'll fit me.",
            "Why couldn't a bicycle stand up? Because it was too tired!",
            "Did you get a haircut? No, I got them all cut.",
            "Why don't skeletons ever go trick or treating? Because they have no body to go with.",
            "What did the spider do on the computer? Made a website!",
            "What’s brown and sticky? A stick.",
            "How many apples grow on a tree? All of them.",
            "How does an eskimo build his house? Igloos it together.",
            "Why do crabs never give to charity? Because they’re shellfish.",
            "How much does a hipster weigh? An instagram.",
            "A Sandwich walks into a bar, the bartender says \"Sorry, we don't serve food here\".",
            "Why don't seagulls fly over the bay? Because then they'd be bay-gulls!",
            "The shovel was a ground-breaking invention.",
            "Why do chicken coops only have two doors? Because if they had four, they would be chicken sedans!",
            "Did you know the first French fries weren't actually cooked in France? They were cooked in grease.",
            "Why did the invisible man turn down the job offer? He couldn't see himself doing it.",
            "What do prisoners use to call each other? Cell phones.",
            "Why aren't koalas considered bears? They don't have the koalafications.",
            "What do you call a man with a rubber toe? Roberto.",
            "Did you hear about the kidnapping at school? It's fine, he woke up.",
            "A furniture store keeps calling me. All I wanted was one night stand."
        ])->random();
    }
}
