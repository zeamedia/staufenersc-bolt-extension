<?php
namespace zeamedia\StaufenerSCBoltExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class StaufenerSCTwig
 *
 * @package zeamedia\StaufenerSCBoltExtension
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
