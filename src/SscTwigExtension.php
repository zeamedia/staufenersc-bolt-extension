<?php
namespace StaufenerSC\StaufenerSCBoltExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class StaufenerSCTwig
 *
 * @package Ssc\StaufenerSC
 */
class StaufenerSCTwig extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'sscMethod',
                [$this, 'sscMethodAction']
            ),
        ];
    }

    /**
     * @return string
     */
    public function sscMethodAction(): string
    {
        return 'Hello World!';
    }
}
