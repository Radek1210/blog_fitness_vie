<?php

namespace App\DataFixtures;

use App\Entity\Setting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class SettingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $setting = $this->createSettingData();

        $manager->persist($setting);

        $manager->flush();
    }

    private function createSettingData(): Setting
    {
        $setting = new Setting();

        $setting->setEmail("kalunzodimayele@gmail.com");
        $setting->setPhone("07 51 54 17 32");

        return $setting;
    }
}
