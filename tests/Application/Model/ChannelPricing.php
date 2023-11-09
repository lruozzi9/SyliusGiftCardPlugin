<?php

declare(strict_types=1);

namespace Tests\Setono\SyliusGiftCardPlugin\Application\Model;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ChannelPricing as BaseChannelPricing;

/**
 * @ORM\Table(name="sylius_channel_pricing")
 * @ORM\Entity()
 */
class ChannelPricing extends BaseChannelPricing
{
}
