<?php
class MyDatePeriod extends DatePeriod
{
    public function __construct(
        DateTimeInterface $start,
        DateInterval $interval,
        int $recurrences,
        int $options = 0,
        public ?bool $myProperty = null,
    ) {
        parent::__construct($start, $interval, $recurrences, $options);
    }
}

$d = new MyDatePeriod(new DateTimeImmutable(), new DateInterval("PT5S"), 5, myProperty: true);
?>
DONE
