<?php

namespace App\AchievementsGroup;

use App\Badges\Master;
use App\Badges\Advanced;
use App\Badges\Beginner;
use App\Badges\Intermediate;
use App\Contracts\AchievementsGroup;


class BadgesAchievementsGroup extends AchievementsGroup
{

    /**
     * Array of achievments.
     *
     * @return array
     */
    public  function group()
    {
        return [
            new Beginner(),
            new Intermediate(),
            new Advanced(),
            new Master(),
        ];
    }
}
