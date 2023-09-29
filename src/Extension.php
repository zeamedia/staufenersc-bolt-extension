<?php
namespace zeamedia\StaufenerSCBoltExtension;

use Bolt\Extension\BaseExtension;

/**
 * Class StaufenerSC
 *
 */
class Extension extends BaseExtension
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'SSC Extension';
    }

    /**
     * @param bool $cli
     *
     * @return void
     */
    public function initialize(bool $cli = false): void
    {
        $this->addTwigNamespace('ssc');
    }
}
