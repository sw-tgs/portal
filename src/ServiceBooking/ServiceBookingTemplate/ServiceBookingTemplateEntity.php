<?php declare(strict_types=1);

namespace Shopware\Production\ServiceBooking\ServiceBookingTemplate;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Production\ServiceBooking\ServiceBookingTemplate\Aggregate\Date\ServiceBookingDateCollection;

class ServiceBookingTemplateEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var ServiceBookingDateCollection|null
     */
    protected $dates;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ServiceBookingDateCollection|null
     */
    public function getDates(): ?ServiceBookingDateCollection
    {
        return $this->dates;
    }

    /**
     * @param ServiceBookingDateCollection|null $dates
     */
    public function setDates(?ServiceBookingDateCollection $dates): void
    {
        $this->dates = $dates;
    }
}
